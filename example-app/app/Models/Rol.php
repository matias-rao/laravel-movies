<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'role'
    ];

    public function actor(){
        return $this->belongsTo(Actor::class);
    }

    public function movie(){
        return $this->belongsToMany(Movie::class);
    }

}
