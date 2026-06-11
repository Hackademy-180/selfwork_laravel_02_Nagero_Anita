<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag_chi-siamo</title>

    <!-- MIO CSS PER LO STILE  -->
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


        .card {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
        }

        /* CSS PER ICONE PAGINE EXTRA */
        .breadcrumb a,
        .breadcrumb i {
            transition: 0.3s;
        }

        .breadcrumb a:hover {
            color: #3b0a59;
        }

        .breadcrumb a:hover i {
            transform: scale(1.4);
            color: #5a0f8a;
        }
    </style>

</head>


<!-- INIZIO PAGINAZIONE BODY -->

<body>



    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->


    <main class="container my-5">

        <!-- CARD ESPLICATIVA PAGINA DI CHI-SIAMO -->

        <section class="mb-5">
            <h1 class="display-4 fw-bold mb-4">Chi Siamo</h1>
            <div class="card p-4 shadow-sm border-0">
                <h3 class="fw-bold text-primary">Studenti, Maestri, Free-lancer</h3>
                <h2 class="h4">{{$students['name']}}</h2>
                <p class="text-muted">Ruolo: {{$students['content']}}</p>
            </div>
        </section>




        <hr>

        <section>
            <h3 class="mb-4 text-center">I nostri Insegnanti</h3>

            <div class="row g-4">

                @foreach($maestri as $teacher)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-4-red">
                        <div class="card-body p-3">

                            <h4 class="card-title">{{$teacher['name']}}</h4>
                            <p class="card-text">
                                <strong>Specializzazione:</strong> {{ $teacher['subject'] }}
                            </p>
                            <p class="card-text">Struttura WebSite-> Interazioni;</p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>



            </div>
        </section>







    </main>
    <h4>LE NOSTRE PAGINE OFFERTE</h4>
    <i class="fa-solid fa-face-smile ms-3 text-center fs-2 text-danger"></i>

    <!-- stacco per links breadc. da bts -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold">

            <!-- HOME -->
            <li class="breadcrumb-item">
                <a href="articoli/html" class="text-warning text-decoration-none">HTML
                    <i class="fa-solid fa-code html"></i>
                </a>
            </li>
            <!-- JS -->
            <li class="breadcrumb-item">
                <a href="articoli/js" class="text-warning text-decoration-none">
                    <i class=" fa-brands fa-js fa-lg me-1"></i> JS
                </a>
            </li>

            <!-- CSS -->
            <li class="breadcrumb-item">
                <a href="articoli/css" class="text-warning text-decoration-none">
                    <i class=" fa-brands fa-css3-alt fa-lg me-1"></i> CSS
                </a>
            </li>

            <!-- PHP -->
            <li class="breadcrumb-item">
                <a href="articoli/php" class="text-warning text-decoration-none">
                    <i class=" fa-brands fa-php fa-lg me-1"></i> PHP
                </a>
            </li>

            <!-- LARAVEL (attivo) -->
            <li class="breadcrumb-item active" aria-current="page">
                <i class="fa-brands fa-laravel"></i> Laravel
            </li>

        </ol>
    </nav>


    <!-- KIT FONT-AWESOME XIKONS -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
    <!-- scpt bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>

</html>