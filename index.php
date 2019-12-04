<?php get_header(); ?>

<div class="container-fluid p-2">
    <?php get_template_part('templates/content', 'navDefault'); ?>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="mt-3">
                        <?php if(is_home() || is_search() || is_archive()): ?>
                            <div class="d-flex justify-contwnt-between">
                            <?php elseif(!is_home() || !is_search() || !is_archive()):?>
                                <div class="">
                                <?php endif; ?>

                                <div class="mr-3">
                                    <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                                </div>

                                <div>
                                    <?php if(is_home()): ?>
                                        <?php the_excerpt() ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Continue Reading</a>
                                    <?php else:?>
                                        <?php the_content(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
