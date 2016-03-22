<?php

namespace humhub\modules\spacehistory;

use Yii;


class Events extends \yii\base\Object
{
    public static function onProfileMenuInit($event)
    {
        
        if ($event->sender->user !== null && $event->sender->user->isModuleEnabled('spacehistory')) {
            $event->sender->addItem(array(
                    'label' => Yii::t('SpacehistoryModule.overview_index', 'Space History'),
                    'url' => $event->sender->user->createUrl('/spacehistory/overview'),
                    'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'spacehistory')
                ));
        }
    }

}
