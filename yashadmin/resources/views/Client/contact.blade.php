@extends('Client.header-footer')
@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
    </div>

    <div data-aos="fade-up">
        <!-- <iframe style="border:0; width: 100%; height: 350px;"
                src="https://maps.google.com/maps?q=Shop%20no%2001,%20Ground%20Floor,%20daulat%20Apartment%20co%20op%20%20Hsg%20Ltd,%20Rahmat%20Nagar,%20Behind%20Sitara%20Bakery,%20Virar%20%20Road,%20Nallasopara(East),%20Palghar%20Zone%202,%20%20Maharashtra-401209&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" allowfullscreen></iframe> -->

        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5979667625556!2d72.8205223153873!3d19.429769145804823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a96be55c7793%3A0x654cca538b53d02b!2sSitara%20Bakery!5e0!3m2!1sen!2sin!4v1622018759805!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>Yash KE PUNCAK SDN BHD
                            Shop no 01, Ground Floor, daulat Apartment co op Hsg Ltd, Rahmat Nagar, Behind Sitara Bakery, Virar Road, Nallasopara(East), Palghar Zone 2, Maharashtra-401209</p>
                    </div>

                    <div class="open-hours">
                        <i class="icofont-clock-time icofont-rotate-90"></i>
                        <h4>Open Hours:</h4>
                        <p>
                            Monday-Saturday:<br>
                            Mon - Fri: 9AM - 6PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>dhirengarsondiya@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 9081139039</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                @if(Session::has('message'))
                <div class="alert alert-success">
                    <i class="fa-lg fa fa-warning"></i>
                    {!! session('message') !!}
                </div>
                @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    <i class="fa-lg fa fa-warning"></i>
                    {!! session('error') !!}
                </div>
                @endif
                <form action="{{ url('insertcontact')}}" method="post" role="form" class="php-email-form">
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                        </div>

                        <div class="form-group row">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email " name="email" id="email">
                        </div>

                        <div class="form-group row">
                            <label>Phoneno</label>
                            <input type="text" class="form-control" placeholder="Phoneno" name="phoneno" id="phoneno">
                            <p id="price_validation"></p>
                        </div>

                        <div class="form-group row">
                            <label>Message</label>
                            <textarea class="form-control" name="message" id="message" rows="2"></textarea>
                        </div>


                        <div class="cm_form_button">
                        <input type="submit" class="btn btn-success" value="save" name="submitbutton">
                                            </div>
                                        </button>
                                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->



@endsection
