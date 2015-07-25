<?php

namespace common\helpers;

use yii\helpers\Html;

class Tools{
    public static function ulWithLink($items){
        return Html::ul($items, ['item'=>function($item, $index){
                                        return '<li><a href="'.$item->siteUrl.'">'.$item.'</a></li>';
                                    }
                                ]);
    }
}
