
@extends('admins.app')
    <!-- Begin Page Content -->
  @section('styles')

  <style type="text/css">
      label {
        margin-top: 20px;
      }
  </style>
  <script src="https://cdn.tiny.cloud/1/sl6j0mvghyx0az1cb2hr37zwalpq4ykv58gbfrwqtry2xvdm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">
    tinymce.init({
    selector: '.content'
    });
  </script>
  @stop

  @section('content')

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
    <div class="container" style="margin-bottom: 50px;">

		<form method="post" action="{{route('news.update', $post->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="">
        @method('PUT')
        {{ csrf_field() }}
        <label for="title">Name:</label>
        <input name="title" class="form-control" value="{{$post->title}}">

        <label for="category_id">category:</label>
        <select class="form-control" name="category_id" option="{{$post->category_id}}">

          @foreach($categories as $category)

            <option 
            @if ($category->id == $post->category_id)
            selected="selected" 
            @endif
             value='{{ $category->id }}'>{{ $category->name }}</option>
          @endforeach

        </select>

        <textarea rows="20" cols="50" name="content" class="content">
        	{{ $post->content }}
        </textarea> 

        <label for="meta_title">meta_title:</label>
        <input name="meta_title" class="form-control" value="{{$post->meta_title}}">

        <label for="slug">slug:</label>
        <input name="slug" class="form-control" value="{{$post->slug}}">

        <label for="keywords">keywords:</label>
        <input name="keywords" class="form-control" value="{{$post->keywords}}">

        <label for="location">location:</label>
        <input name="location" class="form-control" value="{{$post->location}}">

        <label for="description">description:</label>
        <textarea name="description" class="form-control" rows="5" cols="50">{{$post->description}}</textarea>

        <label style="display: block;" for="featured_img">featured_img:</label>
        <img src="/images/{{$post->featured_img}}" style="max-width: 600px">
        <input type="file" class="form-control" name="featured_img" accept="image/*" >

        <label for="featured_img_title">featured image title:</label>
        <input name="featured_img_title" class="form-control" value="{{$post->featured_img_title}}">

        <label for="featured_img_alt">featured image alt text:</label>
        <input name="featured_img_alt" class="form-control" value="{{$post->featured_img_alt}}">

        <label style="display: block" for="image">image:</label>
        <img src="/images/{{$post->image}}" style="max-width: 600px">
        <input type="file" class="form-control" name="image" accept="image/*" >

        <label for="image_title">image title:</label>
        <input name="image_title" class="form-control" value="{{$post->image_title}}">

        <label for="image_alt">image alt text:</label>
        <input name="image_alt" class="form-control" value="{{$post->image_alt}}">

        <label for="is_published">Publish</label>
        <input type="checkbox" name="is_published" 
        	@if($post->is_published)
        		checked 
        	@endif
        >

        <label for="ishot">Hot</label>
        <input type="checkbox" name="ishot"
            @if($post->ishot)
                checked 
            @endif
        >

        <input type="submit" value="Save" class="btn btn-success btn-lg form-control mt-3"> 
      </form>

	  <!-- End of Main Content -->
  @endsection