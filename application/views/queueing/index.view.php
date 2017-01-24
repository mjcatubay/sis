<div class="container">
	<div class="row">
      	<div class="col-md-6 col-xs-12">
      		<div class="widget stacked">
				<div class="widget-header">
					<i class="icon-star"></i>
					<h3>Quick Stats</h3>
				</div> <!-- /widget-header -->
				<div class="widget-content">
					<div class="stats">
						<div class="stat">
							<span class="stat-value">12,386</span>									
							Successful Queues
						</div> <!-- /stat -->
						<div class="stat">
							<span class="stat-value">9,249</span>									
							Cancelled Queues
						</div> <!-- /stat -->
						<div class="stat">
							<span class="stat-value">70%</span>									
							Success Rate
						</div> <!-- /stat -->
					</div> <!-- /stats -->
					<div id="chart-stats" class="stats">
						<div class="stat stat-chart">							
							<div id="donut-chart" class="chart-holder"></div> <!-- #donut -->							
						</div> <!-- /substat -->
						<div class="stat stat-time">									
							<span class="stat-value">00:28:13</span>
							Average Waiting Time
						</div> <!-- /substat -->
					</div> <!-- /substats -->
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
      	</div>
		
      	<div class="col-md-6">	
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-bookmark"></i>
					<h3>Quick Shortcuts</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<div class="shortcuts">
						<a href="javascript:void(0);" onClick="javascript:window.open('<?php echo base_url(); ?>queueing/board','Queueing','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no');" class="shortcut">
							<i class="shortcut-icon icon-list-alt"></i>
							<span class="shortcut-label">Queueing</span>
						</a>
						
						<a href="javascript:void(0);" onClick="javascript:window.open('<?php echo base_url(); ?>queueing/kiosk','Queueing','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no');" class="shortcut">
							<i class="shortcut-icon icon-bookmark"></i>
							<span class="shortcut-label">Kiosk</span>								
						</a>
						
						<a href="javascript:void(0);" onClick="javascript:window.open('<?php echo base_url(); ?>queueing/teller','Queueing','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no');" class="shortcut">
							<i class="shortcut-icon icon-user"></i>
							<span class="shortcut-label">Teller</span>
						</a>			
					</div> <!-- /shortcuts -->	
				
				</div> <!-- /widget-content -->
				
			</div> <!-- /widget -->
		</div>
    </div> <!-- /row -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
		
		
	});
</script>