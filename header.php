<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Only_BY_Design_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400,400i" rel="stylesheet"> 
<script src="https://use.fontawesome.com/f5c6bd945b.js" async></script> 
  
<link rel="stylesheet" type="text/css" href="http://onlyby.design/dev/ktm/wp-content/themes/only-by-design-theme/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://onlyby.design/dev/ktm/wp-content/themes/only-by-design-theme/css/normalize-min.css">
<link rel="stylesheet" type="text/css" href="http://onlyby.design/dev/ktm/wp-content/themes/only-by-design-theme/navigation.css">
<link rel="stylesheet" type="text/css" href="http://onlyby.design/dev/ktm/wp-content/themes/only-by-design-theme/transition.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://onlyby.design/dev/ktm/wp-content/themes/only-by-design-theme/js/mouse.parallax.js"></script>

<script>
$(document).on("click", "a", function () {
   var newUrl = $(this).attr("href"),
         noFade = $(this).hasClass("mail");
   if (noFade) return;
   if (!newUrl || newUrl[0] === "#") {
       location.hash = newUrl;
       return;
   }
   $("main").fadeOut(function () {
       location = newUrl;
   });
   return false;
});
</script>

<script>
$(document).ready(function() {
    $('#background').mouseParallax({ moveFactor: 1 });
    $('#foreground').mouseParallax({ moveFactor: 5 });	
        $('body').height(1080);
});    
</script>

<script>
$(document).ready(function(){
	$("div.nav-toggle").click(function(){
        $("div.nav-body").fadeToggle(500)
    });
});
</script>

<script>
$(document).ready(function(){
    $("div.sub-hold h2, div.reveal").click(function(){
       $(this).closest('.sub-content').find("div.reveal, div.sub-hold").slideToggle(500);
    });
});
</script>

</head>

<body>
<main>

<header class="col-xs-12">     
<div class="header-main ">               
	<a class="link" href="http://onlyby.design/dev/ktm/">
		<img class="logo-main" src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/ktm-logo-main.png"/>
	</a>

	<div class="nav-main"> 
		<a class="mail-link mail" href="mailto:hello@kaleidatone.com"><img src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/new-email-outline.png"/></i></a>                
		<div class="nav-toggle"><img src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/menu.png"/></div>
		<div class="nav-direction">		
			<?php previous_post_link('%link', '<img src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/left-arrow.png"/>', FALSE); ?>
			<?php next_post_link('%link', '<img src="http://onlyby.design/dev/ktm/wp-content/uploads/2017/05/right-arrow.png"/>', FALSE); ?>
		</div>
	</div>   
                     
</div> 

<div class="nav-body"><h2><?php wp_list_pages('title_li='); ?></h2></div> 
  
</header>

<?php wp_head(); ?>
