@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza </h1>
        <form action="/pizzas" method="POST">
             @csrf
            <label for="name"> Your Name: </label>
            <input type="text" id="name" name="name">
            <label for="type">choose pizza type </label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg surpreme">Veg Surpreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <labe for="base">Choose base type</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">thick</option>
            </select>
            <fieldset>
                <label>Extra toppings: </label><br/>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection