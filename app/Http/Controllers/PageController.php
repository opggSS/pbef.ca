<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Post;
use App\Partner;
use App\PageContent;
use App\Gallery;
use DateTime;




class PageController extends Controller
{
   
    private $pc ;

    public function __construct(){
        $pageContents = PageContent::all();
        $contents = array();
        foreach($pageContents as $pageContent){
            $contents[$pageContent->varname] = $pageContent->value;
        }
        $this->pc = $contents;
    }

    public function index()
    {
    	$partners = Partner::all();
        $posts = Post::orderBy('created_at')->take(5)->get();
        return view('home')->withPosts($posts)->withPartners($partners)->withPc($this->pc);

    }

    public function getGallery(){
    	$galleries = Gallery::all();
    	return view('gallery')->withGalleries($galleries);
    }
      
    public function getPublicInfo(){

        return view('public_info')->withPc($this->pc);
    }

    public function getProjects(){
        return view('projects')->withPc($this->pc);
    }

    public function getNews($slug){

        $post = Post::where('slug' , $slug)->first();
        $date1 = new DateTime($post['created_at']);
        $date2 = new DateTime();

        $hot = Post::where('ishot', 1)->where('is_published' , 1)->orderBy('published_at')->first();
        $recent = Post::where('is_published', 1)->orderBy('published_at')->first();

        $diff = $date2->diff($date1);
        $hours = $diff->h;
        $days =$diff->d;
        $months =$diff->m;
        $years =$diff->y;

        $time = array();
        $time = [
            'hours' =>$hours,
            'days'=>$days,
            'months'=>$months,
            'years'=>$years
        ];
    
        return view('news')->withPc($this->pc)->withPost($post)->withTime($time)->withHot($hot)->withRecent($recent);
    }

    public function getAboutUs(){
        return view('about_us')->withPc($this->pc);
    }

    public function getDonate(){
        return view('donate')->withPc($this->pc);
    }

}
