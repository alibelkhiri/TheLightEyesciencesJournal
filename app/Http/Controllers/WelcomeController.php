<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }
    public function newsLoad(Request $request)
    {
                
                if($request->ajax()){
                    $articles = Article::orderBy('id','DESC')->paginate(6);
                    return response()->json(['data' => $articles]);
                }
             return view('welcome');
    }

}
