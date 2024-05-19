<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    public function articles()
    {
        return $this -> belongsToMany(Article::class)->withPivot(["quantite","prix"]);
    }
}
