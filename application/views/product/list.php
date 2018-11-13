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

		<?php if($this->session->flashdata('danger')) : ?>
			<p class="alert alert-danger alert-dismissible fade show"><?= $this->session->flashdata('success') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  			</button></p>
		<?php endif ?>

		<?php if($this->session->userdata('user_logged')) : ?>

			<h1>Lista de produtos...</h1>
			<a class="btn btn-primary float-right mb-4" href="<?= base_url() ?>product/form_new">+ Novo</a>


			<table class="table table-striped table-m-responsive">
				<tr>
					<th>Nome</th>
					<th>Preço</th>
					<th>Estoque</th>
					<th>Ativo</th>
					<th>Editar</th>
				</tr>
				<?php foreach((array)$products as $product) : ?>
				<tr>
					<td><?= $product['name']; ?></td>
					<td><?= $product['price']; ?></td>
					<td><?= $product['stock']; ?></td>
					<?php if($product['active'] == 1) : ?>
						<td>Sim</td>
					<?php else : ?>
						<td>Não</td>
					<?php endif ?>
					<td><a href="<?php echo site_url('product/remove/'.$product['id']);?>">Apagar</a></td>
				</tr>
			<?php endforeach ?>
			</table>

		<?php else : ?>
			<p class="alert alert-danger">Você não tem permissões necessárias para acessar essa página. Clique <a href="<?= base_url() ?>">aqui</a> e retorne à página principal</p>
	</div>

	<?php endif ?>

	<!-- Load JS -->
	<?php $this->load->view('toimport/content_js') ?>
</body>
</body>
</html>