<?php

/** @var $dataProvider \yii\data\ActiveDataProvider */
?>

<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'class' => \yii\bootstrap5\LinkPager::class
    ],
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap mt-5">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>

