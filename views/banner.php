<script>
	$(window).load(function() {	

		// resize header image on page load
		resizeHeaderImage(); 

		// resize header image on page resize
		$(window).resize(function () {
			resizeHeaderImage(); 
		}); 

	});

	// resize header image (dependent on browser / screen width)
	function resizeHeaderImage() {
		var innerHeight = $(".logo-content").height();
		$(".logo-background").css({
			"height": (innerHeight*1.5)
		});
	}
</script>

<div class="logo">
	<div class="logo-background">
	</div>
	<div class="logo-content">
		<p><span class="white">RIT Women in Computing <span class="italics">presents</span></span></p>
		<div class="logo-image">
			<img src="images/wic-hacks-logo.png" >
		</div>
		<p>
			<span class="italics white">Hosted by </span><a href="http://www.rit.edu/">Rochester Institute of Technology</a>
		</p>
		<div class="event-details">
			<p class="event-info"><i class="fi-calendar symbol"></i>TBD</p>
			<p class="event-info"><i class="fi-marker symbol"></i>TBD</p>
			<p class="event-info"><i class="fi-dollar symbol"></i>Free (registration required)</p>
		</div>
		<p></p>
	</div>
</div>

