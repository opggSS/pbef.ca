@extends('layout.layout')
@section('title', 'News Lists')

@section('content')


<div class="news-content container " style="margin-top: 100px;">
  <div class="row mb-5">
    <div class="col col">
      <h3>All News</h3>
    </div>
  </div>
  <div class="row">
    <div class="left-block col col-12 col-md-8 d-block d-md-inline-block">
      @foreach($posts as $post)
      <a href="/news/{{$post->slug}}">
        <div class="row">
          <div class="col col-12">
            <h5 class="location">{{$post->location}}</h5>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col col-12">
            <h3 class="text-dark arrow-behind">{{$post->title}}</h3>
          </div>
        </div>
        <div class="row mt-1">
          <div class="col col-12">
            <img class="w-100" src="/images/{{$post->image}}" alt="{{$post->alt}}" title="{{$post->title}}">
          </div>
        </div>

        <div class="row mt-1">
          <div class="col col-12">
            <p class="text-dark arrow-behind">{{$post->description}}</p>
          </div>
        </div>

        <div class="row my-3 border-bottom">
          <div class="col col-12">
            <p>Published 
              {{\App\Http\Controllers\PageController::published_before($post->published_at)}}before</p>
          </div>
        </div>
      </a>
      @endforeach

    </div>

    <div class="right-block col col-3 offset-1 d-none d-md-inline-block">
      <div class="sub-block hot-block">
        <div class="row">
          <div class="col col-12">
            <h4 class="sort-tit">What's Hot?</h4>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col col-12">
            <h5>{{$hot->title}}</h5>
          </div>
        </div>
       
        <div class="row mt-1">
          <div class="col col-12">
            <img class="w-100" src="/images/{{$hot->image}}" alt="{{$hot->alt}}">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col col-12">
            <p>{{$hot->description}}</p>
          </div>
        </div>
      </div>

      <div class="sub-block hot-block mt-5">
        <div class="row">
          <div class="col col-12">
            <h4 class="sort-tit">Recent News</h4>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col col-12">
            <h5>{{$recent->title}}</h5>
          </div>
        </div>
       
        <div class="row mt-1">
          <div class="col col-12">
            <img class="w-100" src="/images/{{$recent->image}}" alt="{{$recent->alt}}">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col col-12">
            <p>{{$recent->description}}</p>
          </div>
        </div>
      </div>

    </div>
  </div>


</div>

@stop

