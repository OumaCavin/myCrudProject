<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegType $model */

$this->title = 'Create Cr Course Reg Type';
$this->params['breadcrumbs'][] = ['label' => 'Cr Course Reg Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cr-course-reg-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
