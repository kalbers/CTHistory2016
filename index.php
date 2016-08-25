<?php get_header(); ?>
			
	<div id="content">

	<div id="home-slider">
			<?php echo do_shortcode('[layerslider id="31"]'); ?>
		</div>
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="medium-12 columns" role="main">
				<div class="medium-12 columns top blurb">
		          <p>A blurb about CT History and what it is. Or a tagline. Etc.</p>
		        </div>

				<div class="row">
			      <div class="medium-12 columns top">

			        <div class="medium-6 columns right bottom">
					    <?php $args = array( 'posts_per_page' => '1', 'cat' => '559', 'post_status' => 'publish', 'orderby' => 'rand'); ?> 	
				        <?php query_posts($args); ?>	    
						<?php while ( have_posts() ) : the_post(); ?>
					          <div class="image-wrapper overlay-slide-in-left">
					            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large-thumb'); ?></a>
					            <div class="image-overlay-content">
					            <p class="excerpt">
								<?php echo get_the_excerpt();?>&nbsp;&hellip;<a class="more" href="<?php the_permalink(); ?>">[more]</a></p>
					            </div>
					          </div>
					    <?php endwhile; ?>
			        </div>

			        <div class="medium-6 columns show-for-medium">

			          <div class="row bottom">

			            <div class="medium-6 columns">
					    <?php
		                    $featuredpages = get_pages( array(  'meta_key' => 'is_featured_town', 'meta_value' => 'yes', 'number' => '1', 'hierarchical' => 0));
		                    foreach ( $featuredpages as $featuredpage) {
		                    ?>
			              <div class="image-wrapper overlay-fade-in">
			                <a href="<?php echo get_page_link( $featuredpage->ID ); ?>"><?php echo get_the_post_thumbnail($featuredpage->ID, 'large-thumb'); ?></a> 
			                <div class="image-overlay-content">
			                  <p><?php
			                       $moreLink = '&nbsp;&hellip;<a class="more-link" href="' . get_page_link($featuredpage->ID) . '">[more]</a>';
				                            $postContent = $featuredpage->post_content;
				                            $postContent = _str_cut($postContent, 150,$moreLink);
				                            echo $postContent; ?> </p>
			                </div>
			              </div>
			              <?php
			                    } 
			                ?>
			            </div>

			            <div class="medium-6 columns">
				            <?php
		                        $featuredpages = get_pages( array(  'meta_key' => 'is_featured_person', 'meta_value' => 'yes', 'number' => '1', 'hierarchical' => 0));
		                        foreach ( $featuredpages as $featuredpage) {
		                        ?>
		                        <div class="image-wrapper overlay-fade-in">
				                
			                        <a href="<?php echo get_page_link( $featuredpage->ID ); ?>"><?php echo get_the_post_thumbnail($featuredpage->ID, 'large-thumb'); ?></a>  

									<div class="image-overlay-content">			                
				                        <p><?php
				                            $moreLink = '&nbsp;&hellip;<a class="more-link" href="' . get_page_link($featuredpage->ID) . '">[more]</a>';
				                            $postContent = $featuredpage->post_content;
				                            $postContent = _str_cut($postContent, 150,$moreLink);
				                            echo $postContent; ?> </p>
			                        </div>
		                       	</div>                  
			                <?php
			                        } 
			                    ?>
			            </div>
			          </div>
			          
			          <div class="row">

			            <div class="medium-6 columns">
			            <?php
			            //replace with meta_key
	                        $featuredpages = get_pages( array(  'meta_key' => 'is_featured_person', 'meta_value' => 'yes', 'number' => '1', 'hierarchical' => 0));
	                        foreach ( $featuredpages as $featuredpage) {
	                        ?>
	                        <div class="image-wrapper overlay-fade-in">
			                
		                        <a href="<?php echo get_page_link( $featuredpage->ID ); ?>"><?php echo get_the_post_thumbnail($featuredpage->ID, 'large-thumb'); ?></a>  

								<div class="image-overlay-content">			                
			                        <p><?php
			                            $moreLink = '&nbsp;&hellip;<a class="more-link" href="' . get_page_link($featuredpage->ID) . '">[more]</a>';
			                            $postContent = $featuredpage->post_content;
			                            $postContent = _str_cut($postContent, 150,$moreLink);
			                            echo $postContent; ?> </p>
		                        </div>
	                       	</div>                  
		                <?php
		                        } 
		                    ?>
			            </div>

			            <div class="medium-6 columns">
				            <?php
		                        $featuredpages = get_pages( array(  'meta_key' => 'is_featured_person', 'meta_value' => 'yes', 'number' => '1', 'hierarchical' => 0));
		                        foreach ( $featuredpages as $featuredpage) {
		                        ?>
		                        <div class="image-wrapper overlay-fade-in">
				                
			                        <a href="<?php echo get_page_link( $featuredpage->ID ); ?>"><?php echo get_the_post_thumbnail($featuredpage->ID, 'large-thumb'); ?></a>  

									<div class="image-overlay-content">			                
				                        <p><?php
				                            $moreLink = '&nbsp;&hellip;<a class="more-link" href="' . get_page_link($featuredpage->ID) . '">[more]</a>';
				                            $postContent = $featuredpage->post_content;
				                            $postContent = _str_cut($postContent, 150,$moreLink);
				                            echo $postContent; ?> </p>
			                        </div>
		                       	</div>                  
			                <?php
			                        } 
			                    ?>
			            </div>    
			          </div>

			        </div>


			      </div>
			    </div>
			    <p class="blurb">We can always add more text in place if you feel like the content blocks need to be broken up.</p>
			    <div class="row">
			      <div class="medium-12 columns top">

			        <div class="medium-6 columns bottom">
					    <?php $args = array( 'posts_per_page' => '1', 'cat' => '559', 'post_status' => 'publish', 'orderby' => 'rand'); ?> 	
				        <?php query_posts($args); ?>	    
						<?php while ( have_posts() ) : the_post(); ?>
					          <div class="image-wrapper overlay-slide-in-left">
					            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large-thumb'); ?></a>
					            <div class="image-overlay-content">
					            <p class="excerpt">
								<?php echo get_the_excerpt();?>&nbsp;&hellip;<a class="more" href="<?php the_permalink(); ?>">[more]</a></p>
					            </div>
					          </div>
					    <?php endwhile; ?>
			        </div>

			       <div class="medium-6 columns" data-equalizer>
						<?php $args = array( 'posts_per_page' => '4', 'cat' => '-592, -630, -758', 'post_status' => 'publish'); ?>   
						  <?php query_posts($args); ?>      
						<?php while ( have_posts() ) : the_post(); ?>

						<div class="medium-6 latest columns" data-equalizer-watch>
							<div class="image-wrapper overlay-fade-in">
							    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							      <?php if(has_post_thumbnail()): ?>
							      <?php the_post_thumbnail('single-post'); ?>
							      <?php else: ?>
							          <img class="attachment-thumbnail wp-post-image" src="<?php bloginfo('template_directory'); ?>/images/cth_icon_thumb.jpg" />
							      <?php endif; ?>
							    </a>
							  <div class="image-overlay-content">        
							    <p class="excerpt">
							      <?php echo get_the_excerpt();?>&nbsp;&hellip;<a class="more" href="<?php the_permalink(); ?>">[more]</a></p>
							  </div><!--image-overlay-->
						  	</div><!-- end image-wrapper -->
						</div> <!--end medium-6-->
						<?php endwhile; ?>

			        </div>

			      </div>
			    </div>
																								
		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>