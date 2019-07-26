<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use Image;
use Session;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        if($partners){
            return view('admins.partners.index')->withPartners($partners);
        }
        else{
            return view('admins.partners.index');
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
        $partner = new Partner;

        $partner->title = $request->title;
        $partner->alt = $request->alt;
        $partner->description = $request->description;

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($location);

          $partner->image = $filename;
        }

        $partner->save();
        Session::flash('success', 'New Partner has been created');
        return redirect()->route('partners.index');
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
        $partner = Partner::find($id);
        $partner->title = $request->title;
        $partner->alt = $request->alt;
        $partner->description = $request->description;

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(500, 300)->save($location);
          $partner->image = $filename;
        }

        $partner->save();

        Session::flash('success', 'Partner has been updated');

        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        Session::flash('success', 'Partner has been removed');
        return redirect()->route('partners.index');   
    }
}
