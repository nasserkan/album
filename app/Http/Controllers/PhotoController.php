<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;



class PhotoController extends Controller
{
    public function index(){
        $photos = Photo::all();
        return view("/photo/admin", compact("photos"));
    }
    public function create(){
        $photos = Photo::all();
        $albums = Album::all();
        return view ("/photo/create", compact("photos","albums"));
    }
    public function store(Request $request){
        $photos = new Photo();

        if($request-> hasFile('url'))
        {
               $file = $request->file('url');
               $ext = $file->getClientOriginalExtension();
               $filename = time().'.'.$ext;
               $file->move('assets/uploads/', $filename);
               $photos-> url = $filename;
        }

        $photos->name=$request->input("name");
        $photos->description=$request->input("description");
        //$photos->url=$request->input("url");
        $photos->id_album=$request->input("id_album");
        $photos->save();
        return redirect()->route("photoAdmin");

    }
    public function edit($id){
        $photos=Photo::find($id);
        $albums=Album::all();
        return view("/photo/edit", compact("photos", "albums"));
    }

    public function update(Request $request,$id){
        $photos = Photo::find($id);
        $photos->name=$request->input("name");
        $photos->description=$request->input("description");
        $photos->url=$request->input("url");
        $photos->id_album=$request->input("id_album");
        $photos->save();
        return redirect()->route("photoAdmin");
    }

    public function destroy($id){

        $photos=Photo::find($id);
        $photos->delete();
        return redirect()-> route("photoAdmin");
    }
    //
}

