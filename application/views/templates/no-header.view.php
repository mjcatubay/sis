<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard :: <?php echo COMPANY_NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
	
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">        
    <link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/base-admin-3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/base-admin-3-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/package/dashboard.css" rel="stylesheet">   
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/package/signin.css" rel="stylesheet" type="text/css">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php if(isset($styles)):?>
		<?php foreach($styles as $style):?>
		<link href="<?php echo base_url();?>css/<?php echo $style; ?>.css" rel="stylesheet" />
		<?php endforeach;?>
	<?php endif;?>
	
	<?php if(isset($plugins)):?>
		<?php foreach($plugins as $plugin):?>
		<link href="<?php echo base_url();?>js/plugins/<?php echo $plugin; ?>.css" rel="stylesheet" />
		<?php endforeach;?>
	<?php endif;?>
	
	<script src="<?php echo base_url(); ?>js/libs/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/libs/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>js/libs/bootstrap.min.js"></script>
	<script type="text/javascript">
		var BASE_URL = "<?php echo base_url();?>";
		var SERVER_DATE_TIME = "<?php echo date("F d, Y H:i:s"); ?>";
	</script>
	<?php if(isset($scripts)):?>
		<?php foreach($scripts as $script):?>
		<script type="text/javascript" src="<?php echo base_url();?>js/<?php echo $script; ?>.js"></script>
		<?php endforeach;?>
	<?php endif;?>
	
  </head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-cog"></i>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo COMPANY_NAME; ?></a>
		</div>
	</div> <!-- /.container -->
</nav>
<div class="main">