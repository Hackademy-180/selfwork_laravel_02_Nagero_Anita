<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serviceSt</title>



    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <!-- STILI TESTI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<!-- FINE STILE DI PAGINA  -->

<body>


    <x-navbar />

    <div class="container my-5">
        <h1 class="display-3 text-center">I nostri Servizi</h1>

        <div class="row">
            @foreach ($servizi as $servizio)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $servizio['titolo'] }}</h5>

                        <p class="card-text">
                            {{ $servizio['content'] }}
                        </p>



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






    <!-- KIT FONT-AWESOME XIKONS -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
    <!-- scpt bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>