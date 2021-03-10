@extends('Pizzas.pizza')
@section('Pizzalist')
<div class="row-auto">
    <div class="col-auto">
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
    <div class="space-y-6">
        <label for="pizzas" class="text-indigo-600 font-sans text-4xl"><h2>pizzas:</h2><h4 class="text-success">{{ session('massage')}}</h4></label>
            @foreach($pizzas as $pizza)
                <form action="/pizza/{{ $pizza->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <li class="text-bold text-light" value="{{ $pizza['name'] }}">🍕{{ $pizza['name'] }}</li>
                    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">DELETE</button>
                </form>
            @endforeach
    </div>
    <button type="button" class="bg-transparent hover:bg-indigo-500 text-indigo-700 font-semibold hover:text-white py-2 px-4 border border-indigo-700 hover:border-transparent rounded">Submit</button>
    <a href="/pizza/create" class="bg-transparent hover:bg-indigo-500 text-indigo-700 font-semibold hover:text-white py-2 px-4 border border-indigo-700 hover:border-transparent rounded">Create Pizza</a>
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
