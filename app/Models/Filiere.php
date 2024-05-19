<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = ['titre'];
    public $timestamps = false;


    function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }

    function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
