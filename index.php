<?php
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package Halawa Theme
 */
 
 get_header(); ?>


    <?php // THE LOOP
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p>By
                <?php the_author_posts_link(); ?> <span class="glyphicon glyphicon-time"></span>
                <?php the_time( 'M j y' ); ?>
            </p>
        </header>
        <div class="entry clear">
            <hr>
            <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>"></a>
            <hr>
            <?php the_excerpt(); ?>
        </div>
        <div class="read-more"><a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>
        <!--<footer class="post-footer">-->
        <!--   <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>-->
        <!--</footer>-->
    </div>
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <?php next_posts_link( '&larr; Older' ); ?>
        </li>
        <li class="next">
            <?php previous_posts_link( 'Newer &rarr;' ); ?>
        </li>
    </ul>
    <?php else : ?>
    <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>