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
            backdrop-filter: blur(10px);
            background-color: aquamarine !important;
        }


        .navbar {
            backdrop-filter: blur(10px);
        }

        h1,
        .h1 {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            font-family: "Orbitron", sans-serif;
        }


        /* CSS PER LE MIE CARD PAGINA */
        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.12s ease;
        }



        .card-body {

            object-fit: cover;
            min-height: 200px;

        }


        .card:hover {
            transform: translateY(-2px);

        }

      
    </style>

    <!-- collego LINK bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->


    <main class="container my-4">

        <div class="row g-3">

            @foreach ($articles as $article)

            <!-- CARD DETTAGLIO COLLEGATA AD ARTICLE CONTROLLER; -->

            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=500" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['content'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      


        <div class="row g-4">
            @foreach ($detailsArticles as $detail)
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=500" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $detail['description'] }}</h5>
                        <p class="card-text">{{ $detail['content'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>






    <!-- FOOTER -->
    <x-footer />
    <!-- FINE FOOTER - VIA LINKS PER GLI SCRIPT -->


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>

    <!-- bts script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>