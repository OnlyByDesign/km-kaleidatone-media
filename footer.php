<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Only_BY_Design_Theme
 */

?>
<div class="mobile-direction">		
	<?php previous_post_link('%link', '<img src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/left-arrow.png"/>', FALSE); ?>
	<?php next_post_link('%link', '<img src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/right-arrow.png"/>', FALSE); ?>
</div>
</main>
</body>
</html>

<?php wp_footer(); ?>

