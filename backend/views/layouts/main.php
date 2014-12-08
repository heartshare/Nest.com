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

                ['label' => '员工', 'items' => [
                    ['label' => '浏览', 'url' => ['/staff']],
                    ['label' => '添加', 'url' => ['/staff/create']],
                ]],
                ['label' => '文章', 'items' => [
                    ['label' => '浏览', 'url' => ['/article']],
                    ['label' => '添加', 'url' => ['/article/create']],
                ]],
                ['label' => '平台', 'items' => [
                    ['label' => '浏览', 'url' => ['/platform']],
                    ['label' => '添加', 'url' => ['/platform/create']],
                ]],
                ['label' => '账户', 'items' => [
                    ['label' => '浏览', 'url' => ['/account']],
                    ['label' => '添加', 'url' => ['/account/create']],
                ]],
                ['label' => '分类', 'items' => [
                    ['label' => '浏览', 'url' => ['/category']],
                    ['label' => '添加', 'url' => ['/category/create']],
                ]],
                ['label' => '内容', 'items' => [
                    ['label' => '浏览', 'url' => ['/content']],
                    ['label' => '添加', 'url' => ['/content/create']],
                ]],
            ];

            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
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
