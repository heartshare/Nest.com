<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_105444_account extends Migration
{
    public $tableName = "{{%account}}";

    public function up()
    {
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '媒体帐号'";
        $this->createTable($this->tableName,[
            "id"          => "pk comment '编号'",
            "platform_id" => "integer not null comment '媒体平台编号'",
            "staff_id"    => "integer not null comment '创建者编号'",
            "name"        => "string(20) not null comment '账户名称'",
            "uid"         => "string(20) not null comment 'uid'",
            "avatar"      => "string not null comment '头像'",
            "ctime"       => "integer unsigned not null comment '创建时间'",

            "is_trashed" => "tinyint unsigned not null default 0 comment '是否已软删除'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}

