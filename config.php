<?php

return [
    'id' => 'brandname',
    'class' => humhub\modules\brandname\Module::class,
    'namespace' => 'humhub\modules\brandname',

    'events' => [
        [
            'class' => humhub\widgets\SiteLogo::class,
            'event' => \yii\base\Widget::EVENT_AFTER_RUN,
            'callback' => [humhub\modules\brandname\Events::class, 'afterLogo'],
        ],
    ],
];
