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
  <link rel="stylesheet" href="./style.css" />
  <title>Chez Hibou</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-sm-0" href="https://mdbootstrap.com/">
          <img src="./assets/img/logo.jpg" height="70" alt="Hello Hibou Logo" loading="lazy" />
        </a>
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

  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/img/plats_chauds/main_photo.jpeg" class="d-block w-100" alt="Wild Landscape" />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
        <div class="carousel-caption d-none d-sm-block mb-5">
          <h1 class="mb-4">
            <strong>Bienvenue chez Hibou ! </strong>
          </h1>
          <p>
            <strong>Chez Hibou on mange de tout !</strong>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/plats_chauds/main_photo.jpeg" class="d-block w-100" alt="plats à déguster" />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="mb-4">
            <strong>Bienvenue chez Hibou !</strong>
          </h1>
          <p>
            <strong>Chez Hibou on mange de tout !</strong>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/plats_chauds/main_photo.jpeg" class="d-block w-100" alt="Exotic Fruits" />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1 class="mb-4">
            <strong>Bienvenue chez Hibou !</strong>
          </h1>

          <p>
            <strong>Chez Hibou on mange de tout !</strong>
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
  </div>

  <!--Main layout-->
  <main>
    <div class="container">
      <!-- Navbar -->
      <!-- <nav
          class="navbar navbar-expand-lg navbar-dark mt-3 mb-5 shadow p-2"
          style="background-color: #607d8b"
        > -->
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Navbar brand -->
        <!-- <a class="navbar-brand" href="#">Categories:</a> -->

        <!-- Toggle button -->
        <!-- <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent2"
              aria-controls="navbarSupportedContent2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button> -->

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Link -->
            <li class="nav-item acitve">
              <a class="nav-link text-white" href="#">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Shirts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Sport wears</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Outwears</a>
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
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="w-100" />
                  <a href="#!">
                    <div class="mask">
                      <div class="d-flex justify-content-start align-items-end h-100">
                        <h5><span class="badge bg-dark ms-2">NEW</span></h5>
                      </div>
                    </div>
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Denim shirt</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Shirt</p>
                  </a>
                  <h6 class="mb-3 price">120$</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="w-100" />
                  <a href="#!">
                    <div class="mask">
                      <div class="d-flex justify-content-start align-items-end h-100">
                        <h5>
                          <span class="badge bg-primary ms-2">bestseller</span>
                        </h5>
                      </div>
                    </div>
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Sweatshirt</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Sport wear</p>
                  </a>
                  <h6 class="mb-3 price">139$</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Grey blouse</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Sport wear</p>
                  </a>
                  <h6 class="mb-3 price">99$</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="w-100" />
                  <a href="#!">
                    <div class="mask">
                      <div class="d-flex justify-content-start align-items-end h-100">
                        <h5>
                          <span class="badge sale-badge ms-2">-10%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Black jacket</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Outwear</p>
                  </a>
                  <h6 class="mb-3 price">
                    <s>199$</s><strong class="ms-2 sale">179$</strong>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Sweatshirt</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Sport wear</p>
                  </a>
                  <h6 class="mb-3 price">139$</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="w-100" />
                  <a href="#!">
                    <div class="mask">
                      <div class="d-flex justify-content-start align-items-end h-100">
                        <h5>
                          <span class="badge bg-success ms-2">Eco</span>
                        </h5>
                      </div>
                    </div>
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Grey blouse</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Sport wear</p>
                  </a>
                  <h6 class="mb-3 price">99$</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Black jacket</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Outwear</p>
                  </a>
                  <h6 class="mb-3 price">199$</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="" class="text-reset">
                    <h5 class="card-title mb-2">Denim shirt</h5>
                  </a>
                  <a href="" class="text-reset">
                    <p>Shirt</p>
                  </a>
                  <h6 class="mb-3 price">120$</h6>
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
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
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
    <!--Call to action-->
    <div class="pt-4 pb-2">
      <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
        <i class="fas fa-download ms-2"></i>
      </a>
      <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
        <i class="fas fa-graduation-cap ms-2"></i>
      </a>
    </div>
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

        <!-- YouTube -->
        <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i></a>
        <!-- Github -->
        <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>