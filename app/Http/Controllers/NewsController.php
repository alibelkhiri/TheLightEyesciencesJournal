<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleCategory;
use App\Chapitre;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(){
        $news=Article::orderBy('id','DESC')->get();
        return view('backoffice.News.News',compact('news'));
    }
    public function create(){
        $categories=ArticleCategory::all();
        $chapitres=Chapitre::all();
        return view('backoffice.News.AddNews',compact('categories','chapitres'));
    }
    public function store(Request $request)
    {     // dd($request->all());
        $hasimage=false;
        $name="";
        $storagePath="";
        if($request->hasFile('image')){
         $hasimage=true;
    
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
    
           $name = $request->file('image')->getClientOriginalName();
           
           //$path = $request->file('image')->store('public/files/images');
           $storagePath= Storage::disk('public')->put('images', $request->file('image'));
        }   
        $input = $request->All();
        $article=new Article();
        $article->title=$input['title'];
        $article->category=$input['category'];
        if($hasimage==true){
            $article->image=basename($storagePath);
        }
        if(isset($request->chapitre)){
            $article->sammury_chapter=$request->chapitre;
        }

        $article->artical=$input['article'];
        $res=$article->save();
         //dd($imageName);
        session::flash('success','Ajouté avec succès ');
        return redirect()->back();
    }
    public function destroy($id){
         $article=Article::where('id','=',$id)->delete();
         return redirect()->back();
    }
    public function edit($id){
      $article=Article::where('id','=',$id)->first();
      $categories=ArticleCategory::all();
      return view('backoffice.News.Edit',compact('article','categories'));
    }
    public function update(Request $request){
        $input=$request->all();
        $hasimage=false;
        $name="";
        if($request->hasFile('image')){
            $hasimage=true;
           $validatedData = $request->validate([
               'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       
              ]);
              $name = $request->file('image')->getClientOriginalName();
              //$path = $request->file('image')->store('public/files/images');
              Storage::disk('public')->put('images', $request->file('image'));
           } 
           $article=Article::where('id','=',$request->id)->first();
           $article->title=$input['title'];
           $article->category=$input['category'];
           if($hasimage==true){
               $article->image=$name;
           }
           if(isset($request->chapitre)){
            $article->sammury_chapter=$request->chapitre;
        }
   
           $article->artical=$input['article'];
           $res=$article->save();
            //dd($imageName);
           session::flash('success','Bon ajouté avec succès ');
           return redirect()->back();
        
    }
}
