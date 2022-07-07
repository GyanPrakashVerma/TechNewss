@include('frontend.include.header')
    <section class="page-title index-title">
    <div class="heading" style="top:50%">
        <h1 class="text-center">Register (To Explorer your Knowledge)</h1>
    </div>
    </section>
    
    <div class="container border mt-5">
        <div class="row d-flex">
            <div class="col-md-8">
                <img src="{{asset('images/signup.png')}}" class="img-fluid ">
            </div>
            <div class="col-md-4 mt-5">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">User Name</label><br>
                        <input type="text" name="name" class="form-control" placeholder="Enter Username Here.."><br>
                        @if($errors->has('name'))
            <div class="text-danger"> {{$errors->first('name')}}</div> 
            @endif
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label><br>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Here.."><br>
                        @if($errors->has('email'))
            <div class="text-danger"> {{$errors->first('email')}}</div> 
            @endif
                    </div>
                    <div class="form-group">
                        <label for="">Password</label><br>
                        <input type="password" name="password" class="form-control" placeholder="Enter password Here.."><br>
                        @if($errors->has('password'))
            <div class="text-danger"> {{$errors->first('password')}}</div> 
            @endif
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
    </div>
    @include('frontend.include.footer')