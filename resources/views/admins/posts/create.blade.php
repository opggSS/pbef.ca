@extends('admins.app')
    <!-- Begin Page Content -->
  @section('styles')

  <script src="https://cdn.tiny.cloud/1/sl6j0mvghyx0az1cb2hr37zwalpq4ykv58gbfrwqtry2xvdm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">
    tinymce.init({
    selector: 'textarea'
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
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">添加新闻</h1>
      </div>
      <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="">
        {{ csrf_field() }}
        <label for="title">Name:</label>
        <input name="title" class="form-control">

        <label for="category_id">category:</label>
        <select class="form-control" name="category_id">
          @foreach($categories as $category)
            <option value='{{ $category->id }}'>{{ $category->name }}</option>
          @endforeach

        </select>

        <textarea rows="20" cols="50" name="content"></textarea> 

        <label for="meta_title">meta_title:</label>
        <input name="meta_title" class="form-control">

        <label for="slug">slug:</label>
        <input name="slug" class="form-control">

        <label for="keywords">keywords:</label>
        <input name="keywords" class="form-control">

        <label for="description">description:</label>
        <input name="description" class="form-control">

        <label for="featured_img">featured_img:</label>
        <input type="file" class="form-control" name="featured_img" accept="image/*">

        <label for="featured_img_title">featured image title:</label>
        <input name="featured_img_title" class="form-control">

        <label for="featured_img_alt">featured image alt text:</label>
        <input name="featured_img_alt" class="form-control">


        <label for="image">image:</label>
        <input type="file" class="form-control" name="image" accept="image/*">

        <label for="image_title">image title:</label>
        <input name="image_title" class="form-control">

        <label for="image_alt">image alt text:</label>
        <input name="image_alt" class="form-control">

        <label for="is_published">publish</label>
        <input type="checkbox" name="is_published" class="form-control">

        <input type="submit" value="Create News" class="btn btn-success btn-lg btn-block"> 
      </form>

    </div>
  <!-- End of Main Content -->
  @endsection
