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

	<div class="container d-flex justify-content-center mt-5">
		<div class="col-lg-8">
			<h1>Adicionar novo produto</h1>

			<form name="inputproduct" action="new" method="post">

				<div class="form-label-group">
					<input name="name" type="text" class="form-control form-control-lg" id="inputName" placeholder="Nome" autofocus>
					<label for="inputName" class="col-sm-1 col-form-label">Nome</label>
				</div>

				<div class="form-label-group">	
					<input name="description" type="text" class="form-control form-control-lg" id="inputDescription" placeholder="Descrição">
					<label for="inputDescription" class="col-sm-1 col-form-label">Descrição</label>
					
				</div>

				<div class="form-label-group">	
					<input name="price" type="number" min="0" step=".01" class="form-control form-control-lg" id="inputPrice" placeholder="Preço">
					<label for="inputPrice" class="col-sm-1 col-form-label">Preço</label>
				</div>

				<div class="form-label-group">	
					<input name="stock" type="number" class="form-control form-control-lg" id="inputStock" placeholder="Estoque">
					<label for="inputStock" class="col-sm-1 col-form-label">Estoque</label>
				</div>

				<div class="form-label-group">	
					<input name="min_stock" type="number" class="form-control form-control-lg" id="inputMinStock" placeholder="Estoque&nbsp;Mínimo">
					<label for="inputMinStock" class="col-sm-1 col-form-label">Estoque&nbsp;mínimo</label>
				</div>

				<div class="custom-control custom-checkbox">
					<input type="checkbox" name="active" class="custom-control-input" id="inputActive" value="1" checked>
					<label class="custom-control-label" for="inputActive">Ativo?</label>
				</div>

				<button type="submit" class="btn btn-primary btn-lg w-100 mt-2">Adicionar</button>
			</form>
		</div>
	</div>


	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</html>
