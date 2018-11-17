<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Load Head -->
	<?php $this->load->view('toimport/head') ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/floating-labels.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">
</head>

<body id="page-top">
    <header class="masthead text-center text-white d-flex">
        <?php $this->load->view('toimport/navbar-home') ?>
        <?php if($this->session->flashdata('success')) : ?>
        <?php endif ?>

        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>BOAS VINDAS À REDE GUANDU</strong></h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="mb-5">Aqui você encontra produtos naturais de qualidade, produzidos com muito carinho e com as melhores técnicas da agricultura orgânica, familiar e de base ecológica</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <?php if($this->session->userdata('logged_in')) : ?>
    <?php else : ?>
    <section class="bg-primary" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">Login</h2>
                    <hr class="light my-4">

                    <form action="user/autenticar" name="user/autenticar" method="post">
                        <div class="form-label-group">
                            <input name="email" type="email" class="form-control form-control-lg inputBgOpaque inputTextColor inputTransparent" id="inputEmail" placeholder="E-mail">
                            <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
                        </div>

                        <div class="form-label-group">
                            <input name="senha" type="password" class="form-control form-control-lg" id="senha" placeholder="Senha">
                            <label for="inputSenha" class="col-sm-1 col-form-label">Senha</label>
                        </div>

                        <div>
                            <a class="link-mini float-right" href="#">Esqueceu sua senha?</a><br>
                            <a class="link-mini float-right" href="#">Cadastrar</a><br>
                        </div>

                        <button type="submit" class="btn btn-light btn-xl sr-button">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                  <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
                  <h3 class="mb-3">Sturdy Templates</h3>
                  <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
          <h3 class="mb-3">Up to Date</h3>
          <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
      </div>
  </div>
  <div class="col-lg-3 col-md-6 text-center">
    <div class="service-box mt-5 mx-auto">
      <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
      <h3 class="mb-3">Made with Love</h3>
      <p class="text-muted mb-0">You have to make your websites with love these days!</p>
  </div>
</div>
</div>
</div>
</section>

<section class="bg-dark text-white">
  <div class="container text-center">
    <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
    <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
</div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Let's Get In Touch!</h2>
        <hr class="my-4">
        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
    </div>
</div>
<div class="row">
  <div class="col-lg-4 ml-auto text-center">
    <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
    <p>123-456-6789</p>
</div>
<div class="col-lg-4 mr-auto text-center">
    <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
    <p>
      <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
  </p>
</div>
</div>
</div>
</section>

<!-- Load JS -->
<?php $this->load->view('toimport/content_js') ?>
</body>
</body>
</html>