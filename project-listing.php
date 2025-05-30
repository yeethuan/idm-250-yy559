<?php
/**Template Name: Project Listing*/

get_header(); ?>

<div class="project-listing">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type'      => ['projects', 'post'], // Fetch both 'projects' and 'posts'
    'posts_per_page' => 10, // Number of items per page
    'paged'          => $paged,
    'orderby'        => 'date', // Order by latest date
    'order'          => 'DESC', // Show most recent first
];
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        get_template_part('components/project-card');
    endwhile;

    get_template_part('components/pagination.php');

    wp_reset_postdata();
else : ?>
<p>
    <?php esc_html_e('No projects found.', 'idm250-2025'); ?>
</p>
<?php endif; ?>
</div>

<?php get_footer(); ?> 