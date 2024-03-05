<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'status_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'email_verified_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'date_bird' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'place_bird' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'department' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'section' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'address1' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'address2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'is_active' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'last_seen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'wishlist' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'country' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_by' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => 'current_user()',
            ],
            'updated_by' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => 'current_user()',
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
