<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class komentar extends Migration
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
			'id_barang' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_user' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'komentar' => [
				'type' => 'text ',
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
		$this->forge->addForeignKey('id_user', 'user', 'id');
		$this->forge->addForeignKey('id_barang', 'barang', 'id');
		$this->forge->createTable('komentar');
	}
	public function down()
	{
		$this->forge->dropDatabase('komentar');
	}
}
