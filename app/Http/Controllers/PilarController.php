<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Album;
use App\Photo;

class PilarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $albums = Album::all();
        $photos = Photo::all();

        // foreach($albums as $album){
        //     dd($album->photo->random());
        // }
        return view('pages.home.home', compact('albums','photos'));
    }

    public function portfolio_Index(){
        $photos = Photo::all();
        $albums = Album::all();
        // dd($photo);
        return view('pages.portfolio.work', compact('photos','albums'));
    }

    public function about_Index(){
        return view ('pages.about.about');
    }

    public function blog_Index(){
        return view ('pages.blog.blog');
    }

    public function contact_Index(){
        return view ('pages.contact.contact');
    }



    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
