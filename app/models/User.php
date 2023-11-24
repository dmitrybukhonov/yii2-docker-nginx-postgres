<?php

namespace app\models;

/**
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritDoc
     * @return string
     */
    public static function tableName(): string
    {
        return '{{%users}}';
    }
}
