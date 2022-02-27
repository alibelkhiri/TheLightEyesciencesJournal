<?php

namespace App\Http\Controllers;

use App\Chapitre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChapitreController extends Controller
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
        $chapitres=Chapitre::all();
        return view('backoffice.Chapters.Chapitres',compact('chapitres'));
    }
    public function create(){
        $chapitres=Chapitre::all();
        return view('backoffice.Chapters.AddChapter',compact('chapitres'));
    }

     public function store(Request $request)
    {
         $chapitre=new Chapitre();
         $chapitre->title=$request->title;
         if(isset($request->chapitre_parent)){
            $chapitre->chapitre_parent=$request->chapitre_parent;
         }
         $chapitre->save();
         session::flash('success','Ajouté avec succès ');
         return redirect()->back();
    }
    public function destroy($id){
        $article=Chapitre::where('id','=',$id)->delete();
        session::flash('warning','Supprimé avec succès ');
        return redirect()->back();
   }
}
