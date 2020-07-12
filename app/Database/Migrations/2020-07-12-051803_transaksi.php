<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class transaksi extends Migration
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
			'id_pembeli' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'total_harga' => [
				'type' => 'INT',
				'constraint' => 11,
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
		$this->forge->addForeignKey('id_pembeli', 'user', 'id');
		$this->forge->addForeignKey('id_barang', 'barang', 'id');
		$this->forge->createTable('transaksi');
	}
	public function down()
	{
		$this->forge->dropDatabase('transaksi');
	}
}
