@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <img src="img/pizza-house.png" alt="">
        <div class="title m-b-md">
            Pizza House<br />
            The Tashkent Best Pizzas

         <p class="mssg">{{ session('mssg') }}</p>
        <a class="link" href="/pizzas/create">Order a Pizza</a>
        <a class="link" href="/pizzas">Show an order</a>

        </div>
    </div>
</div>
@endsection