@extends('Pizzas.pizza')
@section('create')
<div class="container">
    <h1>🍕🍕🍕🍕🍕🍕🍕</h1>
    <form action="/pizza" method="POST">
        @csrf
        <div class="form-group">
        <label for="pizza" class="text-light">🍕Pizza Name</label>
        <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="pizza" id="pizza" aria-describedby="helpId" placeholder="">
        <label for="price" class="text-light">💲Price</label>
        <input type="text"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="price" id="price" aria-describedby="helpId" placeholder="">
        <label for="pizza" class="fblock uppercase tracking-wide text-gray-600 text-xl font-bold mb-2">Extra</label>
        <br>
        <input class="form-check-input" name="extra[]" id="cheese" type="checkbox" value="cheese" id="flexCheckDefault">
            <label class="fblock uppercase tracking-wide text-yellow-400 text-xs font-bold mb-2" for="flexCheckDefault">
                🧀Cheese
            </label>
            <br>
        <input class="form-check-input" name="extra[]" id="onions" type="checkbox" value="onions" id="flexCheckDefault">
            <label class="fblock uppercase tracking-wide text-blue-600 text-xs font-bold mb-2" for="flexCheckDefault">
                🧅onions
            </label>
            <br>
        <input class="form-check-input" name="extra[]" id="tometos" type="checkbox" value="tometos" id="flexCheckDefault">
            <label class="fblock uppercase tracking-wide text-red-400 text-xs font-bold mb-2" for="flexCheckDefault">
                🍅tometos
            </label>
            <br>
        <input class="form-check-input" name="extra[]" id="papper" type="checkbox" value="papper" id="flexCheckDefault">
            <label class="fblock uppercase tracking-wide text-red-700 text-xs font-bold mb-2" for="flexCheckDefault">
                🌶papper
            </label><br>
        <label for="size" class="text-xl">Size</label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="size" name="size" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="smalls">◽Smalls</option>
            <option value="mediam">◻Mediam</option>
            <option value="large">⬜Large</option>
        </select>
        </div>
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Button
          </button>
    </form>
</div>    
@endsection