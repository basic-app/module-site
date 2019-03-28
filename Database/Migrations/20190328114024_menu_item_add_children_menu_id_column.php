<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_add_children_menu_id_column extends Migration
{

    public $tableName = 'menu_item';

    public $keyName = 'fk_menu_item';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'children_menu_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'unsigned' => true
            ]
        ]);

        $this->db->query('ALTER TABLE `' . $this->tableName . '` ADD CONSTRAINT `' . $this->keyName  .'_children_menu` FOREIGN KEY(`children_menu_id`) REFERENCES `menu`(`menu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;');
    }

    public function down()
    {
        $this->db->query('ALTER TABLE `' . $this->tableName . '` DROP FOREIGN KEY `' . $this->keyName . '_children_menu`');

        $this->forge->dropColumn($this->tableName, 'children_menu_id');
    }

}