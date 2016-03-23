<?php

namespace humhub\modules\spaceoverview;

use Yii;


class Events extends \yii\base\Object
{
    public static function onProfileMenuInit($event)
    {
        
        if ($event->sender->user !== null && $event->sender->user->isModuleEnabled('spaceoverview')) {
            $event->sender->addItem(array(
                    'label' => Yii::t('SpaceoverviewModule.overview_index', 'Space Overview'),
                    'url' => $event->sender->user->createUrl('/spaceoverview/overview'),
                    'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'spaceoverview')
                ));
        }
    }

}
