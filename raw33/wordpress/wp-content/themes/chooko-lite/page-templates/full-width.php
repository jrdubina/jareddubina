<?php
/**
 *
 * Chooko Lite WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013-2015 Mathieu Sarrasin - Iceable Media
 *
 * Template Name: Full-width Page Template, No Sidebar
 *
 */

get_header();
global $header_image;

if(have_posts()) :
while(have_posts()) : the_post();

?><div id="main-content" class="container<?php if ( !$header_image ) echo " no-header-image"; ?>"><?php

		?><h1 class="page-title"><?php the_title(); ?></h1><?php

		?><div id="page-container" <?php post_class(); ?>><?php

				the_content();
				$chooko_link_pages_args = array(
					'before'           => '<br class="clear" /><div class="paged_nav">' . __('Pages:', 'chooko'),
					'after'            => '</div>',
					'link_before'      => '<span>',
					'link_after'       => '</span>',
					'next_or_number'   => 'number',
					'nextpagelink'     => __('Next page', 'chooko'),
					'previouspagelink' => __('Previous page', 'chooko'),
					'pagelink'         => '%',
					'echo'             => 1
				);
				wp_link_pages( $chooko_link_pages_args );
				?><br class="clear" /><?php

				edit_post_link(__('Edit', 'chooko'), '<div class="postmetadata"><span class="editlink"><span class="icon"></span>', '</span></div><br class="clear" />');

				// Display comments section only if comments are open or if there are comments already.
				if ( comments_open() || get_comments_number()!=0 ):
	
					?><div class="comments"><?php
					comments_template( '', true );
					next_comments_link(); previous_comments_link();
					?></div><?php
	
				endif;

	endwhile;
	
	else:
	
	?><h2><?php _e('Not Found', 'boldr'); ?></h2><?php
	?><p><?php _e('What you are looking for isn\'t here...', 'boldr'); ?></p><?php
	
	endif;
	
	?></div><?php // End page container

?></div><?php // End main content

get_footer(); ?>