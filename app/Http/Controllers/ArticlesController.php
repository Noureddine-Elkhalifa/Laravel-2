<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articles=Article::all();
       return view("article.index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Article::create([
           "designation"=>$request->input("designation"),
           "prix_unitaire"=>$request->input("prix_unitaire"),
           "quantite"=>$request->input("quantite")
        ]);
        return redirect()->route("articles.index")->with("message1","article bien ajouté");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article=Article::find($id);
        return view("article.show",compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article=Article::find($id);
        return view("article.edit",compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article=Article::find($id);
        $article->designation=$request->input("designation");
        $article->prix_unitaire=$request->input("prix_unitaire");
        $article->quantite=$request->input("quantite");
        $article->save();
        return redirect()->route("articles.show",$id)->with("message","article bien modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $article=Article::find($id);
       $article->delete();
       return redirect()->route("articles.index")->with("message1","Article bien supprimé");
    }

    public function search()
    {
        return view("article.search");
    }

    public function find(Request $request)
    {
       $id=$request->input("id");
       $article=Article::find($id);
      if($article!=null)
      {
        return view("article.search",compact("article"));
      }
      else
      {
        return view("article.search",["message"=>"article introuvable"]);
      }
    //    
    }






}
