<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first-name',
        'last-name',
        'gender'
    ];

    public function roles(){
        return $this->hasMany(Rol::class);
    }
}