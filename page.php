<?php
get_header();
?>
<div class="container">
  <div class="row">
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
      <div class="container">
        <div class="row">
          <!-- post -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="post">
                <div class="post-thumbnail">
                  <a href="<?php the_permalink();?>">
                    <?php
                      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail( 'full' );
                      }
                    ?>
                  </a>
                </div>

                    <div class="post-details">
                      <div class="post-meta d-flex justify-content-between">

                        <div class="category"><a href="#"><?php the_category(',');?></a></div>
                      </div>
                        <h3 class="h4"><?php the_title();?></h3>
                      <p class="text-muted"><?php the_content();?></p>
                      <footer class="post-footer d-flex align-items-center">
                        <?php the_tags();?>
                        <!-- <a href="<?php the_author_link();?>" class="author d-flex align-items-center flex-wrap">
                          <div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?></div>
                          <div class="title"><span><?php the_author();?></span></div></a>
                          <div class="date"><i class="icon-clock"></i> <?php the_time('g:i a');?></div>
                          <div class="comments meta-last"><i class="icon-comment"></i><?php comments_number();?></div>
--><?php
 	$defaults = array(
		'before'           => '<p>' . __( 'Pages:', 'twentyfourteen' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'twentyfourteen'),
		'previouspagelink' => __( 'Previous page', 'twentyfourteen' ),
		'pagelink'         => '%',
		'echo'             => 1
	);

        wp_link_pages( $defaults );

?>

                      </footer>
                    </div>
               <?php endwhile; ?>
<?php endif; ?>

            </div>


         </div>
      </div>
    </main>
    <aside class="col-lg-4">
    <?php get_sidebar();?>
    </aside>
  </div>
</div>
<?php get_footer();?>
