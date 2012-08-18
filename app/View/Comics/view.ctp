<!-- File Location: app/View/Comics/view.ctp -->

<h1><?php echo $comic['Comic']['title']; ?></h1>
<p>
	<small>
		<?php
			$f = new DateTime($comic['Comic']['releasedate']); 
			echo 'Release Date: '; echo $f->format('m-d-Y');
		?>
	</small>
</p>
<?php echo $this->Html->link('Back', array('controller' => 'comics', 'action' => 'index')); ?>