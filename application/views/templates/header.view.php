<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard :: <?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
	
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/fonts/open_sans.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">        
    <link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/base-admin-3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/base-admin-3-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/package/dashboard.css" rel="stylesheet">   
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>js/plugins/msgbox/jquery.msgbox.css" rel="stylesheet">

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
	<script src="<?php echo base_url(); ?>js/jquery.numeric.js"></script>
	<script src="<?php echo base_url(); ?>js/plugins/validate/jquery.validate.js"></script>
	<script src="<?php echo base_url(); ?>js/plugins/msgbox/jquery.msgbox.min.js"></script>
	
	<script type="text/javascript">
		var BASE_URL = "<?php echo base_url();?>";
		var SERVER_DATE_TIME = "<?php echo date("F d, Y H:i:s"); ?>";
	</script>
	<?php if(isset($scripts)):?>
		<?php foreach($scripts as $script):?>
		<script type="text/javascript" src="<?php echo base_url();?>js/<?php echo $script; ?>.js"></script>
		<?php endforeach;?>
	<?php endif;?>
	
	<script src="<?php echo base_url(); ?>js/application.js"></script>
  </head>
<body>
<?php $user = $this->session->userdata(); ?>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-cog"></i>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>"> <?php echo COMPANY_NAME; ?></a>
		</div>
		  <!-- Collect the nav links, forms, and other content for toggling -->
		<?php if(isset($user) && isset($user["user_id"]) && isset($user["user_id"]) > 0) { ?>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							<?php 
								echo isset($user) && isset($user["first_name"]) ? $user["first_name"] : "[USER NAME]";
							?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url(); ?>user/profile">My Profile</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url(); ?>user/logout">Logout</a></li>
						</ul>
					</li>
				</ul>

				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control input-sm search-query" placeholder="Search">
					</div>
				</form>
			</div><!-- /.navbar-collapse -->
		<?php } ?>
	</div> <!-- /.container -->
</nav>
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-reorder"></i>
		    </a>
			<div class="collapse subnav-collapse">
				<ul class="mainnav">
					<?php if(isset($user) && isset($user["user_id"]) && isset($user["user_id"]) > 0) { ?>
						<li class="<?php echo count($this->uri->rsegments) > 1 && $this->uri->rsegments[1] == "sis" && $this->uri->rsegments[2] == "index" ? "active" : ""; ?>">
							<a href="<?php echo base_url(); ?>sis">
								<i class="icon-home"></i>
								<span>Dashboard</span>
							</a>	    				
						</li>
					<?php } ?>
					<li class="<?php echo count($this->uri->rsegments) > 1 && $this->uri->rsegments[1] == "queue" ? "active" : ""; ?>">
						<a href="<?php echo base_url(); ?>queueing">
							<i class="icon-home"></i>
							<span>Queueing</span>
						</a>	    				
					</li>
				</ul>
			</div> <!-- /.subnav-collapse -->
		</div> <!-- /container -->
	</div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->
<div class="main">
    <div class="container">
		