<?php
/** @var $model \common\models\Video */

use yii\helpers\Url;

?>


<div class="card m-3" style="width: 18rem;">
    <a href="<?php echo Url::to(['/video/view', 'video_id' => $model->video_id]) ?>">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" style="max-width:100%;"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?php echo $model->getVideoLink() ?>"></video>
        </div>
    </a>
    <div class="card-body p-2">
        <h6 class="card-title m-0"><?php echo $model->title ?></h6>
        <p class="text-muted card-text m-0"><?php echo $model->createdBy->username ?></p>
        <p class="text-muted card-text m-0">
            140 views . <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>