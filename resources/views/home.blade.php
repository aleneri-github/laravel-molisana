<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Molisana</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <header>
        <img src="{{asset("img/marchio-sito-test.png")}}" alt="La Molisana">
        <ul class="list-inline">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">Prodotti</a>
          </li>
          <li>
            <a href="#">News</a>
          </li>
        </ul>
      </header>
      <main>
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
      </main>
      <footer>
        <div class="footer-top">
          <div class="container80">
          <section>
            <img src="{{asset("img/marchio-sito-test.png")}}" alt="La Molisana">
          </section>
          <section>
          </section>
          <section>
          </section>


          </div>

        </div>
        <div class="footer-bottom">
          <img src="{{asset("img/footer-montagne-bottom.jpg")}}" alt="Montagne">

        </div>
      </footer>

    </body>
</html>
