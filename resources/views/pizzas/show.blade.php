@extends('layouts.layout')
@section('content')
<div class="wrapper pizza-details full-height">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
  <p class="base">Phone number - {{ $pizza->phone_number }}</p>
  <!-- 5 -->
  <p class="toppings">Extra toppings:</p>
  <ul>
    @foreach($pizza->toppings as $topping)
      <li>{{ $topping }}</li>
    @endforeach
  </ul>

  <form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Order</button>
  </form>
  
</div>
<a href="/pizzas"  id="center" class="link"><- Back to all pizzas</a>
@endsection
