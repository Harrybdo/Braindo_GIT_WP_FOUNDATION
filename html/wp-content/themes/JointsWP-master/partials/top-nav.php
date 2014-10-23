<?php	
$navlinks = CFS()->get('top_nav_loop',21);
$navlinkslength = count($navlinks);
$social_buttons = CFS()->get('social_buttons',21);
$num_buttons = count($social_buttons);
?>

<!-- TOP NAVIGATION ROW -->
<div class="row">
  <!-- MEDIUM NAVIGATION -->
  <div class="small-12 columns show-for-medium-up">
		<nav class="top-bar" data-topbar role="navigation">
	 		<ul class="title-area">
	 			<img src="<?php echo get_template_directory_uri(); ?>/library/images/coloredLogo.png" alt="BrainDo">
	 		</ul>
		  <ul class="right text-center">
			 	<?php 
			    foreach($navlinks as $link){
				    $linktext = $link['nav_link_text'];
				    $linkhref = $link['nav_link_href'];
				?>
				<li>
					<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
				</li>
				<?php }?>
		  </ul>
	   </nav>
  </div>
  <!-- END OF MEDIUM NAVIGATION -->
  
  <!-- SMALL NAVIGATION -->
  <div class="show-for-small-only">
	 	<nav class="top-bar" data-topbar role="navigation">
	 		<ul class="title-area">
	 			<img src="<?php echo get_template_directory_uri(); ?>/library/images/coloredLogo.png">
	   	</ul>            
      <ul class="right">
			  <a data-reveal-id="navModal">Menu</a>
		  </ul>
		</nav>
		<!-- NAVIGATION MODAL -->
		<div id="navModal" class="reveal-modal full-screen" data-reveal>
     	<div class="row">
				<div class="small-12 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/library/imagescoloredLogo.png" id="navModalLogo">
				</div>
      </div>
      <div class="row">
			  <div class="small-12 columns">
         	<ul class="navModalList">
		        <?php 
  		        foreach($navlinks as $link){
				        $linktext = $link['nav_link_text'];
				        $linkhref = $link['nav_link_href'];
		        ?>
			  		<li>
			  			<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
			  		</li>
            <?php } ?>
				  </ul>
			  </div>
		  </div>          	
      <div class="row">
				<div class="small=12 columns">
			 		<ul class="small-block-grid-<?php echo $num_buttons; ?> small-centered" class="contact-social-list">
						<?php foreach($social_buttons as $social_button){
			  			$image = $social_button['social_image'];
							$href = $social_button['social_href'];
            ?>
            <li><img src="<?php echo $image; ?>" href="<?php echo $href; ?>"></li>
						<?php } ?>	
				  </ul>
			  </div>
		  </div>
      <a class="close-reveal-modal">&#215;</a>
		</div>
		<!-- NAVIGATION MODAL --> 
	</div>
	<!-- END OF SMALL NAVIGATION -->
</div>
<!-- END OF TOP NAVIGATION ROW -->