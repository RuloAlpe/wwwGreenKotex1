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
 * @property string $num_telefono
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
        		[
        		[
        				'txt_correo'
        		],
        		'unique',
        		'message' => 'Email ya se encuentra registrado',
        		],
            [['id_gerente', 'txt_nombre', 'txt_apellido', 'txt_correo', 'num_telefono'], 'required', 'message'=>'Este campo no puede quedar en blanco'],
            [['id_gerente'], 'integer'],
            [['txt_nombre', 'txt_apellido', 'txt_correo'], 'string', 'max' => 50],
        		['txt_correo', 'email', 'message'=>'Formato de email no es valido'],
            [['num_telefono'], 'string', 'max' => 10],
            [['id_gerente'], 'exist', 'skipOnError' => true, 'targetClass' => EntGerentes::className(), 'targetAttribute' => ['id_gerente' => 'id_gerente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vendedor' => 'Vendedor',
            'id_gerente' => 'Gerente',
            'txt_nombre' => 'Nombre',
            'txt_apellido' => 'Apellido',
            'txt_correo' => 'Correo',
            'num_telefono' => 'Telefono',
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