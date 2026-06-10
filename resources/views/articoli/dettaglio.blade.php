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

    <style>
        body {
            background-color: aquamarine !important;
        }

        h1,
        .h1 {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            font-family: "Orbitron", sans-serif;
        }



        .card-body {

            object-fit: cover;
            min-height: 250px;
            background-color: palegoldenrod;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
        }
    </style>

    <!-- collego LINK bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->


    <div class="container mt-3 d-flex justify-content-center mb-2">

        <div class="row g-2">


            <!-- CARD DETTAGLIO COLLEGATA AD ARTICLE CONTROLLER; 
            
            -->
            <div class="container mt-3">
                <div class="row g-4">
                    @foreach ($articles as $article)
                    <div class="col-12 col-md-3">
                        <div class="col-12 card w-100">
                            <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=500" class="card-img-top" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article['title'] }}</h5>
                                <p class="card-text">{{ $article['content'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <!-- HOME -->
                    <li class="breadcrumb-item">
                        <a href="/homepage">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>

                    <!-- JS -->
                    <li class="breadcrumb-item">
                        <a href="articoli/js">
                            <i class="fa-brands fa-js"></i> JS
                        </a>
                    </li>

                    <!-- CSS -->
                    <li class="breadcrumb-item">
                        <a href="articoli/css">
                            <i class="fa-brands fa-css3-alt"></i> CSS
                        </a>
                    </li>

                    <!-- PHP -->
                    <li class="breadcrumb-item">
                        <a href="articoli/php">
                            <i class="fa-brands fa-php"></i> PHP
                        </a>
                    </li>

                    <!-- LARAVEL (attivo) -->
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa-brands fa-laravel"></i> Laravel
                    </li>

                </ol>
            </nav>




            <div class="container mt-5">
                <div class="row g-4">
                    @foreach ($detailsArticles as $detail)
                    <div class="col-12 col-md-3">
                        <div class="card w-100">
                            <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=500" class="card-img-top" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $detail['description'] }}</h5>
                                <p class="card-text">{{ $detail['content'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- ALTRI DETTAGLI  PER ARGOMENTI -->


            <!-- KIT FONT-AWESOME XIKONS -->
            <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>

            <!-- scpt bts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>







            <!-- bts script -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>