<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_vendedores".
 *
 * @property string $id_vendedor
 * @property string $id_gerente
 * @property string $txt_nombre
 * @property string $txt_apellido
 * @property string $txt_correo
 * @property integer $num_telefono
 *
 * @property EntGerentes $idGerente
 */
class EntVendedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_vendedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gerente', 'txt_nombre', 'txt_apellido', 'txt_correo', 'num_telefono'], 'required'],
            [['id_gerente', 'num_telefono'], 'integer'],
            [['txt_nombre', 'txt_apellido', 'txt_correo'], 'string', 'max' => 50],
            [['id_gerente'], 'exist', 'skipOnError' => true, 'targetClass' => EntGerentes::className(), 'targetAttribute' => ['id_gerente' => 'id_gerente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vendedor' => 'Id Vendedor',
            'id_gerente' => 'Id Gerente',
            'txt_nombre' => 'Txt Nombre',
            'txt_apellido' => 'Txt Apellido',
            'txt_correo' => 'Txt Correo',
            'num_telefono' => 'Num Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGerente()
    {
        return $this->hasOne(EntGerentes::className(), ['id_gerente' => 'id_gerente']);
    }
}
