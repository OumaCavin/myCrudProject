<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegType $model */

$this->title = 'Update Cr Course Reg Type: ' . $model->course_reg_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Cr Course Reg Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->course_reg_type_id, 'url' => ['view', 'course_reg_type_id' => $model->course_reg_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cr-course-reg-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
