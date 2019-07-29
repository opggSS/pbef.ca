@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
 	<div class="container">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
      </div>
      <div class="row">
        <table class="table table-bordered " >
          <thead class="thead-dark">
            <th scope="col">varname</th>
            <th scope="col">info</th>
            <th scope="col">value</th>
            <th scope="col">Page Type</th>
            <th scope="col">Action</th>
          </thead>
         	<tbody>
        {{--     <form method="post" action="{{route('pageContents.store')}}" >
              {{ csrf_field() }}
              <tr>
                <td><input name="varname" class="form-control"></td>
                <td><input name="info" class="form-control"></td>
                <td>
                	<textarea name="value" class="form-control"></textarea> 
                </td>
                <td>
                	<input name="pageType_id" type="hidden" value="{{$typeid}}" >
                	<span class="form-control">{{$slug}}</span>
                </td>	                  
                <td><input type="submit" value="Create" class="btn btn-success btn-h1-spacing"> </td>
              </tr>
            </form> --}}

        @if (sizeof($pageContents) != 0)
            @foreach ($pageContents as $pageContent)
            <tr>
              <form method="post" action="{{route('pageContents.update', $pageContent->id)}}">
                 @method('PUT')
                {{ csrf_field() }}
                	<input name="pageType_id" type="hidden" value="{{$typeid}}" >
                  <input type="hidden" name="varname" value="{{ $pageContent->varname }}">
                  <td> <input class="form-control" name="varname" value="{{ $pageContent->varname }}"  disabled=""></td>
                  <td> <input class="form-control" name="info" value="{{ $pageContent->info }}"></td>
                  <td> 
                  	<textarea name="value" class="form-control" >{{$pageContent->value}}</textarea>
                  </td>            
                  <td>  <span class="form-control"> {{$slug}} </span> </td>
                  <td> <input type="submit" value="Save" class="btn btn-success btn-h1-spacing mb-2" >                  
              </form> 
              <form method="post" action="{{route('pageContents.destroy',$pageContent->id)}}" enctype="multipart/form-data"  >
                  {{ csrf_field() }}
                  @method('delete')
               <input type="submit" value="Delete" class="btn btn-danger btn-h1-spacing" ></td>
              </form>
            </tr>
            @endforeach
        @endif
          </tbody>
        </table>
      </div>



    </div>
 @endsection