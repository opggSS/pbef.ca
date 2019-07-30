<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageContent;
use App\PageType;

class PageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Route::get('admin/pageContents/home' , 'PageContentController@home');
    // Route::get('admin/pageContents/aboutus' ,'PageContentController@aboutus');
    // Route::get('admin/pageContents/projects' ,'PageContentController@projects');
    // Route::get('admin/pageContents/public_info', 'PageContentController@public_info');

    public function show(){

    }

    public function create()
    {
        $pageContents = PageContent::all();
        $pageTypes = PageType::all();
        return view('admins.pageContents.create')->withPageTypes($pageTypes)->withPageContents($pageContents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, array(
                'varname'         => 'required|max:255',
                'info'         => 'max:255',
                'value'         => 'required|max:2048',       
                'pageType_id'         => 'required|max:255',       
            ));
        $pageContent = new PageContent;
        $pageContent->varname = $request->varname;
        $pageContent->info = $request->info;
        $pageContent->value = $request->value;
        $pageContent->pageType_id = $request->pageType_id;
        $pageContent->save();
        return back();       
    }
  
    public function update(Request $request, $id)
    {
        $pageContent = PageContent::find($id);
        $this->validate($request, array(
            'varname'         => 'required|max:255',
            'info'         => 'max:255',
            'value'         => 'required|max:2048',       
            'pageType_id'         => 'required|max:255',       
        ));
        $pageContent->varname = $request->varname;
        $pageContent->info = $request->info;
        $pageContent->value = $request->value;
        $pageContent->pageType_id = $request->pageType_id;
        $pageContent->save();
        return back();  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pageContent = PageContent::find($id);
        $pageContent->delete();
        return back();
    }


    public function pages($slug)
    {
        $pageTypes = PageType::all();
        $all = PageContent::all();
        $typeid = '';
        $pageContents = '';

        foreach ($pageTypes as $pageType){
            if($pageType->name == $slug){
                $typeid = $pageType->id;
                break;
            }
        }


            $pageContents = PageContent::where('pageType_id', $typeid)->get();

        return view('admins.pageContents.pages')->withPageContents($pageContents)->withSlug($slug)->withTypeid($typeid);
        
    }



}
