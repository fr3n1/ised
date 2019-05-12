<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Ised') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
   <style>
   html, body {
      
      background-color: #00AD8E;
      
   }</style>
</head>
<body>
      <div id="app" >
            <div class="col-5" style="margin-left:600px"> <img src="storage/I.png" class="float-right" alt="loginimg"  width="500" height="200"> </div>
            <div class="col-5" style="margin-left:535px "> <img src="storage/L.png" class="float-right" alt="isedimg"  width="350" height="100"> </div>
            
            <main class="py-4"  >
                  @yield('content')
            </main>
      </div>
        
      
     
      <footer class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
          <div class="m-all t-all d-all bot-footer cf">
              <div class="wrap cf">
                  <div class="m-1of2 t-1of2 d-1of2" style="text-align: center;">
                      <p class="source-org copyright"> Copyright © 2019 Universidade Anhembi Morumbi. 
                      Todos os direitos Reservados. </p>
                          <a href="http://www.laureate.net/" target="_blank"><img src="https://portal.anhembi.br/wp-content/themes/anhembi/library/images/logo-laureate.png"width="135px" height="40px" alt="Laureate - International Universities" title="Laureate - International Universities" /></a>                                                                                                                     
                  </div>                        
              </div>
          </div>
      </footer>
      </body>
</html>