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
        <p class="h2">Рекомендуемые</p>
        <div class="row">
            @foreach($news AS $new)
                <div class="product-layout product-grid">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product/{{$new->alias}}"><img src="{{$new->img}}" alt="{{$new->title}}"
                                                                   title="{{$new->title}}" class="img-responsive"></a>
                        </div>
                        <div>
                            <div class="caption">
                                <a href="product/{{$new->alias}}">{{$new->title}}</a>
                            </div>
                            <div class="btn-group btn-group-sm">
                                <button type="button" data-toggle="tooltip" data-html="true" data-placement="bottom"
                                        title="" class="btn btn-primary" onclick="cart.add('265');"
                                        data-original-title="Купить"><i class="fa fa-fw fa-shopping-cart"></i> <span
                                            class="price">NULL</span></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="bottom" title="" onclick="wishlist.add('265');"
                                        data-original-title="В закладки"><i class="fa fa-fw fa-heart"></i></button>
                            </div>
                            <div class="additional"></div>
                        </div>
                    </div>
                    </div>

                </div>
            @endforeach
        </div>

   </div>
   </div>







@stop