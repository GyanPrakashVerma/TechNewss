@include('frontend.include.header')
    <section class="page-title index-title">
        <div class="heading">
            <h1 class="text-center">About Us</h1>
        </div>
    </section>
    <section>
        <div class="container box mb-3 mt-4">
            <div class="row d-flex">
                <div class="col-md-4 mt-2">
                    <img src="{{asset('images/about.gif')}}" class="img-fluid aboutimg">
                </div>
                <div class="col-md-8 mt-2">
                    <div class="title">
                        <h2 class="text-left">About US</h2>
                        <p class="text-left mt-2 p-2">HELLO EVERYONE WELCOME TO MY BLOG HERE YOU WILL FIND MANY
                            TECHNOLOGY RELATED CONTENT FROM WHICH YOU ALL WILL BE UPDATED WITH TECHNOLOGY NEWS AND MANY
                            OTHER TECHNOLOGY FACTS SUCH AS TOP APPS OF ANDROID AND IOS AND MANY OTHER THINGS</p>
                        <p class="text-left p-2 mt-3">IF YOU FACE ANY SOFTWARE RELATED PROBLEM IN ANY OF YOUR DEVICE
                            LIKE ANDROID, IOS,WINDOWS,MAC OR ETC.... YOU CAN DIRECTLY <a href="{{route('contact')}}">
                                CONTACT US ....</a> <br>
                            WE WILL HELP YOU AS SOON AS POSSIBLE .</p>
                        <p class="text-left p-2 mt-3">
                            WE ALSO PROVIDE MANY SERVICES LIKE LOGO DESGING, BANNER DESGING, WEBSITE DESGING, AND SOCIAL
                            MEDIA ENGAGEMENT. CLICK HERE TO SEE OUR WORK

                            IF YOU ARE INTERESTED YOU DIRECTLY <a href="{{route('contact')}}"> CONTACT US</a>. WE WILL
                            PROVIDE YOU THE BEST SERVICE..</p>

                    </div>
                </div>
                <img src="{{asset('images/about2.jpg')}}" alt="" class="img-fluid mb-4">
            </div>
        </div>
    </section>
    @include('frontend.include.footer')