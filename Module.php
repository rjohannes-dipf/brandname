<?php

namespace humhub\modules\brandname;

use humhub\components\Module as BaseModule;
use humhub\modules\brandname\assets\BrandNameAsset;

class Module extends BaseModule
{
    public function init()
    {
        parent::init();

        BrandNameAsset::register(\Yii::$app->view);
    }
}
