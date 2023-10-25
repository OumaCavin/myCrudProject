<?php

use app\models\CrCourseRegType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CrCourseRegTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cr Course Reg Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cr-course-reg-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cr Course Reg Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'course_reg_type_id',
            'course_reg_type_code',
            'course_reg_type_name',
            'course_reg_entry_type',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CrCourseRegType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'course_reg_type_id' => $model->course_reg_type_id]);
                 }
            ],
        ],
    ]); ?>


</div>
