<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];
    public $timestamps = false;

    public function stagiaire()
    {
        return $this->hasOne(Stagiaire::class);
    }
}
