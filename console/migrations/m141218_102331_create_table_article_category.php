<?php

use yii\db\Schema;
use yii\db\Migration;

class m141218_102331_create_table_article_category extends Migration
{
    public $tableName = '{{%article_category}}';

    public function up()
    {/*{{{*/
        $tableOptions = "engine=innodb default charset=utf8 collate=utf8_unicode_ci comment '文章与分类对应关系'";
        $this->createTable( $this->tableName, [
            "id" => "pk comment '权限编号'",
            "article_id" => "integer not null comment '文章编号'",
            "category_id" => "integer not null comment '分类编号'",
            "unique_id" => "string not null comment '由article_id和category_id拼成的唯一的数字'",
        ], $tableOptions);
        $this->addForeignKey('fk_article_category_article', $this->tableName, 'article_id', '{{%article}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_article_category_category', $this->tableName, 'category_id', '{{%category}}', 'id', 'CASCADE');
        $this->createIndex('fk_article_category_unique', $this->tableName, 'unique_id', true);
    }/*}}}*/

    public function down()
    {/*{{{*/
        $this->dropTable($this->tableName);
    }/*}}}*/

}
