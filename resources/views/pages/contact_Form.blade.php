<section class="section">

    <!--Section heading-->
    <h2 class="font-weight-bold text-center h1 my-5">Contact us</h2>
    <!--Section description-->
    @include('layouts.partials.backend.msg')

    <div class="row pt-5">

        <!--Grid column-->
        <div class="col-md-12">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <label for="contact-name"  class="">Your name</label>
                            <input type="text" id="contact-name" class="form-control" name="name" required="required">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <label for="contact-email"  class="">Your email</label>
                            <input type="text" id="contact-email" class="form-control" required="required" name="email">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="contact-Subject" class="">Subject</label>
                            <input type="text" id="contact-Subject" class="form-control" required="required" name="subject" >
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="contact-message"  >Your message</label>
                            <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3" required="required" name="message"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <div class="text-center text-md-left my-4">
                    <button class="mt-auto btn btn-info">Send</button>
                </div>
            </form>
        </div>


    </div>

</section>