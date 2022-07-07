@include('frontend.include.header')
    <section class="page-title index-title">
        <div class="heading">
            <h1 class="text-center">Contact Us</h1>
        </div>
    </section>
    <section>
        <div class="container mb-3 mt-4">
            <div class="row d-flex">
                <div class="col-md-6 box p-3">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="exampleInputname">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                        </div>
                       <div class="mb-3">
                    <label for="exampleInputmsg" class="form-label">Messages*</label>
                    <input type="text" class="form-control" id="exampleInputmsg">
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120562.19154953613!2d72.93141923669386!3d19.21404075250399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8fcfe76fd59%3A0xcf367d85f7c50283!2sThane%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1648067897793!5m2!1sen!2sin" width="590" height="400" style="border: 5px solid rgb(116, 8, 8);border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
        </div>
    </section>
    @include('frontend.include.footer')