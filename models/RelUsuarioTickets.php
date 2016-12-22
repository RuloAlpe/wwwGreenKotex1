<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_usuario_tickets".
 *
 * @property string $id_usuario
 * @property string $id_ticket
 *
 * @property EntUsuarios $idUsuario
 * @property EntTickets $idTicket
 */
class RelUsuarioTickets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rel_usuario_tickets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_ticket'], 'required'],
            [['id_usuario', 'id_ticket'], 'integer'],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EntUsuarios::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
            [['id_ticket'], 'exist', 'skipOnError' => true, 'targetClass' => EntTickets::className(), 'targetAttribute' => ['id_ticket' => 'id_ticket']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'id_ticket' => 'Id Ticket',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(EntUsuarios::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTicket()
    {
        return $this->hasOne(EntTickets::className(), ['id_ticket' => 'id_ticket']);
    }
}
