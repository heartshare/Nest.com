<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_105344_staff extends Migration
{
    public $tableName = "{{%staff}}";

    public function up()
    {
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '员工'";
        $this->createTable($this->tableName,[
            "id"          => "pk COMMENT '编号'",
            "staff_id"    => "integer NOT NULL COMMENT '创建者编号'",
            "name"        => "string(20) NOT NULL COMMENT '员工名称'",
            "pwd"         => "string(60) NOT NULL COMMENT '密码'",
            "ctime"       => "integer unsigned NOT NULL COMMENT '创建时间'",
            "is_disabled" => "tinyint unsigned not null COMMENT '是否禁用'",
            "time_kind"   => "tinyint unsigned not null COMMENT '工作时间: 0, 兼职; 1, 全职'",
            "formal_at"   => "integer unsigned not null default '0' COMMENT '转正时间'",

            "remark"      => "string(512) not null default '' COMMENT '备注'",

            "real_name"   => "string(10) not null default '' COMMENT '真实姓名'",
            "qq"          => "string(12) not null default '' COMMENT 'QQ'",
            "avatar"      => "string not null default '' COMMENT '头像'",
            "phone"       => "string(15) not null default '' COMMENT '手机号'",
            "alipay"      => "string(20) not null default '' COMMENT '支付宝'",
            "summary"     => "string(512) not null default '' COMMENT '员工简介'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}

