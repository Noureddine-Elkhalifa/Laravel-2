<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   

    public $timestamps = false;

    public function commandes()
    {
        return $this -> belongsToMany(Commande::class)->withPivot(["quantite","prix"]);
    }
}