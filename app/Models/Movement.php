<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'movement';

    protected $fillable = ['nome'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'personal_record', 'movement_id', 'user_id');
    }
}