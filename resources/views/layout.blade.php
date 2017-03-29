<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Starter Template for Bootstrap</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Zatsepin" content="IE=edge">
    <title>TehnoShopUA - электроники</title>
    <!-- base href="http://TehnoShopUA.com/" -->
    <meta name="description" content="Продажа мобильных телефонов , гаджетов и электроники нового поколения">
    <meta name="keywords"
          content="Сотовые телефоны, Запчасти и аксессуары для сотовых телефонов Nokia, Samsung, LG, iPhone, КПК HTC, HP, ASUS, ноутбуков, фотоаппаратов, PSP, Дисплеи, Шлейфы, АКБ, СЗУ, АЗУ, УЗУ, Корпуса, панели, Клавиатуры, Динамики.">

    <link href="/css/index/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/css/index/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/index/fonts.css" rel="stylesheet">
    <!-- mmr2 2.0.5 oc -->
    <link href="/css/index/stylesheet.css" rel="stylesheet">
    <link href="/css/index/stylesheet_002.css" rel="stylesheet">
    <link href="/css/index/owl_002.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/css/index/owl.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/css/index/owl_003.css" type="text/css" rel="stylesheet" media="screen">

    <script type="text/javascript" async="" src="/js/index/watch.js"></script>
    <script src="/js/index/jquery-2.js" type="text/javascript"></script>
    <script src="/js/index/bootstrap.js" type="text/javascript"></script>
    <script src="/js/index/common.js" type="text/javascript"></script>
   <!-- <script type="text/javascript" src="/js/index/livesearch.js"></script>-->
    <link href="/images/logo.png" rel="icon">
    <script src="/js/index/owl.js" type="text/javascript"></script>

</head>
<body class="common-home owl-moneymaker2-fullscreen owl-moneymaker2-fullscreen-dark">
@include('layout_part.menu')
@include('layout_part.carousel')

@if($flash = session('message'))
    <div class="alert alert-success col-lg-8 col-lg-offset-2">
        {{$flash}}
    </div>
@elseif($flash = session('messages'))
    <div class=" info info-success col-lg-8 col-lg-offset-2">
        {{$flash}}
    </div>
    @endif
@include('layout_part.navBar')
@yield('content')
@include('layout_part.footer')
</body>
</html>