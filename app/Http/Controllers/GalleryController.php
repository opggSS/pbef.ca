<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Image;
use Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galleries = Gallery::all();
        if($galleries){
            return view('admins.galleries.index')->withGalleries($galleries);
        }
        else{
            return view('admins.galleries.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'alt' => 'required|max:255',
            'description' => 'max:255',
            ));
        $gallery = new Gallery;

        $gallery->title = $request->title;
        $gallery->alt = $request->alt;
        $gallery->description = $request->description;

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(500, 300)->save($location);
          $gallery->image = $filename;
        }

        $gallery->save();
        Session::flash('success', 'New gallery has been created');
        return redirect()->route('galleries.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

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
         $this->validate($request, array(
            'title' => 'required|max:255',
            'alt' => 'max:255',
            'description' => 'max:255',
            ));
        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->alt = $request->alt;
        $gallery->description = $request->description;

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(500, 300)->save($location);
          $gallery->image = $filename;
        }

        $gallery->save();

        Session::flash('success', 'Gallery has been updated');

        return redirect()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = gallery::find($id);
        $gallery->delete();
        Session::flash('success', 'Gallery has been removed');
        return redirect()->route('galleries.index');   
    }
}
