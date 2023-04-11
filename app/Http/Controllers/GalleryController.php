<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function upload(){
        return view('admin.curses.images');
    }
	public function store(Request $request) { 
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('gallery'),$imageName);
         
        $imageUpload = new Gallery();
        $imageUpload->filename = $imageName;
		$imageUpload->id_races = $request["raceid"];
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
}