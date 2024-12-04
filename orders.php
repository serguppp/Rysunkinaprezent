<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Zamówienia - zamień zdjęcie w rysunek!" />
    <title>Zamówienia | Rysunki na prezent</title>

    <?php require_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/orders.css?v=1.1.0">
</head>

<body>
    <!-- Main Navigation -->
    <header>
        <?php require_once 'includes/navbar.php'; ?>
    </header>

    <!-- Main layout -->
    <main>
        <div class="container-fluid">
            <div class="mt-3">
                <h1 class="text-center inter-bold text-1">Zamówienia</h1>
            </div>  
            <div class="row">
                <div class="row orders text-center  gy-4 pb-4">
                    <div class="col-lg-6 col-sm-12 order-column">
                        <button class="btn btn-white text-1 order-button" id="howToOrderBtn" type="button"
                            data-mdb-ripple-init style="width:50%; background-color: #e1f3ff">
                            <strong>Realizacja zamówienia</strong>
                        </button>
                        <div class="order-content" id="howToOrderContent">
                            <div class="row gx-lg-2 gx-0">
                                <div class="col-lg-6 col-sm-12">
                                    <p class="mt-2"><strong>Zamówienie możesz złożyć:</strong></p>
                                    <ul>
                                        <li>
                                            w wiadomości prywatnej na Instagramie,
                                        </li>
                                        <li>
                                            w wiadomości prywatnej na Facebooku,
                                        </li>
                                        <li>
                                            kontaktując się na maila <strong>kontakt@rysunkinaprezent.com</strong>,
                                        </li>
                                        <li>
                                            w formularzu kontaktowym na stronie głównej.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <p class="mt-2"><strong>W wiadomości umieść:</strong></p>
                                    <ul>
                                        <li>
                                            zdjęcie lub kilka zdjęć,
                                        </li>
                                        <li>
                                            rodzaj rysunku (auto, zwierzę, karykaturka),
                                        </li>
                                        <li>
                                            format rysunku (A4, A3, A2, A1),
                                        </li>
                                        <li>
                                            ilość kartek oraz ilość postaci na jednej kartce,
                                        </li>
                                        <li>
                                            formę wysyłki (paczkomat, kurier, wysyłka zagraniczna).
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="order-footer">
                                <p><strong>W razie potrzeby udzielę Ci wskazówek, jak dobrać dobre zdjęcie oraz pomogę w
                                        aranżacji rysunku.</strong></p>
                                <p>W odpowiedzi na zamówienie wysyłam Ci cenę rysunku oraz czas realizacji rysunku. Po
                                    skończonej pracy wysyłam Ci zdjęcie rysunku do akceptacji.</p>
                                <p>Rysunek wykonuję po wpłaceniu 50% zadeklarowanej kwoty. Po akceptacji rysunku oraz
                                    wpłaceniu drugiej połowy kwoty, wysyłam paczkę.</p>
                            </div>
    
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12 package-column">
                        <button class="btn btn-white text-1 order-button" id="packageButton" type="button"
                            data-mdb-ripple-init style="width:50%; background-color: #e1f3ff;">
                            <strong>Wysyłka zamówienia</strong> </button>
                        <div class="package-content" id="packageContent">
                            <ul class="mt-2">
                                <li>
                                    Paczkę wysyłam po wpłaceniu drugiej połowy kwoty wybraną przez Ciebie metodą.
                                </li>
                                <li>
                                    Nie ponosisz żadnych kosztów wysyłki.
                                </li>
                                <li>
                                    W paczce dodatkowo otrzymasz antyramę, zapakowanie na prezent oraz mały prezent ode
                                    mnie :).
                                </li>
                            </ul>
                        </div>
                        <div class="order-content" id="packageContent">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-3 pricing">
                    <h2 class="text-1">Cennik</h2>
                    <div class="price-content mx-2">
                        <div class="row gx-2 gy-3">
                            <div class="col-lg-4 col-sm-12 inter-bold500">
                                <div>
                                    <button class="btn btn-lg btn-white text-1 car-button" id="packageButton"
                                        type="button" data-mdb-ripple-init
                                        style="width:50%; height:100%; background-color: #e1f3ff;">
                                        <span style="display:block;"><strong>Pojazdy</strong></span>
                                        <span><strong>czarnobiałe</strong></span>                                
                                    </div>

                                <div class="car-pricing py-2">
                                    <div class="text-center justify-content-center align-items-center ">
                                        <p class="text-1" style="margin:0;">Ilość obiektów</p>
                                    </div>

                                    <div class="row gx-1 mx-1 mt-2 justify-content-center ">
                                        <div class="pricing-col-a">
                                            Format
                                        </div>
                                        <div class="pricing-col-b">
                                            1
                                        </div>
                                        <div class="pricing-col-b">
                                            2
                                        </div>
                                        <div class="pricing-col-b">
                                            3
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A4
                                        </div>
                                        <div class="pricing-col-c">
                                            200zł
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A3
                                        </div>
                                        <div class="pricing-col-c">
                                            300zł
                                        </div>
                                        <div class="pricing-col-c">
                                            400zł
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A2
                                        </div>
                                        <div class="pricing-col-c">
                                            650zł
                                        </div>
                                        <div class="pricing-col-c">
                                            800zł
                                        </div>
                                        <div class="pricing-col-c">
                                            950zł
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 my-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A1
                                        </div>
                                        <div class="pricing-col-c">
                                            1000zł
                                        </div>
                                        <div class="pricing-col-c">
                                            1200zł
                                        </div>
                                        <div class="pricing-col-c">
                                            1400zł
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 inter-bold500">
                                <div>
                                    <button class="btn btn-lg btn-white text-1 car-button" id="packageButton"
                                        type="button" data-mdb-ripple-init
                                        style="width:50%; height:100%; background-color: #e1f3ff;">
                                        <strong>Karykaturki czarnobiałe</strong> </button>
                                </div>

                                <div class="car-pricing py-2">
                                    <div class="text-center justify-content-center align-items-center">
                                        <p class="text-1" style="margin:0;">Ilość obiektów</p>
                                    </div>

                                    <div class="row gx-1 mx-1 mt-2 justify-content-center ">
                                        <div class="pricing-col-a">
                                            Format
                                        </div>
                                        <div class="pricing-col-b">
                                            1
                                        </div>
                                        <div class="pricing-col-b">
                                            2
                                        </div>
                                        <div class="pricing-col-b">
                                            3
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A4
                                        </div>
                                        <div class="pricing-col-c">
                                            200zł
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A3
                                        </div>
                                        <div class="pricing-col-c">
                                            300zł
                                        </div>
                                        <div class="pricing-col-c">
                                            400zł
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A2
                                        </div>
                                        <div class="pricing-col-c">
                                            650zł
                                        </div>
                                        <div class="pricing-col-c">
                                            800zł
                                        </div>
                                        <div class="pricing-col-c">
                                            950zł
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 my-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A1
                                        </div>
                                        <div class="pricing-col-c">
                                            1000zł
                                        </div>
                                        <div class="pricing-col-c">
                                            1200zł
                                        </div>
                                        <div class="pricing-col-c">
                                            1400zł
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 inter-bold500">
                                <div>
                                    <button class="btn btn-lg btn-white text-1 car-button" id="packageButton"
                                        type="button" data-mdb-ripple-init
                                        style="width:50%; height:100%; background-color: #e1f3ff;">
                                        <span style="display:block;"><strong>Zwierzęta</strong></span>
                                        <span><strong>czarnobiałe</strong></span>
                                </div>

                                <div class="car-pricing py-2">
                                    <div class="text-center justify-content-center align-items-center">
                                        <p class="text-1" style="margin:0;">Ilość obiektów</p>
                                    </div>

                                    <div class="row gx-1 mx-1 mt-2 justify-content-center ">
                                        <div class="pricing-col-a">
                                            Format
                                        </div>
                                        <div class="pricing-col-b">
                                            1
                                        </div>
                                        <div class="pricing-col-b">
                                            2
                                        </div>
                                        <div class="pricing-col-b">
                                            3
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A4
                                        </div>
                                        <div class="pricing-col-c">
                                            200zł
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A3
                                        </div>
                                        <div class="pricing-col-c">
                                            300zł
                                        </div>
                                        <div class="pricing-col-c">
                                            400zł
                                        </div>
                                        <div class="pricing-col-c">
                                            -
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 mt-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A2
                                        </div>
                                        <div class="pricing-col-c">
                                            650zł
                                        </div>
                                        <div class="pricing-col-c">
                                            800zł
                                        </div>
                                        <div class="pricing-col-c">
                                            950zł
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-1 mx-1 my-2 justify-content-center align-items-center text-center">
                                        <div class="pricing-col-b">
                                            A1
                                        </div>
                                        <div class="pricing-col-c">
                                            1000zł
                                        </div>
                                        <div class="pricing-col-c">
                                            1200zł
                                        </div>
                                        <div class="pricing-col-c">
                                            1400zł
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-3">
                    <h2 class="text-1">Opinie</h2>
                    <p>Wkrótce...</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <?php require_once 'includes/footer.php'; ?>
    </footer>

    <!-- MDB -->
    <script>
        document.getElementById("howToOrderBtn").addEventListener("click", function () {
            var content = document.getElementById("howToOrderContent");
            if (content.style.display == "none") {
                content.style.display = "block";
            }
            else if (content.style.display == "block") {
                content.style.display = "none";
            }
            else {
                content.style.display = "block";
            }
        });
    </script>

    <script>
        document.getElementById("packageButton").addEventListener("click", function () {
            var content = document.getElementById("packageContent");
            if (content.style.display == "none") {
                content.style.display = "block";
            }
            else if (content.style.display == "block") {
                content.style.display = "none";
            }
            else {
                content.style.display = "block";
            }
        });
    </script>


    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>

</html>