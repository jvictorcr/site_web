<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZIONX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icons/zion_home.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex" style="color: #495057;">
        <a href="mailto:admin@zionx.dev.br" title="Enviar email" style="color: #000;">
          <i class="bi bi-envelope"></i>
        </a></i> Email - admin@zionx.dev.br
      </div>
      <div class="d-flex align-items-center" style="color: #495057;">
        <i class="fab fa-whatsapp" target="_blank" title="Acessar WhatsApp" onclick="sendMessage()"></i> WhatsApp - (54) 99926-0755
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto"><img src="assets/img/icons/zion_home.ico" alt=""><span style="font-size: 20px; padding-left: 10px; color: black">ZionX</span></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#projects">Projetos</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a class="appointment-btn scrollto" target="_blank" title="Acessar WhatsApp" onclick="sendMessage()"><span class="d-none d-md-inline">Fale Conosco</span></a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('assets/img/projects/img/zion_img_3.jpg')">
          <div class="container">
            <h2>Bem-vindo à ZIONX</h2>
            <p>Especialistas em criar soluções web personalizadas para destacar sua empresa online. Descubra como podemos ajudar a transformar sua presença digital.</p>
            <a href="#projects" class="btn-get-started scrollto">Nossos Serviços</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('assets/img/projects/img/zion_img_4.jpg')">
          <div class="container">
            <h2>Páginas One-Page</h2>
            <p>Desenvolvemos páginas de uma só página que são rápidas, intuitivas e visualmente atraentes. Ideal para apresentar informações de forma concisa e impactante.</p>
            <a href="#projects" class="btn-get-started scrollto">Saiba Mais</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('assets/img/projects/img/zion_img_5.jpg')">
          <div class="container">
            <h2>Páginas de Propaganda</h2>
            <p>Crie campanhas de marketing poderosas com nossas páginas de propaganda otimizadas. Aumente a conversão e alcance seu público-alvo com eficácia.</p>
            <a href="#projects" class="btn-get-started scrollto">Veja Nossos Projetos</a>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Serviços</h2>
          <p>Na Zionx, oferecemos soluções web completas e personalizadas para destacar a presença online da sua empresa. Especializamo-nos em páginas de uma só página e páginas de propaganda, projetadas para maximizar o impacto e a eficiência.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-laptop-code"></i></div>
            <h4 class="title"><a href="">Desenvolvimento de Sites</a></h4>
            <p class="description">Criamos sites modernos e responsivos, focados na usabilidade e experiência do usuário, para garantir uma presença online eficaz.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-scroll"></i></div>
            <h4 class="title"><a href="">Páginas One-Page</a></h4>
            <p class="description">Desenvolvemos páginas de uma só página que são rápidas, intuitivas e visualmente atraentes, ideais para apresentar informações de forma concisa.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-bullhorn"></i></div>
            <h4 class="title"><a href="">Páginas de Propaganda</a></h4>
            <p class="description">Criamos páginas de propaganda otimizadas para campanhas de marketing, ajudando a aumentar a conversão e o alcance da sua mensagem.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-mobile-alt"></i></div>
            <h4 class="title"><a href="">Design Responsivo</a></h4>
            <p class="description">Nossos designs são totalmente responsivos, garantindo que seu site funcione perfeitamente em todos os dispositivos, desde desktops até smartphones.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-cogs"></i></div>
            <h4 class="title"><a href="">Soluções Personalizadas</a></h4>
            <p class="description">Oferecemos soluções web personalizadas para atender às necessidades específicas do seu negócio, desde integrações até funcionalidades exclusivas.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-file-code"></i></div>
            <h4 class="title"><a href="">Templates e Bootstrap</a></h4>
            <p class="description">Utilizamos templates e o framework Bootstrap para criar designs modernos, responsivos e esteticamente atraentes para o seu site.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- End Featured Services Section -->
    <!-- ======= Counts Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre</h2>
          <p>A Zionx foi pensada para você. Sua empresa merece um site online de baixo custo e fácil manutenção.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/projects/img/zion_img_7.jpg" class="img-fluid" alt="Imagem ilustrativa">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Especialistas em Desenvolvimento Web Personalizado</h3>
            <p class="fst-italic">
              Na Zionx, criamos soluções digitais sob medida para atender às necessidades específicas da sua empresa.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Orçamento ajustável</li>
              <li><i class="bi bi-check-circle"></i> Fácil acesso</li>
              <li><i class="bi bi-check-circle"></i> Baixo custo</li>
              <li><i class="bi bi-check-circle"></i> Equipe qualificada</li>
              <li><i class="bi bi-check-circle"></i> Trabalhamos com consultoria</li>
            </ul>
            <p>
              Nosso compromisso é com a qualidade e a satisfação do cliente. Utilizamos as tecnologias mais avançadas para garantir que seu site seja rápido, seguro e eficiente. Contamos com uma equipe experiente e dedicada, pronta para transformar suas ideias em realidade digital.
            </p>
          </div>
        </div>


      </div>
    </section>
    <!-- End Counts Section -->
    <!-- Property List Start -->
    <section id="projects" class="about">

      <div class="container-xxl py-5">
        <div class="container">
          <ul class="nav nav-pills mb-3 justify-content-center">
            <li class="nav-item">
              <a class="nav-link active rounded-pill" id="tab-1-tab" data-bs-toggle="pill" href="#tab-1">Todos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rounded-pill" id="tab-2-tab" data-bs-toggle="pill" href="#tab-2">Implementados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rounded-pill" id="tab-3-tab" data-bs-toggle="pill" href="#tab-3">Em
                desenvolvimento</a>
            </li>
          </ul>

          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show active p-0">
              <div class="row g-4">
                <div id="concluido" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href="#projetos"><img class="img-fluid" src="assets/img/painel_img_web.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Implementado</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Painel de chamados</h5>
                      <a class="d-block h5 mb-2" href="#projetos">+ de 2900 chamados</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-chart-bar fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="dashboard">Painel Demonstrativo</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-file-alt fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="file">Relatórios</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="concluido" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/balcao_img_web.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Implementado</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text- mb-3">Balcão de atendimentos</h5>
                      <a class="d-block h5 mb-3" href="">+ de 500 atendimentos</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-3"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-users fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="users">Ctr/Usuários</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-file-alt fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="file">Relatórios</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="concluido" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/projects/img/ponto_img_web.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Implementado
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Acesso ao Ponto Eletrônico</h5>
                      <a class="d-block h5 mb-2" href="">Cadastro de usuário no sistema</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-users fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="users">Ctr/Usuários</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-shield-alt fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="shield-alt">Ampla segurança</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fazendo" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/projects/img/esportes_img.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Em fase de testes</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Sistema de esportes</h5>
                      <a class="d-block h5 mb-2" href="">Gerenciamento completo</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-cogs fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="cogs">Ctr/Total</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-trophy fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="trophy">Criação de Competições</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fazendo" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href="">
                        <img class="img-fluid" src="assets/img/projects/img/laravel_img.jpg" style="max-width: 100%; height: auto;">

                      </a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Em fase de desenvolvimento</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Loja Virtual</h5>
                      <a class="d-block h5 mb-2" href="">E-Commerce completo em Laravel</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://zionx.dev.br">ZIONX technology</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-warehouse fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="warehouse">Ctr/De estoque</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-shopping-cart fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="shopping-cart">Vendas</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fazendo" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/projects/img/itbi_img.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Em fase de desenvolvimento</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Sistema de ITBI</h5>
                      <a class="d-block h5 mb-1" href="">Buscas específicas no banco de dados</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <br>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-user fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="user">Ctr/Acessos</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-search fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="search">Buscas Avançadas</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-2" class="tab-pane fade p-0">
              <div class="row g-4">
                <div id="concluido" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href="#projetos"><img class="img-fluid" src="assets/img/painel_img_web.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Implementado</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Painel de chamados</h5>
                      <a class="d-block h5 mb-2" href="#projetos">+ de 2900 chamados</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-chart-bar fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="dashboard">Painel Demonstrativo</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-file-alt fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="file">Relatórios</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="concluido" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/balcao_img_web.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Implementado</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-2">Balcão de atendimentos</h5>
                      <a class="d-block h5 mb-3" href="">+ de 500 atendimentos</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-users fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="users">Ctr/Usuários</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-file-alt fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="file">Relatórios</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="concluido" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/projects/img/ponto_img_web.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Implementado
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Acesso ao Ponto Eletrônico</h5>
                      <a class="d-block h5 mb-2" href="">Cadastro de usuário no sistema</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-users fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="users">Ctr/Usuários</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-shield-alt fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="shield-alt">Ampla segurança</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-3" class="tab-pane fade p-0">
              <div class="row g-4">
                <div id="fazendo" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/projects/img/esportes_img.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Em fase de testes</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Sistema de esportes</h5>
                      <a class="d-block h5 mb-2" href="">Gerenciamento completo</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-cogs fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="cogs">Ctr/Total</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-trophy fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="trophy">Criação de Competições</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fazendo" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href="">
                        <img class="img-fluid" src="assets/img/projects/img/laravel_img.jpg" style="max-width: 100%; height: auto;">

                      </a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Em fase de desenvolvimento</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Loja Virtual</h5>
                      <a class="d-block h5 mb-2" href="">E-Commerce completo em Laravel</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2 mb-4"></i><a target="_blank" href="https://zionx.dev.br">ZIONX technology</a>
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-warehouse fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="warehouse">Ctr/De estoque</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-shopping-cart fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="shopping-cart">Vendas</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fazendo" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""><img class="img-fluid" src="assets/img/projects/img/itbi_img.png" alt=""></a>
                      <div class="bg-white rounded-top text-secundary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                        Em fase de desenvolvimento</div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-secundary mb-3">Sistema de ITBI</h5>
                      <a class="d-block h5 mb-1" href="">Buscas específicas no banco de dados</a>
                      <p><i class="fa fa-map-marker-alt text-secundary me-2"></i><a target="_blank" href="https://pmsoledaders.inf.br">Prefeitura
                          municipal de Soledade</a>
                      </p>
                    </div>
                    <br>
                    <div class="d-flex border-top">
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-database fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="database">Banco de Dados</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-user fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="user">Ctr/Acessos</span>
                      </div>
                      <div class="flex-fill text-center py-2 icon-container">
                        <i class="fa fa-search fa-lg icon" style="color:#C0C0C0;"></i><br>
                        <span class="icon-info" data-icon="search">Buscas Avançadas</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Property List End -->
    <!-- Team Section -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipe</h2>
          <p>Conheça nossa equipe dedicada, comprometida em fornecer soluções web personalizadas e de alta qualidade para sua empresa.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-12 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img img-small">
                <img src="assets/img/team/IMG_4937.jpg" class="img-fluid" alt="João Victor Carvalho">
                <div class="social" style="text-align: center;">
                  <a href=""><i class="bi bi-whatsapp" target="_blank" title="Acessar WhatsApp" onclick="sendMessage()"></i></a>
                  <a href="https://github.com/jvictorcr"><i class="bi bi-github"></i></a>
                  <a href="https://www.instagram.com/jvictorcr/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/jo%C3%A3o-victor-carvalho-783957238/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info" style="text-align: center;">
                <h4>João Victor Carvalho</h4>
                <span>Desenvolvedor Web</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d33902.27635704146!2d-52.49311229377862!3d-28.82154224975679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1718210808129!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Localização</h3>
                  <p>Soledade - RS, Brasil</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>admin@zionx.dev.br<br>jvictorcrs2@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Celular</h3>
                  <p>+55 (54) 99926-0755</p>
                  <br>
                </div>
              </div>
            </div>

          </div>
    </section>
    </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="https://zionx.dev.br" target="_blank" style="color: #495057;">ZIONX</a></span></strong>. Todos os direitos
        reservados
        <i class="bi bi-info-circle" style="padding-left: 10px;"> Versão 1.2</i>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/control.js"></script>


</body>

</html>