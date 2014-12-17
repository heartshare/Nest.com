<?php

use yii\db\Schema;
use yii\db\Migration;

class m141204_022040_add_constraint extends Migration
{
    public function up()
    {/*{{{*/
        #void addForeignKey( $name, $table, $columns, $refTable, $refColumns, $delete = null, $update = null )
        # article
        $this->addForeignKey('fk_article_staff', '{{%article}}', 'staff_id', '{{%staff}}', 'id', 'CASCADE');
        # account
        $this->addForeignKey('fk_account_platform', '{{%account}}', 'platform_id', '{{%platform}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_account_staff', '{{%account}}', 'staff_id', '{{%staff}}', 'id', 'CASCADE');
        # category
        $this->addForeignKey('fk_category_account', '{{%category}}', 'account_id', '{{%account}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_category_staff', '{{%category}}', 'staff_id', '{{%staff}}', 'id', 'CASCADE');
        # content
        $this->addForeignKey('fk_content_category', '{{%content}}', 'category_id', '{{%category}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_content_staff', '{{%content}}', 'staff_id', '{{%staff}}', 'id', 'CASCADE');
        # platform
        $this->addForeignKey('fk_flatform_staff', '{{%platform}}', 'staff_id', '{{%staff}}', 'id', 'CASCADE');
    }/*}}}*/

    public function down()
    {/*{{{*/
        #void dropForeignKey( $name, $table )
        # article
        $this->dropForeignKey('fk_article_staff', '{{%article}}');
        # account
        $this->dropForeignKey('fk__account_platform', '{{%account}}');
        # category
        $this->dropForeignKey('fk_category_account', '{{%category}}');
        $this->dropForeignKey('fk_category_staff', '{{%category}}');
        # content
        $this->dropForeignKey('fk_content_category', '{{%content}}');
        $this->dropForeignKey('fk_content_staff', '{{%content}}');
        # platform
        $this->dropForeignKey('fk_flatform_staff', '{{%platform}}');
    }/*}}}*/
}
