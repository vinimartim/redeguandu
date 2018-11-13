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
			<h1>Agora, seu endereço...</h1>
			<p>Insira seus dados de endereço. Precisamos dele para realizar as possíveis entregas caso você não possa comparecer para a retirada nos produtos. Não se preocupe, não repassamos nenhum dado de clientes a terceiros. :)</p>

			<form name ="adressinput" action="new" method="post">
				<div class="row">
					<div class="col-lg-3">
						<div class="form-label-group">
							<input name="cep" type="text" class="form-control form-control-lg" id="inputCEP" placeholder="CEP" autofocus>
							<label for="inputCEP" class="col-sm-1 col-form-label">CEP</label>
						</div>
					</div>

					<div class="col">
						<div class="form-label-group">
							<input name="street" type="text" class="form-control form-control-lg" id="inputAdress" placeholder="Endereço">
							<label for="inputAdress" class="col-sm-1 col-form-label">Endereço</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-label-group">
							<input name="district" type="text" class="form-control form-control-lg" id="inputBairro" placeholder="Bairro">
							<label for="inputBairro" class="col-sm-1 col-form-label">Bairro</label>	
						</div>
					</div>

					<div class="col">
						<div class="form-label-group">
							<input name="city" type="text" class="form-control form-control-lg" id="inputCidade" placeholder="Cidade">
							<label for="inputCidade" class="col-sm-1 col-form-label">Cidade</label>	
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-label-group">
							<input name="number" type="text" class="form-control form-control-lg" id="inputNum" placeholder="Número">
							<label for="inputNum" class="col-sm-1 col-form-label">Número</label>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary w-100">Cadastrar</button>
			</form>
		</div>
	</div>

	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</html>