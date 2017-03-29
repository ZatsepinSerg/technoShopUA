@extends('layout_part.layout')
@section('content')
    @include('layout_part.errors')
    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-9">
                <ul class="breadcrumb text-center">
                    <li><a href="/"><i class="fa fa-home"></i></a></li>
                    <li><a href="/my-account">Личный Кабинет</a></li>
                    <li class="active">Регистрация</li>
                </ul>
                <h1 class="h2 text-center content-title">Регистрация</h1>
                <div class="row catalog-thumb">
                    <div class="col-sm-12 text-center">
          <span class="fa-stack fa-2x img-thumbnail">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
          </span>
                    </div>
                </div>
                <div class="row catalog-descr">
                    <div class="col-sm-12 text-center">
                        <div>
                            <p>Если Вы уже зарегистрированы, перейдите на страницу <a href="/login">авторизации</a>.</p>
                        </div>
                    </div>
                </div>
                <hr class="catalog-hr">
                <br>
                <form action="/register" method="post"  class="form-horizontal">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>Основные данные</legend>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Имя</label>
                            <div class="col-sm-10">
                                <input name="name" placeholder="Имя" id="input-firstname" class="form-control"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input name="email" placeholder="E-Mail" id="input-email" class="form-control"
                                       type="email">
                            </div>
                        </div>
                        <legend>Ваш пароль</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Пароль</label>
                            <div class="col-sm-10">
                                <input name="password" value="" placeholder="Пароль" id="input-password"
                                       class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Подтверждение пароля</label>
                            <div class="col-sm-10">
                                <input name="password_confirmation" value="" placeholder="Подтверждение пароля" id="input-confirm"
                                       class="form-control" type="password">
                            </div>
                        </div>

                    <div class="form-group required">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="buttons">
                                <div>
                                    <input value="Продолжить" class="btn btn-primary" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                        </fieldset>
                </form>

            </div>
            @include('layout_part.userBar')
        </div>
    </div>


@endsection