<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title_for_layout; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	<?php
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('print');
		echo $this->fetch('css');
	?>
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
		section {
			padding-top: 60px;
		}
	</style>

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	-->
</head>

<body data-spy="scroll">

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="i-bar"></span>
				</a>
				<a class="brand" href="#">Consejo Comunal El Trigal</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><?php echo $this->Html->link('Censo', array(
							'controller' => 'personas',
							'action' => 'index',
						)); ?>
						</li>
						<li><?php echo $this->Html->link('Profesiones', array(
							'controller' => 'profesiones',
							'action' => 'index',
						)); ?>
						</li>
						<li><?php echo $this->Html->link('Calles', array(
							'controller' => 'calles',
							'action' => 'index',
						)); ?>
						</li>
						<li><?php echo $this->Html->link('Cuaderno Electoral', array(
							'controller' => 'personas',
							'action' => 'cuaderno_electoral',
							'ext' => 'pdf'
						)); ?>
						</li>
						<li><?php echo $this->Html->link('Cuaderno Asistencia', array(
							'controller' => 'personas',
							'action' => 'cuaderno_asistencia',
							'ext' => 'pdf'
						)); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<h1><?php echo $title_for_layout; ?></h1>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>
