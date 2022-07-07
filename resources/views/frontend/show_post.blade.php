@include('frontend.include.header')
  <section>
    <div class="container mt-3 mb-4">
      <div class="row d-flex">
        <div class="col-md-8">
          <div class="recent">
            <h3 class="text-left mb-4 p-4"><i class="fa-solid fa-bell"></i> Recent Post</h3>
            @foreach($post as $post_show)
            <div class="card mb-3" style="max-width: 800px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="{{route('front.post',$post_show->id)}}"> <img src="{{asset('post_image/'.$post_show->images)}}"
                      class="img-fluid post-height" alt="..."></a>
                </div>
                <div class="col-md-8">

                  <div class="card-body">

                    <h5 class="card-title">{{$post_show->title}}</h5>

                    <p class="card-text">{{$post_show->short_description}}</p>
                    <button class="btn btn-outline-primary rounded " style="float:right;"><a
                        href="{{route('front.post',$post_show->id)}}" class="text-center">Read More</a></button>
                    <p class="date">
                      {{$post_show->created_at}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="text-center mt-3 mb-4">
            <button class="btn btn-outline-danger" style="text-aligh:center;border-radius:20px;">View More</button>
          </div>

          <!-- <script>https://code.jquery.com/jquery-3.6.0.min.js</script>
          <script>
            $(".card").slice(0,3).show()
            $(".btn").on("click",function(){
              $(".card:hidden").slice(0,3).slidedown()
              if($(".card:hidden").length==0){
                $(".btn").fadeout('slow')
              }
            })
          </script> -->

        </div>
        <div class="col-md-4">
          <div class="category">
            <h3 class="text-center mb-4 mt-5 p-2"> CATEGORY</h3>
            <ul class="list">
              @foreach($category as $cat)
              <li><a href="{{route('post_show',$cat->id)}}">{{$cat->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('frontend.include.footer')