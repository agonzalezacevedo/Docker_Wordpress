<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3><?php the_title(); ?></h3>

    <?php the_content(); ?>
    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail('medium');
    }
    ;?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>

<?php endwhile; ?>

    <?php
    if ( get_next_posts_link() ) {
        next_posts_link();
    }
    ?>
    <?php
    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
    ?>

<?php else: ?>

    <p>No posts found. :(</p>

<?php endif; ?>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>