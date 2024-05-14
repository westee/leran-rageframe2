<?php

namespace common\models\hello;

use yii\db\ActiveRecord;  

/**
 * This is the model class for table "{{%user_table}}".
 *
 * @property int $id

 */
class Hello extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_table}}';
    }
}
