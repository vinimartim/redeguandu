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
			<p>Prontinho! Agora é só inserir os dados adicionais do fornecedor (como email da empresa e cnpj, se existerem) e, voilà,  que as vendas comecem! :)</p>

			<form name="inputprovider" action="new" method="post">
				<div class="row">
					<div class="col">
						<div class="form-label-group">	
							<input name="email" type="email" class="form-control form-control-lg" id="email" placeholder="email" autofocus>
							<label for="userEmail" class="col-sm-1 col-form-label">Email</label>
						</div>
					</div>

					<div class="col">
						<div class="form-label-group">	
							<input name="register" type="text" class="form-control form-control-lg" id="register" placeholder="CNPJ/CPF">
							<label for="register" class="col-sm-1 col-form-label">CNPJ/CPF</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-label-group">	
							<input name="name" type="text" class="form-control form-control-lg" id="name" placeholder="Nome&nbsp;da&nbsp;empresa">
							<label for="name" class="col-sm-1 col-form-label">Nome&nbsp;da&nbsp;empresa</label>
						</div>
					</div>

					<div class="col">
						<div class="form-label-group">	
							<input name="phone" type="number" class="form-control form-control-lg" id="phone" placeholder="Telefone&nbsp;da&nbsp;empresa">
							<label for="phone" class="col-sm-1 col-form-label">Telefone&nbsp;da&nbsp;empresa</label>
						</div>
					</div>
				</div>

				<div class="custom-control custom-checkbox">
					<input type="checkbox" name="active" class="custom-control-input" id="inputActive" value="1" checked>
					<label class="custom-control-label" for="inputActive">Ativo?</label>
				</div>

				<button type="submit" class="btn btn-primary btn-lg w-100 mt-2">Cadastrar</button>
			</form>
		</div>
	</div>


	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</html>