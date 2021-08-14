@extends('welcome')

@section('title', 'CONTACT')

@section('content')
<div class="tm-welcome-container tm-fixed-header tm-fixed-header-1">
    <div class="text-center">
        <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 text-white mx-auto">CONTACT</p>
    </div>
</div>




<div id="tm-fixed-header-bg"></div>
</div>
</div>
<br>


<br>
<br>



<!--Main Layout-->
<main>

<div class="container-fluid mb-5">

<!--Grid row-->
<div class="row" style="margin-top: -100px;">

    <!--Grid column-->
    <div class="col-md-12">

        <div class="card pb-5">
            <div class="card-body">

                <div class="container">
                    {{-- contact form Start --}}
                    @include('pages.contact_Form')
                    {{-- contact form End --}}
                </div>
            </div>

        </div>

    </div>


</div>

</div>

</main>





<br>
<br>

{{-- quotes --}}
@include('pages.quote')
{{-- end quotes --}}

@endsection