<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemeVidmage;

/**
* MemeVidmageSearch represents the model behind the search form about `common\models\MemeVidmage`.
*/
class MemeVidmageSearch extends MemeVidmage
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'meme_id', 'vidmage_id', 'is_the_origin', 'likes'], 'integer'],
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
$query = MemeVidmage::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'meme_id' => $this->meme_id,
            'vidmage_id' => $this->vidmage_id,
            'is_the_origin' => $this->is_the_origin,
            'likes' => $this->likes,
        ]);

return $dataProvider;
}
}