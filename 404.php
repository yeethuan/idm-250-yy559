<?php get_header(); ?>    


<?php if (has_post_thumbnail()) : ?>
    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
<?php endif; ?>

<h1 class="page-header">
    <?php echo get_the_title(); ?>
  </h1>

<p>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
  </p>


<!-- <img class=error width=200 height=200 src="<?php echo get_stylesheet_directory_uri(); ?>/media/oops.jpg" alt="error"> -->

<?php get_footer(); ?>    