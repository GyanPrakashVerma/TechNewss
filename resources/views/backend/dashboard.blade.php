
  @include('backend.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @php
        $all_cate= \App\Models\Category::Where('delete_status',0)->count();
        $all_post= \App\Models\Post::Where('delete_status',0)->count();
        $all_comments= \App\Models\Comment::get()->count();
        $all_users= \App\Models\User::get()->count();
    @endphp
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$all_cate}}</h3>

                <p>All Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              @if(Auth::user()->user_type !="user")
              <a href="{{route('category.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
              <h3>{{$all_post}}</h3>
                <p>Posts</p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-blog"></i>
              </div>
              @if(Auth::user()->user_type !="user")
              <a href="{{route('post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$all_comments}}</h3>

                <p>All Comments </p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-comments"></i>
              </div>
              @if(Auth::user()->user_type !="user")
              <a href="{{route('comment.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{$all_users}}</h3>

                <p>All Users</p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-users"></i>
              </div>
              @if(Auth::user()->user_type !="user")
              <a href="{{route('user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('backend.include.footer')