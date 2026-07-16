<?php

namespace humhub\modules\brandname;

use yii\base\WidgetEvent;
use yii\helpers\Html;

class Events
{
    public static function afterLogo(WidgetEvent $event)
    {
        // Only modify SiteLogo output when an image logo is rendered
        if (empty($event->result) || strpos($event->result, 'id="img-logo"') === false) {
            return;
        }

	// Prevent duplicate output if this event is called multiple times
        if (strpos($event->result, 'id="text-logo"') !== false) {
            return;
        }

        $text = Html::tag(
            'span',
            Html::encode(\Yii::$app->name),
            [
                'id' => 'text-logo',
                'class' => 'navbar-brand-text',
            ]
        );

        $event->result = str_replace(
            '</a>',
            $text . '</a>',
            $event->result
        );
    }
}
