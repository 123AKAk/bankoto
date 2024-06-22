<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tag' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'size' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'weight' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'sku_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'colour' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down() {
        $this->forge->dropTable('products');
    }
}
