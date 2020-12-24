@extends('layouts.main')

@section('content')


  <section class="product-detail">
    <div class="container">
      <div class="navigation">
       @if($id > 0)
        <a href="{{route('product', $id - 1)}}">&it; PREV</a>
       @endif
       @if($id < $length)
        <a href="{{route('product', $id + 1)}}">&it; NEXT</a>
       @endif
      </div>
      <div class="hero">
         <h1>{{$product['titolo']}}</h1>
         <img src="{{$product['src-h']}}" alt="{{$product['titolo']}}">
         <img src="{{$product['src-p']}}" alt="{{$product['titolo']}}">
      </div>

      <div class="description">
        <p>{!!$product['descrizione']!!}</p>
      </div>
    </div>
  </section>
  
@endsection