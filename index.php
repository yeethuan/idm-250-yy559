<?php
/**
 * Main Index Template
 *
 * This is the **catch-all** template for your WordPress theme.
 * If no other template file matches a query, WordPress uses `index.php`.
 *
 * 🔥 **When is this file used?**
 * - If no more specific template exists (e.g., page.php, single.php).
 * - For displaying the blog posts index if no home.php exists.
 *
 * 🏗️ **Template Hierarchy (Index Context):**
 *   - single.php or single-{post_type}.php → If not found → index.php
 *   - page.php → If not found → index.php
 *   - archive.php → If not found → index.php
 *   - home.php → If not found → index.php
 *
 * 💡 **Key Features:**
 * - Every theme **must have** an `index.php` file.
 * - It’s the ultimate fallback template for all content.
 *
 * 🌐 **Further Reading:**
 * https://developer.wordpress.org/themes/basics/template-hierarchy/
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

  <?php if (has_post_thumbnail()) : ?>
  <div class="featured-image">
    <?php the_post_thumbnail(); ?>
  </div>
  <?php endif; ?>

  <?php get_template_part('components/content'); ?>
</div>

<?php get_footer(); ?>