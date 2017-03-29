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
        <p class="h2">Предложения и акции </p>
        <div class="row">
            @foreach($news AS $new)
                <div class="col-lg-12 col-lg-12">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="news/{{$new->alias}}"><img src="{{$new->img}}" alt="{{$new->title}}"
                                                                style="width: 700px; height: 465px;"
                                                                title="{{$new->title}}" class="img-responsive"></a>
                            <a href="news/{{$new->alias}}">{{$new->title}}</a>
                            <div class="col-lg-6">
                                <form method="post" action="/moderator/news/destroy/{{$new->id}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger" value="удалить">
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form method="get" action="/moderator/news/{{$new->id}}">
                                    {{csrf_field()}}
                                    <input type="submit" class="btn btn-warning" value="редактировать">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-10">
        <div class="col-sm-offset-6 ">
            {{ $news ->render()}}
        </div>
    </div>
    </div>








@stop