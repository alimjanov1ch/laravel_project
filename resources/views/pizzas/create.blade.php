@extends('layouts.layout')
@section('content')

<div class="wrapper create-pizza full-height">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="phone_number">Your phone number:</label>
    <input type="number" name="phone_number" id="phone_number" required>

    <label for="type">Choose type of pizza:</label>
    <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
      <option value="americano">Americano</option>
    </select>
    <label for="base">Choose crust:</label>
    <select name="base" id="base">
      <option value="thick">Thick</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="cheese crust">Cheese Crust</option>
      <option value="garlic crust">Garlic Crust</option>
    </select>
    <!-- 2 -->
    
    <fieldset>
      <label>Extra toppings:</label><br>
      <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
      <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
      <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
      <input type="checkbox" name="toppings[]" value="olives">Olives<br>
    </fieldset>

    <input type="submit"  class="link" value="Order Pizza">
  </form>
  <a class="link" id="center" href="../">Back to Home page</a>
</div>
@endsection