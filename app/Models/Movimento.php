<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    
    /*
     select movement.name AS Movimento, 
        user.name AS Nome, 
        personal_record.value AS Pontuacao, 
        DENSE_RANK() OVER (ORDER BY personal_record.value DESC) Posicao, 
        personal_record.date AS Data
        FROM personal_record 
        JOIN user ON (personal_record.user_id = user.id) 
        JOIN movement ON (personal_record.movement_id = movement.id) 
        ORDER BY personal_record.value DESC;
        */

}