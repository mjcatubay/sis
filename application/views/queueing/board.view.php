<div class="row">
	<div class="col-md-6">
		<div class="row-fluid">
			<div class="now-serving-container">
				<h1>NOW SERVING<h1>
				<div class="counters">
					<div id="counter-1" class="clock" style="margin:2em;"></div>
					<div id="counter-2" class="clock" style="margin:2em;"></div>
					<div id="counter-3" class="clock" style="margin:2em;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<iframe src="<?php echo base_url(); ?>queueing/adds" width="100%" height="100%" style="border: none; overflow: hidden !important;"></iframe>
	</div>
	<button class="next">NEXT NUMBER</button>
</div>
<script type="text/javascript">
	var clock;
	var x = 100;
	$(document).ready(function() {
		// Instantiate a counter
		$(".clock").each(function(){
			clock = new FlipClock($(this), {
				clockFace: 'Counter',
				autoStart: false,
				minimumDigits: 6
			});
		});
		
		
		$(".next").on("click", function() {
			x = x + 1;
			
			clock.setValue(x);
			
			var audio = new Audio(BASE_URL + 'sounds/doorbell.wav');
			audio.play();
		});
	});
</script> 