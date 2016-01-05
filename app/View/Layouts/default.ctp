<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->css('bootstrap.min.css'); ?>
		<?php echo $this->Html->script('jquery-1.11.3.min.js');?>
		<?php echo $this->Html->script('bootstrap.js'); ?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class='container'>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>	
      <a class="navbar-brand" href="/">
    <img src="img/spyderdrop.png"
    style="position:absolute;top:31px;"></a></a>
    </div>
    <div class="collapse navbar-collapse" id="main-nav-collapse">
      <ul class="nav navbar-nav navbar-right">
          <a class="btn btn-primary navbar-btn" data-method="get" href="/users/sign_in">Log In</a>
          <a class="btn btn-success navbar-btn" data-method="get" href="/users/sign_up">Sign Up</a>
						<li><?php echo $this->Html->link('Home', '/');?></li>
						<li><?php echo $this->Html->link('Posts', '/posts'); ?></li>
						<li><?php echo $this->html->link('Contact', '/photos');?></li>
						<li><?php echo $this->html->link('Photos', '/about');?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
</body>
</html>
