<?php
/**
 * Template Name: My profile
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
get_header(); ?>
<div class="inner">
	<?php if (function_exists('breadcrumb')) breadcrumb(); ?>
	<div class="col-wide">
		<h1><?php the_title(); ?></h1>

<?php if (is_user_logged_in() ) { ?>
	<?php 
		global $current_user;
      	get_currentuserinfo();
	?>
	<h2>Welcome <?php echo  $current_user->user_firstname; ?>!</h2>
	<p>You are logged in as: <?php echo  $current_user->user_login; ?> | <a href="<?php bloginfo('template_directory'); ?>/Logout.php">Log out</a></p>
	<h3>Update your details</h3>
	<p><a href="http://auth.ala.org.au/UserProfile/editProfile?url=http://www.ala.org.au/my-profile/">Update your registration details</a>.</p>
	<h3>View your sightings</h3>
	<p><a href="http://sightings.ala.org.au/mine">View the sightings you have recorded</a> through the Atlas website.</p>
	<h3>View your Spatial Dashboard</h3>
	<p><a href="http://spatial.ala.org.au/actions/dashboard">Tabulate and graph all functions you've used</a> in the Spatial Portal (species, areas, layers, tools, imports and exports).</p>
	<h3>View your volunteer tasks</h3>
	<p><a href="http://volunteer.ala.org.au/user/myStats">View your tasks</a> on the Biodiversity Volunteer Portal.</p>
	<h3>Manage your alerts</h3>
	<p><a href="http://alerts.ala.org.au">Manage email alerts</a> about new items added to the Atlas.</p>
	<?php //get the page content
	if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
<?php } else { ?>		
<?php $server = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	if ($_SERVER["SERVER_PORT"] != "80")
	{				
		$server .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
	} 
	else 
	{
		$server .= $_SERVER["SERVER_NAME"];
	}
?>
	<h2>Welcome to the Atlas</h2>
	<p>You are not logged in. Please <a href="https://auth.ala.org.au/cas/login?service=<?php echo $server.'/wp-login.php?redirect_to='.$server.'/my-profile/'; ?>">log in</a> or <a href="https://auth.ala.org.au/emmet/selfRegister.html">register</a></p>
	<?php } ?>
	<?php //get the page content
	if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div><!--col-wide-->
</div><!--inner-->
<?php get_footer(); ?>
