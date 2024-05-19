<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        
        return view('clients',compact('clients'));
    }

    public function show($id)
    {
        $client = Client::find($id);
        $commandes = $client -> commandes;
         return view('clientDetails',compact(['client','commandes']));
   
    }
}
