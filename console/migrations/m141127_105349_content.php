<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_105349_content extends Migration
{
    public $tableName = "{{%content}}";

    public function up()
    {
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '内容'";
        $this->createTable($this->tableName,[
            'id' => "pk comment '编号'",
            "category_id" => "integer not null comment '分类编号'",
            "staff_id" => "integer not null comment '创建者编号'",
            "title" => "string(30) not null comment '标题'",
            "content" => "string not null comment '内容'",
            "expect_send_at" => "integer unsigned not null comment '期望的发布时间'",
            "source_url" => "string not null comment '来源链接'",
            "album" => "text comment '图片集: uri 拼接'",
            "ctime" => "integer unsigned not null comment '创建时间'",
            "is_draft" => "tinyint unsigned not null comment '草稿/正式内容: 0, 正式内容; 1, 草稿'",
            "is_important" => "tinyint unsigned not null comment '是否为重要内容: 0, 否; 1, 是'",
            "mtime" => "integer unsigned not null comment '最后修改时间'",
            "modified_staff_id" => "integer unsigned not null comment '修改者编号'",

            "is_trashed" => "tinyint unsigned not null default 0 comment '是否已软删除'",

            # 审核
            "is_verified" => "tinyint unsigned not null default '0' comment '审核状态: 0, 未审核; 1, 通过; 2, 不通过'",
            "verified_at" => "integer unsigned not null default '0' comment '审核时间'",
            "rate" => "tinyint unsigned not null default '0' comment '内容评级: 0, 普通; 1, 不错; 2, 赞'",
            "verified_staff_id" => "integer unsigned not null default '0' comment '审核人的用户编号'",
            "remark" => "string(255) not null default '' comment '审核批注'",

            # 发表
            "is_published" => "tinyint unsigned not null default '0' comment '是否发布成功: 0, 未发布; 1, 成功; 2, 失败'",
            "actual_send_at" => "integer unsigned not null default '0' comment '实际发布时间'",
            "publiced_url" => "string not null default '' comment '内容发布后的地址'",
            "reprint_num" => "integer unsigned not null default '0' comment '转发数'",
            "comment_num" => "integer unsigned not null default '0' comment '评论数'",
            "rank" => "integer unsigned not null default '0' comment '排名'",
        ], $tableOptions);
    }

    public function down()
    {
        $this->droptable($this->tableName);
    }
}

