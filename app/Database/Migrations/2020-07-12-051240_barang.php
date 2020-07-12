<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class barang extends Migration
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
			'nama' => [
				'type' => 'text',
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'stok' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'gambar' => [
				'type' => 'text'
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
		$this->forge->createTable('barang');
	}
	public function down()
	{
		$this->forge->dropDatabase('barang');
	}
}
