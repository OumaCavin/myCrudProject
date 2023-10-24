<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegType $model */
/** @var ActiveForm $form */
?>
<div class="smis-cr-course-reg-type">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'course_reg_type_code') ?>
        <?= $form->field($model, 'course_reg_type_name') ?>
        <?= $form->field($model, 'course_reg_entry_type') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- smis-cr-course-reg-type -->
