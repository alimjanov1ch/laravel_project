@extends('layouts.layout')
@section('content')
<div class="wrapper pizza-index full-height">
  <h1>Pizza Orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->id }}-{{ $pizza->name }}</a></h4>
    </div>
  @endforeach  
</div>
<a class="link"  id="center" href="../">Back to Home page</a>
@endsection
