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

      @include('partials.header')
      <div class="container80">
        <h1>PRODOTTI</h1>
    
      </div>

      @include('partials.footer')


    </body>
</html>
