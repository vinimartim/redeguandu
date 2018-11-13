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
			<h1>Primeiro, seus dados pessoais...</h1>
			<p>Nesta etapa você insere seus dados pessoais. Eles são necessários para abrir uma sessão de usuário para você (criação de um login) e também para validar você como consumidor</p>

			<form name ="userinput" action="new" method="post">
				<div class="form-label-group">
					<input name="name" type="text" class="form-control form-control-lg" id="inputName" placeholder="Nome" autofocus>
					<label for="inputName" class="col-sm-1 col-form-label">Nome</label>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-label-group">
							<input name="cpf" type="text" class="form-control form-control-lg" id="inputCPF" placeholder="CPF">
							<label for="inputCPF" class="col-sm-1 col-form-label">CPF</label>
						</div>
					</div>

					<div class="col">
						<div class="form-label-group">
							<input name="rg" type="text" class="form-control form-control-lg" id="inputRG" placeholder="RG">
							<label for="inputRG" class="col-sm-1 col-form-label">RG</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-label-group">
							<input name="email" type="email" class="form-control form-control-lg" id="inputEmail" placeholder="E-mail" style="text-transform: unset;">
							<label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="form-label-group">
							<input name="phone" type="text" class="form-control form-control-lg" id="inputTel" placeholder="Telefone">
							<label for="inputTel" class="col-sm-1 col-form-label">Telefone</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-label-group">
							<input name="senha" type="password" class="form-control form-control-lg" id="senha" placeholder="Senha">
							
							<label for="inputSenha" class="col-sm-1 col-form-label">Senha</label>
						</div>
					</div>

				</div>

				<button type="submit" class="btn btn-primary w-100">Próxima etapa...</button>
			</form>
		</div>
	</div>

	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</html>