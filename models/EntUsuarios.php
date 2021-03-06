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
 *
 * @property RelUsuarioTickets[] $relUsuarioTickets
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
            [['txt_nombre', 'txt_apellido', 'txt_correo', 'num_telefono'], 'required', 'message'=>'Este campo no puede quedar en blanco'],
            [['txt_nombre', 'txt_apellido', 'txt_correo'], 'string', 'max' => 50],
            ['num_telefono', 'string', 'min'=>10, 'tooShort' => 'Télefono debe ser mínimo 10 dígitos'],
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
            'num_telefono' => 'Télefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUsuarioTickets()
    {
        return $this->hasMany(RelUsuarioTickets::className(), ['id_usuario' => 'id_usuario']);
    }
}