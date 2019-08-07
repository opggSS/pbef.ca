<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Purifier;
use Image;
use App\Category;
use App\User;

class PostController extends Controller
{
    // public function __construct() {
    //     $this->middleware('admin');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(2);
        return view('admins.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        return view('admins.posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate the data

        $this->validate($request, array(
                'title'         => 'required|max:255',
                'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'content'       => 'required',
                'meta_title'       => 'max:255',
                'keywords'       => 'max:255',  
                'location'       => 'max:255',
                'description'       => 'max:511',
                'image_title'       => 'max:255',
                'image_alt'       => 'max:255',
                'featured_img_alt'       => 'max:255',
                'featured_img_title'       => 'max:255',
            ));

        // store in the database

        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->location = $request->location;
        $post->category_id = $request->category_id;
        // $post->user_id = $user_id;
        $post->content = Purifier::clean($request->content);
        $post->meta_title =$request->meta_title;
        $post->keywords =$request->keywords;
        $post->description =$request->description;
        $post->image_title =$request->image_title;
        $post->image_alt =$request->image_alt;
        $post->featured_img_title =$request->featured_img_title;
        $post->featured_img_alt =$request->featured_img_alt;
        $post->video =$request->video;
        if($request->is_published != 'on'){
          $post->is_published = 0;
        }
        else{
          $post->is_published = 1;
        }

        if($request->ishot != 'on'){
          $post->ishot = 0;
        }
        else{
          $post->ishot = 1;
        }

        if($post->is_published){
            $post->published_at = date('Y-m-d H:i:s');
        }

        if ($request->hasFile('featured_img')) {

          $featured_img = $request->file('featured_img');
          $filename = time() . '.' . $featured_img->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($featured_img)->resize(1200, 600)->save($location);
          $post->featured_img = $filename;
        }

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(1200, 600)->save($location);

          $post->image = $filename;
        }


        $post->save();

        // $post->tags()->sync($request->tags, false);

        Session::flash('success', 'The blog post was successfully save!');

        return redirect()->route('news.show', $post->id);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admins.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        // $cats = array();
        // foreach ($categories as $category) {
        //     $cats[$category->id] = $category->name;
        // }
        // return the view and pass in the var we previously created
        return view('admins.posts.edit')->withPost($post)->withCategories($categories);
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
        $post = Post::find($id);
        if ($request->input('slug') == $post->slug) {
            $this->validate($request, array(
                'title'         => 'required|max:255',
                // 'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'content'       => 'required',
                'video'          => 'max:255',
                'meta_title'       => 'max:255',
                'keywords'       => 'max:255',
                'location'       => 'max:255',
                'description'       => 'max:511',
                'image_title'       => 'max:255',
                'image_alt'       => 'max:255',
                'featured_img_alt'       => 'max:255',
                'featured_img_title'       => 'max:255'
            ));
        } else {
        $this->validate($request, array(
                'title'         => 'required|max:255',
                'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id'   => 'required|integer',
                'content'       => 'required',
                'video'          => 'max:255',
                'location'       => 'max:255',
                'meta_title'       => 'max:255',
                'keywords'       => 'max:255',
                'description'       => 'max:511',
                'image_title'       => 'max:255',
                'image_alt'       => 'max:255',
                'featured_img_alt'       => 'max:255',
                'featured_img_title'       => 'max:255'
            ));
        }

        // Save the data to the database
        $post = Post::find($id);

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->location = $request->location;
        $post->category_id = $request->category_id;
        // $post->user_id = $user_id;
        $post->content = Purifier::clean($request->content);
        $post->meta_title =$request->meta_title;
        $post->keywords =$request->keywords;
        $post->description =$request->description;
        $post->image_title =$request->image_title;
        $post->image_alt =$request->image_alt;
        $post->featured_img_title =$request->featured_img_title;
        $post->featured_img_alt =$request->featured_img_alt;
        $post->video =$request->video;

         if ($request->hasFile('featured_img')) {

          $featured_img = $request->file('featured_img');
          $filename = time() . '.' . $featured_img->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($featured_img)->resize(1200, 600)->save($location);
          $post->featured_img = $filename;
        }

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(1200, 600)->save($location);

          $post->image = $filename;
        }
        
        if($request->is_published != 'on'){
          $post->is_published = 0;
        }
        else{
          $post->is_published = 1;
        }

        if($request->ishot != 'on'){
          $post->ishot = 0;
        }
        else{
          $post->ishot = 1;
        }

        if($post->is_published){
            $post->published_at = date('Y-m-d H:i:s');
        }

        $post->save();

        // set flash data with success message
        Session::flash('success', 'This post was successfully saved.');

        // redirect with flash data to posts.show
        return redirect()->route('news.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('news.index');
    }
}
