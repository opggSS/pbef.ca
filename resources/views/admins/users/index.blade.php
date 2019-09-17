@extends('admins.app')
    <!-- Begin Page Content -->
    @section('styles')
    @endsection
  @section('content')

  <div class="container">
    <div class="row">
      <div class="col float-left" ><h1>Admin User Management</h1></div>
    </div>
      
        <table class="table table-bordered" >
          <thead>
            <tr class="thead-dark">
              <th scope="col">Username</th>
              <th scope="col">Role</th>
              <th scope="col">Title</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Created at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <form method="post" action="{{route('users.store')}}">
              {{ csrf_field() }}
            <tr>
              <td>
                  <input class="form-control" name="username" placeholder="required">
              </td>
              <td>
                  <span>Admin</span>
              </td>
              <td> 
                  <input class="form-control" name="title" placeholder="title">
              </td>
              <td>
                  <input class="form-control" name="email" placeholder="email" >
              </td>
              <td>
                  <input type="password" name="password" placeholder="new password" class="form-control" ><br>
                  <input type="password" placeholder="confirm password" name="password_confirm" class="form-control" >
              </td>
              <td></td>
              <td>
                  <input type="submit"  value="Add" class="btn btn-primary btn-block btn-h1-spacing"> 
              </td>
            </tr>
          </form>
          @foreach ($users as $key => $user)
            <form method="post" id="{{$key}}_update" action="{{route('users.update',$user->id)}}" > 
              @method('PUT')
                {{ csrf_field() }}
            </form>
                <tr>
                    <td>
                        <span>{{ $user->username }}</span>
                    </td>
                    <td>
                        <span>
                          @if ($user->level == 1)
                          Super Admin
                          @else
                          Admin
                          @endif
                        </span>
                    </td>

                    <td >
                        <input class="form-control" name="title" value="{{ $user->title }}" placeholder="title" form="{{$key}}_update" >
                    </td>
                    <td>
                        <input class="form-control" name='email' value="{{ $user->email }}" form="{{$key}}_update">
                    </td>
                    <td>
                        <input type="password" name="password" class="form-control" form="{{$key}}_update" placeholder="new password"><br>
                         <input type="password" name="password_confirm" class="form-control" placeholder="confirm password" form="{{$key}}_update" >
                    </td>
                  
                    <td>
                      <span>
                        {{ date('Y/m/d', strtotime($user->created_at)) }}
                      </span>
                    </td>

                    <td>
                    <input type="submit"  value="Update" class="btn btn-primary btn-block btn-h1-spacing" style="margin-bottom: 20px" form="{{$key}}_update"> 
                    @if ($user->level != 1)
                    <form method="post" id="{{$key}}_delete" action="{{route('users.destroy',$user->id)}}" >
                      @method('delete')
                      {{ csrf_field() }}
                    </form>
                      <input type="submit" value="Delete" class="btn btn-danger btn-block btn-h1-spacing" action="{{route('users.destroy',$user->id)}}" form="{{$key}}_delete">
                    @endif
                    </form>
                    </td>
                </tr>
          @endforeach
          </tbody>
        </table>
        

  </div>
  <!-- End of Main Content -->
@endsection