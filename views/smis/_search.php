<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegTypeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cr-course-reg-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'course_reg_type_id') ?>

    <?= $form->field($model, 'course_reg_type_code') ?>

    <?= $form->field($model, 'course_reg_type_name') ?>

    <?= $form->field($model, 'course_reg_entry_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
