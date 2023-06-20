<?php 
// Icon for full star
$star = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>';
// Icon for half a star
$halfstar = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16"><path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/></svg>';
// Icon for an empty star
$emptystar = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>';

// Link to Amazon
$link = get_field('amazon_link', get_the_ID());
$link_review = get_field('amazon_link_reviews', get_the_ID());
$amazon_rating = get_field('amazon_rating', get_the_ID());
$amazon_rating_amount = get_field('amazon_rating_amount', get_the_ID());

// Gallery
$images = get_field('product_gallery');

get_header(); ?>
<main class="amazon-product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="flexslider">
                    <?php if( $images ): ?>
                        <ul class="slides">
                            <li>
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('data-thumb' => 'amazon-product__image')); ?>
                            </li>
                            <?php foreach( $images as $image ): ?>
                                <li data-thumb="<?php echo esc_url($image['sizes']['thumbnail']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <section>
                    <?php the_title('<h1 class="amazon-product__heading">', '</h1>'); ?>
                    <div class="amazon-product__rating" role="img" aria-label="Rated <?php echo $amazon_rating; ?> out of 5">
                        <?php if($link_review) : ?>
                        <a href="<?php echo $link_review; ?>" target="_blank" title="<?php _e('See our reviews on Amazon', 'apfwp');?>">
                        <?php endif; ?>
                            <?php 
                            switch ($amazon_rating) {
                                case ($amazon_rating > 1 && $amazon_rating <= 1.4):
                                    echo $star . $emptystar . $emptystar . $emptystar . $emptystar;
                                    break;
                                case ($amazon_rating >= 1.5 && $amazon_rating <= 1.9):
                                    echo $star . $halfstar . $emptystar . $emptystar . $emptystar;
                                    break;
                                case ($amazon_rating >= 2 && $amazon_rating <= 2.4):
                                    echo $star . $star . $emptystar . $emptystar . $emptystar;
                                    break;
                                case ($amazon_rating >= 2.5 && $amazon_rating <= 2.9):
                                    echo $star . $star . $halfstar . $emptystar . $emptystar;
                                    break;
                                case ($amazon_rating >= 3 && $amazon_rating <= 3.4):
                                    echo $star . $star . $star . $emptystar . $emptystar;
                                    break;
                                case ($amazon_rating >= 3.5 && $amazon_rating <= 3.9):
                                    echo $star . $star . $star . $halfstar . $emptystar;
                                    break;
                                case ($amazon_rating >= 4 && $amazon_rating <= 4.4):
                                    echo $star . $star . $star . $star . $emptystar;
                                    break;
                                case ($amazon_rating >= 4.5 && $amazon_rating <= 4.9):
                                    echo $star . $star . $star . $star . $halfstar;
                                    break;
                                case 5:
                                    echo $star . $star . $star . $star . $star;
                                    break;
                            } ?>
                            <?php if ($amazon_rating_amount) : ?>
                                <span class="amazon-product__rating--amount">
                                    <?php echo $amazon_rating_amount; ?> <?php _e('reviews', 'apfwp');?>
                                </span>
                            <?php endif; ?>
                        <?php if($link_review) : ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="amazon-product__description">
                        <?php the_content(); ?>
                    </div>
                    <div class="amazon-product__purchase">
                        <a href="<?php echo $link; ?>" target="_blank" title="<?php _e('Order now at Amazon', 'amazon-product-for-wordpress'); ?>">
                            <img src="<?php echo plugin_dir_url(__DIR__) . 'public/images/Amazon-Order-Button-small.png'; ?>">
                        </a>
                        <p class="text-muted"><small><?php _e('By clicking you will be redirected to our Amazon listing to place an order', 'apfwp'); ?>.</small></p>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs product-chart" id="myTab" role="tablist">
                    <?php if( get_field('tab_sizechart') || get_field('size_chart_image') ): ?>
                    <li class="nav-item"><a class="nav-link active" id="sizechart" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Size chart</a></li>
                    <?php endif; ?>
                    <?php if( get_field('tab_supportlvl') ): ?>
                    <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Support level</a></li>
                    <?php endif; ?>
                </ul>
                <div class="product-chart-content tab-content" id="myTabContent">
                    <?php if( get_field('tab_sizechart') || get_field('size_chart_image') ): ?>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="sizechart">
                        <?php the_field('tab_sizechart'); ?>
                        <?php 
                        $sizechartimg = get_field('size_chart_image'); 
                        
                        if( !empty($sizechartimg) ): 
                        
                            // vars
                            $url = $sizechartimg['url']; 
                            $title = $sizechartimg['title']; 
                            $alt = $sizechartimg['alt']; 
                            $caption = $sizechartimg['caption']; 
                        
                            //thumbnail
                            $size = 'thumbnail'; 
                            $thumb = $sizechartimg['sizes'][ $size ]; 
                            $width = $sizechartimg['sizes'][ $size . '-width' ]; 
                            $height = $sizechartimg['sizes'][ $size . '-height' ]; 
                        
                        ?>
                        <a href="<?php echo $sizechartimg['url']; ?>" width="150" height="150" data-lightbox="image-1" data-title="<?php echo $sizechartimg['alt']; ?>">
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $sizechartimg['alt']; ?>" />
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if( get_field('tab_supportlvl') ): ?>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php the_field('tab_supportlvl'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>
        <?php if( have_rows('features_repeater') ):  $c = 0; $class = '';  $i = 0; $classactive = ''; ?>
        <div class="shapes">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                        <div class="nav flex-column nav-productpill mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php while( have_rows('features_repeater') ): the_row(); $headline = get_sub_field('feature_headline'); $description = get_sub_field('feature_description'); $c++; if ( $c == 1 ){ $class = ' active';} else{ $class='';} ?><a class="nav-link <?php echo $class; ?>" id="v-pills-<?php echo $c; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $c; ?>" role="tab" aria-controls="v-pills-<?php echo $c; ?>" aria-selected="true"><span><?php echo $headline; ?></span></a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-1"></div>
                    <div class="col-12 col-sm-8 col-md-9 col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <?php while( have_rows('features_repeater') ): the_row(); $featureimage = get_sub_field('feature_image'); $headline = get_sub_field('feature_headline'); $description = get_sub_field('feature_description'); $i++; if ( $i == 1 ){ $classactive = ' show active';} else{ $classactive=''; }; ?>
                            <div class="tab-pane <?php echo $classactive; ?>" id="v-pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $i; ?>-tab"><img class="pill-img" src="<?php echo $featureimage['url']; ?>" alt="<?php echo $featureimage['alt'] ?>" />
                                <div class="tab-content-body"><span class="vertical-align"><h2><?php echo $headline; ?></h2><p><?php echo $description; ?></p></span></div>
                            </div>
                            <?php endwhile; ?>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shapes-rightsided"></div>
            <div class="shapes-leftsided"></div>
        </div>
        <?php endif; ?>
        <?php if( have_rows('related_videos') ): ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="related-videos">
                        <h2 class="text-center">
                            <?php _e('Related videos', 'apfwp'); ?>
                        </h2>
                        <p class="lead text-center">
                            <?php _e('Videos show more than thousand words and couple of photos could express', 'apfwp'); ?>
                        </p>
                        <div class="row">
                            <?php while( have_rows('related_videos') ): the_row(); $video = get_sub_field('video'); ?>
                            <div class="col-12 col-sm-6 mb-3 mb-lg-5">
                                <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="<?php echo $video; ?>" allowfullscreen></iframe></div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <section class="amazon-product__related">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">
                        <?php _e('You might also be interested in', 'apfwp'); ?>
                    </h2>
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type'      => 'amazon_product',
                            'posts_per_page' => 4,
                            'post__not_in'   => array(
                                get_the_ID()
                            ),
                        );
                        $loop = new WP_Query($args);
                        while ( $loop->have_posts() ) {
                            $loop->the_post();
                            ?>
                            <div class="col-12 col-lg-3">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="related-product">
                                        <figure class="related-product__image">
                                            <picture>
                                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array()); ?>
                                            </picture>
                                        </figure>
                                        <h3 class="related-product__heading">
                                            <?php the_title(); ?>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_query()
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>