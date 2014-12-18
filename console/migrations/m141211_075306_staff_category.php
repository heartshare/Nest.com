<?php

use yii\db\Schema;
use yii\db\Migration;

class m141211_075306_staff_category extends Migration
{
    public $tableName = '{{%staff_category}}';

    public function up()
    {/*{{{*/
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '分类下内容管理权限表'";
        $this->createTable( $this->tableName, [
            "id" => "pk comment '权限编号'",
            "staff_id" => "integer not null comment '员工编号'",
            "category_id" => "integer not null comment '分类编号'",
            "unique_id" => "string not null comment '由staff_id和category_id拼成的唯一的字串'",
            "can_browse" => "boolean not null default 0 comment '是否可以查看分类下所有人的内容'",
            "can_verify" => "boolean not null default 0 comment '是否可以审核分类下所有人的内容'",
            "can_curd" => "boolean not null default 0 comment '是否可以增删改查个人内容'",
        ], $tableOptions);
        $this->addForeignKey('fk_staff_category_staff', $this->tableName, 'staff_id', '{{%staff}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_staff_category_category', $this->tableName, 'category_id', '{{%category}}', 'id', 'CASCADE');
        $this->createIndex('fk_staff_category_unique', $this->tableName, 'unique_id', true);
    }/*}}}*/

    public function down()
    {/*{{{*/
        $this->dropTable($this->tableName);
    }/*}}}*/
}
