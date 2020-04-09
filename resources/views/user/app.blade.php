<!doctype html>
<html lang="es">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">


      @stack('styles')

      <title>BuffaloSafe</title>
   </head>

   <body>

      <header> 
         <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top alert-home">
            <a class="navbar-brand" href="#">
               <img src="{{ asset('assets/img/logo.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            BuffaloSafe
            </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsExample06">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
               <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Características</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más información</a>
               <div class="dropdown-menu" aria-labelledby="dropdown06">
                 <a class="dropdown-item" href="#">Seguridad</a>
                 <a class="dropdown-item" href="#">Clientes</a>
                 <a class="dropdown-item" href="#">Preguntas frecuentes</a>
               </div>
             </li>
             <li class="nav-item">
               <a href="#" class="btn btn-outline-primary">Pruébalo</a>
             </li>
           </ul>
         </div>
         </nav>
      </header>

      <main role="main">
         @yield('content')
      </main>
         
         <div class="alert-home "></div>

         <footer class="container py-5">
            <div class="row">
               <div class="col-12 col-md">
                  <img src="{{ asset('assets/img/logo.svg')}}" width="100">
                  <small class="d-block mb-3 text-muted text-left">® BuffaloSafe</small>
               </div>

               <div class="col-sm-6 col-md-3">
                  <h5>BuffaloSafe</h5>
                  <p class="text-small text-muted">
                     Los pagos y el almacenamiento dentro de nuestra plataforma son totalmente seguros. Los archivos estarán disponibles instantáneamente. Contamos con un servicio de almacenamiento 24/7
                  </p>
               </div>

               <div class="col-sm-6 col-md-3 text-center">
                  <h5>Más información</h5>
                  <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Youtube</a></li>
                     <li><a class="text-muted" href="#">GitHub</a></li>
                     <li><a class="text-muted" href="#">Twitter</a></li>
                     <li><a class="text-muted" href="#">Café y Código</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-md-3 text-right">
                  <h5>Medios de pago</h5>
                  <img class="img-fluid" src="http://3.bp.blogspot.com/-oumQWdMsBL8/Vh94mt2nYLI/AAAAAAAAANQ/qPwSgz1YgJc/s400/Payment%2BCard%2BNetworks%2BLogo.jpg" width="220">
               </div>
         </footer>

         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         
   </body>
</html>



