@include('frontend.include.header')
  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row">

        <h3 class="mb-3 text-center"><i class="fa-solid fa-arrow-trend-up"></i> TRENDING POSTS</h3>

        <div class="col-12 text-right">
          <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">


                  @foreach($trendind_post as $tpost)
                  <div class="col-md-4 mb-3">
                    <div class="card" style="height: 420px;box-shadow: 5px 3px grey;">
                      <img class="img-fluid rounded" alt="100%x280" src="{{asset('post_image/'.$tpost->images)}}">
                      <div class="card-body">
                        <a href="{{route('front.post',$tpost->id)}}">
                          <h4 class="card-title">{{$tpost->title}}</h4>
                        </a>
                        <p class="text-primary" style="color: rgb(9, 106, 218);">
                          <i class="fa-solid fa-user"></i> @php
                          $input= \App\Models\User::find($tpost->user_id);

                          @endphp
                          {{$input->name}}
                          <span class="text-right"><i class="fa-solid fa-calendar-days"></i>{{$tpost->created_at}}
                          </span>
                        </p>

                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type='text/javascript'></script>




  <section>
    <div class="container mt-3 mb-4">
      <div class="row d-flex">
        <div class="col-md-8">
          <div class="recent">
            <h3 class="text-left mb-4 p-4"><i class="fa-solid fa-bell"></i> Recent Post</h3>
            @foreach($posts as $post)
            <div class="card mb-3" style="max-width: 800px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="{{route('front.post',$post->id)}}"> <img src="{{asset('post_image/'.$post->images)}}"
                      class="img-fluid post-height" alt="..."></a>
                </div>
                <div class="col-md-8">

                  <div class="card-body">

                    <h5 class="card-title">{{$post->title}}</h5>

                    <p class="card-text">{{$post->short_description}}</p>
                    <button class="btn btn-outline-primary rounded " style="float:right;"><a
                        href="{{route('front.post',$post->id)}}" class="text-center">Read More</a></button>
                    <p class="date">
                      {{$post->created_at}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="text-center mt-3 mb-4">
            <button class="btn btn-outline-danger" style="text-aligh:center;border-radius:20px; ">View More</button>
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