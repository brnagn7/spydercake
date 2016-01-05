<h2><?php echo h($user['User']['name']); ?></h2>
<p>
	<?php echo h($user['User']['email']); ?>
</p>
<dl>
	<dd><?php echo $this->Time->nice($user['User']['created']); ?></dd>
</dl>

