<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "smis.cr_course_reg_type".
 *
 * @property int $course_reg_type_id
 * @property string $course_reg_type_code
 * @property string|null $course_reg_type_name
 * @property string|null $course_reg_entry_type
 */
class CrCourseRegType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'smis.cr_course_reg_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_reg_type_code'], 'required'],
            [['course_reg_type_code'], 'string', 'max' => 10],
            [['course_reg_type_name', 'course_reg_entry_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_reg_type_id' => 'Course Reg Type ID',
            'course_reg_type_code' => 'Course Reg Type Code',
            'course_reg_type_name' => 'Course Reg Type Name',
            'course_reg_entry_type' => 'Course Reg Entry Type',
        ];
    }
}
