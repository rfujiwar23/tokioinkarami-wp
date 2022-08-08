<?php

/**
 * Template Name: Type 6 (Mechanism)
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="custom-page-header pt-5 pt-3">
            <div class="container d-flex justify-content-center">

                <div class="col-lg-10 col-md-10">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p><?php echo the_content(); ?></p>
                </div>

            </div>
        </div>


        <div class="mechanism">
            <div class="container">
                <div class="top-banner text-center">
                    <img src="https://res.cloudinary.com/rfujiwar23/image/upload/v1659080397/tokio-test/24134003_s.jpg" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                </div>
                <div class="inner-contents no1">
                    <h3>01. 特許技術インカラミ反応</h3>
                    <p class="text-center">TOKIOの圧倒的なケア効果を可能にする、TOKIOでしか実現できない技術です。</p>
                    <hr>
                    <div class="inkarami-img">
                        <img src="https://res.cloudinary.com/rfujiwar23/image/upload/v1659080084/tokio-test/inkarami-img.png" alt="断面図" class="img-fluid">
                    </div>
                    <hr>

                    <h4>毛髪のダメージ</h4>
                    <p class="text-center">エイジング・紫外線・アイロン・カラーやパーマによって、ケラチンタンパク質が壊れた状態をさします。</p>
                    <h4>特許技術インカラミ</h4>
                    <p class="text-center">壊れたケラチンタンパク質に対して、驚異的なケア効果を発揮します。</p>
                    <h4>毛髪強度を140%回復させる</h4>
                    <p class="text-center">大きなダメージを受けた毛髪は、「」引っかかると千切れる」「濡れるとの伸びる」</p>
                    <p class="text-center">TOKIOの施術によって、毛髪の強度が140％まで回復し、引っ張っても千切れにくく、濡れても伸びにくい質感へ導きます。</p>
                </div>
            </div>
            <div class="container">
                <div class="top-banner text-center">
                    <img src="https://res.cloudinary.com/rfujiwar23/image/upload/v1659082365/tokio-test/tokioinkarami.jpg" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                </div>
                <div class="inner-contents no1">
                    <h3>02. ダブルインカラミ</h3>
                    <p>世界初の家庭用システムトリートメント、TOKIO IEの秘訣</p>
                    <hr>
                    <div class="inkarami-img">
                        <img src="https://res.cloudinary.com/rfujiwar23/image/upload/v1659080084/tokio-test/inkarami-img.png" alt="断面図" class="img-fluid">
                    </div>
                    <hr>


                    <h5>ダブルインカラミ</h5>
                    <p>サロンでTOKIOインカラミの施術を受けた後、いつも通りに、シャンプーとトリートメントをすることで、ダブルインカラミが完結します。</p>

                </div>
            </div>
            <div class="container">
                <div class="pages-link">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-block h-100">
                            <div class="img-bnr">
                                <a href="https://ifing.com"><img src="https://res.cloudinary.com/rfujiwar23/image/upload/v1659070539/tokio-test/banner.png" alt="i-Column" class="img-fluid"></a>
                            </div>
                            <div class="link-text">
                                <h4>03. TOKIOの他ブランド</h4>
                                <p>TOKIOブランドでは、インカラミ反応を取り入れた、あらゆるメニューを展開しております。
                                        TOKIOのストレートパーマ、デジタルパーマ、ヘッドスパについてはお取り扱いサロン様へお問い合わせくださいませ。
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="page-block h-100">
                        <div class="img-bnr">
                            <a href="https://i-column.com"><img src="https://res.cloudinary.com/rfujiwar23/image/upload/v1659070528/tokio-test/i-col.png" alt="i-Column" class="img-fluid"></a>
                        </div>
                        <div class="link-text">
                            <h4>04. i-Column</h4>
                                <p>美容のシャンプー、トリートメント、スタイリング剤選びならi-Column。髪を綺麗にするための美容メディアです。
                                </p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
        </div>


    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>