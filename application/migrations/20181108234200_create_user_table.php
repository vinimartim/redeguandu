<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_user_table extends CI_Migration {
    public function up() {
    	$this->dbforge->add_field(array(
    		'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
                'NULL' => FALSE
            ),

    		'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NULL' => TRUE
            ),

    		'cpf' => array(
                'type' => 'CHAR',
                'constraint' => '11',
                'NULL' => FALSE
            ),

    		'rg' => array(
                'type' => 'CHAR',
                'constraint' => '9',
                'NULL' => FALSE
            ),

    		'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '45',
                'NULL' => TRUE
            ),

    		'senha' => array(
                'type' => 'CHAR',
                'constraint' => '60',
                'NULL' => TRUE
            ),

    		'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '11',
                'NULL' => TRUE
            ),

            'admin' => array(
                'type' => 'boolean',
                'default' => '0'
            ),

            'provider' => array(
                'type' => 'boolean',
                'default' => '0'
            ),

            'client' => array(
                'type' => 'boolean',
                'default' => '1'
            ),
        ));

    	$this->dbforge->add_key('id', TRUE);
    	$this->dbforge->create_table('user');
    }

    public function down() {
    	$this->dbforge->drop_table('user');
    }
}