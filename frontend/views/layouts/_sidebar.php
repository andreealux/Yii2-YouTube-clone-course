<?php

?>

<aside class="shadow">
    <?php echo \yii\bootstrap5\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav nav-pills'
        ],
        'items' => [
            [
                'label' => 'Home',
                'url' => ['/site/index']
            ],
            [
                'label' => 'History',
                'url' => ['/video/history']
            ]
        ]
    ]) ?>
</aside>
