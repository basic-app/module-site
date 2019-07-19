<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_add_children_menu_id_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public $keyName = 'fk_menu_item';

    public function up()
    {
        $this->createColumn($this->tableName, [
            'children_menu_id' => $this->foreignKeyColumn()
        ]);
    
        $this->createForeignKey(
            $this->tableName, 
            'children_menu_id',
            'menu',
            'menu_id',
            static::RESTRICT,
            static::RESTRICT,
            $this->keyName . '_children_menu'
        );
    }

    public function down()
    {
        $this->dropForeignKey($this->tableName, $this->keyName . '_children_menu');

        $this->dropColumn($this->tableName, 'children_menu_id');
    }

}