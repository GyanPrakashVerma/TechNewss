@extends('layouts.my_app')
@section('my_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Post</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category">
              <option disabled selected>Select Category</option>
              @foreach($category as $cat)
              <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Post Title</label>
            <input type="text" name="post_title" class="form-control" placeholder="Enter title">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Short Description</label>
            <textarea class="form-control" name="short_description" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1"> Description</label>
            <textarea class="form-control" id="summernote" name="description" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="col-md-12">
          <label for="">Image</label>
          <input type="file" name="post_image" class="form-control">
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