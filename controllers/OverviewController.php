<?php
namespace humhub\modules\spaceoverview\controllers;

use humhub\modules\space\models\space;
use humhub\modules\space\models\membership;
use yii\web\Controller;
use \humhub\modules\content\components\ContentContainerController;

class OverviewController extends ContentContainerController
{
    public function actionIndex()
    {
		$userSpaces = Membership::GetUserSpaces($this->getUser()->id);

		$kindsOfSpaces = $this->getKindsOfSpaces($userSpaces);
		
        return $this->render('index', ['contentContainer' => $this->contentContainer,
									   'kindsOfSpaces'=>$kindsOfSpaces]);
    }
	
	function getKindsOfSpaces($userSpaces)
	{
		$disabled = array();
		$enabled = array();
		$archived = array();
		foreach($userSpaces as $space)
		{
			switch($space->status)
			{
				case Space::STATUS_DISABLED:
					array_push($disabled, $space);
					break;
				
				case Space::STATUS_ENABLED:
					array_push($enabled, $space);
					break;
				
				case Space::STATUS_ARCHIVED:
					array_push($archived, $space);
					break;
			}	
		}
		return $kindsOfSpaces = array(Space::STATUS_DISABLED=>$disabled,
									  Space::STATUS_ENABLED=>$enabled,
									  Space::STATUS_ARCHIVED=>$archived);
	}
}