<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%staff}}".
 * @public   string $file
 * @property integer $id
 * @property integer $staff_id
 * @property string $name
 * @property string $pwd
 * @property integer $ctime
 * @property integer $is_disabled
 * @property integer $time_kind
 * @property integer $formal_at
 * @property string $remark
 * @property string $real_name
 * @property string $qq
 * @property string $avatar
 * @property string $phone
 * @property string $alipay
 * @property string $summary
 *
 * @property Article[] $articles
 * @property Category[] $categories
 * @property Content[] $contents
 * @property Platform[] $platforms
 */
class Staff extends Backend implements \yii\web\IdentityInterface
{

    const DISABLED = 1;
    const ENABLED = 0;

    # 当添加员工时, 要选择的角色, 角色暂时不能可视话添加
    public $role = false;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {/*{{{*/
        return '{{%staff}}';
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [
                ['name', 'is_disabled', 'time_kind', 'formal_at', 'role'],
                'required', 'message' => '请填写 {attribute}'
            ],
            [['is_trashed', 'staff_id', 'ctime', 'is_disabled', 'time_kind'], 'integer', 'message' => '{attribute} 只能填写数字'],
            [['name', 'alipay'], 'string', 'max' => 20, 'min' => 2, 'message' => '{attribute} 只能填写2-20个字符'],
            [['pwd'], 'string', 'min' => 6, 'message' => ''],
            [['remark', 'summary'], 'string', 'max' => 512],
            [['real_name'], 'string', 'max' => 10],
            [['qq'], 'string', 'max' => 12],
            [['phone'], 'string', 'max' => 15],
            ['role', 'string'],

            # 以时间戳保存的时间, 页面选择时是常规时间格式
            [['formal_at'], 'date', 'format' => 'php:Y-m-d'],
            ['name', 'match', 'pattern' => '/^[0-9a-zA-z-.]{2,20}$/', 'message' => '必须为2-20位的数字/字母/下划线任意组合'],
            ['name', 'unique'],
            ['avatar', 'image', 'skipOnEmpty' => true, 'extensions' => 'gif, jpg, png, jpeg'],
        ];
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        return [
            'id' => '编号',
            'staff_id' => '创建者',
            'name' => '登录名',
            'pwd' => '密码',
            'ctime' => '创建时间',
            'is_disabled' => '禁用',
            'time_kind' => '工作时间',
            'formal_at' => '转正时间',

            'is_trashed'  => '是否已软删除',

            'remark' => '备注',
            'real_name' => '真实姓名',
            'qq' => 'QQ',
            'avatar' => '头像',
            'phone' => '手机号',
            'alipay' => '支付宝',
            'summary' => '员工简介',
        ];
    }/*}}}*/

    public function scenarios()
    {/*{{{*/
        $s = parent::scenarios();
        $s['password'] = ['pwd'];
        $s['freeze'] = ['is_disabled'];
        return $s;
    }/*}}}*/

    # beforeSave: after validate and before save
    public function beforeSave($isInsert)
    {/*{{{*/
        if (parent::beforeSave($isInsert)) {
            # on create
            if ($isInsert) {
                $this->pwd = $this->generateInitPassword();
                $this->ctime = time();
                $this->staff_id = intval(Yii::$app->user->identity->id);
                $this->formal_at = strtotime($this->formal_at);
                $this->auth_key = Yii::$app->security->generateRandomString();
            }
            # on update
            elseif (Yii::$app->controller->action->id === 'update') {
                $this->formal_at = strtotime($this->formal_at);
            }
            return true;
        }
        return false;
    }/*}}}*/

    public function afterSave($isInsert, $changedAttributes)
    {/*{{{*/
        parent::afterSave($isInsert, $changedAttributes);

        # 添加员工后, 绑定角色
        if ($isInsert) {
            # add role
            $auth = Yii::$app->authmanager;
            $auth->assign($auth->getRole($this->role), $this->id);
        }

        # 更新数据时, 新旧头像替换
        if (!$isInsert && isset($changedAttributes['avatar']))
            @unlink( Yii::$app->params['uploadDir'] . '/' . $changedAttributes['avatar']);

    }/*}}}*/

    public function afterDelete()
    {/*{{{*/
        @unlink( Yii::$app->params['uploadDir'] . '/' . $this->avatar);
    }/*}}}*/

    public function generateInitPassword()
    {/*{{{*/
        return Yii::$app->getSecurity()->generatePasswordHash(Yii::$app->params['userInitPassword']);
    }/*}}}*/

    public static function findByName($name)
    {/*{{{*/
        if ( ($staff = static::find()->where(['name' => $name])->one()) != null)
            return $staff;
        throw new \yii\web\NotFoundHttpException('请求页面不存在');
    }/*}}}*/

    public static function findByid($id)
    {/*{{{*/
        if ( ($staff = static::findOne($id)) != null)
            return $staff;
        throw new yii\web\NotFoundHttpException('请求页面不存在');
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {/*{{{*/
        return $this->hasMany(Article::className(), ['staff_id' => 'id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {/*{{{*/
        return $this->hasMany(Category::className(), ['staff_id' => 'id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContents()
    {/*{{{*/
        return $this->hasMany(Content::className(), ['staff_id' => 'id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlatforms()
    {/*{{{*/
        return $this->hasMany(Platform::className(), ['staff_id' => 'id']);
    }/*}}}*/


    public static function findIdentity($id)
    {/*{{{*/
        return static::findOne($id);
    }/*}}}*/

    public static function findIdentityByAccessToken($token, $type = null)
    {/*{{{*/
        return static::findOne(['access_token' => $token]);
    }/*}}}*/

    public function getId()
    {/*{{{*/
        return $this->id;
    }/*}}}*/

    public function getAuthKey()
    {/*{{{*/
        return $this->auth_key;
    }/*}}}*/

    public function validateAuthKey($authKey)
    {/*{{{*/
        return $this->auth_key === $authKey;
    }/*}}}*/

}
