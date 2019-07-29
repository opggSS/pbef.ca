@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-11">
            <h1>Partners</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="1" class="required">Title</th>
                        <th colspan="1" class="required">Alt Text</th>
                        <th colspan="1">Description</th>
                        <th colspan="5" class="required">Image</th>
                        <th colspan="1">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($partners as $partner)
                    <form method="post" action="{{route('partners.update',$partner->id)}}" enctype="multipart/form-data"  >
                        @method('PUT')
                        {{ csrf_field() }}
                        <tr>
                            <td colspan="1">
                                <input class="form-control" name="title" value="{{ $partner->title }}" placeholder="required">
                            </td>
                            <td colspan="1" >
                                <input class="form-control" name="alt" value="{{ $partner->alt }}" placeholder="required">
                            </td>
                            <td colspan="1">
                                <input class="form-control" name="description" value="{{ $partner->description }}">
                            </td>
                            <td colspan="5">
                                <img src="/images/{{$partner->image}}" style="width: 100%">
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </td>
                            <td colspan="1">
                                <input type="submit"  value="Update" class="btn btn-primary btn-block btn-h1-spacing" style="margin-bottom: 20px"> 
                                <form method="post" action="{{route('partners.update',$partner->id)}}" enctype="multipart/form-data"  >
                                    @method('delete')
                                    {{ csrf_field() }}
                                    <input type="submit" value="Delete" class="btn btn-danger btn-block btn-h1-spacing" action="{{route('partners.destroy',$partner->id)}}">
                                </form>
                                
                            </td>
                        </tr>
                    </form>
                    @endforeach
                    <form method="post" action="{{route('partners.store')}}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <tr>
                            <td colspan="1">
                                <input class="form-control" name="title" placeholder="required">
                            </td>
                            <td colspan="1"> 
                                <input class="form-control" name="alt" placeholder="required">
                            </td>
                            <td colspan="1">
                                <input class="form-control" name="description" >
                            </td>
                            <td colspan="5">
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </td>
                            <td colspan="1">
                                <input type="submit"  value="Add" class="btn btn-primary btn-block btn-h1-spacing"> 
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div> <!-- end of .col-md-8 -->
 
    </div>

@endsection