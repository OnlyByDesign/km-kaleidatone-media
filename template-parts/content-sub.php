<?php /* Template Name: Content-Sub */ ?>
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
	<div class="main-hold"> 
	<?php                        
        if( have_rows('client-field') ):                             
            while ( have_rows('client-field') ) : the_row();                            
                $main = get_sub_field('main_title');
                $item = get_sub_field('item_text');
                $sub = get_sub_field('sub_text');
                $image = get_sub_field('item_image');
            ?>
            <div class="sub-content , col-xs-2-2 , col-sm-3 , col-md-3 , col-lg-7">
		<h1><?php echo $main; ?></h1>
		<div class="sub-hold">
                	<h2><?php echo $item; ?></h2>
                	<h3><?php echo $sub; ?></h3> 
		</div>               
		<div class="reveal"><img src="<?php echo $image; ?>"/></div>
            </div>
        <?php 
        endwhile;
        endif;
        ?>
	</div>
</div>

</div>            

<?php get_footer(); ?>
