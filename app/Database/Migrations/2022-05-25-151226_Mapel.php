<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mapel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_mapel'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'kkm'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ],
            'kelas'       => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],



        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('mapel', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('mapel');
    }
}
