<div id="carousel" class="owl-carousel owl-theme">
    <?php if (get_row_layout() == 'banner-slider') :
        $banners = get_sub_field('image-list');
    ?>
        <?php foreach ($banners as $banner) : ?>
            <div class="top">
                <a href="<?php echo $banner['link']; ?>">
                    <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['product-name']; ?>" class="top-img">
                </a>
            </div>
        <?php endforeach ?>
    <?php endif; ?>
</div>