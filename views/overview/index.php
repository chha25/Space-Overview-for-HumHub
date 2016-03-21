<?php
use yii\helpers\Url;
use yii\helpers\Html;
use humhub\modules\space\models\space;

use humhub\modules\spacehistory\controllers\OverviewController;
?>

<div class="panel panel-default">
	<div class="panel-body">
		<div>
			<h1>Aktuelle Spaces</h1>
			<ul>
			<?php foreach($kindsOfSpaces[Space::STATUS_ENABLED] as $enabled){
				echo '<li>'.$enabled->name.'</li>';
			}
			?>
			</ul>
		</div>
		<div>
			<h1>Archivierte Spaces</h1>
			<ul>
			<?php foreach($kindsOfSpaces[Space::STATUS_ARCHIVED] as $archived){
				echo '<li>'.$archived->name.'</li>';
			}
			?>
			</ul>
		</div>
	</div>
</div>
 