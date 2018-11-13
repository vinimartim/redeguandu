<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_provider_table extends CI_Migration {
	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'int',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				'NULL' => FALSE
			),

			'user_id' => array(
				'type' => 'int',
				'unsigned' => TRUE,
				'NULL' => FALSE
			),

			'register' => array(
				'type' => 'varchar',
				'constraint' => '11',
				'NULL' => FALSE
			),

			'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '45',
                'NULL' => TRUE
            ),

            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NULL' => TRUE
            ),

            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '11',
                'NULL' => TRUE
            ),

            'active' => array(
                'type' => 'boolean',
                'default' => '1'
            ),
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('provider');
	}

	public function down() {
		$this->dbforge->drop_table('provider');
	}
}