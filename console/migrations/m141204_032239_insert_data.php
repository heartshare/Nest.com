<?php

use yii\db\Schema;
use yii\db\Migration;

class m141204_032239_insert_data extends Migration
{
    public function up()
    {/*{{{*/
        # staff
        $this->insert('{{%staff}}', [
            'staff_id' => 0,
            'role_id' => 'god',
            'name' => 'haoliang',
            'pwd' => '$2y$13$uLOIdWSsj.wHUklpkoaH6.cOxrshlevg5k34D2x0EBtLBh0p85Q.6',
            'ctime' => '1417663527',
            'is_disabled' => '0',
            'time_kind' => '1',
            'formal_at' => '1417663850'
        ]);
        $this->insert('{{%staff}}', [
            'staff_id' => 1,
            'role_id' => 'leader',
            'name' => 'leader',
            'pwd' => '$2y$13$uLOIdWSsj.wHUklpkoaH6.cOxrshlevg5k34D2x0EBtLBh0p85Q.6',
            'ctime' => '1417663527',
            'is_disabled' => '0',
            'time_kind' => '1',
            'formal_at' => '1417663850'
        ]);
        $this->insert('{{%staff}}', [
            'staff_id' => 1,
            'role_id' => 'editor',
            'name' => 'editor',
            'pwd' => '$2y$13$uLOIdWSsj.wHUklpkoaH6.cOxrshlevg5k34D2x0EBtLBh0p85Q.6',
            'ctime' => '1417663527',
            'is_disabled' => '0',
            'time_kind' => '1',
            'formal_at' => '1417663850'
        ]);
        $this->insert('{{%staff}}', [
            'staff_id' => 1,
            'role_id' => 'inspector',
            'name' => 'inspector',
            'pwd' => '$2y$13$uLOIdWSsj.wHUklpkoaH6.cOxrshlevg5k34D2x0EBtLBh0p85Q.6',
            'ctime' => '1417663527',
            'is_disabled' => '0',
            'time_kind' => '1',
            'formal_at' => '1417663850'
        ]);
        # article
        $this->insert('{{%article}}', [
            'staff_id' => 1,
            'title' => 'first post',
            'content' => 'hello darkness, my old friend! i came to talk with you again',
            'is_draft' => 1,
            'staff_visible' => 3,
            'is_top' => 0,
            'ctime' => 1417663908
        ]);

        # platform
        $this->insert('{{%platform}}', [
            'name' => '微博',
            'staff_id' => '1',
            'ctime' => 1417663988
        ]);
        # account
        $this->insert('{{%account}}', [
            'platform_id' => 1,
            'staff_id' => 1,
            'name' => '花先发',
            'uid' => '1234567',
            'avatar' =>  'http://www.baidu.com/ad.jpg',
            'ctime' => 1417664114
        ]);
        # category
        $this->insert('{{%category}}', [
            "account_id"  => 1,
            "staff_id"    => 1,
            "name"        => "音乐",
            "summary"     => "music from heaven",
            "ctime"       => 1417664190,
        ]);
        # content
        $this->insert('{{%content}}', [
            "category_id" => "1",
            "staff_id" => "1",
            "title" => "enigma",
            "content" => "hello and welcome",
            "expect_send_at" => "1417665275",
            "source_url" => "http://www.weibo.com/abc",
            "album" => "http://www.weibo.com/abc.jpg",
            "ctime" => "1417664346",
            "is_draft" => "0",
            "is_important" => "0",
            "mtime" => "1417664346",
            "modified_staff_id" => "1",
        ]);
    }/*}}}*/

    public function down()
    {/*{{{*/
        echo "every table's first data can not be deleted!";
    }/*}}}*/

}
