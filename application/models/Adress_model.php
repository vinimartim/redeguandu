 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Adress_model extends CI_Model {
    public function insert($adress) {
        $this->db->insert('adress', $adress);
    }
}