<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rankingMovementController extends Controller
{
    public function index()
    {
        $movements = Movement::all();
        $rankingMovement = [];
        foreach ($movements as $movement){    
           
            $rankingMovement [$movement['name']] = DB::table('personal_record')
                        ->join('user', 'personal_record.user_id', '=', 'user.id')
                        ->join('movement', 'personal_record.movement_id', '=', 'movement.id')
                        ->select('user.name AS nome', 
                                'personal_record.value AS pontuacao', 
                                DB::raw('DENSE_RANK() OVER (ORDER BY personal_record.value DESC) posicao',
                                'personal_record.date AS data'))
                        ->where('movement.name', '=', $movement['name'])
                        ->orderBy('personal_record.value', 'desc')
                        ->get();

        }

        return response()->json($rankingMovement);
        
    }

    public function store(Request $request)
    {
        /* select 
        movement.name AS movimento, 
        user.name AS nome, 
        personal_record.value AS pontuacao, 
        DENSE_RANK() OVER (ORDER BY personal_record.value DESC) posicao, 
        personal_record.date AS data
        FROM personal_record 
        JOIN user ON (personal_record.user_id = user.id) 
        JOIN movement ON (personal_record.movement_id = movement.id) 
        ORDER BY personal_record.value DESC;
        /* 
        
        select 
        movement.name AS movimento, 
        user.name AS nome, 
        personal_record.value AS pontuacao, 
        DENSE_RANK() OVER (ORDER BY personal_record.value DESC) posicao, 
        personal_record.date AS data
        FROM personal_record 
        JOIN user ON (personal_record.user_id = user.id) 
        JOIN movement ON (personal_record.movement_id = movement.id) 
        where movement.name = 'Deadlift'
        ORDER BY personal_record.value DESC;
        */
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
