<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--lien avec feuille css de bootstrap>-->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!--lien avec feuille css stylepanier.php>-->
    <link rel="stylesheet" href="stylepanier.css">
</head>

<body>
    <Header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Collapsible wrapper -->
                <div class=" flex collapse navbar-collapse" id="navbarSupportedContent1">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-sm-0" href="https://mdbootstrap.com/">
                        <img src="./assets/img/logo.jpg" height="70" alt="Hello Hibou Logo" loading="lazy" />
                    </a>
                    <p class="text red-title">"CHEZ HIBOU"</p>
                    <p class="text">, on mange de TOUT !</p>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://mdbootstrap.com/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://mdbootstrap.com/docs/standard/">Le restaurant</a>
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
                    <!-- <a class="nav-link me-3" href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge rounded-pill badge-notification bg-danger"
              >1</span
            >
          </a> -->
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        <div>
        </div>
    </Header>
    <section class="h-100 h-custom" style="background-color: #F2F0FF;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h5 class="mb-3"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continuez votre commande</a>
                                    </h5>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">VOS ACHATS</p>
                                            <p class="mb-0">Vous avez 4 plats dans votre panier</p>
                                        </div>
                                        <div>
                                            <p class="mb-0"><span class="text-muted">DETAIL</span> <a href="#!" class="text-body">PRIX <i class="fas fa-angle-down mt-1"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="/assets/img/entree/nems_vermicelles.jpeg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Assiette 6 nems</h5>
                                                        <p class="small mb-0">2 nems au porc, 2 au poulet, 2 aux
                                                            crevettes</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0">2</h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">5,00€</h5>
                                                    </div>
                                                    <a href="#!" style="color: #4087E5;"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="/assets/img/accompagnements/Nouilles_nature.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Nouilles chinoises</h5>
                                                        <p class="small mb-0">1 portions de 200grs</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0"><input type='text' value=2></h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">7,00€</h5>
                                                    </div>
                                                    <a href="#!" style="color: #4087E5;"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="/assets/img/plats_chauds/gongbao_poulet.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Gongbao</h5>
                                                        <p class="small mb-0">200grs de Gongbao</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0">1</h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">6,00€</h5>
                                                    </div>
                                                    <a href="#!" style="color: #4087E5;"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 mb-lg-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="assets/img/dessert/perles_de_coco.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Boules de coco</h5>
                                                        <p class="small mb-0">3 boules de coco</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0">1</h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">4,00€</h5>
                                                    </div>
                                                    <!--poubelle-->
                                                    <a href="#!" style="color: #4087E5;"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--DEBUT CARTE PAIEMENT-->
                                <div class="col-lg-5">
                                    <div class="card text-white rounded-3 bg">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h5 class="mb-0">DETAIL DE LA COMMANDE</h5>
                                                <img src="/assets/img/user.jpg" class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                            </div>
                                            <p class="small mb-2">Type de carte</p>
                                            <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                            <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                                            <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                                            <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                            <form class="mt-4">
                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                                                    <label class="form-label" for="typeName">Nom du porteur de
                                                        carte</label>
                                                </div>
                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                    <label class="form-label" for="typeText">Numéro de carte</label>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                                            <label class="form-label" for="typeExp">Date
                                                                Expiration</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="password" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                                            <label class="form-label" for="typeText">Cvv</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr class="my-4">
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">TOTAL</p>
                                                <p class="mb-2">34,00€</p>
                                            </div>
                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Livraison gratuite </p>
                                                <p class="mb-2">0,00€</p>
                                            </div>
                                            <button type="button" class="btn btn-info btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                                    <span>34,00€</span>
                                                    <span>VALIDER LA COMMANDE <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--FIN CARTE DE PAIEMENTO-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--DEBUT FOOTER-->
    <footer class="text-center text-white mt-4" style="background-color: #010004">
        <!--Call to action-->
        <div class="pt-1 pb-2 bg-white">
            <img src="/assets/img/logo.jpg" alt="logo Le Hibou" class="logo-footer">
            <p class="adress">LE HIBOU 7 rue de la bambouseraie 33000 Bordeaux </p>
        </div>
        <!--/.Call to action-->
        <hr class="text-dark" />
        <div class="container">
            <!-- Section: Social media -->
            <section class="mb-3">
                <!-- Facebook -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
                <!-- Twitter 
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>-->
                <!-- Google 
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>-->
                <!-- Instagram -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                <!-- YouTube -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i></a>
                <!-- 
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>Github -->
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 SARL LE HIBOU - Tous droits réservés-Mentions légales
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- MDB lien java script de bootstrap -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>