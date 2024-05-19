<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Stagiaire;
use App\Models\Telephone;
use Illuminate\Http\Request;

class TestController extends Controller
{
    

    public function addStagiaireToPhone()
    {
        // $telephone = new Telephone();
        // $telephone -> numero = 'QQQ';
        // $telephone -> save();

        // $filier = Filiere::find(5);
        

        // $stagiaire = new Stagiaire();
        // $stagiaire -> nom = 'new';
        // $stagiaire -> prenom = 'new';
       

        // $stagiaire -> telephone()  -> associate($telephone);
        // $stagiaire -> filiere() -> associate($filier);
        // $stagiaire -> save();

        

        $s = Stagiaire::find(6);

    }
}
