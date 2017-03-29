<footer>
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="h5 text-muted"><i class="fa fa-fw fa-phone"></i> Контакты</div>
                <ul class="list-unstyled">
                    <li>Телефон: 0 (00) 00-00-00</li>
                    <li>Время работы: Пн-Пт 10:00 - 21:00</li>
                    <li>Канатная 23, Одесса</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="h5 text-muted"><i class="fa fa-fw fa-truck"></i> Доставка и оплата</div>
                <ul class="list-unstyled">
                    <li><a href="/delivery">Доставка и оплата</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="h5 text-muted"><i class="fa fa-fw fa-file-text"></i> Реквизиты компании</div>
                <ul class="list-unstyled">
                    <li>Иванов Иван Иванович<p></p>
                        ХХ 000000000000<p></p>
                        ХХХ  000000000</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="h5 text-muted"><i class="fa fa-fw fa-plus-square"></i> Наша гарантия</div>
                <ul class="list-unstyled">
                    <li>Не очень довольны своей покупкой? Вы можете вернуть ее в течение 30 дней с даты продажи. </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                    Все права защищены<br>
                    TehnnoShopUa.com © 2016 – 2017                  </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="infoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <p class="modal-title h4 text-center"></p>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-link" data-dismiss="modal">Назад</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close hidden" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <p class="modal-title h4 text-center"></p>
                <div class="hidden" data-compare-title="Сравнение товаров" data-compare-link="#" data-wishlist-title="Закладки" data-wishlist-link="#"></div>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-link btn-shopping hidden" data-dismiss="modal">Продолжить покупки</button>
                <button type="button" class="btn btn-sm btn-link btn-back" data-dismiss="modal">Назад</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="orderModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input name="product_id" value="0" type="hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <input name="quantity" value="1" type="hidden">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="img-responsive center-block" src="/images/no_image.png" title="" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center h3"></p>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group required">
                        <label for="quickorderphone" class="col-sm-3 control-label">Телефон</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="quickorderphone" name="quickorderphone" type="text">
                            <span class="quickorderphone form-control-feedback hidden"><i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quickordercomment" class="col-sm-3 control-label">Комментарий</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="quickordercomment" name="quickordercomment" placeholder="Опционально" type="text">
                            <span class="quickordercomment form-control-feedback hidden"><i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="panel panel-info"><div class="panel-heading text-center"><small>Нажмите Отправить чтобы сделать запрос, и мы вам скоро перезвоним</small></div></div>
                    </div>
                </div>
                <div class="buttons">
                    <p class="text-center">
                        <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Применить</button>
                    </p>
                    <p class="text-center">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Продолжить покупки</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript"><!--
    $(document).ready(function() {
        $('#orderModal').on('show.bs.modal', function (event) {
            var target = $(event.relatedTarget);
            var mode = target.data('order-mode');
            var product_id = target.data('order-product-id');
            var title = target.data('order-title');
            var img_src = target.data('order-img-src');
            var price = target.data('order-price');
            var modal = $(this);
            modal.find('.modal-header input').val(product_id);
            if(mode=="product") {
                modal.find('.modal-body input[type=\'hidden\']').val($("#input-quantity").val());
            }
            modal.find('p.text-center.h3').text(title);
            modal.find('.img-responsive').addClass("hidden");
            if(mode=="product" || mode=="catalog") {
                modal.find('.modal-dialog').removeClass('modal-dialog-callback');
                modal.find('.modal-dialog').addClass('modal-dialog-order');
                modal.find('p.text-center.h3').append(" <span>(" + price + ")</span>");
                modal.find('.img-responsive').removeClass("hidden");
                modal.find('.img-responsive').attr("src",img_src);
            } else {
                modal.find('.modal-dialog').removeClass('modal-dialog-order');
                modal.find('.modal-dialog').addClass('modal-dialog-callback');
            }

            modal.find('.panel').removeClass('panel-danger');
            modal.find('.panel').removeClass('panel-success');
            modal.find('.panel').addClass('panel-info');
            modal.find('.panel small').html('Нажмите Отправить чтобы сделать запрос, и мы вам скоро перезвоним');
            modal.find('.btn-primary').removeClass('btn-success');
            modal.find('.btn-primary').removeAttr('disabled');
            modal.find('.btn-primary').html('<i class="fa fa-fw fa-send"></i> Применить');
        })

        $('#orderModal .btn-primary').bind('click', function(e){
            initialValidation();
        });
        function initialValidation() {
            if ($("#quickorderphone").val()) {
                $("#quickorderphone").addClass('valid');
                $("#quickorderphone").parent().parent().addClass('has-success has-feedback');
                $(".quickorderphone.form-control-feedback").removeClass('hidden');
                $('#quickorderphone').parent().parent().removeClass('has-error');
                $("#orderModal .panel").removeClass('panel-danger');
                $("#orderModal .panel").addClass('panel-info');
                $("#quickordercomment").parent().parent().addClass('has-success has-feedback');
                $(".quickordercomment.form-control-feedback").removeClass('hidden');
                $("#orderModal .panel small").html('<i class="fa fa-spinner fa-spin"></i> Загрузка...');
                $('#orderModal .btn-primary').attr('disabled','disabled');
                if ( $( "#orderModal .modal-dialog-order" ).length ) {
                    addQuickOrder();
                }
                if ( $( "#orderModal .modal-dialog-callback" ).length ) {
                    addCallback();
                }

            } else {
                $("#quickorderphone").removeClass('valid');
                $("#quickorderphone").parent().parent().removeClass('has-success has-feedback');
                $(".quickorderphone.form-control-feedback").addClass('hidden');
                $('#quickorderphone').parent().parent().addClass('has-error');
                $("#orderModal .panel").removeClass('panel-info');
                $("#orderModal .panel").addClass('panel-danger');
                $("#orderModal .panel small").html('Пожалуйста укажите ваш номер телефона');
            };
        };
        function addQuickOrder() {
            $.ajax({
                url: '/order',
                type: 'post',
                data: $('#orderModal input[type=\'text\'], #orderModal input[type=\'hidden\'], #product input[type=\'number\'], #product input[type=\'text\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
                dataType: 'json',
                success: function(json) {
                    $('.alert, .text-danger').remove();
                    $('.form-group').removeClass('has-error');
                    if (json['error']) {

                        if (json['error']['option']) {
                            $('.options .collapse').show();
                            if ($('.options > div').hasClass("collapse")) {
                                $('.options > div:first-child').hide();
                            }
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

                        if (json['error']['validation']) {
                            $("#orderModal .panel").removeClass('panel-info');
                            $("#orderModal .panel").addClass('panel-danger');
                            $("#orderModal .panel small").html(json['error']['validation']);
                            $('#orderModal .btn-primary').removeAttr('disabled');
                        }
                        $('.text-danger').parent().addClass('has-error');
                    }
                    if (json['success']) {
                        $("#orderModal .panel").removeClass('panel-danger');
                        $("#orderModal .panel").removeClass('panel-info');
                        $("#orderModal .panel").addClass('panel-success');
                        $("#orderModal .panel small").html(json['success']);
                        $('#orderModal .btn-primary').addClass('btn-success');
                        $('#orderModal .btn-primary').html('<i class="fa fa-check"></i> Заказ отправлен');
                        $('#cart > .dropdown-toggle #cart-total').html(json['total']);
                        $('#cart > ul').load('/order ul li');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        };
        function addCallback() {
            $.ajax({
                url: '/order',
                type: 'post',
                data: $('#orderModal input[type=\'text\']'),
                dataType: 'json',
                success: function(json) {
                    $('.alert, .text-danger').remove();
                    $('.form-group').removeClass('has-error');
                    if (json['error']) {

                        if (json['error']['option']) {
                            $('.options .collapse').show();
                            if ($('.options > div').hasClass("collapse")) {
                                $('.options > div:first-child').hide();
                            }
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


                        if (json['error']['validation']) {
                            $("#orderModal .panel").removeClass('panel-info');
                            $("#orderModal .panel").addClass('panel-danger');
                            $("#orderModal .panel small").html(json['error']['validation']);
                            $('#orderModal .btn-primary').removeAttr('disabled');
                        }
                        $('.text-danger').parent().addClass('has-error');
                    }
                    if (json['success']) {
                        $("#orderModal .panel").removeClass('panel-danger');
                        $("#orderModal .panel").removeClass('panel-info');
                        $("#orderModal .panel").addClass('panel-success');
                        $("#orderModal .panel small").html(json['success']);
                        $('#orderModal .btn-primary').addClass('btn-success');
                        $('#orderModal .btn-primary').html('<i class="fa fa-check"></i> Запрос отправлен');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        };

    });
    //--></script>

