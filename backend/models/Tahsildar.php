<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tahsildar".
 *
 * @property int $id
 * @property string $ad
 */
class Tahsildar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahsildar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad'], 'required','message' => 'Lütfen bu alanı boş bırakmayınız!'],
            [['ad'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
        ];
    }
}
