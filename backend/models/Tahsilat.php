<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tahsilat".
 *
 * @property int $id
 * @property string $borclu
 * @property string $banka
 * @property string $icra_dairesi
 * @property string $icra_numarasi
 * @property string $urun_numarasi
 * @property string $yatirilan_miktar
 * @property string $tarih
 * @property string $tahsil_eden
 */
class Tahsilat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahsilat';
    }

    /**
     * {@inheritdoc}
     */

public function beforeSave($insert)
{
  // $this->tarih=date('Y-m-d',$this->tarih);
  //$this->tarih=Yii::$app->formatter->asDate('30.01.2010', 'yyyy-mm-dd');
  if (parent::beforeSave($insert)) {
    $this->tarih = date_format(date_create_from_format('d.m.Y', $this->tarih), 'Y-m-d');
      return true;

  }
  else {
    return false;
  }
}

    public function rules()
    {
        return [
            [['borclu', 'banka', 'icra_dairesi', 'icra_numarasi', 'urun_numarasi', 'yatirilan_miktar', 'tarih', 'tahsil_eden'], 'required','message' => 'Lütfen bu alanı boş bırakmayınız!'],
            [['yatirilan_miktar'], 'number'],
            [['tarih'], 'safe'],
            [['borclu', 'tahsil_eden'], 'string', 'max' => 30],
            [['banka'], 'string', 'max' => 50],
            [['icra_dairesi'], 'string', 'max' => 5],
            [['icra_numarasi'], 'string', 'max' => 20],
            [['urun_numarasi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'borclu' => 'Borçlu',
            'banka' => 'Banka',
            'icra_dairesi' => 'İcra Dairesi',
            'icra_numarasi' => 'İcra Numarası',
            'urun_numarasi' => 'Ürün Numarası',
            'yatirilan_miktar' => 'Yatırılan Miktar',
            'tarih' => 'Tarih',
            'tahsil_eden' => 'Tahsil Eden',
        ];
    }
}
