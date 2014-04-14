<h2>Add</h2>

<?php
echo $this->Form->create($article);

echo $this->Form->input('text', array('type' => 'text'));

echo $this->Form->input('textarea', array('type' => 'textarea'));

echo $this->Form->input('published', array('type' => 'datetime'));

echo $this->Form->input('date', array('type' => 'date'));

echo $this->Form->input('time', array('type' => 'time'));

echo $this->Form->input('bool', array('type' => 'checkbox'));

echo $this->Form->input('radio', array('type' => 'radio'));

echo $this->Form->input('select', array('type' => 'select'));

echo $this->Form->input('file', array('type' => 'file'));

echo $this->Form->submit(__('Submit'));
echo $this->Form->end();
?>