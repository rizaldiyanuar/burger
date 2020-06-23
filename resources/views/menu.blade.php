@extends('layouts.frontend.master')

@section('title', 'Home')

@push('css')

@endpush

@section('content')
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section full-screen bg-cover" style="padding-top:0px; padding-bottom:0px; background-image:url({{asset('assets/frontend/images/burger2-menu-mainbg.jpg')}}); background-repeat:no-repeat; background-position:center">
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
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-70px" data-mobile="no-up">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-menu-cow-icon.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-10px">
                                    <div class="column_attr clearfix align_center">
                                        <h6>BURGERS</h6>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-menu-burger.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid stretch no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-menu-promotion.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Lorem ipsum Burger</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$23</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style="border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Qurioto de la passum Burger</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$26</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v  " style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Postre ventenoro Burger</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$32</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v  " style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Quantum es omnia Burger</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$24</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:125px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-10px">
                                    <div class="column_attr clearfix align_center">
                                        <h6>SANDWICHES</h6>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-menu-sandwich.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Praesent porta tortor</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$27</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Donec lacinia velit ac</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$14</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Maecenas ac eros</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$19</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v  " style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Sed et justo id urna</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$25</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:125px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-10px">
                                    <div class="column_attr clearfix align_center">
                                        <h6>DRINKS</h6>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-menu-beer.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Pellentesque feugiat</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$11</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Maecenas convallis</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$9</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Vestibulum laoreet</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$6</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:200px">
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
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:20px 0 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix mobile_align_center">
                                        <h4>Nulla volutpat orci</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_right mobile_align_center">
                                        <h4 class="themecolor">$5</h4>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                        <p>
                                            Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condim, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                        </p>
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

