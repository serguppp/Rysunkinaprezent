<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description"
        content="Rysunki na prezent - zamień zdjęcie w wyjątkowy upominek. Skontaktuj się z nami!" />
    <link rel="canonical" href="https://www.rysunkinaprezent.com" />
    <title>Rysunki na prezent</title>

    <?php require_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/index.css?v=1.1.0">
</head>

<body>
    <!--Main Navigation-->
    <header>
        <?php require_once 'includes/navbar.php'; ?>
    </header>

    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <section>
            <div class="container-fluid">
                <div class="welcome-slide row mx-lg-2 mx-0">
                    <!-- First column -->
                    <div class="col-lg-6 welcome-content d-flex flex-column justify-content-center align-items-center">
                        <div id="welcomeContent" class="welcome-content-page row">
                            <h2 class="text-1 inter-bold400">Michał Mortek</h2>
                            <h1 class="text-1 inter-bold text-uppercase">
                                <span class="break">Rysunki</span> na prezent
                            </h1>
                            <button id="showAboutBtn" class="btn text-white btn-lg"
                                style="background-color: #28375e; width:auto; " ; type="button" data-mdb-ripple-init>O
                                mnie</button>
                        </div>
                        <!-- Hidden "O mnie" content -->
                        <div id="aboutContent" class="row about-content justify-content-center align-items-center">
                            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                <h3 class="text-1 inter-bold">O mnie</h3>
                                <p class="text-1 inter-bold500">Jestem Michał, mam 21 lat, uwielbiam rysować od
                                    kiedy
                                    pamiętam. Przekształcam
                                    chwile uchwycone na zdjęciach w wyjątkowe rysunki. Każde zamówienie
                                    traktuję
                                    indywidualnie, aby oddać unikalny charakter Twojego zdjęcia.</p>

                                <button id="hideAboutBtn" class="btn text-white btn-lg" style="background-color: #28375e; width:auto;" ;
                                    data-mdb-ripple-init>Schowaj</button>
                            </div>
                            <div class="col-5 justify-content-center align-items-center text-center" style="padding:0;">
                                <img class="face-img" src="img/face.png" alt="Face">
                            </div>
                        </div>
                    </div>
                    <!-- First column -->

                    <!-- Second column-->
                    <div class="col-lg-6 mb-5 mb-lg-0 d-flex justify-content-center align-items-center ">
                        <section class="container-fluid" id="offer">
                            <h3 class="fw-bold text-center text-white mt-4">Oferta</h3>
                            <div class="row ">
                                <div id="offerCarousel" class="carousel" data-mdb-carousel-init ride="false">
                                    <div class="carousel-inner mb-3">
                                        <div class="carousel-item active" data-mdb-interval="3000">
                                            <div class="card">
                                                <img class="d-block w-100" src="img/zw-1-t.png" alt="Rysunki zwierzat">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center text-black">Rysunki zwierząt</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-mdb-interval="3000">
                                            <div class="card">
                                                <img class="d-block w-100" src="img/auto-1-t.png" alt="Rysunki aut">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center text-black">Rysunki aut</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-mdb-interval="3000">
                                            <div class="card">
                                                <img class="d-block w-100" src="img/kar-poz-3-t.png" alt="Karykaturki">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center text-black">Karykaturki</h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#offerCarousel"
                                        data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#offerCarousel"
                                        data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Second column-->
                </div>
            </div>
        </section>
        <!-- Offer section-->

        <!-- contact section-->
        <section class="container-fluid" id="contact">
            <div class="bg-image"> </div>
            <div class="row form-style d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-12 col-md-8 d-flex justify-content-center align-items-center flex-column"
                    style="min-height: 100%;">
                    <h3 class="text-center inter-bold text-1">Skontaktuj się ze mną</h3>
                    <p class="text-center inter-bold text-1">Wiadomości możesz także kierować na maila:
                        kontakt@rysunkinaprezent.com </p>
                    <form id="contactForm" class="form">
                        <!-- Name input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="text" id="nameForm" name="name" class="form-control bg-white" />
                            <label class="form-label" for="nameForm">Imię</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="email" id="emailForm" name="email" class="form-control bg-white" />
                            <label class="form-label" for="emailForm">Adres e-mail</label>
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <textarea class="form-control bg-white" name="message" id="messageForm" rows="4"></textarea>
                            <label class="form-label" for="messageForm">Wiadomość</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init
                            style="background-color: #28375e;">Wyślij</button>
                    </form>

                    <p class="mx-5 text-1 justify-content-around" style="font-size:1rem"><small>Administratorem danych
                            zawartych w korespondencji e-mail jest Michał Mortek, prowadzący działalność pod nazwą
                            "Rysunki na prezent Michał Mortek". Wysyłając wiadomość, przekazujesz mi adres e-mail oraz
                            inne dane zawarte w treści wiadomości. Szczegóły dotyczące przetwarzania wiadomości dostępne
                            są w polityce prywatności osadzonej na tej stronie.</small></p>
                </div>
            </div>
        </section>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>
        <?php require_once 'includes/footer.php'; ?>
    </footer>
    <!--Footer-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>

    <!-- Carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let multipleCardCarousel = document.querySelector("#offerCarousel");

            if (window.matchMedia("(min-width: 768px)").matches) {
                let carouselInner = document.querySelector(".carousel-inner");
                let cardWidth = document.querySelector(".carousel-item").offsetWidth;
                let carouselWidth = carouselInner.scrollWidth;
                let scrollPosition = 0;

                document.querySelector("#offerCarousel .carousel-control-next").addEventListener("click", function() {
                    if (scrollPosition < (carouselWidth - carouselInner.clientWidth)) {
                        scrollPosition += cardWidth;
                    } else {
                        scrollPosition = 0;
                    }
                    carouselInner.scroll({
                        left: scrollPosition,
                        behavior: 'smooth'
                    });
                });

                document.querySelector("#offerCarousel .carousel-control-prev").addEventListener("click", function() {
                    if (scrollPosition > 0) {
                        scrollPosition -= cardWidth;
                    } else {
                        scrollPosition = carouselWidth - carouselInner.clientWidth;
                    }
                    carouselInner.scroll({
                        left: scrollPosition,
                        behavior: 'smooth'
                    });
                });
            } else {
                multipleCardCarousel.classList.add("slide");
            }
        });
    </script>

    <!-- About me -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const aboutContent = document.getElementById('aboutContent');
            const showAboutBtn = document.getElementById('showAboutBtn');
            const hideAboutBtn = document.getElementById('hideAboutBtn');
            const welcomeContent = document.getElementById('welcomeContent');

            showAboutBtn.addEventListener('click', function() {
                welcomeContent.classList.add('hide');
                aboutContent.classList.add('show');
            });

            hideAboutBtn.addEventListener('click', function() {
                aboutContent.classList.remove('show');
                welcomeContent.classList.remove('hide');

            });
        });
    </script>

    <!-- Form -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");

            if (form) {
                form.addEventListener("submit", function(event) {
                    event.preventDefault();

                    let formData = new FormData(this);

                    fetch("includes/send_email.php", {
                            method: "POST",
                            body: formData
                        })
                        .then(response => response.text())
                        .then(result => {
                            if (result.trim() === "success") {
                                alert("Wiadomość została wysłana pomyślnie!");
                            } else {
                                alert(result);
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                            alert("Wystąpił błąd. Proszę spróbować później.");
                        });
                });
            } else {
                console.error("Form element not found");
            }
        });
    </script>

    <!-- Contact scroll -->
    <script>
        if (window.location.hash === "#contact") {
            window.onload = function() {
                document.getElementById("contact").scrollIntoView();
            };
        }
    </script>

</body>

</html>