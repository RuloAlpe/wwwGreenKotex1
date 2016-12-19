<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_gerentes".
 *
 * @property string $id_gerente
 * @property string $txt_nombre
 * @property string $txt_apellido
 * @property string $txt_correo
 * @property integer $num_telefono
 * @property string $id_sucursal
 * @property string $id_cadena
 *
 * @property CatCadena $idCadena
 * @property CatSucursal $idSucursal
 * @property EntVendedores[] $entVendedores
 */
class EntGerentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_gerentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre', 'txt_apellido', 'txt_correo', 'num_telefono', 'id_sucursal', 'id_cadena'], 'required'],
            [['num_telefono', 'id_sucursal', 'id_cadena'], 'integer'],
            [['txt_nombre', 'txt_apellido', 'txt_correo'], 'string', 'max' => 50],
            [['id_cadena'], 'exist', 'skipOnError' => true, 'targetClass' => CatCadena::className(), 'targetAttribute' => ['id_cadena' => 'id_cadena']],
            [['id_sucursal'], 'exist', 'skipOnError' => true, 'targetClass' => CatSucursal::className(), 'targetAttribute' => ['id_sucursal' => 'id_sucursal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gerente' => 'Id Gerente',
            'txt_nombre' => 'Txt Nombre',
            'txt_apellido' => 'Txt Apellido',
            'txt_correo' => 'Txt Correo',
            'num_telefono' => 'Num Telefono',
            'id_sucursal' => 'Id Sucursal',
            'id_cadena' => 'Id Cadena',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCadena()
    {
        return $this->hasOne(CatCadena::className(), ['id_cadena' => 'id_cadena']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSucursal()
    {
        return $this->hasOne(CatSucursal::className(), ['id_sucursal' => 'id_sucursal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntVendedores()
    {
        return $this->hasMany(EntVendedores::className(), ['id_gerente' => 'id_gerente']);
    }
}