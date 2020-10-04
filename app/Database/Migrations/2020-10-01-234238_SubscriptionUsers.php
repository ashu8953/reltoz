<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubscriptionUsers extends Migration
{
	public function up()
	{
		$this->createsubscriptionUsers();
	}

	public function down()
	{
		$this->forge->dropTable('urlData', TRUE);
	}

	public function createsubscriptionUsers(){
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
			],
			'users_name' => [
                'type' => 'VARCHAR',
                'constraint' => '256',
                'null' => FALSE
			],
			'email' => [
                'type' => 'VARCHAR',
                'constraint' => '256',
                'null' => FALSE
            ],
            
            'created_at' => [
                'type' => 'DATETIME',
                'null' => FALSE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
			]
        ]);
		$this->forge->addKey('id', TRUE);
        $this->forge->createTable('subscriptionUsers', true);

	}
}
