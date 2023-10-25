<?php

namespace app\controllers;
use Yii;
use app\models\CrCourseRegType;
use app\models\CrCourseRegTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SmisController implements the CRUD actions for CrCourseRegType model.
 */
class SmisController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all CrCourseRegType models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CrCourseRegTypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CrCourseRegType model.
     * @param int $course_reg_type_id Course Reg Type ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($course_reg_type_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($course_reg_type_id),
        ]);
    }

    /**
     * Creates a new CrCourseRegType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CrCourseRegType();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'course_reg_type_id' => $model->course_reg_type_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CrCourseRegType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $course_reg_type_id Course Reg Type ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($course_reg_type_id)
    {
        $model = $this->findModel($course_reg_type_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'course_reg_type_id' => $model->course_reg_type_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CrCourseRegType model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $course_reg_type_id Course Reg Type ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($course_reg_type_id)
    {
        $this->findModel($course_reg_type_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CrCourseRegType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $course_reg_type_id Course Reg Type ID
     * @return CrCourseRegType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($course_reg_type_id)
    {
        if (($model = CrCourseRegType::findOne(['course_reg_type_id' => $course_reg_type_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
        /**
     * Finds the CrCourseRegType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $course_reg_type_id Course Reg Type ID
     * @return CrCourseRegType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionCrCourseRegType()
    {
    $model = new \app\models\CrCourseRegType();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('cr-course-reg-type', [
        'model' => $model,
    ]);
    }
    
}
