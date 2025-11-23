<?php
/**
 * Template Name: Home Page Template
 */
?>
<?php include plugin_dir_path(__FILE__) . 'header-custom.php'; ?>
    <div class="hero_section">
        <img
                class="hero_section_first_star"
                src="<?php echo one_url_images ?>/starIconFirst.svg"
                alt=""
        />
        <img
                class="hero_section_second_star"
                src="<?php echo one_url_images ?>/starIconFirst.svg"
                alt=""
        />
        <div class="title_hero_section_wrapper">
            <h1 class="title_hero_section"><?php echo get_the_title()?></h1>
            <p class="description_hero_section">
                The No-Bullshit Guide to Living Aligned
            </p>
            <p class="explain_hero_section">
                One Choice. One Act. is a practical guide that invites you to live
                with greater clarity, purpose, and alignment. Drawing on personal
                experiences and deep insights, the book teaches how a single decision,
                paired with honest action, can reshape your life and guide you toward
                greater freedom and meaning.
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
                                src="<?php echo one_url_images ?>/firstRadiusCommunity.png"
                                alt=""
                        />
                        <img
                                class="community_box_image_second"
                                src="<?php echo one_url_images ?>/secondRadiusCommunity.png"
                                width="40"
                                height="40"
                                alt=""
                        />
                        <img
                                class="community_box_image_third"
                                src="<?php echo one_url_images ?>/thirdRadiusCommunity.png"
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
                <img src="<?php echo one_url_images ?>/imageClip.png" alt=""/>
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
                                src="<?php echo one_url_images ?>/firstRadiusCommunity.png"
                                alt=""
                        />
                        <img
                                class="community_box_image_second"
                                src="<?php echo one_url_images ?>/secondRadiusCommunity.png"
                                width="40"
                                height="40"
                                alt=""
                        />
                        <img
                                class="community_box_image_third"
                                src="<?php echo one_url_images ?>/thirdRadiusCommunity.png"
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
                    <img src="<?php echo one_url_images ?>/imageClip.png" alt=""/>
                </div>
            </div>
        </div>
    </div>

    <div class="video-modal">
        <div class="video-content">
            <span class="close-modal">&times;</span>

            <div class="video-box">
                <video id="modalVideo" controls>
                    <source src="./assets/videos/sample.mp4" type="video/mp4"/>
                </video>
            </div>
        </div>
    </div>

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

            <h2 class="book_title">One Choice. One Act.</h2>

            <p>
                is not another fluffy self-help manual. It’s a straight-talking,
                deeply human guide to cutting through the bullshit and living in
                alignment with your truth. Drawing on his near-death experience with
                cancer, decades of global work, and practices tested in his own life,
                Matthew Wilburn King shows how small, honest choices ripple outward
                into lasting change.
            </p>

            <p>
                This is not about perfection or performance—it's about learning to
                listen, trusting your gut, and acting from your deepest knowing.
            </p>

            <ul class="list_book_box">
                <li>Know yourself with radical honesty</li>
                <li>Release the expectations that keep you stuck</li>
                <li>Build the courage to act on what you already know is true</li>
                <li>Align your inner truth with your outer life</li>
            </ul>

            <p>
                Whether you're facing a major crossroads or just tired of living out
                of sync with yourself, One Choice. One Act. will help you reclaim
                agency and design a life that’s yours—one choice, one act at a time.
            </p>

            <div class="btn-group">
                <a href="#" class="btn read">Read More</a>
                <a href="#" class="btn buy">Buy the book</a>
            </div>
        </div>
    </div>

    <div class="description_personal_wrapper">
        <div>
            <div class="book_title_wrapper">
                <div></div>
                <span class="book_label">About the Book</span>
            </div>
            <p class="person_title">Speaker. Explorer</p>
            <p class="person_skill">Scholar | Speaker | Explorer</p>
            <p class="person_explain">
                Dr. Matthew King is a writer, speaker, and systems thinker known for
                blending personal narrative with a global perspective. His work spans
                environmental ethics, democracy, mindfulness, mortality, and the quiet
                courage it takes to live in alignment with one’s truth. A former
                advisor to governments, NGOs, and international institutions, Matthew
                now focuses on writing and creative expression. His research and
                essays have appeared in BBC Future, Mongabay, the Journal of
                Biological Conservation, Earth Island Journal, and Boulder Magazine,
                among other places. A wide range of experiences shapes his
                perspective—from growing up in working-class West Tulsa to surviving
                Stage IV blood cancer, conducting fieldwork in remote places, and
                mentoring and teaching students at top universities. His compass
                remains clear through it all: live with integrity, speak with clarity,
                and help others do the same. He is the founder of Our COMMON
                Foundation and author of One Choice. One Act., a book that offers a
                clear, human path toward authentic living.
            </p>
            <div class="btn-group">
                <a href="#" class="btn read">Read More</a>
            </div>
        </div>
        <div class="person_image">
            <img src="<?php echo one_url_images ?>/person.png" alt=""/>
        </div>
    </div>

    <div class="blog_wrapper">
        <div class="blog_title_slider_wrapper">
            <div class="book_title_wrapper">
                <div></div>
                <span class="book_label">Blog</span>
            </div>
            <p class="blog_title_slider">Explore Matthew’s Work</p>
            <p class="blog_description_slider">
                Selected highlights from writing, talks, and creative work.
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
            <p class="blog_title_slider">What People Are Saying</p>
            <p class="blog_description_slider">
                Honest feedback on living with radical alignment.
            </p>
        </div>
        <div class="slider-wrapper">
            <!-- Left Arrow -->
            <button class="custom_nav_comment left-nav">‹</button>

            <div class="comment_slider owl-carousel">
                <div class="review-card">
                    <h3 class="review-title">Unfiltered, Profound</h3>

                    <p class="review-text">
                        The book is beautifully simple yet deeply profound. Matthew King
                        teaches, with radical honesty, how to align your inner truth with
                        your outer life. This is exactly the book I needed to move from
                        confusion to clarity.
                    </p>

                    <div class="review-user">
                        <img src="/user.jpg" alt="user" class="review-avatar"/>
                        <div>
                            <p class="review-name">Dr. Elias Vance</p>
                            <p class="review-job">Cognitive Researcher</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <h3 class="review-title">Unfiltered, Profound</h3>

                    <p class="review-text">
                        The book is beautifully simple yet deeply profound. Matthew King
                        teaches, with radical honesty, how to align your inner truth with
                        your outer life. This is exactly the book I needed to move from
                        confusion to clarity.
                    </p>

                    <div class="review-user">
                        <img src="/user.jpg" alt="user" class="review-avatar"/>
                        <div>
                            <p class="review-name">Dr. Elias Vance</p>
                            <p class="review-job">Cognitive Researcher</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <h3 class="review-title">Unfiltered, Profound</h3>

                    <p class="review-text">
                        The book is beautifully simple yet deeply profound. Matthew King
                        teaches, with radical honesty, how to align your inner truth with
                        your outer life. This is exactly the book I needed to move from
                        confusion to clarity.
                    </p>

                    <div class="review-user">
                        <img src="/user.jpg" alt="user" class="review-avatar"/>
                        <div>
                            <p class="review-name">Dr. Elias Vance</p>
                            <p class="review-job">Cognitive Researcher</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <h3 class="review-title">Unfiltered, Profound</h3>

                    <p class="review-text">
                        The book is beautifully simple yet deeply profound. Matthew King
                        teaches, with radical honesty, how to align your inner truth with
                        your outer life. This is exactly the book I needed to move from
                        confusion to clarity.
                    </p>

                    <div class="review-user">
                        <img src="/user.jpg" alt="user" class="review-avatar"/>
                        <div>
                            <p class="review-name">Dr. Elias Vance</p>
                            <p class="review-job">Cognitive Researcher</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Arrow -->
            <button class="custom_nav_comment right-nav">›</button>

            <div class="custom-dots dots-comments"></div>
        </div>
    </div>

<?php include plugin_dir_path(__FILE__) . 'footer-custom.php'; ?>