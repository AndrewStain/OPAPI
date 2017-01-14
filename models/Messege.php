<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messege".
 *
 * @property integer $id
 * @property integer $Avtor
 * @property integer $Recip
 * @property string $Datetime
 * @property string $Messege
 * @property integer $Conversation_id
 */
class Messege extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messege';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Avtor', 'Recip', 'Conversation_id'], 'integer'],
            [['Datetime'], 'safe'],
            [['Messege'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Avtor' => 'Avtor',
            'Recip' => 'Recip',
            'Datetime' => 'Datetime',
            'Messege' => 'Messege',
            'Conversation_id' => 'Conversation ID',
        ];
    }

    /**
     * @inheritdoc
     * @return MessegeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MessegeQuery(get_called_class());
    }
}
