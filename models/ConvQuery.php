<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Conv]].
 *
 * @see Conv
 */
class ConvQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Conv[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Conv|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
