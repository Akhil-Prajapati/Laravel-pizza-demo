@extends('Pizzas.pizza')
@section('Pizzalist')
<div class="row bg-light">
    <div class="col-3">
            @foreach($pizzas as $pizza)
                <h2>🍕{{ $pizza['name'] }}</h2>
                <ul>
                    @foreach ($pizza as $item)
                    <li>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            @endforeach
    </div> 
</div>
@endsection
@section('images')
<div class="row-cols-3" alt="best pizza">
    <img src="/img/city.jpg">
</div>
@endsection
@section('title')
    <h1 class="text-bold text-secondary">Pizza list:</h1>
@endsection
@section('location')
    <h4>north east-</h4>
    <p>best pizza is the only here </p>
@endsection
@section('menu')
    <div class="form-group mb-4">
        <label for="pizzas" class="text-light"><h3>pizzas:</h3></label>
        <select class="form-control" name="pizzas" id="pizzas">
            @foreach($pizzas as $pizza)
                <option value="{{ $pizza['name'] }}">🍕{{ $pizza['name'] }}</option>
            @endforeach
        </select>
    </div>
    <button type="button" class="btn btn-outline-light">Submit</button>
@endsection 
@section('extras')
    {{-- {{ $pizza['name'] }} --}}   
        {{-- @if($price > 15)
        <p class="text-danger">its an expensive</p>
        @elseif($price <5)
        <p class="text-success">its an cheap</p>
        @endif --}}

        {{-- @unless ($extra == 'extra cheese')
            <p class="text-warning">you dont have an extra cheesy🧀</p>
        @endunless --}}

        {{-- @php
            $number = 'phone no: 9097677878';
            echo $number;
            $z = [1,2,3,4,5,6,7,8,9,9];
        @endphp

        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($z as $item)     
                    <li>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        @for($i= 60; $i <=75; $i++)
            {{ $i }}
        @endfor --}}
@endsection
