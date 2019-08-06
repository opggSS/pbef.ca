@extends('layout.layout')
@section('title', 'Home')

@section('content')

<div class="news-content container" style="padding-top:100px; padding-bottom: 40px;">
  <div class="row">
    <div class="left-block col col-12 col-md-8 d-block d-md-inline-block">
      <div class="row">
        <div class="col col-12">
          <h5 class="location">
          @if ($post['location'])
            {{$post['location']}}
    
          @endif
        </h5>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col col-12">
          <h3>{{$post['title']}}</h3>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col col-12">
          <p> Published

          @if($time['years']) 
          {{$time['years']}} years
            @if($time['months'])
              {{$time['months']}} months
            @endif
          @elseif ($time['months'])
            {{$time['months']}} months
            @if($time['days'])
              {{($time['days'])}} days
            @endif

          @elseif ($time['days'])
            {{$time['days']}} days
            @if($time['hours'])
              {{($time['hours'])}} hours
            @endif
          @elseif($time['hours'])
            {{($time['hours'])}} hours
          @endif

         before</p>
        </div>
      </div>

      
      
      <div class="row">
        <div class="col col-12 pt-5 border-top">
          <img class="w-100" src="/images/{{$post['image']}}" alt="{{$post['image_alt']}}" title="{{$post['image_title']}}">
        </div>
      </div>

      <div class="row mt3">
        <div class="col col-12 mt-3">
          {!!$post['content'] !!}
        </div>
      </div>
      {{-- <button type="button" class="btn btn-primary " href="/donate">Explore</button> --}}
      <div style="text-align:center">
        <a style="text-align: center;" href="/donate" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Explore</a>
      </div>
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
            <img class="w-100" src="/images/{{$hot->image}}" alt="{{$hot->image_alt}}">
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
            <img class="w-100"  src="/images/{{$recent->image}}" alt="{{$recent->image_alt}}">
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


