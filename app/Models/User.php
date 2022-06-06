<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table    = 'user';

    protected $fillable = ['nome'];

    public function movements()
    {
        return $this->belongsToMany(Movement::class, 'personal_record', 'user_id', 'movement_id');
    }

}
