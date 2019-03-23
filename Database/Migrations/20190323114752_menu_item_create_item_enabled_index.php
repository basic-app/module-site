<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_create_item_enabled_index extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $sql = 'ALTER TABLE `' . $this->tableName . '` ADD INDEX `menu_item_item_enabled_index`(`item_enabled`);';

        $this->db->query($sql);
    }

    public function down()
    {
        $sql = 'ALTER TABLE `' . $this->tableName . '` DROP INDEX `menu_item_item_enabled_index`;';

        $this->db->query($sql);
    }

}