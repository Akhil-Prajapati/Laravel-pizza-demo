@extends('Pizzas.pizza')
@section('create')
<div class="container">
    <h1>🍕🍕🍕🍕🍕🍕🍕</h1>
    <form action="/pizza" method="POST">
        @csrf
        <div class="form-group">
        <label for="pizza" class="text-light">🍕Pizza Name</label>
        <input type="text" class="form-control" name="pizza" id="pizza" aria-describedby="helpId" placeholder="">
        <label for="price" class="text-light">💲Price</label>
        <input type="text"
            class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="">
        <label for="pizza" class="text-light">Extra</label>
        <br>
        <input class="form-check-input" name="extra[]" id="cheese" type="checkbox" value="cheese" id="flexCheckDefault">
            <label class="form-check-label text-warning" for="flexCheckDefault">
                🧀Cheese
            </label>
            <br>
        <input class="form-check-input" name="extra[]" id="onions" type="checkbox" value="onions" id="flexCheckDefault">
            <label class="form-check-label text-info" for="flexCheckDefault">
                🧅onions
            </label>
            <br>
        <input class="form-check-input" name="extra[]" id="tometos" type="checkbox" value="tometos" id="flexCheckDefault">
            <label class="form-check-label text-danger" for="flexCheckDefault">
                🍅tometos
            </label>
            <br>
        <input class="form-check-input" name="extra[]" id="papper" type="checkbox" value="papper" id="flexCheckDefault">
            <label class="form-check-label text-danger" for="flexCheckDefault">
                🌶papper
            </label><br>
        <label for="size" class="text-light">Size</label>
        <select class="form-select" id="size" name="size" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="smalls">◽Smalls</option>
            <option value="mediam">◻Mediam</option>
            <option value="large">⬜Large</option>
        </select>
        </div>
        <input type="submit" value="Order Pizza" class="btn btn-light mt-4">
    </form>
</div>    
@endsection