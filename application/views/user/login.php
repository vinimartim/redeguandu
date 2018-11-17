<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Load Head -->
	<?php $this->load->view('toimport/head') ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/floating-labels.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">
</head>

<body class="bg-img">
	<header>
		
			<?php $this->load->view('toimport/navbar') ?> 
		
	</header>

	<div class="card-login">


		<?php if($this->session->flashdata("danger")) : ?>
			<p class="alert alert-danger">Usuário ou senha inválidos</p>
		<?php endif ?>

		<form action="autenticar" name="autenticar" method="post">
			<div class="form-label-group">
				<input name="email" type="email" class="form-control form-control-lg inputBgOpaque inputTextColor inputTransparent" id="inputEmail" placeholder="E-mail">
				<label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
			</div>

			<div class="form-label-group">
				<input name="senha" type="password" class="form-control form-control-lg" id="senha" placeholder="Senha">

				<label for="inputSenha" class="col-sm-1 col-form-label">Senha</label>
			</div>

			<a class="link-mini float-right" href="#">Esqueceu sua senha?</a><br>
			<a class="link-mini float-right" href="#">Cadastrar</a>

			<button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Login</button>
		</form>


	</div>
</div>

<!-- Load JS -->
<?php $this->load->view('toimport/content_js') ?>
</body>
</html>