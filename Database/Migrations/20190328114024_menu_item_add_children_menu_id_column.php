<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_add_children_menu_id_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public $keyName = 'fk_menu_item';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'children_menu_id' => $this->foreignColumn()
        ]);
    
        $this->tableAddForeignKey(
            $this->tableName, 
            $this->keyName  . '_children_menu',
            'children_menu_id',
            'menu',
            'menu_id',
            static::RESTRICT,
            static::RESTRICT
        );
    }

    public function down()
    {
        $this->tableDropForeignKey($this->tableName, $this->keyName . '_children_menu');

        $this->forge->dropColumn($this->tableName, 'children_menu_id');
    }

}