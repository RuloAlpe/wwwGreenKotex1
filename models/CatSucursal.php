<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_sucursal".
 *
 * @property string $id_sucursal
 * @property string $id_cadena
 * @property string $txt_nombre
 * @property string $txt_descripcion
 * @property integer $b_habilitado
 *
 * @property CatCadena $idCadena
 * @property EntGerentes[] $entGerentes
 * @property EntUsuarios[] $entUsuarios
 */
class CatSucursal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_sucursal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cadena', 'txt_nombre'], 'required'],
            [['id_cadena', 'b_habilitado'], 'integer'],
            [['txt_nombre', 'txt_descripcion'], 'string', 'max' => 50],
            [['id_cadena'], 'exist', 'skipOnError' => true, 'targetClass' => CatCadena::className(), 'targetAttribute' => ['id_cadena' => 'id_cadena']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sucursal' => 'Sucursal',
            'id_cadena' => 'Cadena',
            'txt_nombre' => 'Nombre',
            'txt_descripcion' => 'Descripcion',
            'b_habilitado' => 'Habilitado',
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
    public function getEntGerentes()
    {
        return $this->hasMany(EntGerentes::className(), ['id_sucursal' => 'id_sucursal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntUsuarios()
    {
        return $this->hasMany(EntUsuarios::className(), ['id_sucursal' => 'id_sucursal']);
    }
}