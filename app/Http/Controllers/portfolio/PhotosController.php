<?php

namespace App\Http\Controllers\portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Photo;
use App\Album;

class PhotosController extends Controller
{
    //
    public function index(){
        return redirect()->route('admin.photo.list');
    }
    
    public function photo_List($ad){

        // $photo = Photo::all();
        // $album = Album::with('photos')->find($id);
        $photo = Photo::where('album_id', '=', $ad)->get();
        // dd($photo);
        return view('admin.pages.photos.list',compact('photo'));
    } 

    public function create($id)
    {
        //
        $album = Album::find($id);
        return view ('admin.pages.photos.form', compact('album'));
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image| max: 1999',
            'album_id' => 'required',
        ]);

        // Get filename with extension
        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        //Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //Get extension
        $extension = $request->file('photo')->getClientOriginalExtension();

        //create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        //Upload image
        $id = $request->album_id;
        
        $album = Album::find($id);
        $path = $request->file('photo')->storeAs('public/image/portfolio/'.$album->name, $filenameToStore);
        
        // $photo = new Photo;
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'album_id' => $request->album_id,
            'photo' => $filenameToStore,
        ];

        

        $photo = Photo::create($data);

        session()->flash('photo','photo berhasil disimpan');

        return redirect()->route('admin.album.list');
    }

    public function delete($id){
        
        $photo = Photo::find($id)->delete();
        // $photo = Photo::where($id);
        
        session()->flash('photo_delete','photo berhasil dihapus');

        return redirect()->route('admin.album.list');
    }

}
