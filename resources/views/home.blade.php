@extends('layouts.main')

@section('content')
{{-- SEZIONI LUNGHE --}}
@include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'])
{{-- SEZIONI CORTE --}}
@include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'])
{{-- SEZIONI CORTISSIME --}}
@include('partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME'])




<!-- <section class="type-section container">
    <h2>LE LUNGHE</h2>
    <div class="cards">
        @foreach ($lunghe as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <h3>{{$card['id']}}</h3>
            <a href="{{route('product', $card['id'])}}">Vedi Prodotto</a>
        </div>        
        @endforeach
    </div>
</section>

<section class="type-section container">
    <h2>LE CORTE</h2>
    <div class="cards">
        @foreach ($corte as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <h3>{{$card['id']}}</h3>
            <a href="{{route('product', $card['id'])}}">Vedi Prodotto</a>
        </div>        
        @endforeach
    </div>
</section>

<section class="type-section container">
    <h2>LE CORTISSIME</h2>
    <div class="cards">
        @foreach ($cortissime as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <h3>{{$card['id']}}</h3>
            <a href="{{route('product', $card['id'])}}">Vedi Prodotto</a>
        </div>        
        @endforeach
    </div>
</section> -->



  
@endsection