<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_create_uid_unique_key extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $sql = 'ALTER TABLE `' . $this->tableName . '` ADD UNIQUE `menu_item_item_uid_unique`(`item_uid`, `item_menu_id`);';

        $this->db->query($sql);
    }

    public function down()
    {
        $sql = 'ALTER TABLE `' . $this->tableName . '` DROP INDEX `menu_item_item_uid_unique`;';

        $this->db->query($sql);
    }

}