@extends('layouts.my_app')
@section('my_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Update comment</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('comment.update',$comment->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Name*</label>
                            <input type="text" name="name" value="{{$comment->name}}" readonly class="form-control" id="exampleInputname">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address*</label>
                        <input type="email" name="email" value="{{$comment->email}}" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                        </div>
                       <div class="mb-3">
                    <label for="exampleInputmsg" class="form-label">Messages*</label>
                    <textarea name="msg" id="" cols="30" rows="5" readonly class="form-control">{{$comment->message}}</textarea>
            </div>
      <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if ($comment->status==1) selected   @endif>Approved</option>
                        <option value="0" @if ($comment->status==0) selected   @endif>Dissapproved</option>
                    </select>
                  </div>
    <!-- /.card-body -->
    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
  </form>
</div>




@endsection