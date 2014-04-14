<h2>Add</h2>

<?php
echo $this->Form->create($article);

echo $this->Form->input('name');
echo $this->Form->input('content');
echo $this->Form->input('is_active');
echo $this->Form->input('publish_date');

echo $this->Form->submit(__('Submit'));
echo $this->Form->end();
?>