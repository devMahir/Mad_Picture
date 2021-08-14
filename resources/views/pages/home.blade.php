@extends('welcome')

@section('title', 'HOME')

@section('content')
<div class="tm-welcome-container text-center text-white">
    <div class="tm-welcome-container-inner">
        <a href="{{ route('service') }}" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
            <span>Discover</span>
        </a>
    </div>
</div>

    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
                @foreach ($homevideos as $homevideo)
                    @if ($homevideo->status == true)
                        <source src="{{ asset('frontend/video/'.$homevideo->name) }}" type="video/mp4">
                    @endif
                @endforeach
               

        </video>    
    </div>

    <i id="tm-video-control-button" class="fas fa-pause"></i>
</div>

<div class="container">
    <div id="content" class="mx-auto tm-content-container">
        <main>
            <div class="row">
                <div class="col-12">
                    <h2 class="tm-page-title mb-4">Our Video Catalog</h2><br><br>
                </div>
            </div>

            <div class="row tm-catalog-item-list">
                @foreach ($videos as $video)
                    @if ($video->status == true)
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{ asset('uploads/videoCatelog/'.$video->picture) }}" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{ $video->title_name }}</h3>
                                <p class="tm-catalog-item-text">{{ $video->content }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                
            </div>

            
            <div class="more">
                <a href="">MORE..</a>
            </div>
        </main>
        <br>
        <br>






        <section class="our-services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">

                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('frontend/img/tvc.jpeg') }}" alt="">
                            </div>
                            <h4>TVC</h4>
                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('frontend/img/ovc.jpg') }}" alt="">
                            </div>
                            <h4>OVC</h4>
                            <p>Vivamus nec vehicula felis, sit amet convallis ex. Aenean dolor risus, rutrum at tincidunt eget, placerat ac mauris.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('frontend/img/docu-01') }}.jpg" alt="">
                            </div>
                            <h4>DOCUMENTARY</h4>
                            <p>Praesent nec dui sed urna pharetra dapibus at ac elit. Aenean hendrerit metus leo, quis viverra purus condimentum nec.</p>
                        </div>
                    </div>
                </div>
                <br>



                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('frontend/img/animate.png') }}" alt="">
                            </div>
                            <h4>ANIMATIONS</h4>
                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('frontend/img/auvi.png') }}" alt="">
                            </div>
                            <h4>AUDIO VISUALS</h4>
                            <p>Vivamus nec vehicula felis, sit amet convallis ex. Aenean dolor risus, rutrum at tincidunt eget, placerat ac mauris.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('frontend/img/film.jpg') }}" alt="">
                            </div>
                            <h4>FILM</h4>
                            <p>Praesent nec dui sed urna pharetra dapibus at ac elit. Aenean hendrerit metus leo, quis viverra purus condimentum nec.</p>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
        </div>




                <section id="video-container">
                    <div class="video-overlay"></div>
                    
                    <video autoplay="" loop="" muted>
                        <source src="{{ asset('frontend/video/highway-loop.mp4') }}" type="video/mp4" />
                    </video>
                </section>
            <br>


<div class="container-fluid bg-gradient p-5">
<div class="row m-auto text-center w-75">
    <div class="col-4 princing-item red">
        <div class="pricing-divider ">
            <h3 class="text-light">START-UP</h3>
            <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span> 120 <span class="h5">/video</span></h4>
            <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
</svg>
        </div>
        <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
                <li><b>5 min</b> ludedusers inc</li>
                <li><b>2 min</b> of storajftghththge</li>
                <li><b>Free </b>Email support</li>
                <li><b>Help center access</b></li>
            </ul>
            <a href="contact.html"> <button type="button" class="btn btn-lg btn-block  btn-custom ">Get Free Quote</button></a>
        </div>
    </div>




    <div class="col-4 princing-item blue">
        <div class="pricing-divider ">
            <h3 class="text-light">BUSINESS</h3>
            <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span> 250 <span class="h5">/video</span></h4>
            <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
</svg>
        </div>

        <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
                <li><b>100min </b>usettetrs includetghtd</li>
                <li><b>10 min</b> odgsdgf storasdrgrge</li>
                <li><b>Free</b>Email support</li>
                <li><b>Help center access</b></li>
            </ul>
            <a href="contact.html"> <button type="button" class="btn btn-lg btn-block  btn-custom ">Get Free Quote</button></a>
        </div>
    </div>






    <div class="col-4 princing-item green">
        <div class="pricing-divider ">
            <h3 class="text-light">PRO</h3>
            <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span> 450 <span class="h5">/video</span></h4>
            <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
</svg>
        </div>

        <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
                <li><b>300 min</b> usfdffuded</li>
                <li><b>20 GB</b> offdsafestorage</li>
                <li><b>Free</b> Email support</li>
                <li><b>Help center access</b></li>
            </ul>
            <a href="contact.html"> <button type="button" class="btn btn-lg btn-block  btn-custom ">Get Free Quote</button></a>
        </div>
    </div>
</div>
</div><br> <br>

<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.0017509491605!2d90.36920607963911!3d23.74712965354341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfa2024d9e69%3A0x25c2247cf71bda71!2sToguMogu%20Parenting%20App!5e0!3m2!1sen!2sbd!4v1617384570125!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


{{-- quotes --}}
@include('pages.quote')
{{-- end quotes --}}


@endsection