<?php /* Template Name: Content-Landing */ ?>
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

<?php get_footer(); ?>
