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







</body>

</html>