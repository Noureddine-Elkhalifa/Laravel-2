<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Models\Telephone;
use Illuminate\Http\Request;

class TestController extends Controller
{
    

    public function addStagiaireToPhone()
    {
        $stagiaire = new Stagiaire();
        $stagiaire -> nom = 'new';
        $stagiaire -> prenom = 'new';
        $stagiaire -> save();


        $telephone = new Telephone();
        $telephone -> numero = '06XXYYWW';

        $stagiaire -> $telephone -> save($telephone);
    }
}
