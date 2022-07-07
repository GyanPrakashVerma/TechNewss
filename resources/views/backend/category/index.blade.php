@extends('layouts.my_app')
@section('my_content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">All Categories</h3>
    <button class="btn btn-primary float-right"><a href="{{route('category.create')}}" class="text-light">Add
        New Category</a></button>
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
          <th>Name all Category</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i=1;
        ?>
        @foreach($cate as $data)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$data->name}}</td>
          <td>@if($data->status==1)
          <span class="right badge badge-warning "> Active</span>
            @else <span class="right badge badge-info ">In Active</span>  @endif</td>
          <td>
            
            <form action="{{route('category.destroy',$data->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('category.edit',$data->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
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