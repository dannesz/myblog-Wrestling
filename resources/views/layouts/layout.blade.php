<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DannEsz - @yield('post') </title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>
    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="/">
                <img src="{{asset('images/logo_dann.png')}}" width="120" alt="" loading="lazy">
            </a>
        </div>
    </nav>


    <!-- Contenido -->
   @yield('content') 

     <!-- Footer -->
     <footer class="sticky_footer container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo_dann.png')}}" alt="DnnEsz logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://twitter.com/DnnEsz">
                    <img src="{{asset('images/twitter.png')}}" class="img-fluid" width="40px" alt="twitter">
                </a>
                <a href="https://github.com/dannesz">
                    <img src="{{asset('images/github.png')}}" class="img-fluid" width="40px" alt="github">
                </a>
                <a href="https://www.youtube.com/channel/UC37zI6v4NrRIcqf2zmnmUgQ">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube">
                </a>
                <p class="mt-3">Copyright © 2021 DnnEsz, Page. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>