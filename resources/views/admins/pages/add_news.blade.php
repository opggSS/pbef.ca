@extends('admins.app')
        <!-- Begin Page Content -->
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
              <input type="text" name="content">
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

      @include('admins.includes._footer')
      