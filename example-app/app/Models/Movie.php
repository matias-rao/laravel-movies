<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'rank'
    ];

    public function director(){
        return $this->belongsTo(Director::class);
    }

    public function movieGenre(){
        return $this->belongsToMany(MovieGenre::class);
    }

    public function roles(){
        return $this->belongsToMany(Rol::class);
    }

}
