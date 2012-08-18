<!-- File Location: app/View/Comics/view.ctp -->

<h1>Add a Comic Book</h1>
<?php
echo $this->Form->create('Comic');
echo $this->Form->input('title');
echo $this->Form->input('releasedate');
echo $this->Form->end('Save Comic');
?>
<br />
<?php echo $this->Html->link('Back', array('controller' => 'comics', 'action' => 'index')); ?>