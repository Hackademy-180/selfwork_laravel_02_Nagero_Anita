<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- css -->

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>



    <x-navbar />

    <h1>Homepage</h1>

    <div class="container p-5 rounded">
        <div class="row g-4 d-flex justify-content-center gap-4">


            @foreach ($pagine as $pagina)



            <div class="col-12 col-md-4">

                <!-- card interna -->
                <!-- nella pagina home page , semplici card, il link riconduce semplice risolrsa esterna; Array da public controller, per quanto le mie card di prima pagina, card dinamiche   -->
                <div class="card card-glass" style="width: 18rem;">
                    <div class="card-body bg-danger ">
                        <h5 class="card-title text-center fw-bold">Card: {{ $pagina['titolo'] }}</h5>
                      
                        <p class="card-text text-center mb-2 fw-bold">{{ $pagina['descrizione'] }}</p>
                        <a href="https://developer.mozilla.org/en-US/" class="card-link">Card link</a>
                        

                    </div>
                </div>


            </div>

            
            
            @endforeach
        </div>

    </div>

    </div>


  

    <!-- SCRIPT -->
    <!-- bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- ikons -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>
</body>

</html>