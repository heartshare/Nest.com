<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_105508_article extends Migration
{
    public $tableName = "{{%article}}";

    public function up()
    {
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '分享文章'";
        $this->createTable($this->tableName,[
            "id"           => "pk comment '编号'",
            "staff_id"     => "integer not null comment '创建者编号'",
            "title"        => "string not null comment '标题'",
            "content"      => "text comment '内容'",
            "is_draft"     => "tinyint unsigned not null comment '是否为草稿: 0, 草稿; 1, 正式内容'",
            "staff_visible" => "tinyint unsigned not null comment '员工可见性: 0, 全部不可见; 1, 兼职可见; 2,全职可见; 3, 所有人可见'",
            "is_top" => "tinyint unsigned not null comment '置顶: 0, 普通; 1, 置顶'",
            "ctime"        => "integer unsigned not null comment '创建时间'",

            "is_trashed" => "tinyint unsigned not null default 0 comment '是否已软删除'",
            'top_rank' => "integer not null default 0 comment '置顶权重'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
