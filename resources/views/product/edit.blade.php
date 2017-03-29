@extends('layout_part.layout')

@section('content')

@include('layout_part.errors')

<div class="row">
    <div class="col-lg-12">
        @if($flash = session('message'))
            <div class="alert alert-success col-lg-8 col-lg-offset-2">
                {{$flash}}
            </div>
        @elseif($flash = session('messages'))
            <div class=" info info-success col-lg-8 col-lg-offset-2">
                {{$flash}}
            </div>
        @endif
    </div></div>
<fieldset>
<legend>Обложка товара </legend>
<div class="image col-sm-offset-5" >
    <a href="news/{{$product->alias}}">
        <img src="{{$product->img}}" alt="{{$product->title}}"
                                        style="position: center;"
                                        title="{{$product->title}}" class="img-responsive"></a>

</div>
    </fieldset>
    <form action="/moderator/product/update/{{$product->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
    <fieldset> {{csrf_field()}}
        <legend>Редактирование краткой информации  </legend>
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-title">Название товара</label>
            <div class="col-md-8 col-sm-10">
                <input name="title" id="input-name" class="form-control" type="text" placeholder="{{$product->title}}">
            </div>
        </div>
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-alias">Alias</label>
            <div class="col-md-8 col-sm-10">
                <input name="alias" id="input-alias" class="form-control" type="text" placeholder="{{$product->alias}}">
            </div>
        </div>

        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-price">Цена</label>
            <div class="col-md-8 col-sm-10">
                <input name="price" id="input-price" class="form-control" type="text" placeholder="{{$product->price}}">
            </div>
        </div>

        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-file">Главное изображение </label>
            <div class="col-md-8 col-sm-10">
                <div class="file-upload" data-text="Выберите изображение">
                    <p><input type="file" name="file" accept="image/*,image/jpeg">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-description">Описание товара </label>
            <div class="col-md-8 col-sm-10">
                <textarea name="description" rows="5" id="input-description" class="form-control" placeholder="{{$product->description}}"></textarea>
            </div>
        </div>
        <div class="form-group required">
            <div class="buttons col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><i class="fa fa-angle-right "></i><i class="fa fa-angle-right "></i>
                    сохранить изменения
                </button>
            </div>
        </div>
    </fieldset>
</form>
</div>



@endsection