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
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">添加新闻</h1>
      </div>

      <ul>
        <li>标题:</li>
        <li> 
          <input type="text" name="title">
        </li>
        <li>关键字：</li>
        <li>
          <input type="text" name="keywords">
        </li>

        <li>内容：</li>
        <li>
          <textarea rows="20" cols="50" name="content">
            
          </textarea> 
        </li>

        <li>小图（featured image）:</li>
        <li>
          <input type="file" name="featured_img" accept="image/*">
        </li>
        <li>大图：</li>
        <li>
          <input type="file" name="img_large" accept="image/*">
        </li>
        
      </ul>

    </div>
  <!-- End of Main Content -->
  @endsection
