<?php
/**
 * Template Name: Home Page Template
 */
?>
<?php include plugin_dir_path(__FILE__) . 'header-custom.php'; ?>
    <div class="hero_section">
        <img class="hero_section_first_star"
             src="<?php echo one_url_images ?>/starIconFirst.svg"
             alt=""/>

        <img class="hero_section_second_star"
             src="<?php echo one_url_images ?>/starIconFirst.svg"
             alt=""/>

        <div class="title_hero_section_wrapper">
            <h1 class="title_hero_section"><?php echo get_the_title() ?></h1>
            <p class="description_hero_section"><?php echo get_field('sub_title') ?></p>
            <p class="explain_hero_section">
                <?php echo get_the_content() ?>
            </p>
            <div class="community_box_wrapper">
                <div class="community_box_title_wrapper">
                    <p>Our Community</p>
                </div>

                <div class="community_box_social_wrapper">
                    <div class="community_box_image_wrapper">
                        <img
                                class="community_box_image_first"
                                width="40"
                                height="40"
                                src="<?php echo get_field('first_community_image') ? get_field('first_community_image') : one_url_images . '/firstRadiusCommunity.png'; ?>"
                                alt=""
                        />
                        <img
                                class="community_box_image_second"
                                src="<?php echo get_field('second_community_image') ? get_field('second_community_image') : one_url_images . '/secondRadiusCommunity.png'; ?>"
                                width="40"
                                height="40"
                                alt=""
                        />
                        <img
                                class="community_box_image_third"
                                src="<?php echo get_field('third_community_image') ? get_field('third_community_image') : one_url_images . '/thirdRadiusCommunity.png'; ?>"
                                width="40"
                                height="40"
                                alt=""
                        />
                    </div>
                    <div class="community_box_description_wrapper">
                        <p class="community_box_description_quality">4K</p>
                        <p class="community_box_description">Book Lover Join</p>
                    </div>
                </div>
            </div>
            <div class="box_video_wrapper">
                <div class="box_video_play_wrapper openVideoModal">
                    <img src="<?php echo one_url_images ?>/play.svg" width="28" height="28" alt=""/>
                </div>
                <img
                        src="<?php echo get_field('cover_video') ? get_field('cover_video') : one_url_images . '/imageClip.png'; ?>"
                        alt=""/>
            </div>
        </div>
        <div class="box_video_play_wrapper_desktop">
            <div class="community_box_wrapper_desktop">
                <div class="community_box_title_wrapper">
                    <p>Our Community</p>
                </div>

                <div class="community_box_social_wrapper">
                    <div class="community_box_image_wrapper">
                        <img
                                class="community_box_image_first"
                                width="40"
                                height="40"
                                src="<?php echo get_field('first_community_image') ? get_field('first_community_image') : one_url_images . '/firstRadiusCommunity.png'; ?>"
                                alt=""
                        />
                        <img
                                class="community_box_image_second"
                                src="<?php echo get_field('second_community_image') ? get_field('second_community_image') : one_url_images . '/secondRadiusCommunity.png'; ?>"
                                width="40"
                                height="40"
                                alt=""
                        />
                        <img
                                class="community_box_image_third"
                                src="<?php echo get_field('third_community_image') ? get_field('third_community_image') : one_url_images . '/thirdRadiusCommunity.png'; ?>"
                                width="40"
                                height="40"
                                alt=""
                        />
                    </div>
                    <div class="community_box_description_wrapper">
                        <p class="community_box_description_quality">4K</p>
                        <p class="community_box_description">Book Lover Join</p>
                    </div>
                </div>
            </div>
            <div>
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        style="display: block; position: absolute"
                        width="0"
                        height="0"
                >
                    <defs>
                        <clipPath id="clip" clipPathUnits="objectBoundingBox">
                            <path
                                    d="M0.0275,0H0.5835A0.0275,0.0533,0,0,1,0.611,0.0533V0.08A0.0275,0.0533,0,0,0,0.6384,0.1333H0.9725A0.0275,0.0533,0,0,1,1,0.1867V0.9467A0.0275,0.0533,0,0,1,0.9725,1H0.0275A0.0275,0.0533,0,0,1,0,0.9467V0.0533A0.0275,0.0533,0,0,1,0.0275,0Z"
                            />
                        </clipPath>
                    </defs>
                </svg>
                <div
                        class="inverted"
                        style="background-image: url(<?php echo one_url_images ?>/imageClip.png)"
                ></div>
                <div class="box_video_wrapper_desktop">
                    <div class="box_video_play_wrapper openVideoModal">
                        <img
                                src="<?php echo one_url_images ?>/play.svg"
                                width="28"
                                height="28"
                                alt=""
                        />
                    </div>
                    <img src="<?php echo get_field('cover_video') ? get_field('cover_video') : one_url_images . '/imageClip.png'; ?>"
                         alt=""/>
                </div>
            </div>
        </div>
    </div>
