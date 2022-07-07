@extends('layouts.my_app')
@section('my_content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">All Posts</h3>
    <button class="btn btn-primary float-right"><a href="{{route('user.create')}}" class="text-light">Add
        New user</a></button>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    
    @if(Session::has('success'))
    <script>
      swal("Congrates!!!!","{{Session::get('success')}}","success",{button:"OK"});
  </script>
    @endif
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($user as $users)
        @if($users->id != 1)

        <tr>
          <td>{{$i++}}</td>
          <td>{{$users->id}}</td>
          <td>
           
            {{$users->name}}
          </td>
          <td>{{$users->email}}</td>
          <td>
            
            <form action="{{route('user.destroy',$users->id)}}" method="POST">
                @csrf
                @method('Delete')
                
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection