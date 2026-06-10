<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DETAILS</title>


    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <!-- STILI TESTI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        /*sfondo  */
        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset("/media/imageRand/3.jpg")}}');
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
    <!-- NAVBAR -->
    <x-navbar />
    <!-- FINE NAVBAR -->


    <!-- DIV PER LO SFONDO -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>


    <!-- BREADCRUMBS BY BOOTSTRAP FOR MORE WEBSITES -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">

            <!-- HOME -->
            <li class="breadcrumb-item">
                <a href="/">
                    <i class="fa-solid fa-house"></i> Home
                </a>
            </li>
            <!-- HTML -->

            <li class="breadcrumb-item">
                <a href="articoli/html">
                    <i class="fa-brands fa-js"></i> HTML
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





    <!-- script bts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>