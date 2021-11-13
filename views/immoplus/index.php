<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          ImmoPlus
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . 'blurred-image-1.jpg'?>">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="now-ui-icons loader_gear spin"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons users_single-02"></i>
              <p>Connexion</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="index.html">
                <i class="now-ui-icons business_chart-pie-36"></i> Se Connecter
              </a>
              <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
                <i class="now-ui-icons design_bullet-list-67"></i> S'inscrire
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-neutral" href="https://www.creative-tim.com/product/now-ui-kit-pro" target="_blank">
            <i class="ion-speakerphone"></i>
              <p>Publier une annonce</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./public/asset/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . 'now-logo.png'?>" alt="">
          <h1 class="h1-seo">IMMO PLUS</h1>
          <h3>Vos clés entre vos mains.</h3>
        </div>
        <h6 class="category category-absolute">immoplus annonces .Avec nous toujours plus loin
         
        </h6>
      </div>
    </div>
    <div class="main">
      <div class="section section-images">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="hero-images-container">
                <img src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/hero-image-1.png'?>" alt="">
              </div>
              <div class="hero-images-container-1">
                <img src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/hero-image-2.png'?>" alt="">
              </div>
              <div class="hero-images-container-2">
                <img src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/hero-image-3.png'?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
    <!-- footer -->
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="#">
                ImmoPlus
              </a>
            </li>
            <li>
              <a href="">
                A propos
              </a>
            </li>
            <li>
              <a href="">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, crée par
          <a href="">Yao Eloge</a>.
        </div>
      </div>
    </footer>
  </div>
  