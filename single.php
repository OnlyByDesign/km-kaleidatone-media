<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Only_BY_Design_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <div id="background" class="mouse-bg" style="<?php the_field('background'); ?>"></div>
    
        <div id="foreground" class="mouse-bg" style="<?php the_field('background'); ?>"></div>    
            
		<div id="page-main" class="page-main">   
    
        <body class="page-body,col-xs-12">
        
            <div class="body-content,col-xs-4">
                <div class="col-xs-3">
                    <?php the_content(); ?>
                </div>
            </div>
            
        </body>
        
    </div>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>