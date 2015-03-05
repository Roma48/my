<?php
/**
* WP Post Template: my template
 */

get_header(); ?>


<article>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
            <div class="entry-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

        <?php if ( is_single() ) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
        <?php endif; // is_single() ?>

        <div class="entry-meta">
            <?php twentythirteen_entry_meta(); ?>
            <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if ( comments_open() && ! is_single() ) : ?>
            <div class="comments-link">
                <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
            </div><!-- .comments-link -->
        <?php endif; // comments_open() ?>

        <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
            <?php get_template_part( 'author-bio' ); ?>
        <?php endif; ?>
    </footer><!-- .entry-meta -->



    <form>

        <label>Completely true</label>
        <input type="radio" value="<?php $meta_values = get_post_meta( get_the_ID() , 'completely_true'); print $meta_values[0]; ?>" onclick="next()"></input></br>

        <script>
            function next(){
                <?php update_post_meta( get_the_ID() , 'completely_true', 5); ?>
            }
        </script>

        <label>Mostly true</label>
        <input type="radio" value="<?php $meta_values = get_post_meta( get_the_ID() , 'mostly_true'); print $meta_values[0]; ?>"></input></br>

        <label>Somewhat true</label>
        <input type="radio" value="<?php $meta_values = get_post_meta( get_the_ID() , 'somewhat_true'); print $meta_values[0]; ?>"></input></br>

        <label>A little true</label>
        <input type="radio" value="<?php $meta_values = get_post_meta( get_the_ID() , 'a_little_true'); print $meta_values[0]; ?>"></input></br>

        <label>Not at all true</label>
        <input type="radio" value="<?php $meta_values = get_post_meta( get_the_ID() , 'not_at_all_true'); print $meta_values[0]; ?>"></input></br>

        <button type="submit">continue</button>
    </form>



</article>






<?php get_footer(); ?>