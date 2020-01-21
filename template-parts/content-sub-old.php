<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Only_BY_Design_Theme
 */

?>
<?php get_header(); ?>
	<div id="parallax-hold">        
        	<div id="background" class="mouse-bg" style="background-image:url('<?php the_field('background'); ?>');"></div>    
        	<div id="foreground" class="mouse-bg" style="background-image:url('<?php the_field('foreground'); ?>');"></div>
	</div>   
            
	<div id="page-main" class="page-main">    
        	<div class="page-body,col-xs-12">        
            		<div class="body-content,col-xs-4">
                		<div class="col-xs-3"></div>
            		</div>            
        	</div>        
    	</div>
	</div>
<?php get_footer(); ?>
