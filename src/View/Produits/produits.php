
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./entrees.css" />
    <title>Chez Hibou</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-sm-0" href="#">
                    <img src="./assets/img/logo.jpg" height="65" alt="Chez Hibou Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Le restaurant</a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->

                <a class="nav-link" href="https://mdbootstrap.com/docs/standard/getting-started/installation/">
                    <i class="fas fa-shopping-cart"></i>
                    Panier
                </a>

            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <header id="background-image">
        <img src="/assets/img/plats_chauds/main_photo.jpeg" />
        <div class="mask rgba-gradient align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-4 white-text text-center">
                        <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5">Nos entrées</h1>
                        <h5 class="mb-4 white-text">Faites votre choix parmi nos délicieuses spécialités</h5>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- carousel -->
    <!-- <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/entree/salade_algue.jpeg" class="d-block w-100" alt="Salade de champignons" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="mb-4">
                        Nos entrées
                    </h1>
                    <p>
                        Chez Hibou on mange de tout !
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/entree/ravioli.png" class="d-block w-100" alt="Raviolis végans" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1 class="mb-4">
                        Bienvenue chez Hibou !
                    </h1>
                    <p>
                        Chez Hibou on mange de tout !
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/entree/salade_concombre.jpeg" class="d-block w-100" alt="Salade d'algues" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1 class="mb-4">
                        Bienvenue chez Hibou !
                    </h1>

                    <p>
                        Chez Hibou on mange de tout !
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->


    <main>
        <!--Main layout-->
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-5 shadow p-2" style="background-color: #607d8b">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Navbar brand -->
                    <a class="navbar-brand" href="#">Categories :</a>

                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- Link -->
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="#">Tous nos plats à la carte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Nos menus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Desserts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Boissons</a>
                            </li>
                        </ul>

                        <!-- Search -->
                        <form class="w-auto py-1" style="max-width: 12rem">
                            <input type="search" class="form-control rounded-0" placeholder="Search" aria-label="Search" />
                        </form>
                    </div>
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->

            <!-- Products -->
            <section>
                <div class="text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                    <img src="./assets/img/entree/nems_vermicelles.jpeg" class="w-100" />
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="text-reset">
                                        <h5 class="card-title mb-2">Nos entrées</h5>
                                    </a>
                                    <p class="card-text">Notre restaurant offre un large choix d'entrées pour commencer votre repas de
                                        façon savoureuse. Amateur de cuisine chinoise ou explorateurs de nouvelles saveurs,
                                        les entrées CHEZ HIBOU vous offriront une expérience
                                        culinaire inoubliable...</p>

                                    <button href="#" class="btn btn-primary">JE COMMANDE</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                    <img src="./assets/img/plats_chauds/saute_aubergine.jpg" class="w-100" />
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="text-reset custom-link">
                                        <h5 class="card-title mb-2">Nos plats</h5>
                                    </a>
                                    <p class="card-text">Notre restaurant chinois est réputé pour ses plats savoureux et authentiques.
                                        Notre carte variée propose une sélection de plats populaires de la cuisine chinoise,
                                        tels que le poulet général Tao, le boeuf sauté aux oignons, le riz frit Yangzhou... </p>

                                    <button href="#" class="btn btn-primary">JE COMMANDE</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                    <img src="./assets/img/dessert/perles_de_coco.jpg" class="w-100" />
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="" class="text-reset">
                                        <h5 class="card-title mb-2">Nos desserts</h5>
                                    </a>
                                    <p class="card-text">Nous vous proposons une variété de desserts chinois traditionnels qui sont à la fois délicieux
                                        et authentiques. Parmi les desserts les plus populaires,
                                        on trouve les boulettes de riz gluant farcies à la pâte de sésame noir, le tofu sucré aux haricots
                                        rouges... </p>

                                    <button href="#" class="btn btn-primary">JE COMMANDE</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                    <img src="./assets/img/plats_chauds/doufu_grille.jpg" class="w-100" />
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="" class="text-reset">
                                        <h5 class="card-title mb-2">Nos formules</h5>
                                    </a>
                                    <p class="card-text">Découvrez nos différentes formules Les formules qui sont option idéales
                                        pour ceux qui souhaitent goûter à une sélection de plats différents.Les plats proposés incluent
                                        des classiques tels que le riz cantonais, le poulet au curry et le porc aigre-doux...</p>

                                    <button href="#" class="btn btn-primary">JE COMMANDE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>

        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Pagination -->
        </div>
    </main>
    <!--Main layout-->

    <footer class="text-center text-white mt-4" style="background-color: #607d8b">


        <!--/.Call to action-->

        <hr class="text-dark" />

        <div class="container">
            <!-- Section: Social media -->
            <section class="mb-3">
                <!-- Facebook -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Chez Hibou</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>