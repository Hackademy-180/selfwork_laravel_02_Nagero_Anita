<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS_PAGE</title>


    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <!-- STILI TESTI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!-- STILE DI PAGINA -->

    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh;
        }


        /*sfondo  */
        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset("/media/imageRand/2.jpg")}}');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }

        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            /* 0.7 è la trasparenza (da 0 a 1) */
            z-index: -1;
        }
    </style>
</head>

<body>


    <!-- DIV PER LO SFONDO -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>


    <!-- INIZIO PAGINAZIONE -->

    <main>

        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                @foreach($cards as $card)
                <div class="col">
                    <div class="card" style="max-width: 18rem;">
                        <div class="card-header">{{ $card['header'] }}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                            <p class="card-text">{{ $card['text'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        
    </main>




    <!-- script bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
</body>

</html>