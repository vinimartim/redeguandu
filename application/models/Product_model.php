 <?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Product_model extends CI_Model {
 	public function insert($product) {
 		return $this->db->insert('product', $product);
 	}

 	public function buscaTodos() {
 		return $this->db->get('product')->result_array();
 	}

 	public function buscaUm() {
 		return $this->db->get_where('product', array(
 			'id' => $id
 		))->row_array();
 	}

 	public function deleta($id) {
 		$this->db->where('id', $id);
 		$del = $this->db->delete('product');
 		return $del;
 	}
 }