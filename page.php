<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php
if ( ! is_front_page() ) {
    ?>
    <div class="h3container" style="border-top: 4px solid black;"><h3><?=the_title();?></h3></div>
    <?php
}
?>

<div id="textarea">
  <?php the_content(); ?>
</div>
<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>