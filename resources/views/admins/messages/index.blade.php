@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
    <div class="container-fluid">


    <div class="row">
        <h1>Message Lists</h1>
    </div>


    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
          </thead>
          <tbody>
            @foreach ($messages as $message)
              <tr>
                <td>{{ $message->firstName }}</td>
                <td>{{ $message->lastName }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message}}</td>
                <td>
                    <a href="{{url('admin/reply' , $message->id)}}">
                        reply
                    </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="text-center">
          {!! $messages->links(); !!}
        </div>
      </div>
    </div>

  </div>
  <!-- End of Main Content -->
@endsection