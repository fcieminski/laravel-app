<?php

namespace App\Http\Controllers;
use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;

class ArticlesController extends Controller
{
    public function create(Request $request)
    {
        $article = new Articles();
        $article->name = $request->name;
        $article->surname = $request->surname;
        $article->email = $request->email;
        $article->size = $request->size;
        $article->university = $request->university; 
        $article->save();
        return response($article->jsonSerialize(), Response::HTTP_CREATED);
    }

   public function index(){
       return response(Articles::all()->jsonSerialize(), Response::HTTP_OK);
   }

   public function update(Request $request, $id){
        $article = Articles::findOrFail($id);
        if($request->name){
            $article->name = $request->name;
            $article->save();
        }
        if($request->surname){
            $article->surname = $request->surname;
            $article->save();
        }
        if($request->email){
            $article->email = $request->email;
            $article->save();
        }
        if($request->size){
            $article->size = $request->size;
            $article->save();
        }
        return response(null, Response::HTTP_OK);
   }
   public function destroy($id)
   {
       Articles::destroy($id);
       return response(null, Response::HTTP_OK);
   }

}
