<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class ListFilierController extends Controller
{
    function listFilieres()
    {
        $filieres = Filiere::all();
        return view('List',compact('filieres'));
    }

    function detailFiliere($id)
    {
        return $id;
    }
}
