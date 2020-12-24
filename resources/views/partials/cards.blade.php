@if(! empty($cards))
  <section class="type-section container">
      <h2>{{$title}}</h2>
      <div class="cards">
          @foreach ($cards as $card)
          <div class="card">
              <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
              <h3>{{ $card['titolo'] }}</h3>
              <h3>{{$card['id']}}</h3>
              <a href="{{route('product', $card['id'])}}">Vedi Prodotto</a>
          </div>        
          @endforeach
      </div>
  </section>
@endif