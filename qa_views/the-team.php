<div class="divider" id="the-team"></div>
<div class="row">
	<div class="small-12 columns">
		<h2>The WIC Hacks Team</h2>
	</div>
</div>

<div class="row">
	<?php 
		$directory = "data/";
		$dir = scandir($directory);

		$output = ""; 
 
		// iterate through all files in directory
		foreach ($dir as $file) {

			// exclude hidden files
			if(substr($file,0,1) != '.') {

				$handle = fopen($directory.$file, "r");

				// name
				$name = fgets($handle); 

				// image
				$img_url = fgets($handle);
				if (strpos($img_url, '?') !== FALSE)
					$img_url = "generic.png";

				// position on committee
				$position = fgets($handle);

				// major
				$degree = fgets($handle);

				// personal website
				$website = fgets($handle);

				$output .= 
					"<div class='small-12 medium-6 large-4 columns team-pic-container'>" .
						"<div class='small-6 large-6 columns'>"; 
							
							// link to website, if applicable
							if ($website)
								$output .= "<a href='" . $website . "'>";

							$output .= "<img src='images/team-small/".$img_url."' alt='test' class='team-pic'>"; 

							if ($website)
								$output .= "</a>";

				$output .= 	
						"</div>" .
						"<div class='small-6 large-6 columns team-info'>" .
							"<div class='team-name'>"; 

							// link to website, if applicable
							if ($website)
								$output .= "<a href='" . $website . "'>";

								$output .= $name; 

							if ($website)
								$output .= "</a>";

				$output .= 	
							"</div>" .
							"<div class='team-position'>" .
								$position .
							"</div>" .
							"<div class='team-major'>" .
								$degree .
							"</div>" .
						"</div>" .
					"</div>"; 
			}
		}

		// extra empty column to push the last image to the left
		$output .= "<div class='small-12 large-4 columns'>" .
					"</div>";

		echo $output; 
	?>
</div>