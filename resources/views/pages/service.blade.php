@extends('welcome')

@section('title', 'SERVICE')


@section('content')
    <div class="tm-welcome-container tm-fixed-header tm-fixed-header-1">
        <div class="text-center">
            <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 text-white mx-auto">SERVICES</p>
        </div>                
    </div>

    <div id="tm-fixed-header-bg"></div>
    </div>

    <br>

    <div class="container py-5">
        <header class="text-center">
            <h1 class="display-4">Our Services</h1>
        </header>

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <!-- FIRST EXAMPLE ===================================-->
                <div class="row py-5">
                    <div class="col-lg-4">
                        <figure class="rounded p-3 bg-white shadow-sm">
                            <img src="https://i.postimg.cc/CxckQJW1/6.png" alt="" class="w-100 card-img-top">
                            <figcaption class="p-4 card-img-bottom">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">TVC</h2>
                                <p class="mb-0 text-small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="rounded p-3 bg-white shadow-sm">
                            <img src="https://i.postimg.cc/BbvGMSDt/6.png" alt="" class="w-100 card-img-top">
                            <figcaption class="p-4 card-img-bottom">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">OVC</h2>
                                <p class="mb-0 text-small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="rounded p-3 bg-white shadow-sm">
                            <img src="https://i.postimg.cc/W3bKP94H/6.png" alt="" class="w-100 card-img-top">
                            <figcaption class="p-4 card-img-bottom">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">Documentary</h2>
                                <p class="mb-0 text-small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>


                <div class="separator my-3"></div>



                <!-- BIG EXAMPLE =================================== -->


                <div class="py-5">
                    <h2 class="h4 font-italic mb-4">Filmography</h2>
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="https://i.postimg.cc/Qxrz8xV7/4.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
                        </div>
                        <div class="col-lg-7">
                            <p class="font-italic text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsum quaerat, itaque sint odit id beatae, vero aliquam numquam placeat officiis fugiat, consequuntur est ut fugit amet illum obcaecati sed.</p>
                            <p class="font-italic text-muted"> div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure dolore dolorum eum ex, expedita voluptate est adipisci repudiandae. Minus tenetur ut veritatis non hic beatae velit? Eius, totam, officia?</p>
                            <p class="font-italic text-muted">Enim numquam autem, suscipit repellat vero, voluptas adipisci provident ad quidem dolorum minus, architecto. Nostrum deleniti nesciunt consequatur tempora repudiandae quos quas, animi perspiciatis nam consectetur earum adipisci, repellendus laudantium.</p>
                        </div>
                    </div>
                    <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                </div>


                <div class="separator my-2"></div>


                <!-- THIRD EXAMPLE =================================== -->
                <div class="row py-5">

                    <div class="col-lg-4">
                        <figure class="caption-2 mb-0 shadow-sm border border-white border-md">
                            <img src="https://i.postimg.cc/pTkkKvN6/14.jpg" alt="" class="w-100">
                            <figcaption class="p-4 bg-white">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">Animation</h2>
                                <p class="mb-0 text-small font-italic text-muted">Lorem ipsum dolor sit amet, consect adipisicing elit.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure class="caption-2 mb-0 shadow-sm border border-white border-md">
                            <img src="https://i.postimg.cc/sgRHWsv3/16.jpg" alt="" class="w-100">
                            <figcaption class="p-4 bg-white">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">Audio Visual </h2>
                                <p class="mb-0 text-small font-italic text-muted">Lorem ipsum dolor sit amet, consect adipisicing elit.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure class="caption-2 mb-0 shadow-sm border border-white border-md">
                            <img src="https://i.postimg.cc/TwhtxPHJ/18.jpg" alt="" class="w-100">
                            <figcaption class="p-4 bg-white">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">Film</h2>
                                <p class="mb-0 text-small font-italic text-muted">Lorem ipsum dolor sit amet, consect adipisicing elit.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="separator my-2"></div>


            </div>
        </div>

        {{-- quotes --}}
        @include('pages.quote')
        {{-- end quotes --}}
    </div>
@endsection