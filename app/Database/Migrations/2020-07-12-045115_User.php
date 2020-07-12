<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 11,
			],
			'password' => [
				'type' => 'text',
			],
			'salt' => [
				'type' => 'text'
			],
			'avatar' => [
				'type' => 'text',
				'null' => true,
			],
			'role' => [
				'type' => 'INT',
				'constraint' => 1,
				'default' => 1,
			],
			'create_by' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'create_date' => [
				'type' => 'DATETIME',
			],
			'update_by' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'update_date' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
	}
	public function down()
	{
		$this->forge->dropDatabase('user');
	}
}
