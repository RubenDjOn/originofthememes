<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use \common\models\base\Platform as BasePlatform;

/**
 * This is the model class for table "platform".
 */
class Platform extends BasePlatform
{
    public static function getMappedArray(){
        $models = self::find()->asArray()->all();
        return ArrayHelper::map($models, 'id', 'name');
    }
}
