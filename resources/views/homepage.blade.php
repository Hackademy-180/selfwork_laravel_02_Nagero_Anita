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
    <style>
        body {
            background-color: aquamarine;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
        }

        /* PALETTE COLORI */
        :root {

            --gr-dk: green;
            --lme: lime;
            --p: purple;
            --blk: black;
            --wht: white;
            --bl: blue;
        }

        /* CLASSI UTILITY */
        .bg-gr-dk {
            background-color: var(--gr-dk);
        }


        .bg-lme {
            background-color: var(--lme);
        }

        .bg-p {
            background-color: var(--p);
        }

        .bg-blk {
            background-color: var(--blk);
        }

        .bg-wht {
            background-color: var(--wht);
        }

        .bg-bl {
            background-color: var(--bl);
        }

        /* TESTI */

        .txt-gr-dk {
            color: var(--gr-dk);
        }

        .txt-lme {
            color: var(--lme);
        }

        .txt-p {
            color: var(--p);
        }

        .txt-bl {
            color: var(--bl);
        }

        .txt-wht {
            color: var(--wht);
        }

        /* card */

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

            @foreach($argomenti as $argomento)
            <div class="col-12 col-md-6">
                <div class="card h-100 p-3 g-4">
                    <h5 class="card-title fw-bold txt-p"->{{$argomento['title']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$argomento['id']}}</h6>

                    <p class="card text p-4">{{$argomento['description']}}</p>

                    <a href="#" class="btn btn-primary mt-auto">Vedi Dettagli</a>
                </div>
            </div>
            <!-- SEZIONE PAGINA PER ARGOMENTI TARTTATI NEL MIO BLOG  -->
            @endforeach

        </section>
    </main>










</body>

</html>