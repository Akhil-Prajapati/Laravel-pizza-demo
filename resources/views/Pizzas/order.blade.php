@extends('Pizzas.pizza')
@section('order')
    <div class="row-cols-1">
        <label for="pizzas" class="text-warning"><h3>{{ $pizzas->name }}</h3></label>
        <ul>
            <li class="text-light">
                {{ $pizzas->size }}
            </li>
            <li class="text-light">
                {{ $pizzas->extra }}
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-1">
            <label for="price" class="text-light"><h4>Price:</h4></label>
        </div>
        <div class="col-2">
            <div class="@if($pizzas->price < 5) text-light fs-5 @elseif ($pizzas->price == 5) text-success fs-5 @else text-danger fs-5 @endif" >
                {{ $pizzas->price }}
            </div>
        </div>
    </div>
@endsection