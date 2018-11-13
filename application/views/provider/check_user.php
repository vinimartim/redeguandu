<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Load Head -->
	<?php $this->load->view('toimport/head') ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/floating-labels.css">
</head>

<body>
	
	<!-- Load Navbar -->
	<?php $this->load->view('toimport/navbar') ?>

	<?php $disable = 'disabled';
	?>


	<div class="container d-flex justify-content-center mt-5">
		<div class="col-lg-8">
			<h1>Adicionar novo produto</h1>
			<p>Primeiro, precisamos checar se o fornecedor está cadastrado como cliente. Por isso, insira abaixo o e-mail do fornecedor e o sistema fará a verificação.

			<?php if($this->session->flashdata('danger')) : ?>
				<p class="alert alert-danger alert-dismissible fade show"><?= $this->session->flashdata('danger') ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button></p>
			<?php endif ?>

			<form name="searchuser" action="searchuser" method="post" >
				<div class="row">
					<div class="col pr-0">
						<div class="form-label-group">	
							<input name="email" type="email" class="form-control form-control-lg w-100" id="email" placeholder="email">
							<label for="userEmail" class="col-sm-1 col-form-label">Email</label>
						</div>
					</div>

					<div class="col-md-1 pl-0">
						<button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>

	
	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</html>