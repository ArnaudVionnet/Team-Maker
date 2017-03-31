<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Commentaire;
use Validator;
class ArticlesController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesArticles=Article::all();
        return view('article/index')->with('lesArticles', $lesArticles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lesArticles=Article::Pluck('titre','id');
        return view('article/create', compact('lesArticles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|max:30',
            'contenu' => 'required|min:20',
        ]);

        if ($validator->fails()) {
            return redirect('admin/article/index')
                        ->withErrors($validator)
                        ->withInput();
                    }
         $unArticle= new Article();
         $unArticle->titre=$request->get('titre');
         $unArticle->contenu=$request->get('contenu');
         $unArticle->save();
         $request->session()->flash('success', 'Le projet a été créé !');
        return redirect(route('article.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unArticle=Article::find($id);
        return view('article/show',compact('unArticle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::destroy($id);
        $request->session()->flash('success', 'L"article a été supprimée !');
        return redirect(route('article.index'));
    }
}

