<div class="container-fluid  " style="background-color: #418c9f;">
    <footer class="py-3 ">
      <ul class="nav justify-content-center border-bottom text-light  pb-3 mb-3">
        <li class="nav-item"><a href="{{route('index')}}" class="nav-link px-2 text-light">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Signup</a></li>
      </ul>
      <p class="text-center text-light">© 2021 wellcome to technotrics....</p>
    </footer>
    <script src="{{asset('frontend/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
  $(function () {
    // Summernote
    $('.summernote').summernote()
  })
  </script>
 
</body>

</html>