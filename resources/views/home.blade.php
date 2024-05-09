@extends('layout.main')

@section('content')

<div class="container">


    @foreach ($products as $product)

    <div class="prodotto-uno">
        <img src="{{ $product['frontImage'] }}" alt="">
    </div>

    {{-- <div class="prodotto-uno">
        <img src="/img/2.webp" alt="">
    </div>

    <div class="prodotto-uno">
        <img src="/img/3.webp" alt="">
    </div>

    <div class="prodotto-uno">
        <img src="/img/4.webp" alt="">
    </div>

    <div class="prodotto-uno">
        <img src="/img/5.webp" alt="">
    </div>

    <div class="prodotto-uno">
        <img src="/img/6.webp" alt="">
    </div> --}}
    @endforeach
</div>

@endsection
