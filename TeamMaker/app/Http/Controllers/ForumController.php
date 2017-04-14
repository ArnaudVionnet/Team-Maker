<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Jeux;
use App\Models\Sujet;
use App\Models\Post;


class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesJeux=Jeux::orderBy('created_at', 'asc')->get();
        //dd($lesArticles);
        return view('forum/index')->with('lesJeux', $lesJeux);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unSujet= new Sujet();
        $unSujet->titre=$request->get('titre');
        $unSujet->description=$request->get('description');
         $unSujet->jeux_id=$request->get('jeux_id');
         $unSujet->save();


         
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unJeux=Jeux::find($id);
        return view('forum/show')->with('unJeux', $unJeux);

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
        //
    }

}
