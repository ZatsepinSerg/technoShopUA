@extends('layout_part.layout')

@section('content')

@include('layout_part.navBar')

    @if($flash = session('message'))
        <div class="alert alert-success col-lg-8 col-lg-offset-2">
            {{$flash}}
        </div>
    @elseif($flash = session('messages'))
        <div class=" info info-success col-lg-8 col-lg-offset-2">
            {{$flash}}
        </div>
    @endif
    <div id="content" class="col-sm-9">

        <ul class="breadcrumb text-center" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/"><span
                            itemprop="name"><i class="fa fa-home"></i></span></a>
                <meta itemprop="position" content="1">
            </li>
            <li class="active">Телефоны</li>
        </ul>
        <h1 class="h2 text-center content-title">Товары</h1>
        <div class="row limits">
            <div class="col-xs-12 text-center">
                <div class="btn-group text-left">
                    <div class="btn-group btn-group-sm dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Сортировка<i class="fa fa-fw fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" id="input-sort">
                            <li class="active"><a href="/product/{{$category}}/select/default/DESC" rel="nofollow">По умолчанию</a></li>
                            <li><a href="/product/{{$category}}/select/title/ASC" rel="nofollow">Название (А - Я)</a></li>
                            <li><a href="/product/{{$category}}/select/title/DESC" rel="nofollow">Название (Я - А)</a></li>
                            <li><a href="/product/{{$category}}/select/price/ASC" rel="nofollow">Цена (низкая &gt; высокая)</a></li>
                            <li><a href="/product/{{$category}}/select/price/DESC" rel="nofollow">Цена (высокая &gt; низкая)</a></li>
                            <li><a href="/product/{{$category}}/select/rating/ASC" rel="nofollow">Рейтинг (начиная с высокого)</a></li>
                            <li><a href="/product/{{$category}}/select/rating/DESC" rel="nofollow">Рейтинг (начиная с низкого)</a></li>
                            <li><a href="/product/{{$category}}/select/alias/ASC" rel="nofollow">Модель (А - Я)</a></li>
                            <li><a href="/product/{{$category}}/select/alias/DESC" rel="nofollow">Модель (Я - А)</a></li>
                        </ul>
                    </div>
                    <button type="button" id="list-view" class="btn btn-default btn-sm  hidden-xxs"
                            data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title=""
                            data-original-title="Список"><i class="fa fa-list"></i></button>
                    <button type="button" id="grid-view" class="btn btn-default btn-sm active hidden-xxs"
                            data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title=""
                            data-original-title="Сетка"><i class="fa fa-th"></i></button>
                    <div class="btn-group btn-group-sm limit-btn-group dropdown">
                        <ul class="dropdown-menu" id="input-limit" style="margin-left: -51px;">
                            <li><a href="/product/{{$category}}/select/count/25" rel="nofollow">
                                    <small>25</small>
                                </a></li>
                            <li><a href="/product/{{$category}}/select/count/50" rel="nofollow">
                                    <small>50</small>
                                </a></li>
                            <li class="active"><a href="/product/{{$category}}/select/count/60" rel="nofollow">
                                    <small>60</small>
                                </a></li>
                            <li><a href="/product/{{$category}}/select/count/75" rel="nofollow">
                                    <small>75</small>
                                </a></li>
                            <li><a href="/product/{{$category}}/select/count/100" rel="nofollow">
                                    <small>100</small>
                                </a></li>
                        </ul>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-arrows-v hidden-md hidden-lg"></i> <span class="hidden-xs hidden-sm">Показать: </span>60<i
                                    class="fa fa-fw fa-angle-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row products" itemscope="" itemtype="http://schema.org/ItemList">
            @foreach($products as $product)
                <div class="product-layout product-grid" itemscope="" itemtype="http://schema.org/Product"
                     itemprop="itemListElement">
                    <meta itemprop="name" content="{{$product->title}}">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="/product/{{$product->alias}}"><img src="{{$product->img}}" alt="{{$product->title}}"
                                                                        title="{{$product->title}}"
                                                                        class="img-responsive"
                                                                        itemprop="image"></a>
                        </div>
                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="RUB">
                            <meta itemprop="price" content="{{$product->price}}">
                            <link itemprop="availability" href="http://schema.org/InStock">
                            <div class="caption">
                                <a href="/product/{{$product->alias}}" itemprop="url">{{$product->title}}</a>
                            </div>
                            <div class="btn-group btn-group-sm">
                                <button type="button" data-toggle="tooltip" data-html="true" data-placement="bottom"
                                        title="" class="btn btn-primary" onclick="cart.add('265', '1');"
                                        data-original-title="Купить"><i class="fa fa-fw fa-shopping-cart"></i> <span
                                            class="price">{{$product->price}}</span></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="bottom" title="" onclick="wishlist.add('265');"
                                        data-original-title="В закладки"><i class="fa fa-fw fa-heart"></i></button>
                            </div>
                            <div class="additional"><span
                                        class="stock instock"><!--Наличие:--> <span>Есть в наличии</span></span></div>
                            <div class="description" itemprop="description">{{$product->description}}</div>
                        </div>
                    </div>
                </div>

            @endforeach
            <div class="col-md-10">
                <div class="col-sm-offset-6 ">
                    {{ $products ->render()}}
                </div>
            </div>


        </div>
    </div>
    </div>

@stop