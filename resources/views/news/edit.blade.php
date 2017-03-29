@extends('layout_part.layout')
@include('layout_part.errors')
@section('content')

    @if($flash = session('message'))
        <div class="alert alert-success col-lg-8 col-lg-offset-2">
            {{$flash}}
        </div>
    @elseif($flash = session('messages'))
        <div class=" info info-success col-lg-8 col-lg-offset-2">
            {{$flash}}
        </div>
    @endif

    <form action="/moderator/news/update" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset> {{csrf_field()}}

            <input type="hidden" name="id" value="{{$news->id}}">
            <legend>редактировать  новость или акцию</legend>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-title">Название Акции</label>
                <div class="col-md-8 col-sm-10">
                    <input name="title" id="input-name" class="form-control" type="text" placeholder="{{$news->title}}">
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-alias">Alias</label>
                <div class="col-md-8 col-sm-10">
                    <input name="alias" id="input-alias" class="form-control" type="text" placeholder="{{$news->alias}}">
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-file">Выберите изображение </label>
                <div class="col-md-8 col-sm-10">
                    <div class="file-upload" data-text="Выберите изображение">
                        <p><input type="file" name="file" accept="image/*,image/jpeg">
                    </div>
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-body">Полный текст </label>
                <div class="col-md-8 col-sm-10">
                    <textarea name="body" rows="5" id="input-body" class="form-control" placeholder="{{$news->body}}"></textarea>
                </div>
            </div>
            <div class="form-group required">
                <div class="buttons col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-angle-right"></i>
                        Добавить новость или акцию
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
    </div>
@endsection