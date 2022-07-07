@extends('layouts.my_app')
@section('my_content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('category.update',$category->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="categoryname" class="form-control"  value="{{$category->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if ($category->status==1) selected   @endif>Active</option>
                        <option value="0" @if ($category->status==0) selected   @endif>In Active</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
@endsection