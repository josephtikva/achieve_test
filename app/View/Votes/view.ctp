<div class="votes view">
<h2><?php echo __('Vote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vote['Color']['name'], array('controller' => 'colors', 'action' => 'view', $vote['Color']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Votes'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['votes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vote'), array('action' => 'edit', $vote['Vote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vote'), array('action' => 'delete', $vote['Vote']['id']), null, __('Are you sure you want to delete # %s?', $vote['Vote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
	</ul>
</div>
