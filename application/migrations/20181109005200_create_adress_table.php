<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_adress_table extends CI_Migration {
    public function up() {
    	$this->dbforge->add_field(array(
                'id' => array(             
                    'type' => 'int',
                    'unsigned' => TRUE,
                    'NULL' => FALSE,
                    'auto_increment' => TRUE
                ),

                'user_id' => array(             
                    'type' => 'int',
                    'unsigned' => TRUE,
                    'NULL' => FALSE
                ),

                'cep' => array(
                    'type' => 'varchar',
                    'constraint' => '12',
                    'NULL' => TRUE
                ),

                'street' => array(
                    'type' => 'varchar',
                    'constraint' => '120',
                    'NULL' => TRUE,
                ),

                'district' => array(
                    'type' => 'varchar',
                    'constraint' => '100',
                    'NULL' => TRUE,
                ),

                'city' => array(
                    'type' => 'varchar',
                    'constraint' => '100',
                    'NULL' => TRUE
                ),

                'number' => array(
                    'type' => 'varchar',
                    'constraint' => '10',
                    'NULL' => TRUE
                )
    	));

    	$this->dbforge->add_key('id', TRUE);
    	$this->dbforge->create_table('adress');
    }

    public function down() {
    	$this->dbforge->drop_table('adress');
    }
}