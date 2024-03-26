<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class searchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $id = $request -> input("id");
        $article = Article::find($id);
        return view('search',compact("article"));
    }
}
