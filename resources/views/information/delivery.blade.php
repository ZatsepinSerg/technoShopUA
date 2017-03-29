@extends('layout_part.layout')
@section('content')
    @include('layout_part.navBar')
    <div id="content" class="col-sm-9">
        <ul class="breadcrumb text-center">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="active">Доставка и оплата</li>
        </ul>
        <h1 class="h2 text-center content-title">Доставка и оплата</h1>
        <div class="row catalog-thumb">
            <div class="col-sm-12 text-center">
          <span class="fa-stack fa-2x img-thumbnail">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-file-text-o fa-stack-1x fa-inverse"></i>
          </span>
            </div>
        </div>
        <hr class="catalog-hr">
        <br>
        <div>Дорогие клиенты!</div>
        <div>Наша компания осуществляет доставку заказов собственной курьерской службой - по Одессе</div>
        <div><br>
            <div>В другие части Украины доставка осуществляестя при помощи службы Новая Почта и Интайм</div>
            <div><br>
            </div>
            <div>Внимание!&nbsp;</div>
            <div>Заказы оформленные до 14-00 отправляются в тот же день, после&nbsp;<span
                        style="line-height: 17.1428px;">14-00</span>&nbsp;на следующий день. При получении обязательно
                проверяйте наличие всего товара в заказе, а так же его внешний вид.
            </div>
            <div><br>
            </div>
            <div>Стоимость доставки в пределах города - 80 грн.</div>
            <div><br></div>
            <div>За город 80грн. + 5 грн/км</div>
            <div><br>
            </div>
            <div><br></div>
            <div>ОПЛАТА:&nbsp;   </div>
            <div><br>
            </div>
            <div>Банковский перевод ,предоплата или наличными</div>
        </div>

    </div> </div></div>
@endsection