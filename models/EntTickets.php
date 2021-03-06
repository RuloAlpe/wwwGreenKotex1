<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_tickets".
 *
 * @property string $id_ticket
 * @property string $txt_ticket
 * @property string $id_cadena
 * @property string $id_sucursal
 *
 * @property RelUsuarioTickets[] $relUsuarioTickets
 */
class EntTickets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_tickets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_ticket', 'id_cadena', 'id_sucursal'], 'required', 'message'=>'Este campo no puede quedar en blanco'],
            [['id_cadena', 'id_sucursal'], 'integer'],
            [['txt_ticket'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ticket' => 'Id Ticket',
            'txt_ticket' => 'Ticket',
            'id_cadena' => 'Cadena',
            'id_sucursal' => 'Sucursal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUsuarioTickets()
    {
        return $this->hasMany(RelUsuarioTickets::className(), ['id_ticket' => 'id_ticket']);
    }
}