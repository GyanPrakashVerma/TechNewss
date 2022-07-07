<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="{{asset ('frontend/plugins/summernote/summernote-bs4.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
  <script type='text/javascript' src=''></script>
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
  <script type='text/javascript'
    src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
  <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <title>Technotrics</title>
</head>

<body oncontextmenu='return false' class='snippet-body'>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#247291">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{route('index')}}"><i class="fa-solid fa-gear"></i> <i class="fa-solid fa-t"></i>eCHNOTRICS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white active" aria-current="page" href="{{route('index')}}"><i
                  class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('about')}}"><i class="fa-solid fa-user-group"></i> About
                Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link  text-white" href="{{route('contact')}}"><i class="fa-solid fa-address-book"></i>
                Contact Us</a>
            </li>
          </ul>
          <div class="d-flex gap-2">
            <button class="btn btn-outline-info"><a href="{{route('login')}}" class="nav-link text-white"><i
                  class="fa-solid fa-arrow-right-to-bracket"></i> LogIn</a></button>
            &nbsp;
            <button class="btn btn-outline-danger"><a href="{{route('signup')}}" class="nav-link text-white"><i
                  class="fa-solid fa-user-plus"></i> Register</a></button>


          </div>
        </div>
      </div>
    </nav>
    <div class="index-title">
      <h1 class="text-center text-light">welcome To Technotrics</h1>
      <p class="text-center text-light"><i class="fa-solid fa-lock"></i> Connectiong People Togather Technology
      </p>
    </div>
    <form>
      <div class="container">
        <div class="form-group mt-5">
          <input type="search" placeholder="Search your content here...." class="form-control input">
        </div>
      </div>
    </form>
  </header>