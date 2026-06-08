<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA DETTAGLIO</title>



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

    <!-- collego bootstrap -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->
    <div class="container mt-4">
        <div class="row g-3">



            <!-- CARD DETTAGLIO COLLEGATA AD ARTICLE CONTROLLER; 
            
            -->
            @foreach ($articles as $article)
            <div class="col-md-4 d-flex justify-content-center mb-4">

                <div class="card h-100 text-bg-primary">

                    <img src=" https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=1489&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded-start" alt="Image">


                    <div class="card-body">
                        <h5 class="card-title"> {{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['content'] }}</p>

                    </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>


    <div class="container mt-4">
        <div class="row g-3">



            <!-- CARD DETTAGLIO COLLEGATA AD ARTICLE CONTROLLER; 
            
            -->
            @foreach ($detailsArticles as $detail)
            <div class="col-md-4 d-flex justify-content-center mb-4">

                <div class="card h-100 text-bg-primary">

                    <img src=" https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=1489&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded-start" alt="Image">


                    <div class="card-body">
                        <h5 class="card-title"> {{ $detail['description'] }}</h5>
                        <p class="card-text">{{ $detail['content'] }}</p>

                    </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>













</body>

</html>