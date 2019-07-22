@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end of .col-md-8 -->

        <div class="col-md-3">
            <div class="well">
                <form method="post" action="{{route('categories.store')}}">
                    {{ csrf_field() }}
                    <h2>New Category</h2>
                    <label for="name">Name:</label>
                    <input name="name" class="form-control">
                    <input type="submit" name="" value="Create New Category" class="btn btn-primary btn-block btn-h1-spacing"> 
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