<?php
use yii\helpers\Url;
use yii\helpers\Html;
use humhub\modules\space\models\space;

use humhub\modules\spacehistory\controllers\OverviewController;
?>

<div class="panel panel-default">
  <div class="panel-heading"> <?php echo Yii::t('SpacehistoryModule.overview_index','<strong>Overview Spaces</strong>') ?></div>
    <div class="panel-body">
      <div class="heading"> <?php echo Yii::t('SpacehistoryModule.overview_index','<strong>Active Spaces</strong>') ?></div>
        <div>
            <ul>
               <?php foreach($kindsOfSpaces[Space::STATUS_ENABLED] as $enabled){ ?>
				<li>
					<a href="<?php echo $enabled->getUrl(); ?>"><?php echo Html::encode($enabled->name); ?></a>
				</li>
			<?php } ?>
            </ul>
        </div>
    
	  <div class="heading"> <?php echo Yii::t('SpacehistoryModule.overview_index','<strong>Archivierte Spaces</strong>') ?></div>
        <div>
			<ul>
			<?php foreach($kindsOfSpaces[Space::STATUS_ARCHIVED] as $archived){ ?>
				<li>
					<a href="<?php echo $archived->getUrl(); ?>"><?php echo Html::encode($archived->name); ?></a>
				</li>
			<?php } ?>
			</ul>
		</div>
      <div class="heading"> <?php echo Yii::t('SpacehistoryModule.overview_index','<strong>Disabled Spaces</strong>') ?></div>
        <div>
			<ul>
			<?php foreach($kindsOfSpaces[Space::STATUS_DISABLED] as $disabled){ ?>
				<li>
					<a href="<?php echo $disabled->getUrl(); ?>"><?php echo Html::encode($disabled->name); ?></a>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
</div>
 