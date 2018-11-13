<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_user_role_table extends CI_Migration {
	public function up() {
		$this->dbforge->add_field(array(
			'user_id' => array(
				'type' => 'int',
				'unsigned' => TRUE
			),

			'role' => array(
				'type' => 'int',
				'unsigned' => TRUE
			) 
		));

		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->add_key('role', TRUE);
		$this->dbforge->create_table('user_role');
	}

	public function down() {
		$this->dbforge->drop_table('user_role');
	}
}