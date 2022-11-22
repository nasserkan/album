<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;
use App\Models\Photo;


class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view ("/album/admin", compact("albums"));
    }


    public function show($id){
        // afficher tous les albums de l'user passer en parametres
    }

    public function create()
    {
        $users = User::all();
        return view("/album/create",compact("users"));
    }
    public function store(Request $request)
    {
        $album = new Album();
        $album->name=$request->input("name");
        $album->description=$request->input("description");
        $album->id_user=$request->input("id_user");
        $album->save();
        return redirect()->route("albumAdmin");
    }
    public function destroy($id){
        $album=Album::find($id);
        $album->delete();
        return redirect()->route("albumAdmin");
    }

    //
}
