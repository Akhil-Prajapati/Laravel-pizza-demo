<!DOCTYPE html>
@include('Pizzas.header')
<html lang="en">
<body>
    <div class="container">
        @yield('menu')
        @yield('order')
    </div>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
</body>
</html>
@include('Pizzas.footer')