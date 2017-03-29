@extends('layout')
@section('content')
    <div id="content" class="col-sm-9">


        <script type="text/javascript"><!--
            $('head').append('<style type="text/css"> #moneymaker2_slideshow0 { overflow: hidden; } @media (min-width: 320px) { #moneymaker2_slideshow0, #moneymaker2_slideshow0 .owl-item .item { height: 175px; } } @media (min-width: 450px) { #moneymaker2_slideshow0, #moneymaker2_slideshow0 .owl-item .item { height: 235px; } } @media (min-width: 560px) { #moneymaker2_slideshow0, #moneymaker2_slideshow0 .owl-item .item { height: 275px; } } @media (min-width: 768px) { #moneymaker2_slideshow0, #moneymaker2_slideshow0 .owl-item .item { height: 340px; } } @media (min-width: 992px) { #moneymaker2_slideshow0, #moneymaker2_slideshow0 .owl-item .item { height: 415px; } } @media (min-width: 1200px) { #moneymaker2_slideshow0, #moneymaker2_slideshow0 .owl-item .item { height: 430px; } } </style>');

            $('#moneymaker2_slideshow0').detach().insertAfter( $('body header') );
            $('#moneymaker2_slideshow0').addClass('owl-moneymaker2-top');
            $('body').addClass('owl-moneymaker2-fullscreen owl-moneymaker2-fullscreen-dark');

            $('#moneymaker2_slideshow0').owlCarousel({
                itemsCustom : [[0, 1], [768, 1], [992, 1], [1200, 1]],
                transitionStyle : 'fadeUp',
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],
                pagination: false,
            });
            $(window).scroll(function () {
                if ($('.hidden-xs').is(":visible")) {
                    var wScroll = $(this).scrollTop();
                    wScroll = (wScroll * 0.1 * 3) - 1;
                    if (wScroll<($("#moneymaker2_slideshow0 .item img").height()-$( "#moneymaker2_slideshow0" ).height())) {
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-webkit-transform', 'translate(0px, -' + wScroll + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-moz-transform', 'translate(0px, -' + wScroll + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-ms-transform', 'translate(0px, -' + wScroll + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-o-transform', 'translate(0px, -' + wScroll + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('transform', 'translate(0px, -' + wScroll + 'px)');
                    } else {
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-webkit-transform', 'translate(0px, -' + ($( "#moneymaker2_slideshow0 .item img" ).height()-$( "#moneymaker2_slideshow0" ).height()-1) + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-moz-transform', 'translate(0px, -' + ($( "#moneymaker2_slideshow0 .item img" ).height()-$( "#moneymaker2_slideshow0" ).height()-1) + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-ms-transform', 'translate(0px, -' + ($( "#moneymaker2_slideshow0 .item img" ).height()-$( "#moneymaker2_slideshow0" ).height()-1) + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('-o-transform', 'translate(0px, -' + ($( "#moneymaker2_slideshow0 .item img" ).height()-$( "#moneymaker2_slideshow0" ).height()-1) + 'px)');
                        $('#moneymaker2_slideshow0 .owl-wrapper-outer img').css('transform', 'translate(0px, -' + ($( "#moneymaker2_slideshow0 .item img" ).height()-$( "#moneymaker2_slideshow0" ).height()-1) + 'px)');
                    }


                }
            });
            //--></script>
        <div class="row">
            <div class="col-lg-12 col-lg-12">
                <div class="product-thumb">
                    <p>
                    <h2>{{$action->title}}</h2></p>
                    <div class="image">
                        <img src="{{$action->img}}" alt=""
                             class="img-responsive">
                    </div>
                    <div class="col-lg-12">
                    <p>{{$action->body}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop