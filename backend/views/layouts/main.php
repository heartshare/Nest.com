<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->params['company'],
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],

                ['label' => '员工', 'url' => ['/staff']],
                ['label' => '文章', 'url' => ['/article']],
                ['label' => '平台', 'url' => ['/platform']],
                ['label' => '账户', 'url' => ['/account']],
                ['label' => '分类', 'url' => ['/category']],
                ['label' => '内容', 'url' => ['/content']],
            ];

            if (Yii::$app->user->isGuest)
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            else {
                $menuItems[] = [
                    'label' => Yii::$app->getUser()->identity->name,
                    'items' => [
                        ['label' => ' 个人信息', 'url' => ['/staff/view', 'id' => Yii::$app->getUser()->identity->id],
                            'linkOptions' => [ 'class' => 'glyphicon glyphicon-user', ]
                        ],
                        ['label' => ' 修改密码', 'url' => ['/staff/password', 'id' => Yii::$app->getUser()->identity->id],
                            'linkOptions' => [ 'class' => 'glyphicon glyphicon-cog', ]
                        ],
                        [
                            'label' => ' 安全退出', 'url' => ['/site/logout'],
                            'linkOptions' => [
                                'data-method' => 'post',
                                'class' => 'glyphicon glyphicon-log-out',
                            ]
                        ]
                    ],
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->params['company'] ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
