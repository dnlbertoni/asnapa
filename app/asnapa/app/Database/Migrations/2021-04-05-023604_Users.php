<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'user_id'          => [
							'type'           => 'INT',
							'constraint'     => 12,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'user_username'       => [
							'type'       => 'VARCHAR',
							'constraint' => '100',
					],
					'user_password' => [
							'type' => 'TEXT',
							'null' => true,
					],
					'user_autologin' => [
						'type' => 'TEXT',
						'null' => true,
					],
					'user_nombre' => [
						'type' => 'TEXT',
						'null' => true,
					],
					'created_at' => [
						'type' => 'DATETIME',
						'null' => false,
					],
					'updated_at' => [
						'type' => 'DATETIME',
						'null' => true,
					],
				]);
			$this->forge->addKey('user_id', true);
			$this->forge->createTable('users');
	}

	public function down()
	{
			$this->forge->dropTable('users');
	}
}
