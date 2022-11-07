<?php
/** @var $model \common\models\Video */

/** @var $similarVideos \common\models\Video[] */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

?>
<div class="row mt-3">
    <div style="display: flex">
        <div class="col-sm-8">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" style="max-width:100%;"
                       poster="<?php echo $model->getThumbnailLink() ?>"
                       src="<?php echo $model->getVideoLink() ?>" controls></video>
            </div>
            <h6 class="mt-2"><?php echo $model->title ?></h6>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <?php echo $model->getViews()->count() ?> views
                    . <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
                </div>
                <div>
                    <?php Pjax::begin() ?>
                    <?php echo $this->render('_buttons', [
                        'model' => $model
                    ]) ?>
                    <?php Pjax::end() ?>
                </div>
            </div>
            <div>
                <p>
                    <?php echo \common\helpers\Html::channelLink($model->createdBy)
                    ?>
                </p>
                <?php echo Html::encode($model->description) ?>
            </div>
        </div>

        <div class="col-sm-4" style="margin-left: 40px">

            <?php foreach ($similarVideos as $similarVideo): ?>
                <div class="media mb-3" style="display: flex">
                    <a href="<?php echo Url::to(['/video/view', 'video_id' => $similarVideo->video_id]) ?> ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="embed-responsive-item" style="width: 120px"
                                   poster="<?php echo $similarVideo->getThumbnailLink() ?>"
                                   src="<?php echo $similarVideo->getVideoLink() ?>"></video>
                        </div>
                    </a>

                    <div class="media-body">
                        <h6 class="mt-0"><?php echo $similarVideo->title ?></h6>
                        <div class="text-muted">
                            <p class="m-0">
                                <?php echo \common\helpers\Html::channelLink($model->createdBy)
                                ?>
                            </p>
                            <p>
                                <small>
                                    <?php echo $similarVideo->getViews()->count() ?> views .
                                    <?php echo Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

