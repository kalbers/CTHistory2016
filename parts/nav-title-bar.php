<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"><?php _e( 'Menu', 'jointswp' ); ?></div>
  <div class="title-bar-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/CTH-logo.png" alt="Logo" width="HERE" height="HERE" /></div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left show-for-<?php echo $breakpoint ?>">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/CTH-logo.png" alt="Logo" width="HERE" height="HERE" /></a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<?php joints_top_nav(); ?>
		<div class="columns large-4 right"><?php get_search_form(); ?></div> 
	</div>
</div>