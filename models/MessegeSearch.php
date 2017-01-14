<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Messege;

/**
 * MessegeSearch represents the model behind the search form about `app\models\Messege`.
 */
class MessegeSearch extends Messege
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Avtor', 'Recip', 'Conversation_id'], 'integer'],
            [['Datetime', 'Messege'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Messege::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Avtor' => $this->Avtor,
            'Recip' => $this->Recip,
            'Datetime' => $this->Datetime,
            'Conversation_id' => $this->Conversation_id,
        ]);

        $query->andFilterWhere(['like', 'Messege', $this->Messege]);

        return $dataProvider;
    }
}
