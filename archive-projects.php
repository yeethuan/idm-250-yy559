<?php get_header(); ?>
<div class="wrapper">
    <?php if (have_posts()) : ?>
    <h1><?php the_archive_title(); ?></h1>

    <ul class="grid grid-3">
        <?php
    while (have_posts()) : the_post(); ?>
        <div class="grid-item">
        <?php get_template_part('components/project-card'); ?>
        </div>

        <!-- <?php 
        $categories = get_the_term_list(get_the_ID(), 'project-categories', '', ', ', '');
        if ($categories) {
            echo '<p class="project-card__categories">' . $categories . '</p>';
        } 
        ?> -->

        <?php endwhile; ?>
    </ul>

    

    <?php the_posts_pagination(); ?>

    <?php else : ?>
    <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>