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

    <style>
        body {
            backdrop-filter: blur(10px);
            background-color: aquamarine !important;
        }

        h1,
        .h1 {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            font-family: "Orbitron", sans-serif;
        }

        .navbar {
            backdrop-filter: blur(10px);
        }

        .card {

            width: 300px;
            transition: transform 0.2s ease;
        }


        .border-red-custom {
            border: 3px double red !important;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->

    <header class="container text-center">
        <h1 class="display-4 fw-bold txt-p">Servizi Utili</h1>
        <p>
            Contattaci; Poichè gli argomenti, son accessibili per chiunque!
        </p>
    </header>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-4 d-flex justify-content-center">
                <div class="card border border-danger border-4 h-100 p-4">
                    <div class=" card-title">Opzioni di servizi disponibili-</div>

                    <ul class="list-unstyled mt-3">
                        <li class="p-2 border-bottom fw-bold">Argomento 1 - HTML con VSC</li>
                        <li class="p-2 border-bottom fw-bold">Argomento 2 - JAVASCRIPT</li>
                        <li class="p-2 fw-bold">Argomento 3 - PHP e Laravel</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- CARDS -->
    <h2 class="text-center mb-4 p-4 g-4">I nostri Argomenti studio:</h2>

    <div class="container mb-4  d-flex justify-content-center">
        <div class="row g-3">

            <!-- ciclare argomenti e metterci da publicController le funzioni a collegamento -->
            @foreach($argomenti as $index => $argomento)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card h-100 bg-dark ">

                    <div class="card-body d-flex justify-content-center p-4">


                        <h5 class="card-title d-flex text-warning py-2">{{ $argomento['title'] }}</h5>

                        <p class="card-text  d-flex text-center text-warning p-2 "> {{ $argomento['content'] }}</p>

                        <div class="mt-auto d-flex justify-content-center">

                            <!-- Info -->
                            <a href="{{$argomento['info_url']}}" class="btn btn-sm btn-info display:flex">Info</a>

                            <!-- Dettagli -->

                            <a href="{{ $argomento['info_url'] }}" class="btn btn-sm btn-primary">
                                Dettagli
                            </a>

                        </div>


                    </div>
                </div>

            </div>

            @endforeach
        </div>
    </div>
    <!-- aggiunta elemento -->
    <breadcrumb />
    <!-- FOOTER -->
    <x-footer />
    <!-- FINE FOOTER - VIA LINKS PER GLI SCRIPT -->


    <!-- KIT FONT-AWESOME XIKONS -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
    <!-- scpt bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>