<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index() {
		$this->load->model('product_model');
		$products = $this->product_model->buscaTodos();
		$dados = array('products' => $products);
		$this->load->view('product/list', $dados);
	}

	public function form_new() {
		$this->load->view('product/new', [
			'title' => 'Cadastro | Novo produto'
		]);
	}

	public function new() {
		$this->db->select_max('id');
		$result_id = $this->db->get('user')->row_array(); 

		$product = array(
			'user_id' => $result_id['id'],
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'stock' => $this->input->post('stock'),
			'min_stock' => $this->input->post('min_stock'),
			'active' => $this->input->post('active')
		);

		$this->load->model('product_model');
		$adc_status = $this->product_model->insert($product);

		if($adc_status) {
            $this->session->set_flashdata('success', 'Produto adicionado com sucesso!');
            redirect('product/index');
		
        } else {
            $this->session->set_flashdata('danger', 'Produto não adicionado!');
            redirect('product/index');
        };

	}

	public function remove($id) {
		$this->load->model('product_model');
		$rm_status = $this->product_model->deleta($id);

		if($rm_status) {
            $this->session->set_flashdata('success', 'Produto removido com sucesso!');
            redirect('product/index');
		
        } else {
            $this->session->set_flashdata('danger', 'Produto não removido!');
            redirect('product/index');
        };
	}
}
