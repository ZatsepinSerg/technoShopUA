@extends('layout_part.layout')
@section('content')
    @include('layout_part.errors')

    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-9">
                <ul class="breadcrumb text-center">
                    <li><a href="/"><i class="fa fa-home"></i></a></li>
                    <li><a href="/my-account">Личный Кабинет</a></li>
                    <li class="active">Авторизация</li>  </ul>
                <h1 class="h2 text-center content-title">Авторизация</h1>
                <div class="row catalog-thumb">
                    <div class="col-sm-12 text-center">
          <span class="fa-stack fa-2x img-thumbnail">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
          </span>
                    </div>
                </div>
                <div class="row">
                    <form action="/login" method="post" enctype="multipart/form-data" class="col-sm-12 form-horizontal" role="form">
                        <fieldset>
                            {{csrf_field()}}
                            <legend>Зарегистрированный клиент</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                <div class="col-lg-8 col-sm-10">
                                    <input name="email" placeholder="E-Mail" id="input-email" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-password">Пароль</label>
                                <div class="col-lg-8 col-sm-10">
                                    <input name="password" value="" placeholder="Пароль" id="input-password" class="form-control" type="password">
                                    <a href="/forgot-password"><small>Забыли пароль?</small></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 text-center">
                                    <input value="Войти" class="btn btn-primary" type="submit">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <br>
                <div class="row">
                    <fieldset class="col-sm-12">
                        <legend>Новый клиент</legend>
                        <p>Создание учетной записи поможет покупать быстрее. Вы
                            сможете контролировать состояние заказа, а также просматривать заказы
                            сделанные ранее. Вы сможете накапливать призовые баллы и получать
                            скидочные купоны. <br>А постоянным покупателям мы предлагаем гибкую систему скидок и персональное обслуживание.<br></p>
                        <p class="text-center"><a class="btn btn-sm btn-default" href="/register">Регистрация</a></p>
                    </fieldset>
                </div>
            </div>
            @include('layout_part.userBar')
        </div>
    </div>

    <script type="text/javascript"><!--
        $(document).ready(function() {
        });
        //--></script>
@endsection