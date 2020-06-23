Contact
@extends('layouts.frontend.master')

@section('title', 'Home')

@push('css')

@endpush

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section bg-cover" style="padding-top:250px; padding-bottom:75px; background-color:#120905; background-image:url({{asset('assets/frontend/images/burger2-contact-main-bg.jpg')}}); background-repeat:no-repeat; background-position:center top">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h1 style="color:#ddcfbc">Spicy or not?
                                                <br> Whith cheese or bacon?
                                                <br> Select your burger</h1>
                                            <hr class="no_line" style="margin:0 auto 50px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-sixth  valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-fourth column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid no_border" style="margin-top:8px;">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-contact-green-line.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column three-fourth column_column">
                                        <div class="column_attr clearfix">
                                            <p class="themecolor">
                                                <b>Contact</b>
                                            </p>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <p style="color:#fff">
                                                +55 434 545 656
                                                <br>
                                                <a href="#">noreply@envato.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-fourth column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid no_border" style="margin-top:8px">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-contact-green-line.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column three-fourth column_column">
                                        <div class="column_attr clearfix">
                                            <p class="themecolor">
                                                <b>Address</b>
                                            </p>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <p style="color:#fff">
                                                Cecilia Chapman
                                                <br> 711-2880 Nulla St.
                                                <br> Mankato Mississippi 96522
                                                <br> (257) 563-7401
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-fourth column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border" style="margin-top:8px">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-contact-green-line.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column three-fourth column_column">
                                        <div class="column_attr clearfix">
                                            <p class="themecolor">
                                                <b>Company info</b>
                                            </p>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <p style="color:#fff">
                                                NIP EU243043434
                                                <br> ID 2332222324
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:175px; background-color:#000; background-image:url({{asset('assets/frontend/images/burger2-contact-content-bg3.jpg')}}); background-repeat:no-repeat; background-position:center top">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one-sixth  valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap two-third valign-top move-up clearfix" style="padding:50px 5% 10px; margin-top:-30px; background-image:url({{asset('assets/frontend/images/burger2-contact-form-bg.jpg')}}); background-repeat:no-repeat; background-position:right bottom" data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h5>LOREM IPSUM DOLOR SIT AMET</h5>
                                            <h3>Want to book a table or be our partner?
                                                <br> Send us a message</h3>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <div id="contactWrapper">
                                                <form id="contactform">
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                    </div>
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                    </div>
                                                    <div class="column one">
                                                        <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                    </div>
                                                    <div class="column one">
                                                        <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                    </div>
                                                    <div class="column one">
                                                        <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-fourth column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr clearfix">
                                            <hr class="no_line" style="margin:0 auto 40px">
                                            <p class="big">
                                                Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio quantum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-decoration bottom" style="background-image:url({{asset('assets/frontend/images/burger2-footer-top-bg.png')}});height:109px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

