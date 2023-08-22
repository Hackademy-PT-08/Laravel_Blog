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
        //MOSTRO TUTTI GLI ARTICOLI TRAMITE IL MOTODO all()

        $all_articles = Article::all();

        return view('articles.index', [

            'articles' => $all_articles

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //MOSTRO ALL'UTENTE IL FORM DI CREAZIONE

        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //AGGIUNGO UN RECORD

        $article = new Article();

        $article->title = $request->titolo;
        $article->content = $request->contenuto;

        $article->user_id = auth()->user()->id;

        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $single_articles = Articles::find($id);


        //MOSTRO ALL'UTENTE IL FORM DI MODIFICA

        return view('articles.create', [

            'article' => $single_article

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

         //AGGIUNGO UN RECORD

                $article = Article::find($id);

                $article->title = $request->titolo;
                $article->content = $request->contenuto;
        
                $article->save;
        
                return redirect()->route('articles.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //ELIMINO IL RECORD

         $article = Article::find($id);

         $article->delete;
 
         return redirect()->route('articles.index');
    }
}
