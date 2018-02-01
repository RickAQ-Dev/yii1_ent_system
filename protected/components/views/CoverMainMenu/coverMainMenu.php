<nav class="nav nav-masthead justify-content-center">
	<?php foreach($items as $index=>$item){

		if($index == 0)
			$item['linkOptions']['class'] = $item['linkOptions']['class'].' active';

		echo CHtml::link($item['label'],$item['url'],$item['linkOptions']);
	} ?>
</nav>