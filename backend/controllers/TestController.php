<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use Faker\Factory;

use backend\models\Staff;

/**
 * TestController class file.
 * @Author haoliang
 * @Date 08.12.2014 16:10
 */
class TestController extends Controller
{
    private $_faker;

    public function actionIndex()
    {/*{{{*/
        $faker = $this->faker;
        d($faker->unixTime());
        #echo "生成大量随机数据";
    }/*}}}*/

    public function actionStaff($num = 50)
    {/*{{{*/
        $faker = $this->faker;
        echo "will insert $num records of staff";
        while($num) {
            $staff = new Staff;
            $staff->staff_id = 0;
            $staff->name = $faker->username;
            $staff->pwd = $faker->text(60);
            $staff->ctime = $faker->unixTime();
            $staff->is_disabled = 0;
            $staff->time_kind = 1;
            $staff->formal_at = $faker->date();
            $staff->remark = $faker->text('300');
            if (!$staff->save())
                \d($staff->getErrors(), $staff->name);
            $num --;
        }
        echo "done";
    }/*}}}*/


    public function getFaker()
    {/*{{{*/
        if (!$this->_faker)
            $this->_faker = Factory::create();
        return $this->_faker;
    }/*}}}*/

}
