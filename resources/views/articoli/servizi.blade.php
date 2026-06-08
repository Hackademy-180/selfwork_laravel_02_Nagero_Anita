<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serviceSt</title>


    <!-- LINK CSS PERSONALE -->
    <link rel="stylesheet" href="style.css">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        body {
            background-color: aquamarine;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
        }




        .card {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
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
            <div class="col-12 col-md-8">
                <div class="card h-100 p-4">
                    <div class="card-title">Opzioni di servizi disponibili-</div>

                    <ul class="list-unstyled mt-3">
                        <li class="p-2 border-bottom">Argomento 1 - HTML con VSC</li>
                        <li class="p-2 border-bottom">Argomento 2 - JAVASCRIPT</li>
                        <li class="p-2">Argomento 3 - PHP e Laravel</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- CARDS -->
    <h2 class="text-center mb-4">I nostri Argomenti studio:</h2>

    <div class="container mb-4  d-flex justify-content-center">
        <div class="row g-3">

            <!-- ciclare argomenti e metterci da publicController le funzioni a collegamento -->
            @foreach($argomenti as $argomento)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column p-4">

               
                        <h5 class="card-title mb-2 py-2">{{ $argomento['title'] }}</h5>

                        <p class="card-text mb-2 py-2"> {{ $argomento['content'] }}</p>

                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-outline-primary">Info</a>
                            <a href="#" class="btn btn-sm btn-primary">Dettagli</a>
                        </div>


                    </div>
                </div>

            </div>

            @endforeach
        </div>
    </div>



</body>

</html>