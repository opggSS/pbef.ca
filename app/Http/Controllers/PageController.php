<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Post;
use App\Partner;
use App\Gallery;


class PageController extends Controller
{

    public function index()
    {
    	$partners = Partner::all();
        $posts = Post::orderBy('created_at')->take(5)->get();
        return view('home')->withPosts($posts)->withPartners($partners);
    }

    public function getGallery(){
    	$galleries = Gallery::all();
    	return view('gallery')->withGalleries($galleries);
    }
      
}
