<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_usuarios".
 *
 * @property string $id_usuario
 * @property string $txt_nombre
 * @property string $txt_apellido
 * @property string $txt_correo
 * @property string $num_telefono
 * @property string $id_cadena
 * @property string $id_sucursal
 * @property string $txt_ticket
 *
 * @property CatCadena $idCadena
 * @property CatSucursal $idSucursal
 */
class EntUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre', 'txt_apellido', 'txt_correo', 'num_telefono', 'id_cadena', 'id_sucursal', 'txt_ticket'], 'required', 'message'=>'Este campo no puede quedar en blanco'],
            [['id_cadena', 'id_sucursal'], 'integer'],
            [['txt_nombre', 'txt_apellido', 'txt_correo'], 'string', 'max' => 50],
        	['txt_correo', 'email', 'message'=>'Formato de email no es valido'],
            [['num_telefono'], 'string', 'max' => 10],
            [['txt_ticket'], 'string', 'max' => 100],
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
            'id_usuario' => 'Id Usuario',
            'txt_nombre' => 'Nombre',
            'txt_apellido' => 'Apellido',
            'txt_correo' => 'Correo',
            'num_telefono' => 'Telefono',
            'id_cadena' => 'Cadena',
            'id_sucursal' => 'Sucursal',
            'txt_ticket' => 'Ticket',
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
}