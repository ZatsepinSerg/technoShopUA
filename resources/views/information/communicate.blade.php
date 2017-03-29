@extends('information.layout')

@section('content')

    <div class="container">
        <div class="row">                <div id="content" class="col-sm-12">      <ul class="breadcrumb text-center">
                    <li><a href="http://shop"><i class="fa fa-home"></i></a></li>                <li class="active">Обратная связь</li>              </ul>
                <h1 class="h2 text-center content-title">Обратная связь</h1>
                <div class="row catalog-thumb">
                    <div class="col-sm-12 text-center">
          <span class="fa-stack fa-2x img-thumbnail">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
          </span>
                    </div>
                </div>@foreach($communicates AS $communicate)
                <div class="row catalog-sub">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <a class="btn btn-sm btn-link" href="tel:{{$communicate->telephone}}">Позвонить нам</a>
                            <a class="btn btn-sm btn-link" href="{{$communicate->googlLocation}}">Отправить email</a>
                            <a class="btn btn-sm btn-link" href="{{$communicate->googlLocation}}" target="_blank">Посмотреть карту</a>
                        </div>
                    </div>
                </div>
                <hr class="catalog-hr">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Телефон</h3>
                        <p>
                            <i class="fa fa-fw fa-phone"></i> {{$communicate->telephone}}                     </p>
                        <h3>Адрес</h3>
                        <p>
                            <a href="{{$communicate->googlLocation}}" data-toggle="tooltip" title="" target="_blank" data-original-title="Посмотреть карту"><i class="fa fa-fw fa-map-marker"></i> {{$communicate->location}}</a>
                        </p>
                        <p class="hidden"><br><i class="fa fa-fw fa-envelope-o"></i> consultate@yandex.ru</p>
                    </div>
                    <div class="col-sm-6">
                        <h3>Режим работы</h3>
                        <p><i class="fa fa-fw fa-clock-o"></i> {{$communicate->workingHours}}</p>
                        <h3>Дополнительная информация</h3>
                        <p><a class="btn btn-sm btn-link" href="{{$communicate->details}}" target="_blank">Сайт портфолио </a></p>
                    </div>
                </div>
                @endforeach
                @include('layout_part.errors')

                <form action="/communicate" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset> {{csrf_field()}}
                        <legend>Написать нам</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name">Ваше имя</label>
                            <div class="col-md-8 col-sm-10">
                                <input name="name" id="input-name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">Ваш E-Mail</label>
                            <div class="col-md-8 col-sm-10">
                                <input name="email" id="input-email" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-enquiry">Ваш вопрос или сообщение</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="body" rows="1" id="input-enquiry" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group required">
                            <div class="buttons col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-angle-right"></i>
                                    Отправить сообщение
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>



@endsection