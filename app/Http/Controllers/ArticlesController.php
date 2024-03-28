<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        
        
        // $article = Article::all();
        // $article = Article::query()-> select("description","prix") -> get();
        // $article = Article::query() -> where("prix",">",300) -> get();
        // $article = Article::query() -> where("prix",">",300) -> where('quantite','>',40) -> get();
        // $article = Article::query()-> where("description","like","%art%") ->get();
        // $article = Article::query()-> where("prix",">=",400) -> where("prix","<=",600) -> get();
        // $article = Article::all() -> count();
        // $article = Article::query() -> average('prix');
        // $article = Article::query() -> sum('prix');
        // $article = Article::query() -> where('prix','>',300)->count();
        // $article = Article::query() -> orderby('prix',"desc")-> limit(5) -> get();

        // $avg = Article::average("quantite");
        // $article = Article::query() -> where("quantite",">",$avg) -> get();

        // $article = Article::inRandomOrder() ->get();
        // $article = Article::selectRaw('prix, count(id) as nombreArticle')->groupBy('prix')->get();
        // $article = Article::selectRaw('description,sum(prix)') -> groupBy('description') -> get();

        $article = Article::selectRaw("description, sum(prix) as prixSomme, avg(prix) as avgPrix")
    ->groupBy('description')
    ->having('avgPrix', '>', 200)
    ->get();


        // return view("article",compact('article'));
        return $article;
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('show',compact('article'));
    }
}
