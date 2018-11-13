<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index() {
		$this->load->view('user/list', [
			'title' => 'Cadastro | Dados pessoais',
		]);
	}

	public function form_new() {
		$this->load->view('user/new', [
			'title' => 'Cadastro | Dados pessoais',
		]);
	}

	public function new() {
		$this->db->select_max('id');
		$result_id = $this->db->get('user')->row_array();

		$user = array(
			'name' => $this->input->post('name'),
			'cpf' => $this->input->post('cpf'),
			'rg' => $this->input->post('rg'),
			'email' => $this->input->post('email'),
			'senha' => md5($this->input->post('senha')),
			'phone' => $this->input->post('phone')
		);

		$this->load->model('user_model');
		$this->user_model->insert($user);
		redirect('adress/form_new');

	}

	public function form_login() {
		$this->load->view('user/login', [
			'title' => 'Login',
		]);
	}

	public function autenticar(){
		$this->db->select_max('id');
		$result = $this->db->get('user')->row_array();

		$this->load->model('user_model');
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));
		$user = $this->user_model->buscaPasse($email,$senha);

		$role = array(
			'user_id' => $user['id'],
			'admin' => $user['admin'],
			'provider' => $user['provider'],
			'client' => $user['client'],
			'logged_in' => TRUE
		);

		if($role) {
			$this->session->set_userdata($role);
			redirect('/');
			
		} else {
			$this->session->set_flashdata('danger', 'danger');
			redirect('user/form_login');
		};
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata('success' ,'Deslogado com sucesso');
		
		redirect('/');
	}
}
