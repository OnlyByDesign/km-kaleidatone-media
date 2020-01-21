<?php /* Template Name: Content-Main */ ?>
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
	<div class="content-hold , col-xs-12">       
		<div class="main-content , col-xs-5 , col-md-7 , col-sm-9 , col-lg-11">   
			<h1><?php the_field('head-main'); ?></h1>
			<h2><?php the_field('copy-main'); ?></h2>
		</div>
	</div>
</div>            

<?php get_footer(); ?>
