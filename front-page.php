<?php
/**
 * Front Page Template
 *
 * This template controls the front page of the website.
 *
 * 🔥 **When is this file used?**
 * WordPress uses `front-page.php` when:
 *   - "A static page" is selected as the homepage in **Settings > Reading**.
 *   - It's the highest priority template for the homepage in the template hierarchy.
 *
 * 🏗️ **Template Hierarchy for the Front Page:**
 *   1. front-page.php   ✅ (this file)
 *   2. home.php         (if displaying blog posts on front page)
 *   3. page.php         (if a static page is selected and front-page.php doesn’t exist)
 *   4. index.php        (fallback)
 *
 * 💡 **Key Features:**
 * - Commonly used for custom hero sections, sliders, or homepage widgets.
 * - Can display dynamic content using `get_template_part()`.
 *
 * 🌐 **Further Reading:**
 * https://developer.wordpress.org/themes/template-files-section/front-page-template/
 *
 * @package YourThemeName
 */
?>

<?php get_header(); ?>


<div class="wrapper">
    <h1 class="page-header">
    <?php echo get_the_title(); ?>
  </h1>
    <div class="content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content(); // Displays the page content
            endwhile;
        endif;
        ?>
   </div>


     
  <!-- projects listing grid start-->
<?php
    $projects = new WP_Query ([
        'post_type' => 'projects',
        'posts_per_page' => 3,
        'orderby' => 'date',
    ]);
  ?>

<?php if ($projects->have_posts()) : ?>
<section class="projects-list">
    <div class="projects-wrapper">
        <?php while ($projects->have_posts()) : $projects->the_post();?>

            <article class="project-item">
                <a href="<?php the_permalink(); ?>" class="project-link">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="project-image">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <?php endif; ?>
                    <h5 class="project-title"><?php the_title(); ?></h5>
                    <!-- <p class="project-excerpt"><?php echo get_the_excerpt(); ?></p> -->
                </a>
            </article>

        <?php endwhile; ?>
    </div>
</section>


    
<?php else : ?>

    <p> No projects found.</p>
<?php endif; ?>
  <!-- projects listing grid end-->
</div>
<?php get_footer(); ?>