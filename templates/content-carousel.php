<div class="container">
    <div class="row d-flex justify-content-around">
        <div class="col-1 d-flex justify-content-center">
            <a class="carousel-control-prev" style="color:black !important;" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carouselBtns" style="color:black !important;" aria-hidden="true"><</span>
              <span class="sr-only" style="color:black!important;">Previous</span>
            </a>
        </div>
        <div class="col-10">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="row d-flex justify-content-around align-items-center py-4 px-3">
                        <div class="col-4">
                            <div class="card shadow w-100" style="border:none;">

                                <?php if (get_theme_mod('LCCMS_carouselCardTextSetting') === 'On'): ?>
                                    <?php if (get_theme_mod('LCCMS_carouselImage1Setting')): ?>
                                        <img src="<?php echo get_theme_mod('LCCMS_carouselImage1Setting')?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <?php if (get_theme_mod('LCCMS_carouselBtnSetting') === 'On'): ?>
                                            <a href="#" class="btn carouselBtn"><?php echo get_theme_mod('LCCMS_carouselBtnTextSetting') ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php elseif(get_theme_mod('LCCMS_carouselImage1Setting')): ?>
                                    <img src="<?php echo get_theme_mod('LCCMS_carouselImage1Setting')?>" class="card-img" alt="...">
                                <?php endif; ?>


                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card shadow w-100" style="border:none;">
                                <?php if (get_theme_mod('LCCMS_carouselCardTextSetting') === 'On'): ?>
                                    <?php if (get_theme_mod('LCCMS_carouselImage2Setting')): ?>
                                        <img src="<?php echo get_theme_mod('LCCMS_carouselImage2Setting')?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <?php if (get_theme_mod('LCCMS_carouselBtnSetting') === 'On'): ?>
                                            <a href="#" class="btn carouselBtn"><?php echo get_theme_mod('LCCMS_carouselBtnTextSetting') ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php elseif(get_theme_mod('LCCMS_carouselImage2Setting')): ?>
                                    <img src="<?php echo get_theme_mod('LCCMS_carouselImage2Setting')?>" class="card-img" alt="...">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card shadow w-100" style="border:none;">
                                <?php if (get_theme_mod('LCCMS_carouselCardTextSetting') === 'On'): ?>
                                    <?php if (get_theme_mod('LCCMS_carouselImage3Setting')): ?>
                                        <img src="<?php echo get_theme_mod('LCCMS_carouselImage3Setting')?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <?php if (get_theme_mod('LCCMS_carouselBtnSetting') === 'On'): ?>
                                            <a href="#" class="btn carouselBtn"><?php echo get_theme_mod('LCCMS_carouselBtnTextSetting') ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php elseif(get_theme_mod('LCCMS_carouselImage3Setting')): ?>
                                    <img src="<?php echo get_theme_mod('LCCMS_carouselImage3Setting')?>" class="card-img" alt="...">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-interval="2000">
                    <div class="row d-flex justify-content-around align-items-center py-4 px-3">
                        <div class="col-4">
                            <div class="card shadow w-100" style="border:none;">

                                <?php if (get_theme_mod('LCCMS_carouselCardTextSetting') === 'On'): ?>
                                    <?php if (get_theme_mod('LCCMS_carouselImage4Setting')): ?>
                                        <img src="<?php echo get_theme_mod('LCCMS_carouselImage4Setting')?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <?php if (get_theme_mod('LCCMS_carouselBtnSetting') === 'On'): ?>
                                            <a href="#" class="btn carouselBtn"><?php echo get_theme_mod('LCCMS_carouselBtnTextSetting') ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php elseif(get_theme_mod('LCCMS_carouselImage4Setting')): ?>
                                    <img src="<?php echo get_theme_mod('LCCMS_carouselImage4Setting')?>" class="card-img" alt="...">
                                <?php endif; ?>


                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card shadow w-100" style="border:none;">
                                <?php if (get_theme_mod('LCCMS_carouselCardTextSetting') === 'On'): ?>
                                    <?php if (get_theme_mod('LCCMS_carouselImage5Setting')): ?>
                                        <img src="<?php echo get_theme_mod('LCCMS_carouselImage5Setting')?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <?php if (get_theme_mod('LCCMS_carouselBtnSetting') === 'On'): ?>
                                            <a href="#" class="btn carouselBtn"><?php echo get_theme_mod('LCCMS_carouselBtnTextSetting') ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php elseif(get_theme_mod('LCCMS_carouselImage5Setting')): ?>
                                    <img src="<?php echo get_theme_mod('LCCMS_carouselImage5Setting')?>" class="card-img" alt="...">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card shadow w-100" style="border:none;">
                                <?php if (get_theme_mod('LCCMS_carouselCardTextSetting') === 'On'): ?>
                                    <?php if (get_theme_mod('LCCMS_carouselImage6Setting')): ?>
                                        <img src="<?php echo get_theme_mod('LCCMS_carouselImage6Setting')?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        <?php if (get_theme_mod('LCCMS_carouselBtnSetting') === 'On'): ?>
                                            <a href="#" class="btn carouselBtn"><?php echo get_theme_mod('LCCMS_carouselBtnTextSetting') ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php elseif(get_theme_mod('LCCMS_carouselImage6Setting')): ?>
                                    <img src="<?php echo get_theme_mod('LCCMS_carouselImage6Setting')?>" class="card-img" alt="...">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-1 d-flex justify-content-center">
            <a class="carousel-control-next" style="color:black !important;" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carouselBtns" style="color:black !important;" aria-hidden="true">></span>
              <span class="sr-only" style="color:black !important;">Next</span>
            </a>
        </div>
    </div>
</div>
