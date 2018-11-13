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
		<?php if($this->session->userdata('user_logged')) : ?>
			<h1>Lista de usuários...</h1>
		<?php else : ?>
			<p class="alert alert-danger">Você não tem permissões necessárias para acessar essa página. Clique <a href="<?= base_url() ?>">aqui</a> e retorne à página principal</p>
	</div>

	<?php endif ?>

	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</body>
</html>