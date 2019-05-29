<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Migration_REPLACE_NAME_HERE extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 10,
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'created_at' => [
                    'type' => 'TIMESTAMP',
                    'null' => true
                ],
                'updated_at' => [
                    'type' => 'TIMESTAMP',
                    'null' => true
                ],
            ]
        );

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table("REPLACE_NAME_TABLE", true);
    }

    public function down()
    {
        $this->dbforge->drop_table("REPLACE_NAME_TABLE");
    }
}
