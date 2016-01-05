<h2><?php echo __('Users'); ?></h2>
<table class="table">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td>
			<?php
			echo $this->Html->link($user['User']['name'], array('controller' => 'users', 'action' => 'view', $user['User']['id']));
			?>
		</td>
		<td><?php echo $this->Time->nice($user['User']['created']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<div>
	<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
</div>
<div>
	<?php
	echo $this->Paginator->prev(__('< previous'), array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('next >'), array(), null, array('class' => 'next disabled'));
	?>
</div>