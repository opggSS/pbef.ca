<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
    	$data = News::all();
    	return view('admin.page.index', compact('data'));
    }
}

