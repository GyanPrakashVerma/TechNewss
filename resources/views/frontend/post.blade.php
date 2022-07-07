@include('frontend.include.header')

    <div class="container mt-3 mb-4">
        <div class="row d-flex">
            <div class="col-md-8">
                <div class="post-heading text-left">
                    <h1 class="text-left">{{$posts->title}}</h1>
                </div>
                <div class="post-img mt-3 mb-3">
                    <img src="{{asset('post_image/'.$posts->images)}}" class="rounded img-thumbnail" width="100%"
                        height="350px" alt="">
                </div>
                <div class="short-des text-left">
                    <p class="text-left mt-3 mb-2 p-3">{{$posts->short_description}}
                    </p>
                </div>
                <div class="long-des text-left">
                    <h2 class="text-left mt-3 mb-3">{{$posts->title}}</h2>
                    <p class="text-left mt-3 mb-3">{{$posts->description}}
                </div>


                <!-- publisher information -->
                <div class=" text-end mt-3 mb-3">
                @php 
                    $input= \App\Models\User::find($posts->user_id);
                    
                @endphp
                <i class="fa-solid fa-user"></i> {{$input->name}}
                <i class="fa-solid fa-calendar-days"></i>{{$posts->created_at}}
                </div>   
                <!-- comments section -->
                <h3><span class="badge bg-secondary">{{$comments->count()}}</span> Comments*:</h3>
                <article class="mt-3 mb-4">
                    @foreach($comments as $comment)
                    <div class="comment_name text-left d-flex">
                        <img src="{{asset('images/index 1.jpg')}}" rounded height="50" width="50"
                            class="img-fluid rounded " alt="">
                        <h4 class="text-left w-100">{{$comment->name}}</h4><br>
                        {{$comment->created_at}}
                    </div>

                    <div class="message  p-2 mt-4">
                        <p>{{$comment->message}}</p>
                    </div>
                    @endforeach
                </article>

                <hr class="mt-4">
                <h2 class="text-left mt-2">LEAVE A COMMENT</h2>
              
                
                <form action="{{route('comment.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name*</label>
                        <input type="text" name="name" class="form-control" id="exampleInputname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address*</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputmsg" class="form-label">Messages*</label>
                        <textarea name="msg" id="" cols="30" rows="5" class="form-control"></textarea>
                        <input type="hidden" name="post_id" value="{{$posts->id}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="category">
                    <h3 class="text-center mb-4 mt-4 p-2"> CATEGORY</h3>
                    <ul class="list">
                        @foreach($category as $cat)
                        <li><a href="{{route('post_show',$cat->id)}}">{{$cat->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="category1">
                    <h3 class="text-center mb-4 mt-5 p-2"><i class="fa-solid fa-bell"></i> POPULAR POST</h3>

                    @foreach($post1 as $post)
                    <div class="card" style="width: 18rem;">
                        <a href="{{route('front.post',$post->id)}}"> <img src="{{asset('post_image/'.$post->images)}}"
                                class="img-fluid post-height" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{route('front.post',$post->id)}}"
                                    class="">{{$post->title}}</a></h5>
                        </div>
                    </div>


                    @endforeach
                    <ul class="list">
                        <li><a href="#"></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    
  @include('frontend.include.footer')
    