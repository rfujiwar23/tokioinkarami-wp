<?php 
$innerLinks = get_sub_field('inner-link');
?>

<?php foreach ($innerLinks as $link) : ?>
    <?php if ($link['video'] && $link['go_to_image'] || $link['video']) : ?>
        <div class="bg-video-wrap">
            <video src="<?php echo $link['video']; ?>" loop muted autoplay>
            </video>
            <div class="overlay">
            </div>
            <div class="text">
                <h2><?php echo $link['go_to_text']; ?></h2>
                <p><?php echo $link['go_to_text_jp']; ?></p>
                <p><?php echo $link['description']; ?></p>
                <div class="inner-link">
                    <a href="<?php echo $link['Link']; ?>">もっと見る <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
                <?php if ($link['ext_link']) : ?>
                    <div class="ext-link">
                        <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?> <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif ?>
    <?php if ($link['go_to_image'] && $link['video'] === false) : ?>
        <div class="pic-only" style="height:100vh; background:linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(20,20,20,0.7) 100%), url(<?php echo $link['go_to_image']; ?>); background-position:center; background-size:cover;">
            <div class="text">
                <h2><?php echo $link['go_to_text']; ?></h2>
                <p><?php echo $link['go_to_text_jp']; ?></p>
                <p><?php echo $link['description']; ?></p>
                <div class="col-lg-4 row">
                    <div class="col-6 inner-link">
                        <a href="<?php echo $link['Link']; ?>">もっと見る <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                    <?php if ($link['ext_link']) : ?>
                        <div class="col-6 ext-link">
                            <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?> <i class="fa-solid fa-circle-arrow-right"></i></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endforeach; ?>