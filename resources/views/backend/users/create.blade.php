@extends('layouts.my_app')
@section('my_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add user</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            @if($errors->has('name'))
            <div class="text-danger"> {{$errors->first('name')}}</div> 
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" required>
            @if($errors->has('email'))
            <div class="text-danger"> {{$errors->first('email')}}</div> 
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputpass1"> Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputpass1" requied>
            @if($errors->has('password'))
            <div class="text-danger"> {{$errors->first('password')}}</div> 
            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection