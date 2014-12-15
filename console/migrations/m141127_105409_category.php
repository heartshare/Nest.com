<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_105409_category extends Migration
{
    public $tableName = "{{%category}}";

    public function up()
    {
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '媒体分类'";
        $this->createTable($this->tableName,[
            "id"          => "pk comment '编号'",
            "platform_id" => "integer not null comment '媒体平台编号'",
            "account_id"  => "integer not null comment '媒体账户编号'",
            "staff_id"    => "integer not null comment '创建者编号'",
            "name"        => "string(10) not null comment '分类名称'",
            "summary"     => "string not null comment '分类描述'",
            "ctime"       => "integer unsigned not null comment '创建时间'",

            "is_trashed" => "tinyint unsigned not null default 0 comment '是否已软删除'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}

