<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'personal_record';

    protected $fillable = [
        'user_id',
        'movement_id',
        'value',
        'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function movement()
    {
        return $this->belongsTo(Movement::class, 'movement_id', 'id');
    }
}