<?php if (get_field('video')): ?>
    <div class="video-modal">
        <div class="video-content">
            <span class="close-modal">&times;</span>

            <div class="video-box">
                <video id="modalVideo" controls>
                    <source src="<?php echo get_field('video') ?>" type="video/mp4"/>
                </video>
            </div>
        </div>
    </div>
<?php endif; ?>

    <div class="section_explain">
        <div class="show_product_section_explain">
            <div class="first_border"></div>
            <div class="second_border"></div>
            <div class="third_border"></div>
            <div class="show_image_product">
                <img
                        width="318"
                        height="600"
                        src="<?php echo one_url_images ?>/showBook.png"
                        alt=""
                />
            </div>
        </div>
        <div class="book_box">
            <div class="book_title_wrapper">
                <div></div>
                <span class="book_label">About the Book</span>
            </div>

            <h2 class="book_title"><?php echo get_field('about_title') ?></h2>
            <?php echo get_field('about_content') ?>
            <div class="btn-group">
                <a href="<?php echo get_field('about_first_button_link') ?>"
                   class="btn read"><?php echo get_field('about_first_button_title') ?></a>
                <a href="<?php echo get_field('about_second_button_link') ?>"
                   class="btn buy"><?php echo get_field('about_second_button_title') ?></a>
            </div>
        </div>
    </div>

    <div class="description_personal_wrapper">
        <div class="description_personal_text">
            <div class="book_title_wrapper">
                <div></div>
                <span class="book_label">About the Book</span>
            </div>
            <p class="person_title"><?php echo get_field('speaker_explorer_title') ?></p>
            <p class="person_skill"><?php echo get_field('speaker_explorer_sub_title') ?></p>
            <p class="person_explain">
                <?php echo get_field('speaker_explorer_content') ?>
            </p>
            <div class="btn-group">
                <a href="<?php echo get_field('speaker_explorer_button_link') ?>"
                   class="btn read"><?php echo get_field('speaker_explorer_button_text') ?></a>
            </div>
        </div>
        <div class="one_person_image">
            <img src="<?php echo one_url_images ?>/person.png" alt=""/>
        </div>
    </div>

    <div class="blog_wrapper">
        <div class="blog_title_slider_wrapper">
            <div class="book_title_wrapper">
                <div></div>
                <span class="book_label">Blog</span>
            </div>
            <p class="blog_title_slider"><?php echo get_field('blog_title') ?></p>
            <p class="blog_description_slider">
                <?php echo get_field('blog_sub_title') ?>
            </p>
        </div>
        <div class="slider-wrapper">
            <!-- Left Arrow -->
            <button class="custom-nav left-nav">‹</button>

            <div class="books-slider owl-carousel">
                <?php $args = ['post_type' => 'post',
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'DESC'];
                $query = new WP_Query($args); ?>
                <?php if ($query->have_posts()): ?>
                    <?php
                    while ($query->have_posts()) :
                        $query->the_post(); ?>
                        <div class="book-card">
                            <a href="<?php echo get_the_permalink() ?>">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>"/>
                                <h3><?php echo get_the_title() ?></h3>
                            </a>
                            <p>
                                <?php echo get_the_excerpt() ?>
                            </p>
                            <a href="<?php echo get_the_permalink() ?>" class="learn-more"
                            >Learn more
                                <img
                                        width="16"
                                        height="16"
                                        src="<?php echo one_url_images ?>/arrow-right.svg"
                                        alt=""
                                /></a>
                        </div>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <!-- Right Arrow -->
            <button class="custom-nav right-nav">›</button>

            <div class="custom-dots dots-books"></div>
        </div>
    </div>

    <div class="comment_wrapper">
        <div class="blog_title_slider_wrapper">
            <div class="book_title_wrapper">
                <div></div>
                <span class="book_label">Testimonials</span>
            </div>
            <p class="blog_title_slider"><?php echo get_field('comment_title') ?></p>
            <p class="blog_description_slider">
                <?php echo get_field('comment_sub_title') ?>
            </p>
        </div>
        <div class="slider-wrapper">
            <!-- Left Arrow -->
            <button class="custom_nav_comment left-nav">‹</button>

            <div class="comment_slider owl-carousel">
                <?php
                $items = get_field('comment_items');
                ?>
                <?php foreach ($items as $item): ?>
                    <div class="review-card">
                        <h3 class="review-title"><?php echo $item['comment_item_title'] ?></h3>

                        <p class="review-text">
                            <?php echo $item['comment_item_body'] ?>
                        </p>

                        <div class="review-user">
                            <img src="<?php echo $item['comment_item_author_avatar'] ?>" alt="user"
                                 class="review-avatar"/>
                            <div>
                                <p class="review-name"><?php echo $item['comment_item_author'] ?></p>
                                <p class="review-job"><?php echo $item['comment_item_author_job'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Right Arrow -->
            <button class="custom_nav_comment right-nav">›</button>

            <div class="custom-dots dots-comments"></div>
        </div>
    </div>

<?php include plugin_dir_path(__FILE__) . 'footer-custom.php'; ?>