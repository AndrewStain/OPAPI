<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conv".
 *
 * @property integer $id
 * @property integer $User1
 * @property integer $User2
 * @property integer $LastMessege
 */
class Conv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['User1', 'User2', 'LastMessege'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'User1' => 'User1',
            'User2' => 'User2',
            'LastMessege' => 'Last Messege',
        ];
    }

    /**
     * @inheritdoc
     * @return ConvQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConvQuery(get_called_class());
    }
}
