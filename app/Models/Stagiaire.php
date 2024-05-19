<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','filiere_id','telephone_id'];
    public $timestamps = false;

    public function telephone()
    {
        return $this->hasOne(Telephone::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
