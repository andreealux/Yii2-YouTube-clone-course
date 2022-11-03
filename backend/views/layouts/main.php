<?php

/** @var \yii\web\View $this */

/** @var string $content */


use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;


$this->beginContent('@backend/views/layouts/base.php');
?>

<main role="main" class="d-flex">

    <?php echo $this->render('_sidebar') ?>

    <div class="content-wrapper p-3">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent() ?>
