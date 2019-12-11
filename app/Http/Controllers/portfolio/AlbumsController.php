<?php

namespace App\Http\Controllers\portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;
use App\Photo;
use App\Album;

class AlbumsController extends Controller
{
    //
    public function index(){
        return redirect()->route('admin.album.list');
    }

    public function album_List(){

        $album = Album::all();
        return view('admin.pages.album.list',compact('album'));
    }

    public function create()
    {
        //
        return view ('admin.pages.album.form');
    }

    public function store(Request $request){
        
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $album = Album::create($data);

        session()->flash('album','album berhasil dibuat');
        
        return redirect()->route('admin.album.list');
    }

    public function edit($id){
        $album = Album::find($id);
        return view('admin.pages.album.form', compact('album'));
    }

    public function update(Request $request, $id)
    {
        // 'stock' => $request->stock,
        $album = Album::find($id);

        
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        
        $album->update($data);
        
        session()->flash('album_update','album berhasil diupdate');

        return redirect()->route('admin.album.list');
    }

    public function delete($id){
        $album = Album::find($id)->delete();
        $photo = Photo::where('album_id', '=', $id)->delete();
        // $album_folder = Storage::disk()->delete
        
        session()->flash('album_delete','album berhasil dihapus');

        return redirect()->route('admin.album.list');
    }
}
