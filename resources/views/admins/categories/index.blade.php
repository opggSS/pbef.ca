@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1>类别列表</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{-- <a href="{{route('categories.destory',$category->id)}}"></a> --}}

                            <form method="post" action="{{route('categories.destroy', $category->id)}}">
                                @method('DELETE')
                                {{ csrf_field() }}
                                <input type="submit" name="" value="删除" class="btn btn-primary btn-h3-spacing"> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end of .col-md-8 -->

        <div class="col-md-3">
            <div class="well">
                <form method="post" action="{{route('categories.store')}}">
                    {{ csrf_field() }}
                    <h2>新增类别</h2>
                    <label for="name">名称:</label>
                    <input name="name" class="form-control" style="margin-bottom: 20px">
                    <input type="submit" name="" value="添加新类别" class="btn btn-primary btn-block btn-h1-spacing"> 
                </form>
               {{--  {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>New Category</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                {!! Form::close() !!} --}}
            </div>
        </div>
    </div>

@endsection