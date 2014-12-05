<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_105327_platform extends Migration
{
    public $tableName = "{{%platform}}";

    public function up()
    {
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '媒体平台'";
        $this->createTable($this->tableName,[
            "id"       => "pk comment '编号'",
            "name"     => "string(10) not null comment '媒体名称'",
            "staff_id" => "integer not null comment '创建者编号'",
            "ctime"    => "integer unsigned not null comment '创建时间'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
