  <div class="container80">
    <h2>LE LUNGHE</h2>
    <div class="items">
      @foreach ($lunghe as $pasta)
      <div class="card">
        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
        <div class="overlay">
          <h3><a href="#">{{ $pasta['titolo']}}</a></h3>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="container80">
    <h2>LE CORTE</h2>
    <div class="items">
      @foreach ($corte as $pasta)
      <div class="card">
        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
        <div class="overlay">
          <h3><a href="#">{{ $pasta['titolo']}}</a></h3>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="container80">
    <h2>LE CORTISSIME</h2>
    <div class="items">
      @foreach ($cortissime as $pasta)
      <div class="card">
        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
        <div class="overlay">
          <h3><a href="#">{{ $pasta['titolo']}}</a></h3>
        </div>
      </div>
      @endforeach
    </div>
  </div>
