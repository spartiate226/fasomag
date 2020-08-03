<?php

namespace App\Http\Controllers;

use App\Article;
use App\Article_image;
use App\categorie;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('returnloginIfnotAuth');
    }

    public function index()
    {
        return view('admin.Accueil',["Article"=>Article::paginate(20)]);
    }


    public function create()
    {
        $categorie=categorie::all();
        return view('admin.ajoutArticle',compact('categorie'));
    }


    public function store(ArticleRequest $request)
    {
       $article= Article::create([
            'titre'=>$request->titre,
            'contenue'=>$request->contenue,
            'categorie_id'=>$request->categorie_id,
            'auteur'=>$request->auteur
        ]);

       Article_image::create([
           'article_id'=>$article->id,
           'chemin'=>$request->image->store('Article_images'.'public')
           ]
       );
        return redirect()->route('Adminarticle.create')->with(['reponse'=>'Publier!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {

    }


    public function edit($article)
    {
        $actualite=Article::find($article);
        $categorie=categorie::all();
        return view('admin.ajoutArticle',compact('actualite','categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article)
    {
        $actualite=Article::find($article);

        $actualite->update([
            'titre'=>$request->titre,
            'contenue'=>$request->contenue,
            'categorie_id'=>$request->categorie_id,
        ]);
        return redirect()->route('Adminarticle.edit',[$article])->with('Modification reussi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy( $article)
    {
        $actualite=Article::find($article);
        $actualite->delete();
        return redirect()->route('Adminarticle.index')->with(['reponse'=>'Article supprimer']);
    }
}
