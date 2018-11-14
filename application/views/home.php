<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Load Head -->
	<?php $this->load->view('toimport/head') ?>
</head>

<body>
    <header class="header">
        <?php $this->load->view('toimport/navbar') ?> 
        <div class="container mt-5">
        <?php if($this->session->flashdata('success')) : ?>
            <p class="alert alert-success alert-dismissible fade show"><?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button></p>
        <?php endif ?>

        <div class="text-center text-white header-content">
            <h1 class="text-uppercase"><strong>Boas vindas à Rede Guandu<strong></h1>
            <hr>
            <h3 class="font-weight-light">Aqui você encontra produtos naturais de qualidade, produzidos com muito carinho e com as melhores técnicas da agricultura orgânica, familiar e de base ecológica</h3>
            <button class="btn btn-primary btn-lg text-white mt-3 py-3 px-5"><strong>FAÇA PARTE<strong></button>
        </div>
    </header>

<!-- Load JS -->
<?php $this->load->view('toimport/content_js') ?>
</body>
</body>
</html>