<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cr-course-reg-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_reg_type_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_reg_type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_reg_entry_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
