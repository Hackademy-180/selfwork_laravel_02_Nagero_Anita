
<!DOCTYPE html>
<html lang="en">

<head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>PAGINA DETTAGLIO</title>

                <!-- STILI TESTI -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!-- collego LINK bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- css personale-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
   
   {{-- NAVBAR --}}
   <nav class="navbar navbar-expand-lg bg-success navbar-dark">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
            <img src="/media/logo1.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            Il Mio Blog
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">
                        Homepage
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chi-siamo') }}">
                        Chi Siamo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servizi') }}">
                        Servizi
                    </a>
                </li>

                <li class="nav-item d-flex align-items-center ms-2">
                    <i class="fa-solid fa-code text-warning fs-3"></i>
                </li>

            </ul>
        </div>

    </div>
</nav>

{{-- FINE NAVBAR --}}
   
   

{{-- FINE NAVBAR INIZIO CORPO PAGINA --}}
    <h1 class="text-center">Homepage</h1>
    
    <div class="container p-5 my-4 vh-100">
        <div class="row g-4 d-flex justify-content-center ">
            
            
            @foreach ($pagine as $pagina)
            
            <div class="col-12 col-md-4">
                
                <!-- card da bootstarap -->
                <!-- nella pagina home page , semplici card dinamiche   -->
                <div class="card card-glass" style="width: 18rem;">
                    <div class="card-body bg-danger ">

                        {{-- titolo e descrizione della card --}}
                        <h5 class="card-title text-center fw-bold">Card: {{ $pagina['titolo'] }}</h5>
                        
                        <p class="card-text text-center mb-2 fw-bold">{{ $pagina['descrizione'] }}</p>

                        {{-- Link --}}
                        <a href="https://developer.mozilla.org/en-US/" class="card-link">Card link</a>
                        
          
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>  
</div>

{{-- footer --}}


<footer class="bg-danger text-center py-4 m-0 mt-5 w-100">
    <p class="text-success fw-bold">
        Seguici sui Social e richiedi info
    </p>

    <div class="footer contattiSocial">
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
    </div>
</footer>


<!-- font awesome -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
    
    <!-- bts script -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


    </body>
    
    </html>
