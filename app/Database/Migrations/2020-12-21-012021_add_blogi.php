<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlogi extends Migration
{
	public function up()
	{
				$this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'title'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'content' => [
                                'type'           => 'TEXT',
                                'null'           => true,

                        ],  'created_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                        ],  'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                        ],  'delete_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                        ],

                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('blogi');
		//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
