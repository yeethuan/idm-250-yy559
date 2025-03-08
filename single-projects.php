<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <!-- <p class="post-meta">Published on <?php the_date(); ?> in <?php the_category(', '); ?></p> -->
            
            <p><?php echo esc_html( get_field('description') ); ?></p>


            <div>
            <p>
                <?php echo get_the_term_list(
                    get_the_ID(), // 204
                    'project-categories', // taxonomy name
                    '', // before
                    ', ', // separator
                    '' // after
                ); ?>
            </p>
            </div>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            

            <div class= "button-container">
                <?php 
                    $link = get_field('project_cta');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="styled-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>



            <div class="post-content">
                <?php the_content(); ?>
            </div>
            
            <div class="post-tags">
                <?php the_tags('Tags: ', ', '); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>