<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Galeria rysunków - zobacz nasze wyjątkowe prace!" />
    <title>Galeria | Rysunki na prezent</title>

    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="css/gallery.css?v=1.1.0">
</head>

<body>
    <!-- Main Navigation -->
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <!-- Main layout -->
    <main>
        <div class="container-fluid mb-4 mb-lg-4">
            <div class="my-2 my-lg-4">
                <h1 class="text-center inter-bold text-1">Galeria</h1>
            </div>
            <div class="row gx-2 gy-5 gy-lg-0">
                <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-init data-mdb-ripple-color="black">
                            <img src="img/zw-1-t.png" class="img-fluid" alt="Rysunki zwierząt" />
                            <a href="animalgallery.php">
                                <div class="mask" style="background-color: rgba(225, 243, 255, 0.35);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="z-index:1">
                            <h5 class="card-title text-center text-black">Rysunki zwierząt</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-init data-mdb-ripple-color="black">
                            <img src="img/auto-2-t.png" class="img-fluid" alt="Rysunki zwierząt" />
                            <a href="cargallery.php">
                                <div class="mask" style="background-color: rgba(225, 243, 255, 0.35);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="z-index:1">
                            <h5 class="card-title text-center text-black">Rysunki aut</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-init data-mdb-ripple-color="black">
                            <img src="img/kar-poz-1-t.png" class="img-fluid" alt="Rysunki zwierząt" />
                            <a href="caricaturegallery.php">
                                <div class="mask" style="background-color: rgba(225, 243, 255, 0.35);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="z-index:1">
                            <h5 class="card-title text-center text-black">Karykaturki</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>

</html>