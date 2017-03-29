@extends('layout_part.layout')

@section('content')


    <table class="table table-hover">
        <h2>ваши товары</h2>
        <thead>
        <tr>
            <th>название товара</th>
            <th>Колличество</th>
            <th>Цена</th>
            <th>Суммарно</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders AS $order)
            <tr>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->total_price}}</td>
                <td>
                    @foreach($order->products AS $product)
                        <a href="/product/{{$product->alias}}">
                            {{$product->title}}
                        </a>X
                        {{$product->pivot->amount}}=${{$product->pivot->amount*$product->price}}

                    @endforeach
                </td>

            </tr>
        </tbody>
    @endforeach
@endsection