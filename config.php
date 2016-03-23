<?php

use humhub\modules\user\widgets\ProfileMenu;

return [
    'id' => 'spaceoverview',
    'class' => 'humhub\modules\spaceoverview\Module',
    'namespace' => 'humhub\modules\spaceoverview',
    'events' => array(
        array('class' => ProfileMenu::className(), 'event' => ProfileMenu::EVENT_INIT, 'callback' => array('humhub\modules\spaceoverview\Events', 'onProfileMenuInit')),
    )
];
?>