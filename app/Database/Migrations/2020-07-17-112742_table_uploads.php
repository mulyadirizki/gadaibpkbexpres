<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUploads extends Migration
{
	public function up()
	{
		$this->forge->addField([
	        'id'            => [
	            'type'           => 'INT',
	            'constraint'     => 11,
	            'unsigned'       => TRUE,
	            'auto_increment' => TRUE
	        ],
	        'title' => [
	        	'type' 	=> 'VARCHAR',
	        	'constraint' => '30'
	        ],
	        'gambar'    => [
	            'type'           => 'VARCHAR',
	            'constraint'     => '250',
	        ],
	    ]);
	    $this->forge->addKey('id', TRUE);
	    $this->forge->createTable('table_uploads');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
