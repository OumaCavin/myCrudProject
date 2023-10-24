<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegType $model */

$this->title = $model->course_reg_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Cr Course Reg Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cr-course-reg-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'course_reg_type_id' => $model->course_reg_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'course_reg_type_id' => $model->course_reg_type_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'course_reg_type_id',
            'course_reg_type_code',
            'course_reg_type_name',
            'course_reg_entry_type',
        ],
    ]) ?>

</div>
