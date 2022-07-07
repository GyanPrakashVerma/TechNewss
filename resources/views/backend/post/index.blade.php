@extends('layouts.my_app')
@section('my_content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">All Posts</h3>
    <button class="btn btn-primary float-right"><a href="{{route('post.create')}}" class="text-light">Add
        New Post</a></button>
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
          @if(Auth::user()->user_type !='user')
          <th>User ID</th>
          @endif
          <th>Category ID</th>
          <th>Title</th>
          <th>Short Description</th>
          <th>Description</th>
          <th>Images</th>
          <th>Status</th>
          <th>Trending Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($post as $post_come)
        <tr>
          <td>{{$i++}}</td>
          @if(Auth::user()->user_type !='user')
          <td>{{$post_come->user_id}}</td>
          @endif
          <td>
            @php
              $cat= \App\Models\Category::where('id',$post_come->category_id)->first();
            @endphp
            {{$cat->name}}
          </td>
          <td>{{$post_come->title}}</td>
          <td>{{$post_come->short_description}}</td>
          <td>{{$post_come->description}}</td>
          
          <td> <img src="{{asset('post_image/'.$post_come->images )}}" alt="error_image" width="100" height="200"></td>

          <td>@if($post_come->status==1)
          <span class="right badge badge-warning">Active</span>
            @else <span class="right badge badge-info">In Active</span>@endif</td>
            <td>@if($post_come->t_status==1)
          <span class="right badge badge-dark">Trending</span>
            @else <span class="right badge badge-success">Not trending</span>@endif</td>
          <td>
            
            <form action="{{route('post.destroy',$post_come->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('post.edit',$post_come->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection