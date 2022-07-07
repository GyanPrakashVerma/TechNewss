@extends('layouts.my_app')
@section('my_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Update Post</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('post.update',$edit_post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category" value="{{$edit_post->name}}">
              <option disabled selected>Select Category</option>
              @foreach($category as $cat)
              <option value="{{$cat->id}}" @if($cat->id == $edit_post->category_id) selected @endif>{{$cat->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Post Title</label>
            <input type="text" name="post_title" class="form-control" value="{{$edit_post->title}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Short Description</label>
            <textarea class="form-control" name="short_description" id="" cols="30" rows="10">{{$edit_post->short_description}}</textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1"> Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$edit_post->description}}</textarea>
          </div>
        </div>
        <div class="col-md-12">
          <label for="">Image</label>
          <input type="file" name="post_image" class="form-control" >
        </div>
      </div>
      <img src="{{asset('post_image/'.$edit_post->images)}}" class="img-fluid" width="150px" height="150px">
      <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if ($edit_post->status==1) selected   @endif>Active</option>
                        <option value="0" @if ($edit_post->status==0) selected   @endif>In Active</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trending Status</label>
                    <select name="tstatus" class="form-control">
                        <option value="1" @if ($edit_post->tstatus==1) selected   @endif>Trending</option>
                        <option value="0" @if ($edit_post->tstatus==0) selected   @endif>Not trending</option>
                    </select>
                  </div>
    <!-- /.card-body -->
    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
  </form>
</div>






@endsection