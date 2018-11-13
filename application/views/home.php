<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Load Head -->
	<?php $this->load->view('toimport/head') ?>
</head>

<body>
	<!-- Load Navbar -->
	<?php $this->load->view('toimport/navbar') ?>

	<div class="container mt-5">
        <?php if($this->session->flashdata('success')) : ?>
            <p class="alert alert-success alert-dismissible fade show"><?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button></p>
        <?php endif ?>

        <h1>Boas vindas a Rede Guandu...</h1>
    </div>

<!-- Load JS -->
<?php $this->load->view('toimport/content_js') ?>
</body>
</body>
</html>