@extends('layouts.frontend.master')

@section('title', 'Home')

@push('css')

@endpush

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section full-screen bg-cover" style="padding-top:0px; padding-bottom:0px; background-image:url({{asset('assets/frontend/images/burger2-gallery-main-bg.jpg')}}); background-repeat:no-repeat; background-position:center bottom">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-sixth column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h1 style="color:#ddcfbc">Spicy or not?
                                                <br> Whith cheese or bacon?
                                                <br> Select your burger</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section dark" style="padding-top:0px; padding-bottom:200px; background-color:#120905">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-100px" data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_slider">
                                        <div class="content_slider flat hide-dots">
                                            <ul class="content_slider_ul">
                                                <li>
                                                    <img src="{{asset('assets/frontend/images/burger2-gallery-image2.jpg')}}" class="scale-with-grid wp-post-image">
                                                </li>
                                                <li>
                                                    <img src="{{asset('assets/frontend/images/burger2-gallery-image3.jpg')}}" class="scale-with-grid wp-post-image">
                                                </li>
                                                <li>
                                                    <img src="{{asset('assets/frontend/images/burger2-gallery-image4.jpg')}}" class="scale-with-grid wp-post-image">
                                                </li>
                                                <li>
                                                    <img src="{{asset('assets/frontend/images/burger2-gallery-image1.jpg')}}" class="scale-with-grid wp-post-image">
                                                </li>
                                            </ul>
                                            <div class="slider_pager slider_pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-decoration bottom" style="background-image:url(images/burger2-footer-top-bg.png);height:109px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

