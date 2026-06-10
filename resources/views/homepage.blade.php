<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>


    <!-- CSS DA FILE PERSONALE -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- LINK DI BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">




    <!-- STILI TESTI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: aquamarine !important;
        }

        h1,
        .h1 {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            font-family: "Orbitron", sans-serif;
        }

        /* LOGO */

        .LOGO {
            margin: auto;
            height: 40px;
            width: 40px;
        }

        /* card */

        .card {
            background-color: wheat;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
        }

        /* BOTTONE CARD */
        .btn-details {
            border: 3px;
            border-style: outset green;
            border-radius: 50px;
        }

        .card {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 1s forwards;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->


    <div class="container">
        <header class="text-center mb-5">

            <!-- TITOLONE DI PAGINA -->
            <h1 class="fw-bold display-3 txt-bl">Benvenuto nella Homepage!</h1>
            <h2>Inizia ed impara il Web</h2>
            <br>
            <h2>ASPETTI DEL FRONT-END = LATO CLIENT</h2>
            <h3>ASPETTI DEL BACK-END = LATO SERVER</h3>


            <div class="p-2">About-us ( chi-siamo ) </div>

            <div class="p-2">Articoli d'Argomenti</div>

            <div class="p-2">Servizi & Contatti</div>

        </header>


        <!-- inizio MAIN -->
        <main class="container mb-5">
            <section class="row g-2">

                @foreach($detailsArticles as $argomento)
                <div class="col-12 col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title fw-bold txt-p">{{$argomento['description']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$argomento['id']}}</h6>

                        <p class="card text p-4">{{$argomento['description']}}</p>

                        <a href="{{ $argomento['link'] }}" class="btn btn-details mt-auto"> Vedi Dettagli</a>
                    </div>
                </div>
                <!-- SEZIONE PAGINA PER ARGOMENTI TARTTATI NEL MIO BLOG  -->
                @endforeach

            </section>


            <!-- LINKS OF PAGE -->


            <p class="fw-bold d-flex mt-5 justify-content-center">Documentazione ufficiale</p>


            <li>

                <a href="https://developer.mozilla.org/" target="_blank" class="text-primary fw-bold">
                    MDN Web Docs
                </a>

            <li>
                <a href="https://getbootstrap.com/docs/5.3/components/card/#about" class="text-primary fw-bold">Bootstrap</a>
            </li>


            <li>

                <a href="https://www.jetbrains.com/ai/" class="text-primary fw-bold">Jetbrains</a>
            </li>

            </li>

        </main>


        <!-- CREO LINKS SEPARATI/ UNA RIGA MOSTRERA PERCORSO NELLA STRUTTURA SITO -->
        <!-- BREADC. PER AVERE POSSIBILI SLITTAMENTI VIA LINKS -->






        <!-- KIT FONT-AWESOME XIKONS -->
        <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
        <!-- scpt bts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>

</html>