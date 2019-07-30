@extends('admins.app')
    <!-- Begin Page Content -->
    @section('styles')
    <style type="text/css">
      table {
    table-layout: fixed;
    word-wrap: break-word;
  }
    </style>
    
    @endsection
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col float-left" ><h1>Message Lists</h1></div>
      <div clas="col float-right" >
        <a class="btn btn-h1-spacing
        @if ($status == 1)
        btn-primary
        @else
        btn-secondary
        @endif
        " href="{{url('admin/messages')}}">All</a>

        <a class="btn btn-h1-spacing
        @if ($status == -1)
        btn-primary
        @else
        btn-secondary
        @endif

        " href="{{url('admin/messages/unread')}}" >Unread</a>
      </div>
  </div>

      <div class="row">
        <table class="table table-bordered " >
          <thead class="thead-dark">
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Received at</th>
            <th scope="col">Action</th>
          </thead>
          <tbody>
            @foreach ($messages as $message)
              <tr>
                <td>{{ $message->firstName }}</td>
                <td>{{ $message->lastName }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ substr($message->message,0,40)}}</td>
                <td>
                  @if ($message->status == 1)
                  <span>Read</span>
                  @else
                  <span style="color:red">Unread</span>
                  @endif
                </td>
                <td>{{$message->created_at}}</td>
                <td>
                    <a class="btn btn-primary btn-block btn-h1-spacing" href="{{url('admin/messages/view' , $message->id)}}">
                        View
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
  <!-- End of Main Content -->
@endsection