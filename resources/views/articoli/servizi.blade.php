


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






    <div class="container-fuid my-5 p-4 vh-100">
<h1 class="display-3 text-center ">I nostri Servizi</h1>
        
        <div class="row g-3">
            @foreach ($servizi as $servizio)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $servizio['titolo'] }}</h5>
                        
                        <p class="card-text">
                            {{ $servizio['content'] }}
                        </p>
                        
                    {{-- Articolo a dettaglio; --}}
                        <a href="{{ route('articolo', ['id' => $servizio['id']]) }}">
                            Vai al dettaglio
                        </a>
                        
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





<!-- font awesome -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
    
    <!-- bts script -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


    </body>
    
    </html>




