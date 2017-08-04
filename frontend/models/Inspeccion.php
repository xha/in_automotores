<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ISAU_Inspeccion".
 *
 * @property integer $id_inspeccion
 * @property string $descripcion
 * @property integer $activo
 *
 * @property ISAUTransaccionInspeccion[] $iSAUTransaccionInspeccions
 */
class Inspeccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ISAU_Inspeccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['activo'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_inspeccion' => 'Id Inspeccion',
            'descripcion' => 'Descripcion',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISAUTransaccionInspeccions()
    {
        return $this->hasMany(ISAUTransaccionInspeccion::className(), ['id_inspeccion' => 'id_inspeccion']);
    }
}