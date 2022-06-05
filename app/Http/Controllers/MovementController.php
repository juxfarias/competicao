<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movement;

class MovementController extends Controller
{
    public function index()
    {
        return Movement::all();
    }

}