<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableProfiles extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'           => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'no_hp'         => [
                'type'              => 'CHAR',
                'constraint'        => '20',
            ],
            'email'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'alamat' => [
            	'type'				=> 'text'
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('table_profiles');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
