<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['titre'];
    public $timestamps = false;

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class);
    }

    public function stagiaires()
    {
        return $this->belongsToMany(Stagiaire::class);
    }
}
