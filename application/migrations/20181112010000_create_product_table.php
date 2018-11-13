<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_product_table extends CI_Migration {
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

                'name' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                    'NULL' => TRUE
                ),

                'description' => array(
                    'type' => 'text',
                    'NULL' => TRUE
                ),

                'active' => array(
                    'type' => 'boolean',
                    'default' => '1'
                ),

                'stock' => array(
                    'type' => 'int',
                    'NULL' => TRUE
                ),

                'min_stock' => array(
                    'type' => 'int',
                    'NULL' => TRUE
                ),

                'price' => array(
                    'type' => 'decimal',
                    'constraint' => '10,2',
                    'NULL' => TRUE
                )
    	));

    	$this->dbforge->add_key('id', TRUE);
    	$this->dbforge->create_table('product');
    }

    public function down() {
    	$this->dbforge->drop_table('product');
    }
}