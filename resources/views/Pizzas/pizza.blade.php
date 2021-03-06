<!DOCTYPE html>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@include('Pizzas.header')
<html lang="en">
<body>
    <div class="container">
        @yield('menu')
        @yield('order')
        @yield('create')
    </div>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
</body>
</html>
@include('Pizzas.footer')