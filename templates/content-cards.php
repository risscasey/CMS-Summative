<div class="container">
    <div class="row d-flex justify-content-around align-items-center py-4 px-3">
        <div class="col-4">
            <div class="card shadow w-100" style="border:none;">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/footerImg.jpeg'?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card shadow w-100" style="border:none;">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/lions_grass.jpeg'?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card shadow w-100" style="border:none;">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/navImg.jpeg'?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <div class="container">
            <div class="row d-flex justify-content-around align-items-center py-4 px-3">
                <div class="col-12">
                    <div class="card shadow w-100 mb-4" style="border:none;">
                        <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>" class="card-img-top" alt="...">
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-3">
            <?php if(is_home()): ?>
                <div class="d-flex justify-contwnt-between">
                <?php elseif(!is_home()):?>
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
