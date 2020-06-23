@extends('layouts.frontend.master')

@section('title', 'Home')

@push('css')

@endpush

@section('content')
<div class="mfn-main-slider" id="mfn-rev-slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#1f1110;padding:0px;">
        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
            <ul>
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-delay="2000" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('assets/frontend/images/burger2-slider-bg-dark.jpg')}}" title="burger2-slider-bg-dark" width="1920" height="1070" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":2970,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="{{asset('assets/frontend/images/burger2_slider_burger1.png')}}" data-ww="450px" data-hh="331px" width="565" height="415" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1620,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"+190","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 75px; line-height: 80px; font-weight: 300; color: #f4f4f4; letter-spacing: 0px;font-family:Montserrat;">
                        Discover the <b style="font-size:76px">real</b> taste
                    </div>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-1-layer-3" data-x="677" data-y="441" data-width="['161']" data-height="['12']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":530,"speed":1100,"frame":"0","from":"y:15px;opacity:0;","to":"o:1;rZ:356;","ease":"Power4.easeOut"},{"delay":"+190","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(244,244,244);"></div>
                </li>
                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="default" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Slide"
                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('assets/frontend/images/burger2-slider-bg.jpg')}}" title="burger2-slider-bg" width="1920" height="1070" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-2" data-x="center" data-hoffset="-226" data-y="center" data-voffset="-171" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image"
                        data-responsive_offset="on" data-frames='[{"delay":1310,"speed":1610,"frame":"0","from":"x:20px;y:20px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="{{asset('assets/frontend/images/burger2-slider-B.png')}}" data-ww="100px" data-hh="110px" width="126" height="139" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-3" data-x="center" data-hoffset="15" data-y="center" data-voffset="-189" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image"
                        data-responsive_offset="on" data-frames='[{"delay":1350,"speed":1830,"frame":"0","from":"y:20px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;"><img src="{{asset('assets/frontend/images/burger2-slider-U.png')}}" data-ww="100px" data-hh="109px" width="124" height="135" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-4" data-x="center" data-hoffset="241" data-y="center" data-voffset="-160" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image"
                        data-responsive_offset="on" data-frames='[{"delay":1430,"speed":2190,"frame":"0","from":"x:-20px;y:20px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;"><img src="{{asset('assets/frontend/images/burger2-slider-3R.png')}}" data-ww="100px" data-hh="117px" width="155" height="182" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-5" data-x="center" data-hoffset="-226" data-y="center" data-voffset="132" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image"
                        data-responsive_offset="on" data-frames='[{"delay":1560,"speed":2210,"frame":"0","from":"x:20px;y:-20px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;"><img src="{{asset('assets/frontend/images/burger2-slider-G.png')}}" data-ww="120px" data-hh="120px" width="170" height="170" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-7" data-x="center" data-hoffset="258" data-y="center" data-voffset="116" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image"
                        data-responsive_offset="on" data-frames='[{"delay":1820,"speed":2280,"frame":"0","from":"x:-20px;y:-20px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;"><img src="{{asset('assets/frontend/images/burger2-slider-6R.png')}}" data-ww="100px" data-hh="106px" width="129" height="137" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;"><img src="{{asset('assets/frontend/images/burger2_slider_burger2.png')}}" data-ww="450px" data-hh="330px" width="567" height="416" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-2-layer-6" data-x="center" data-hoffset="32" data-y="center" data-voffset="181" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image"
                        data-responsive_offset="on" data-frames='[{"delay":1710,"speed":2120,"frame":"0","from":"y:20px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;"><img src="{{asset('assets/frontend/images/burger2-slider-E.png')}}" data-ww="100px" data-hh="121px" width="146" height="177" data-no-retina>
                    </div>
                    <div class="tp-caption   tp-resizeme" id="slide-2-layer-8" data-x="center" data-hoffset="" data-y="bottom" data-voffset="29" data-width="['auto']" data-height="['auto']" data-type="text" data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"100","speed":"800","ease":"Linear.easeNone"}]'
                        data-responsive_offset="on" data-frames='[{"delay":10,"speed":1110,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #f4f4f4; letter-spacing: 0px;font-family:Montserrat;cursor:pointer;">
                        Discover more
                    </div>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-2-layer-9" data-x="center" data-hoffset="45" data-y="center" data-voffset="374" data-width="['52']" data-height="['2']" data-type="shape"
                        data-responsive_offset="on" data-frames='[{"delay":10,"speed":1110,"frame":"0","from":"y:3px;opacity:0;","to":"o:1;rZ:358;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgb(244,244,244);"></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section bg-cover" style="padding-top:150px; padding-bottom:125px; background-image:url({{asset('assets/frontend/images/burger2_section2_bg.jpg')}}); background-repeat:no-repeat; background-position:left bottom">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-second valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <h5>LOREM IPSUM DOLOR MIT SAMET</h5>
                                        <h2>Since 1984. We believe that
                                            <br>
                                            <b>healthy food</b> is tasty.</h2>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <p class="big">
                                            Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo continuer. dolor in reprehenderit in voluptate
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column three-fifth column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-singnature.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-h no-margin-v equal-height-wrap full-width" style="padding-top:0px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-second valign-middle move-up clearfix" style="margin-top:-30px" data-mobile="no-up">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image burger2-shadow">
                                    <div class="image_frame image_item no_link scale-with-grid no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-slider-slide1.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:40px 4%">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column four-fifth column_column">
                                    <div class="column_attr clearfix">
                                        <h5>QUALITY AND TASTE.</h5>
                                        <h2>Classic burger taste.
                                            <br> Modern restaurant.</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid no_border" style="margin-top:30px;margin-bottom:30px">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-ingredients.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column five-sixth column_column">
                                    <div class="column_attr clearfix">
                                        <p class="big">
                                            Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:75px; padding-bottom:50px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-cow-icon.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-sixth column_placeholder">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="column mcb-column two-third column_column">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Spicy or not? With cheese or bacon?
                                            <br> Select <b>your burger</b></h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" style="margin:0 auto 50px">
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-burger1.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_center" style=" padding:0 5%;">
                                        <h3><b>Bacon and salad Sandwich</b></h3>
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border" style="margin-bottom:20px;">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-divider.png')}}">
                                            </div>
                                        </div>
                                        <p>
                                            <b>Aliquam ac dui vel dui vulputate consectetur ipsum vent</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-burger2.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_center" style=" padding:0 5%;">
                                        <h3><b>Double Cheese
                                            <br>
                                            Burger</b></h3>
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border" style="margin-bottom:20px;">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-divider.png')}}">
                                            </div>
                                        </div>
                                        <p>
                                            <b>Aliquam ac dui vel dui vulputate consectetur ipsum vent</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-burger3.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_center" style=" padding:0 5%;">
                                        <h3><b>Grand Beef
                                            <br>
                                            Burger</b></h3>
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border" style="margin-bottom:20px;">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-divider.png')}}">
                                            </div>
                                        </div>
                                        <p>
                                            <b>Aliquam ac dui vel dui vulputate consectetur ipsum vent</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-v dark" style="padding-top:0px; padding-bottom:50px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix" style="padding:30px 50px; background-image:url({{asset('assets/frontend/images/burger2-home-greenbg.png')}}); background-repeat:repeat; background-position:left top">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column three-fourth column_column">
                                    <div class="column_attr clearfix" style=" background-image:url('{{asset('assets/frontend/images/burger2-home-phone-icon.png')}}'); background-repeat:no-repeat; background-position:left center; padding:15px 0 15px 70px;">
                                        <h3 style="margin-bottom:0;">Order by phone <b>+54 488 695 239</b></h3>
                                        <p style="margin-bottom:0;">
                                            Mon - Fri: 12:00 - 22:00, Sat: 12:00 - 24:00
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one-fourth column_column">
                                    <div class="column_attr clearfix">
                                        <hr class="no_line" style="margin:0 auto 20px">
                                        <a class="button button_full_width button_size_3 button_js" href="content/burger2/contact.html" style=" background-color:#fff !important; color:#4ea121;"><span class="button_label">Visit us locally</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:50px; padding-bottom:150px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{asset('assets/frontend/images/burger2-home-promotion-larger.png')}}">
                                        </div>
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

