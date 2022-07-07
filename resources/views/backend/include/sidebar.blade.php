 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Technews</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name }} -- {{Auth::user()->user_type}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link active bg-success">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(Auth::user()->user_type !="user")
          <li class="nav-item menu-open">
            <a href="{{route('category.index')}}" class="nav-link ">
            <i class="fa-brands fa-stack-exchange"></i>
              <p>
                Category                
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item menu-open">
            <a href="{{route('post.index')}}" class="nav-link ">
            <i class="fa-solid fa-blog"></i> 
              <p>
               Post               
              </p>
            </a>
          </li>        
          @if(Auth::user()->user_type !="user")
          <li class="nav-item menu-open">
            <a href="{{route('comment.index')}}" class="nav-link ">
            <i class="fa-solid fa-comments"></i>
              <p>
               Comments
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->user_type !="user")
          <li class="nav-item menu-open">
            <a href="{{route('user.index')}}" class="nav-link ">
            <i class="fa-solid fa-users"></i>
              <p>
               Users
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>