<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function getCommandeDetails($id)
    {
        $commande = Commande::find($id);
        $client = $commande -> client;
        $article = $commande -> articles;
        return $article;
    }
}
