<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Jeux;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesJeux=Jeux::limit(3)->orderBy('id', 'desc')->get();
        $lesArticles=Article::limit(3)->orderBy('id', 'desc')->get();
        return view('home', compact('lesArticles', 'lesJeux'));
    }
}
