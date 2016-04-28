<?php /* Template Name: mentions-legales */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
	</head>
	<body>
		<div class="navbar">
			<ul class="nav navbar-nav">
				<li><a class="bleu" href="../" title="index">Retrour</a></li>
			</ul>
		</div>
		<?php
		    $args = array(
		        'post_type' => 'post',
		        'posts_per_page' => 1,
		        'category_name' => 'Mentions légales'
		    );
		    $my_query = new WP_Query($args);
		    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
		?>
		<div class="col-xs-12 telecharger">
			<?php the_title( '<h2>', '</h2>' ); ?>
		</div>
		<div class="col-xs-10 col-xs-offset-1 mention-legales">
			<?php the_content(); ?>
		</div>
		<?php
		    endwhile;
		    endif;
		    wp_reset_postdata();
		?>
	</body>
</html>