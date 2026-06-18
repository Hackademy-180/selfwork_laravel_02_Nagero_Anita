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
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <!-- NAVBAR -->


    <x-navbar />

    <div class="container my-5">
        @if($articolo)
        <h1 class="text-center mb-5">{{ $articolo['titolo'] }}</h1>

        <!-- ROW: La riga che contiene le colonne -->
        <div class="row justify-content-center">

            <!-- COL: La colonna che definisce la larghezza della card -->
            <!-- col-12 (mobile), col-md-8 (tablet), col-lg-6 (desktop) -->
            <div class="col-12 col-md-8 col-lg-6">

                <div class="card shadow">
                    <img
                        src="{{ asset($articolo['img']) }}"
                        class="card-img-top img-fluid"
                        alt="{{ $articolo['titolo'] }}">


                    <div class="card-body">
                        <h5 class="card-title">{{ $articolo['titolo'] }}</h5>
                        <p class="card-text">{{ $articolo['descrizione'] }}</p>
                        <hr>
                        <h6>Argomenti trattati:</h6>
                        <ul class="list-group list-group-flush">
                            @foreach($articolo['argomenti'] as $argomento)
                            <li class="list-group-item">{{ $argomento }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('servizi') }}" class="btn btn-secondary">Torna ai Servizi</a>
        </div>
        @else
        <!-- ... resto del codice errore ... -->
        @endif
    </div>

    <!-- Questo link ora punta correttamente al metodo dettaglio nel controller -->


    <x-footer />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>

    <!-- bts script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>