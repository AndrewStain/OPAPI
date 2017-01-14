<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Messege]].
 *
 * @see Messege
 */
class MessegeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Messege[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Messege|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
