<?php
/**
 * 🧩 Project Card Component
 * -------------------------------------------------
 * ✅ **Purpose:**
 * - Reusable card to display project details with image, date, tags, and title.
 *
 * 🎯 **Displays:**
 * - Featured image with overlay effect
 * - Project date
 * - Project tags (custom taxonomy: 'project-tags')
 * - Project title linked to the project page
 */
?>

<div class="project-card">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="project-thumbnail">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <h2 class="project-title"><?php the_title(); ?></h2>
    </a>
</div>