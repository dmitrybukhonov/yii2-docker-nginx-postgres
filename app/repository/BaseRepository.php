<?php

namespace app\repository;

use app\models\User;
use yii\db\ActiveQuery;

class BaseRepository
{
    /**
     * @return ActiveQuery
     */
    protected function getBaseUserQuery(): ActiveQuery
    {
        $query = User::find();

        return $query;
    }
}
