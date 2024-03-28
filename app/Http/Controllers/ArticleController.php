<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = Article::create(
            [
                'description' => $request -> input('description'),
                'prix' => $request -> input('prix'),
                'quantite' => $request -> input('quantite')
            ]
            );
        
            return redirect() -> route('articles.index')->with('success','Article bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        $article -> update(
            [
                "description" => $request-> input("description"),
                "prix" => $request-> input("prix"),
                "quantite" => $request-> input("quantite"),

            ]
            );


        return redirect() -> route('articles.show',$id) -> with('success','article bien modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
