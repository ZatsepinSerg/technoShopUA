@extends('layout_part.layout')

@section('content')
    @include('layout_part.navBar')
    <div id="content" class="col-sm-9" itemscope="" itemtype="http://schema.org/Product">
        <ul class="breadcrumb text-center" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/"><span
                            itemprop="name"><i class="fa fa-home"></i></span></a>
                <meta itemprop="position" content="1">
            </li>
            <li class="active">{{$product->title}}</li>
        </ul>
        <div class="h2 text-center content-title">
            <h1 class="h2" itemprop="name">{{$product->title}}</h1>
            <div class="h2">
                <small>({{$product->title}})</small>
            </div>
            <meta itemprop="model" content="{{$product->title}}">
            <meta itemprop="manufacturer" content="{{$product->title}}">
        </div>
        <div class="row">
            <div class=" col-sm-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6 text-center">
                        <div>
                            <div class="thumbnails image-thumb">
                                <a class="thumbnail"
                                   href="{{$product->img}}"
                                   title="{{$product->title}}"><img
                                            src="{{$product->img}}"
                                            title="{{$product->title}}" alt="{{$product->title}}" itemprop="image"></a>
                            </div>
                            <div class="thumbnails image-additional">
                                <div class="owl-carousel owl-moneymaker2 dark-pagination owl-theme"
                                     style="opacity: 1; display: block;">
                                    @foreach($product->image AS $image)
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 656px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 82px;">
                                                <a class="item thumbnail"
                                                   href="{{$image->way}}"
                                                   title="{{$image->title}}"><img
                                                            class="img-circle"
                                                            src="{{$image->way}}"
                                                            title="{{$image->title}}" alt="{{$image->title}}"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-controls clickable" style="display: none;">
                                        <div class="owl-pagination">
                                            <div class="owl-page"><span class=""></span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">

                        <div class="product-points">
                            <div class="stock-7">
                                <span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-2x"></i><i
                                            class="fa fa-adjust fa-stack-1x fa-inverse"></i></span>
                                <h4>Наличие: Есть в наличии</h4>
                                <small class="text-muted">В наличии</small>
                            </div>
                        </div>
                        <div id="product" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="RUB">
                            <meta itemprop="price" content="{{$product->price}}">
                            <link itemprop="availability" href="http://schema.org/InStock">


                            <input name="product_id" value="{{$product->id}}" type="hidden">
                            <div class="btn-group">
                                <button type="button" data-info-title="Купить" id="button-cart" class="btn btn-primary"
                                        data-toggle="tooltip" data-html="true" data-placement="bottom" title=""
                                        data-original-title="Купить"><i
                                            class="fa fa-fw fa-shopping-cart"></i> {{$product->price}}</button>
                                <input data-toggle="tooltip" data-placement="bottom" min="1" name="quantity" value="1"
                                       size="2" id="input-quantity" class="form-control" title=""
                                       data-original-title="Количество" type="number">
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="bottom" title="" onclick="wishlist.add({{$product->price}});"
                                        data-original-title="В закладки"><i class="fa fa-fw fa-heart"></i></button>
                            </div>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#orderModal"
                                    data-order-mode="product" data-order-product-id="{{$product->price}}"
                                    data-order-title="{{$product->title}}"
                                    data-order-img-src="{{$product->img}}"
                                    data-order-price="{{$product->price}}"><span><i class="fa fa-fw fa-send"></i> Быстрый звонок</span>
                            </button>
                            <p>
                                </br><a href="/cart_add/{{$product->alias}}" class="btn btn-success">Добавить в
                                    корзину</a>
                                <a href="/order" class="btn btn-success">Корзина</a>
                            </p>
                            <p>
                                <a href="/moderator/product/edit/{{$product->id}}" class="btn btn-warning">Pедактировать</a>
                            <br>
                            <form action="/moderator/product/destroy/{{$product->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-warning" value="Удалить">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs text-center">
                    <li class="active"><a href="#tab-description" data-toggle="tab">Описание</a></li>
                    <li><a href="#tab-specification" data-toggle="tab">Характеристики</a></li>
                    <li><a href="#tab-review" data-toggle="tab">Отзывов (0)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-description">
                        <div itemprop="description">
                            <div>
                                -{{$product->description->screen_type}},
                                {{$product->description->images_size}},
                                {{$product->description->diagonal}}<br>
                                -{{$product->description->standart}},
                                {{$product->description->battery_capacity}},
                                {{$product->description->CPU}},
                                {{$product->description->RAM}}<br>
                                -{{$product->description->OS}},<br>
                                -{{$product->description->camera}},
                                {{$product->description->dimensions}}</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-specification">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Дополнительная информация</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Дата анонсирования</td>
                                    <td>{{$product->description->announcement_date}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Другие функции</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Датчики</td>
                                    <td>{{$product->description->sensors}}</td>
                                </tr>
                                <tr>
                                    <td>Режим полета</td>
                                    <td>{{$product->description->flight_mode}}</td>
                                </tr>
                                <tr>
                                    <td>Управление</td>
                                    <td>{{$product->description->control}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Мультимедийные возможности</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Аудио</td>
                                    <td>{{$product->description->audio}}</td>
                                </tr>
                                <tr>
                                    <td>Запись видеороликов</td>
                                    <td>{{$product->description->video}}</td>
                                </tr>
                                <tr>
                                    <td>Разъем для наушников</td>
                                    <td>{{$product->description->headphone_jack}}</td>
                                </tr>
                                <tr>
                                    <td>Фотокамера</td>
                                    <td>{{$product->description->camera}}</td>
                                </tr>
                                <tr>
                                    <td>Фронтальная камера</td>
                                    <td>{{$product->description->front_camera}}</td>
                                </tr>
                                <tr>
                                    <td>Функции камеры</td>
                                    <td>{{$product->description->camera_functions}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Общие характеристики</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Версия ОС</td>
                                    <td>{{$product->description->OS}}</td>
                                </tr>
                                <tr>
                                    <td>Вес</td>
                                    <td>{{$product->description->weight}}</td>
                                </tr>
                                <tr>
                                    <td>Количество SIM-карт</td>
                                    <td>{{$product->description->count_sim}}</td>
                                </tr>
                                <tr>
                                    <td>Размеры (ШxВxТ)</td>
                                    <td>{{$product->description->dimensions}}</td>
                                </tr>
                                <tr>
                                    <td>Режим работы нескольких SIM-карт</td>
                                    <td>{{$product->description->multiple_sim}}</td>
                                </tr>
                                <tr>
                                    <td>Тип</td>
                                    <td>{{$product->description->type}}</td>
                                </tr>
                                <tr>
                                    <td>Тип SIM-карты</td>
                                    <td>{{$product->description->SIM_type}}</td>
                                </tr>
                                <tr>
                                    <td>Тип корпуса</td>
                                    <td>{{$product->description->enclosure_type}}</td>
                                </tr>
                                <tr>
                                    <td>Управление</td>
                                    <td>{{$product->description->management}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Память и процессор</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Количество ядер процессора</td>
                                    <td>{{$product->description->cores_CPU}}</td>
                                </tr>
                                <tr>
                                    <td>Объем встроенной памяти</td>
                                    <td>{{$product->description->internal_memory}}</td>
                                </tr>
                                <tr>
                                    <td>Объем оперативной памяти</td>
                                    <td>{{$product->description->RAM}}</td>
                                </tr>
                                <tr>
                                    <td>Процессор</td>
                                    <td>{{$product->description->CPU}}</td>
                                </tr>
                                <tr>
                                    <td>Слот для карт памяти</td>
                                    <td>{{$product->description->memory_slot}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Питание</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Аккумулятор</td>
                                    <td>{{$product->description->battery}}</td>
                                </tr>
                                <tr>
                                    <td>Время работы в режиме ожидания</td>
                                    <td>{{$product->description->standby_time}}</td>
                                </tr>
                                <tr>
                                    <td>Время работы в режиме разговора</td>
                                    <td>{{$product->description->talk_time}}</td>
                                </tr>
                                <tr>
                                    <td>Емкость аккумулятора</td>
                                    <td>{{$product->description->battery_capacity}}</td>
                                </tr>
                                <tr>
                                    <td>Тип аккумулятора</td>
                                    <td>{{$product->description->battery_type}}</td>
                                </tr>
                                <tr>
                                    <td>Тип разъема для зарядки</td>
                                    <td>{{$product->description->charger_connector}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Связь</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Cистема A-GPS</td>
                                    <td>{{$product->description->A_GPS}}</td>
                                </tr>
                                <tr>
                                    <td>Интерфейсы</td>
                                    <td>{{$product->description->interfeis}}</td>
                                </tr>
                                <tr>
                                    <td>Спутниковая навигация</td>
                                    <td>{{$product->description->satellite_navigation}}</td>
                                </tr>
                                <tr>
                                    <td>Стандарт</td>
                                    <td>{{$product->description->standard}}</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="2" class="text-center"><strong>Экран</strong></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Автоматический поворот экрана</td>
                                    <td>{{$product->description->screen_rotation}}</td>
                                </tr>
                                <tr>
                                    <td>Диагональ</td>
                                    <td>{{$product->description->diagonal}}</td>
                                </tr>
                                <tr>
                                    <td>Размер изображения</td>
                                    <td>{{$product->description->image_size}}</td>
                                </tr>
                                <tr>
                                    <td>Тип сенсорного экрана</td>
                                    <td>{{$product->description->touch_screen_type}}</td>
                                </tr>
                                <tr>
                                    <td>Тип экрана</td>
                                    <td>{{$product->description->screen_type}}</td>
                                </tr>
                                <tr>
                                    <td>Число пикселей на дюйм (PPI)</td>
                                    <td>{{$product->description->PPI}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-review">
                        <form class="form-horizontal" id="form-review">
                            <div id="review">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <p>Нет отзывов о данном товаре.</p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="h3 text-center">Написать отзыв</h4>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-name">Ваше имя:</label>
                                <div class="col-sm-4">
                                    <input name="name" id="input-name" class="form-control" type="text">
                                </div>
                                <label class="col-sm-2 control-label">Оценка:</label>
                                <div class="col-sm-4">
                                    <div class="rating-input"><span class="fa-star-o fa fa-lg"
                                                                    data-value="1"></span><span
                                                class="fa-star-o fa fa-lg" data-value="2"></span><span
                                                class="fa-star-o fa fa-lg" data-value="3"></span><span
                                                class="fa-star-o fa fa-lg" data-value="4"></span><span
                                                class="fa-star-o fa fa-lg" data-value="5"></span>
                                        <input data-max="5"
                                               data-min="1"
                                               name="rating"
                                               class="form-control moneymaker2-rating"
                                               value=""
                                               type="hidden">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-review">Ваш отзыв:</label>
                                <div class="col-lg-8 col-md-9 col-sm-10 ">
                                    <textarea name="text" rows="3" id="input-review" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="buttons clearfix col-sm-offset-2 col-sm-10">
                                    <button type="button" id="button-review"
                                            data-loading-text="&lt;i class='fa fa-spinner fa-spin'&gt;&lt;/i&gt; Загрузка..."
                                            class="btn btn-default"><i class="fa fa-pencil"></i> Применить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script type="text/javascript"><!--
        $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
            $.ajax({
                url: 'index.php?route=product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                dataType: 'json',
                beforeSend: function() {
                    $('#recurring-description').html('');
                },
                success: function(json) {
                    $('.alert, .text-danger').remove();

                    if (json['success']) {
                        $('#recurring-description').html(json['success']);
                    }
                }
            });
        });
        //--></script>

    <script type="text/javascript"><!--
        $('#button-cart').on('click', function() {
            $.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: $('#product input[type=\'number\'], #product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
                dataType: 'json',
                beforeSend: function() {
                    $('#button-cart .fa').removeClass('shopping-cart');
                    $('#button-cart .fa').addClass('fa-spinner fa-spin');
                },
                complete: function() {
                    $('#button-cart .fa').removeClass('fa-spinner fa-spin');
                    $('#button-cart .fa').addClass('shopping-cart');

                },
                success: function(json) {
                    $('.alert, .text-danger').remove();
                    $('.form-group').removeClass('has-error');

                    if (json['error']) {
                        if (json['error']['option']) {
                            $('.options .collapse').show();
                            for (i in json['error']['option']) {
                                var element = $('#input-option' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                        }

                        if (json['error']['recurring']) {
                            $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                        }

                        // Highlight any found errors
                        $('.text-danger').parent().addClass('has-error');
                    }

                    if (json['success']) {
                        $('#cart > .dropdown-toggle #cart-total').html(json['total']);

                        $('#cart > ul').load('index.php?route=common/cart/info ul li');
                        $('#popupModal').find('.modal-body').load('index.php?route=common/cart/info ul', function() {
                            $('#popupModal .modal-header .close').addClass('hidden');
                            $('#popupModal .modal-body > ul').removeClass('dropdown-menu keep-open');
                            $('#popupModal .modal-body > ul').addClass('list-unstyled');
                            $('#popupModal .modal-body .btn-primary').parent().parent().prepend('<div class="panel panel-info"><div class="panel-heading text-center"><small>' + json['success'] + '</small></div></div>');
                            $('#popupModal').find('.modal-title').load('index.php?route=common/cart/info #cart-total', function () {
                                $('#popupModal').modal();
                            });
                        });
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('.date').datetimepicker({
            pickTime: false
        });

        $('.datetime').datetimepicker({
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            pickDate: false
        });

        $('button[id^=\'button-upload\']').on('click', function() {
            var node = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function() {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);

                    $.ajax({
                        url: 'index.php?route=tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(node).button('loading');
                        },
                        complete: function() {
                            $(node).button('reset');
                        },
                        success: function(json) {
                            $('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(node).parent().find('input').attr('value', json['code']);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>


    <script type="text/javascript"><!--
        $('#review').delegate('.pagination a', 'click', function(e) {
            e.preventDefault();

            $('#review').fadeOut('slow');

            $('#review').load(this.href);

            $('#review').fadeIn('slow');
        });

        $('#review').load('index.php?route=product/product/write&product_id=290');

        $('#button-review').on('click', function() {
            $.ajax({
                url: '',
                type: 'post',
                dataType: 'json',
                data: $("#form-review").serialize(),
                beforeSend: function() {
                    $('#button-review').button('loading');
                },
                complete: function() {
                    $('#button-review').button('reset');
                },
                success: function(json) {
                    $('.alert-success').parent().parent().remove();
                    $('.alert-danger').parent().parent().remove();
                    $('.alert-success, .alert-danger').remove();

                    if (json['error']) {
                        if (typeof grecaptcha != "undefined") {grecaptcha.reset();} //refresh recaptcha if enabled
                        $('#button-review').parent().parent().before('<div class="form-group"><div class="col-sm-offset-2 col-lg-8 col-md-9 col-sm-10"><div class="alert alert-danger">' + json['error'] + '</div></div></div>');
                    }

                    if (json['success']) {
                        $('#button-review').parent().parent().before('<div class="form-group"><div class="col-sm-offset-2 col-lg-8 col-md-9 col-sm-10"><div class="alert alert-success">' + json['success'] + '</div></div></div>');

                        $('input[name=\'name\']').val('');
                        $('textarea[name=\'text\']').val('');
                        $('input[name=\'rating\']:checked').prop('checked', false);
                    }
                }
            });
        });

        $(document).ready(function() {
            // to center imgs remove 2* from owl.carousel.min.js
            // and add .owl-carousel .owl-wrapper, .owl-carousel .owl-item { margin: 0 auto; }
            $('.thumbnails.image-additional').detach().insertAfter( $('.thumbnails.image-thumb') );

            $('.thumbnails .owl-carousel').owlCarousel({
                itemsCustom : [[0, 1], [320, 3], [450, 5], [560, 6], [768, 6], [992, 4], [1200, 5]],
            });

            $('.thumbnails').magnificPopup({
                type:'image',
                delegate: 'a',
                midClick:true,
                fixedContentPos: true,
                overflowY: 'scroll',
                gallery: {
                    enabled:true,
                },
                mainClass: 'mfp-square ',
                callbacks: {
                    open: function() {
                        $.magnificPopup.instance.next = function() {
                            var self = this;
                            self.wrap.removeClass('mfp-image-loaded');
                            setTimeout(function() { $.magnificPopup.proto.next.call(self); }, 0);
                        }
                        $.magnificPopup.instance.prev = function() {
                            var self = this;
                            self.wrap.removeClass('mfp-image-loaded');
                            setTimeout(function() { $.magnificPopup.proto.prev.call(self); }, 0);
                        }

                        $(".mfp-figure figure").prepend("<div id='image-addon' class='hidden-xs'><div class='btn-group additional-buttons'><button class='btn btn-primary' type='button' title='Купить' onclick='$(\"#image-addon\").remove();$(\"#button-cart\").click();'><i class='fa fa-shopping-cart'></i> 12 р.</button><button type='button' class='btn btn-default' title='В закладки' onclick='wishlist.add(290);'><i class='fa fa-heart'></i></button></div><button type='button'  class='btn btn-link' data-toggle='modal' data-target='#orderModal' data-order-mode='product' data-order-img-src='/images/iPhone.jpg' data-order-product-id='290' data-order-title='Lenovo A5000 Black' data-order-price='1р.'><i class='fa fa-fw fa-reply-all fa-flip-horizontal'></i> Быстрый звонок</button></div>");
                    },
                    imageLoadComplete: function() {
                        var self = this;
                        setTimeout(function() { self.wrap.addClass('mfp-image-loaded'); }, 1);
                    },
                    beforeClose: function() {
                        $(".mfp-arrow-right").remove();
                        $(".mfp-arrow-left").remove();
                    },
                    afterClose: function() {
                        $("#image-addon").remove();
                    },
                },
                closeOnContentClick: true,
            });
        });
        //--></script>


@stop