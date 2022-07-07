  @extends('layouts.my_app')
@section('my_content')

<div class="container mt-2" >
  <h2>Comments</h2>
  <ul class="nav nav-tab mb-3" style="gap:40px;">
    <li class="nav-item"><a href="#all_comments" data-toggle="tab" class="nav-link btn btn-outline-warning p-2 active">All Comments</a></li>
    <li class="nav-item"><a href="#approved_comments" data-toggle="tab" class="nav-link btn btn-outline-success p-2">Approved Comments</a></li>
    <li class="nav-item"><a href="#disapproved_comments" data-toggle="tab" class="nav-link btn btn-outline-danger p-2">Disapproved Comments</a></li>
  </ul>
</div>
<div class="tab-content">
<div class="tab-pane active" id="all_comments">
<div class="card" >
  <div class="card-header">
    <h3 class="card-title">All Comments</h3>   
  </div>
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
          <th>Name </th>
          <th>Email </th>
          <th>Post ID </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($comm as $data)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>
            @php
            $p_name =\App\Models\Post::find($data->post_id)
            @endphp
            
            {{$p_name->title??null}}
          </td>
          <td>@if($data->status==1)
          <span class="right badge badge-warning "> Approved</span>
            @else <span class="right badge badge-info ">Disapproved</span>  @endif</td>
          <td>
            
            <form action="{{route('comment.destroy',$data->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('comment.edit',$data->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
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
</div>

<div class="tab-pane" id="approved_comments">
<div class="card" >
  <div class="card-header">
    <h3 class="card-title">Approved Comments</h3>   
  </div>
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
          <th>Name </th>
          <th>Email </th>
          <th>Post ID </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($comm1 as $data1)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$data1->name}}</td>
          <td>{{$data1->email}}</td>
          <td>
            @php
            $p_name
             =\App\Models\Post::find($data1->post_id)
            @endphp
            
            {{$p_name->title??null}}
          </td>
          <td>@if($data1->status==1)
          <span class="right badge badge-warning "> Approved</span>
            @else <span class="right badge badge-info ">Disapproved</span>  @endif</td>
          <td>
            
            <form action="{{route('comment.destroy',$data1->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('comment.edit',$data1->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

<div class="tab-pane" id="disapproved_comments">
<div class="card" >
  <div class="card-header">
    <h3 class="card-title">Disapproved Comments</h3>   
  </div>
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
          <th>Name </th>
          <th>Email </th>
          <th>Post ID </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($comm2 as $data2)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$data2->name}}</td>
          <td>{{$data2->email}}</td>
          <td>
            @php
            $p_name =\App\Models\Post::find($data2->post_id)
            @endphp
            
            {{$p_name->title??null}}
          </td>
          <td>@if($data2->status==1)
          <span class="right badge badge-warning "> Approved</span>
            @else <span class="right badge badge-info ">Disapproved</span>  @endif</td>
          <td>
            
            <form action="{{route('comment.destroy',$data2->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('comment.edit',$data2->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

</div>



@endsection