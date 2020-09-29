@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
        <img src="/img/pizza_1.png" alt="pizza logo">
            <h1>Pizza House</h1>
            <h1>The Souths Best Pizza</h1>
        </div>
        <p class="msg">{{session('msg')}}</p>
        <a href="/pizzas/create">Order Pizza</a>
    </div>
</div>
@endsection
