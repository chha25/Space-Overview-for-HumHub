<?php

use humhub\modules\user\widgets\ProfileMenu;

return [
    'id' => 'spacehistory',
    'class' => 'humhub\modules\spacehistory\Module',
    'namespace' => 'humhub\modules\spacehistory',
    'events' => array(
        array('class' => ProfileMenu::className(), 'event' => ProfileMenu::EVENT_INIT, 'callback' => array('humhub\modules\spacehistory\Events', 'onProfileMenuInit')),
    )
];
?>