<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Molisana</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css")}}">
    </head>
    <body>
      <header>
        <img src="{{asset("img/marchio-sito-test.png")}}" alt="La Molisana">
        <ul class="list-inline">
          <li>
            <a href="#">HOME</a>
          </li>
          <li>
            <a href="#">PRODOTTI</a>
          </li>
          <li>
            <a href="#">NEWS</a>
          </li>

        </ul>
      </header>

    </body>
</html>
