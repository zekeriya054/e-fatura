<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tahsilat;
use kartik\daterange\DateRangePicker;
use kartik\daterange\DateRangeBehavior;
/**
 * TahsilatSearch represents the model behind the search form of `app\models\Tahsilat`.
 */
class TahsilatSearch extends Tahsilat
{
    /**
     * {@inheritdoc}
     */
     public $createTimeRange;
     public $createTimeStart;
     public $createTimeEnd;
     public function behaviors()
     {
         return [
             [
                 'class' => DateRangeBehavior::className(),
                 'attribute' => 'createTimeRange',
                 'dateStartAttribute' => 'createTimeStart',
                 'dateEndAttribute' => 'createTimeEnd',
              //   'dateStartFormat' => 'd.m.Y',
              //   'dateEndFormat' => 'd.m.Y',
             ]
         ];
     }
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['borclu', 'banka', 'icra_dairesi', 'icra_numarasi', 'urun_numarasi', 'tarih', 'tahsil_eden','createTimeStart','createTimeEnd'], 'safe'],
            [['yatirilan_miktar'], 'number'],
          //  [['createTimeRange'], 'match', 'pattern' => '/^.+\s\-\s.+$/'],
        ];
    }

    /**
     * {@inheritdoc}
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
    public function search($params,$action)
    {
        $query = Tahsilat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['id' => SORT_DESC]
            ],
            'pagination' => [
              'pageSize' => $action===1 ? 10000 : 20,
            ],
        ]);


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
    //    if(!empty($this->tarih))  $this->tarih = date_format(date_create_from_format('d.m.Y', $this->tarih), 'Y-m-d');

    //    if(!empty($this->createTimeStart))  $this->createTimeStart = date_format(date_create_from_format('d.m.Y', $this->createTimeStart), 'Y-m-d');
        $query->andFilterWhere([
            'id' => $this->id,
            'yatirilan_miktar' => $this->yatirilan_miktar,

        ]);

     $query->andFilterWhere(['>=', 'tarih', $this->createTimeStart])
                ->andFilterWhere(['<=', 'tarih', $this->createTimeEnd]);

        $query->andFilterWhere(['like', 'borclu', $this->borclu])
            ->andFilterWhere(['like', 'banka', $this->banka])
            ->andFilterWhere(['like', 'icra_dairesi', $this->icra_dairesi])
            ->andFilterWhere(['like', 'icra_numarasi', $this->icra_numarasi])
            ->andFilterWhere(['like', 'urun_numarasi', $this->urun_numarasi])
            ->andFilterWhere(['like', 'tahsil_eden', $this->tahsil_eden]);

        return $dataProvider;
    }
    public static function getTotal($provider, $columnName)
    {
        $total = 0;
        foreach ($provider as $item) {
          $total += $item[$columnName];
        }
        return $total;
    }
}
