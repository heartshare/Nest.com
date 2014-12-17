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
            "id"          => "pk comment '编号'",
            "role_id"     => "string(64) not null comment '角色编号' ",
            "staff_id"    => "integer not null comment '创建者编号'",
            "name"        => "string(20) not null comment '员工名称'",
            "pwd"         => "string(60) not null comment '密码'",
            "ctime"       => "integer unsigned not null comment '创建时间'",
            "is_disabled" => "tinyint unsigned not null comment '是否禁用'",
            "time_kind"   => "tinyint unsigned not null comment '工作时间: 0, 兼职; 1, 全职'",
            "formal_at"   => "integer unsigned not null default '0' comment '转正时间'",
            "auth_key"    => "string not null comment '登录验证值'",

            "is_trashed" => "tinyint unsigned not null default 0 comment '是否已软删除'",

            "remark"      => "string(512) not null default '' comment '备注'",

            "real_name"   => "string(10) not null default '' comment '真实姓名'",
            "qq"          => "string(12) not null default '' comment 'qq'",
            "avatar"      => "string not null default '' comment '头像'",
            "phone"       => "string(15) not null default '' comment '手机号'",
            "alipay"      => "string(20) not null default '' comment '支付宝'",
            "summary"     => "string(512) not null default '' comment '员工简介'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}

