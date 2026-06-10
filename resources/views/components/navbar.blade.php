    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('homepage' ) }}">Il Mio Blog</a>

            <img src="/media/logo1.jpg" alt="logo-img" width="40" height="40" class="img-fluid rounded LOGO">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <img src="/media/logo.jpg" alt="logo-img" width="40" height="40" class="img-fluid margin-auto rounded LOGO">
                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">Homepage</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">Chi Siamo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articoli.index') }}">tutti Articoli</a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <!-- FINE_NAVBAR -->