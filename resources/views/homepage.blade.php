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
            padding: 0;
            min-height: 100vh;
            margin: 0;
            background-color: aquamarine !important;
        }


        h1,
        .h1 {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            font-family: "Orbitron", sans-serif;
        }



        /* BOTTONE CARD */
        .btn-details {
            border: 3px;
            border-style: outset green;
            border-radius: 50px;
        }


        /*  CARD STILIZZATE */


        .card-container {
            display: flex;
            flex-wrap: wrap;
            /* Obbliga ad andare a capo se non c'è spazio */
            gap: 20px;
            justify-content: flex-start;
        }

        .custom-card {
            display: flex;
            box-sizing: border-box;
            flex-direction: column;
            width: calc(50% - 20px);
            /* 2 card per riga */
            background-color: yellow;
            padding: 20px;
            border: 1px solid gray;
            border-radius: 10px;
        }

        .btn-details {
            margin-top: auto;
            padding: 10px;
            border: 3px outset green;
            text-align: center;
            text-decoration: none;
            color: black;
            border-radius: 50px;
            display: inline-block;
        }



        .btn-details {
            margin-top: auto;
            padding: 10px;
            border: 3px outset green;
            text-align: center;
            text-decoration: none;
            color: black;
            border-radius: 50px;
            display: inline-block;
        }



        /* FOOTER */
        footer {
            margin: 0;
            padding: 20px 0;
            width: 100%;
            border-top: 1px solid #000;
            position: absolute;
            text-align: center;
            color: wheat;
            background-color: wheat;
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


        <main class="container-fluid my-5">
            <div class="card-container">
                @foreach($argomenti as $argomento)
                <div class="custom-card">
                    <h5 class="fw-bold">{{$argomento['description']}}</h5>
                    <h6 class="text-muted">{{$argomento['id']}}</h6>
                    <p>{{$argomento['description']}}</p>

                    <a href="{{ $argomento['info_url'] }}" class="btn-details">Vedi Dettagli</a>
                </div>
                @endforeach
            </div>




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





        <!-- aggiunta elemento -->
        <breadcrumb />





        <!-- KIT FONT-AWESOME XIKONS -->
        <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
        <!-- scpt bts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>

</html>