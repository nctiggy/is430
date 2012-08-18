<!-- File Location: app/View/Comics/index.ctp -->

<h1>Comic Book List</h1>
<table>
	<tr>
		<th>
			ID
		</th>
		<th>
			Title
		</th>
		<th>	
			Release Date
		</th>
		<th>
			Days Until Release
		</th>
		<th>
			Action
		</th>
	</tr>
		<?php foreach ($comics as $comic): ?>
	<tr>
		<td>
			<?php echo $comic['Comic']['id']; ?>
		</td>
		<td>
			<?php echo $this->Html->link($comic['Comic']['title'],array('controller' => 'comics', 'action' => 'view', $comic['Comic']['id'])); ?>
		</td>
		<td>
			<?php 
				$rd = new DateTime($comic['Comic']['releasedate']);
				echo $rd->format('D F jS, Y');
			 ?>
		</td>
		<td>
		<?php 
			$f = $this->Comic->getreleaseDate($comic['Comic']['releasedate']);
			If ($f->days == 0) {
				echo 'Releases Today';
			} elseif ($f->format('%R') == '+') {
				echo 'Already Released';
			} elseif ($f->format('%R') == '-') {
				print_r($f->days);
			} else {
				echo 'An error occured';
			}
		?>
		</td>
		<td>
			<?php 
				echo $this->Html->link('Edit', array('controller' => 'comics', 'action' => 'edit', $comic['Comic']['id'])); 
			?>
			<nbsp />
			<?php 
				echo $this->Form->postLink('Delete', array('action' => 'delete', $comic['Comic']['id']), array('confirm' => 'Are you sure?'));
			?>
			
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Add a Comic', array('controller' => 'comics', 'action' => 'add')) ?>