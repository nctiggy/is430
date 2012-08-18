<!-- File Location: app/View/Comics/index.ctp -->

<h1>Edit Comic Book</h1>
<?php
echo $this->Form->create('Comic', array('action' => 'edit'));
echo $this->Form->input('title');
echo $this->Form->input('releasedate');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Comic');
?>
<br />
<?php echo $this->Html->link("Cancel",array('controller' => 'comics', 'action' => 'index')); ?>