<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableMessages extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_message'           => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'name'         => [
                'type'              => 'CHAR',
                'constraint'        => '20',
            ],
            'email'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'subject' => [
            	'type'				=> 'text'
            ],

            'message' => [
            	'type'				=> 'text'
            ],
        ]);
        $this->forge->addKey('id_message', TRUE);
        $this->forge->createTable('table_messages');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
