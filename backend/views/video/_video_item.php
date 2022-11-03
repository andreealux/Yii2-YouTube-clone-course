<?php
/**@var $model \common\models\Video */

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="media" style="display: flex">

    <a href="<?php echo Url::to(['/video/update', 'video_id' =>$model->video_id]) ?>">
        <div class="embed-responsive embed-responsive-16by9 mr-3" >
            <video class="embed-responsive-item" style="width: 140px"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?php echo $model->getVideoLink() ?>"></video>
        </div>
    </a>


    <div class="media-body" style="margin-left: 5px !important;">
        <h6 class="mt-0"><?php echo $model->title ?></h6>
        <?php echo $model->description ?>
<!--        --><?php //echo $model->video_id ?>
    </div>
</div>

