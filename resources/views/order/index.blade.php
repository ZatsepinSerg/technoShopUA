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
        @php
            $total_sum=0;
        @endphp
        @foreach($products as $product)
            <tr>
                <td>{{$product->title}}</td>

                <td><a class="btn btn-danger" href="/cart_minus/{{$product->alias}}">-</a> {{$cart[$product->id]}}
                    <a class="btn btn-danger" href="/cart_add/{{$product->alias}}">+</a></td>
                <td>{{$product->price}}</td>
                <td>{{$product->price * $cart[$product->id] }}</td>
            </tr>
            @php
                $total_sum+=$product->price * $cart[$product->id];
            @endphp
        @endforeach
        <tr>
            <td colspan="3">Итого:</td>
            <td>{{$total_sum}}</td>
        </tr>
        </tbody>
    </table>
    <div class="col-sm-8">
        <h2>Укажите данные</h2>
        <form action="/order" method="POST" role="form">
            <legend>Form Title</legend>
            {{csrf_field()}}
            <input type="hidden" name="total_price" value="{{$total_sum}}">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" name="customer_name" id="name" placeholder="Input...">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Input...">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Input...">
            </div>
            <label for="feedback">Comment</label>
            <textarea class="form-control" name="feedback" id="feedback" cols="15" rows="5">

            </textarea>
            <button type="submit" class="btn btn-primary">оформить заказ</button>
        </form>
    </div>
@endsection