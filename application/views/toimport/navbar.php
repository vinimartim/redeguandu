<!--Header-->
<nav class="navbar navbar-expand-lg navbar-light nav-shrink" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="<?=base_url() ?>">Rede Guandu</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<?php if($this->session->userdata('logged_in')) : ?>
					<!-- Recebe os parametros da session para checagem de permissões -->
					<?php
					$name = $this->session->userdata('name');
					$email = $this->session->userdata('email');
					$admin = $this->session->userdata('admin');
					$provider = $this->session->userdata('provider');
					$client = $this->session->userdata('client');
					?>
					<?php if($admin || $provider): ?>

					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url() ?>product/index">Produtos</a>
					</li>

					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url() ?>provider/index">Fornecedores</a>
					</li>
					<?php else : ?>
						opjfiosjiof
					<?php endif ?>

				

					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url() ?>/">Minha conta</a>
					</li>

					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url() ?>user/logout">Logout</a>
					</li>

					<li class="nav-item">
						<h3><?php echo $name ?></h3><br>
						<p><small><?php echo $email ?></small></p>
					</li>

				<?php else : ?>
					<li class="nav-item active">
						<a class="nav-link js-scroll-trigger"  href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger"  href="<?= base_url() ?>user/form_new">Cadastre-se</a>
					</li>

					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?= base_url() ?>user/form_login">Login</a>
					</li>

				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>