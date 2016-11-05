<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width" />

    <title>WiCHacks | RIT Women in Computing</title>

    <link rel="stylesheet" type="text/css" href="css/foundation.css">
    <link rel="stylesheet" type="text/css" href="css/wichacks.css">
    <link rel="stylesheet" type="text/css" href="css/foundation-icons.css">
    <link rel="stylesheet/less" type="text/css" href="css/wichacks2.css">

    <!-- Foundation, jQuery, other JS libraries -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.flexverticalcenter.js"></script>

    <!-- Don't launch the Foundation JS until the DOM has loaded -->
    <script>
        $(document).ready(function() {
            $(document).foundation();
        });  

        // Google analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-49289451-1', 'rit.edu');
		ga('send', 'pageview');

    </script>   
</head>

<body>
<div class="sticky" id="sticky-menu">
	<nav class="top-bar" data-topbar>
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="index.php">WiCHacks</a></h1>
	    </li>
	    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
	  </ul>

	  <section class="top-bar-section">

	    <!-- Right Nav Section -->
	    <ul class="right">
	    	<li class="divider"></li>
	    	<li class="has-dropdown">
		        <a href="index.php#about">About</a>
		        <ul class="dropdown">
		        	<li class="divider"></li>
	          		<li><a href="index.php#about">About WiCHacks</a></li>
	          		<li class="divider"></li>
	          		<li><a href="index.php#press">Press</a></li>
	          		<li class="divider"></li>
		        </ul>
		    </li>
		    <li class="divider"></li>
		    <li><a href="index.php#schedule">Schedule</a></li>
		    <li class="divider"></li>
		    <li><a href="index.php#faqs">FAQs</a></li>
		    <li class="divider"></li>
	      	<li><a href="index.php#sponsors">Sponsors + Partners</a></li>
	      	<li class="divider"></li>
		    <li class="has-dropdown">
		        <a href="extras.php">Extras</a>
		        <ul class="dropdown">
		        	<li class="divider"></li>
		         	<li><a href="extras.php#resources">Learn-To-Code Resources</a></li>
		         	<li class="divider"></li>
		        </ul>
		    </li>
		    <li class="divider"></li>
	      	<li class="register"><a href="https://docs.google.com/forms/d/1EHgpl1g3U0VyfncGIO2OzPtxvENd4LzkJ_yln9IJ35Q/viewform">Keep Me Posted!</a></li>
	      	<li class="divider"></li>
	    </ul>

	    <!-- Left Nav Section -->
	    <ul class="left">
	    	<li class="divider"></li>
	    	<li>
	    		<a href="http://facebook.com/wic.hacks.rit">
	    			<i class="fi-social-facebook menu-symbol"></i>
	      		</a>
	      	</li>
	      	<li class="divider"></li>
	      	<li>
	      		<a href="https://twitter.com/wichacks">
	      			<i class="fi-social-twitter menu-symbol"></i>
	      		</a>
	      	</li>
	      	<li class="divider"></li>
	    </ul>
	  </section>
	</nav>
 
 
  <a id="mlh-trust-badge" style="position:fixed;top:45px;left:50px;max-width:100px;width:10%;min-width: 10px;display:block;z-index:10000" href="https://mlh.io/seasons/s2016/events?utm_source=s2016&utm_medium=TrustBadge&utm_campaign=s2016" target="_blank"><img src="https://s3.amazonaws.com/logged-assets/trust-badge/s2016.png" alt="MLH Official - Spring 2016" style="width:100%;" ></a>
 
 

	<!-- Twiter 'Follow' button -->
	<!--<div class="twitter-follow">
	<a href="https://twitter.com/wichacks" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @wichacks</a>
	</div>-->

	<!-- Facebook 'Like' button -->
	<!--<div class="fb-like" data-href="https://www.facebook.com/wic.hacks.rit" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>-->
</div>

<script>

$(window).load(function() {

	toggleSocialMedia(); 

	$(window).resize(function () {
		toggleSocialMedia(); 
	}); 

	// Facebook 'like' script
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	// Twitter 'follow' script
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
});

function toggleSocialMedia() {
	var twitter = 
		'<div class="twitter-follow">' + 
			'<a href="https://twitter.com/wichacks" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @wichacks</a>' + 
		'</div>'; 
	var facebook = 
		'<div class="fb-like" data-href="https://www.facebook.com/wic.hacks.rit" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>';

	// "medium" or "large" screen
	if ($(window).width() > 640) {
		if ( $(".twitter-follow").length <= 0) {
			$("#sticky-menu").append(twitter);
		}
		if ( $(".fb-like").length <= 0) {
			$("#sticky-menu").append(facebook); 
		}
	}

	// "small" screen
	else {
		$(".twitter-follow").remove(); 
		$(".fb-like").remove();
	}

}

</script>

<div id="fb-root"></div>