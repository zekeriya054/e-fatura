<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bankalar".
 *
 * @property int $id
 * @property string $banka_ad
 */
class Bankalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bankalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['banka_ad'], 'required','message' => 'Lütfen bu alanı boş bırakmayınız!'],
            [['banka_ad'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banka_ad' => 'Banka Ad',
        ];
    }
}
