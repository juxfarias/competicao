<?php

namespace Database\Seeders;

use App\Models\PersonalRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $arrayPontuacao = [
            $personalRecord[0] = ['1','1','100.0','2021-01-01 00:00:00.0'],
            $personalRecord[1] = ['1','1','180.0','2021-01-02 00:00:00.0'],
            $personalRecord[2] = ['1','1','150.0','2021-01-03 00:00:00.0'],
            $personalRecord[3] = ['1','1','110.0','2021-01-04 00:00:00.0'],
            $personalRecord[4] = ['2','1','110.0','2021-01-04 00:00:00.0'],
            $personalRecord[5] = ['2','1','140.0','2021-01-05 00:00:00.0'],
            $personalRecord[6] = ['2','1','190.0','2021-01-06 00:00:00.0'],
            $personalRecord[7] = ['3','1','170.0','2021-01-01 00:00:00.0'],
            $personalRecord[8] = ['3','1','120.0','2021-01-02 00:00:00.0'],
            $personalRecord[9] = ['3','1','130.0','2021-01-03 00:00:00.0'],
            $personalRecord[10] = ['1','2','130.0','2021-01-03 00:00:00.0'],
            $personalRecord[11] = ['2','2','130.0','2021-01-03 00:00:00.0'],
            $personalRecord[12] = ['3','2','125.0','2021-01-03 00:00:00.0'],
            $personalRecord[13] = ['1','2','110.0','2021-01-05 00:00:00.0'],
            $personalRecord[14] = ['1','2','100.0','2021-01-01 00:00:00.0'],
            $personalRecord[15] = ['2','2','120.0','2021-01-01 00:00:00.0'],
            $personalRecord[16] = ['3','2','120.0','2021-01-01 00:00:00.0']
        ];

        $pontuacao = [];
        for ($i = 0; $i < count($arrayPontuacao); $i++){
            $pontuacao[] = [
                'user_id' => $personalRecord[$i][0],
                'movement_id' => $personalRecord[$i][1],
                'value' => $personalRecord[$i][2],
                'date' => $personalRecord[$i][3]
            ];
        }
        PersonalRecord::insert($pontuacao);
        
    }
}
