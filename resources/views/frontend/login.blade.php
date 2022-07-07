@include('frontend.include.header')
    <section class="page-title index-title">
    <div class="heading">
        <h1 class="text-center">LogIn (Welcome Back)</h1>
    </div>
    </section>
    <div class="container border p-2 mt-5">
        <div class="row d-flex">
            <div class="col-md-8">
                <img src="{{asset('images/login.png')}}" class="img-fluid">
            </div>
            <div class="col-md-4 mt-5">
                <form action="#">
                    <div class="form-group">
                        <label for="">Email Address</label><br>
                        <input type="email" class="form-control" placeholder="Enter Email Here.."><br>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label><br>
                        <input type="password" class="form-control" placeholder="Enter password Here..">
                        <a href="#">Forgot Password</a><br>
                    </div>
                    <div class="form-group d-flex gap-3 mt-2">
                        <input type="checkbox" class="form-check">Remember Me
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
    </div>
    @include('frontend.include.footer')