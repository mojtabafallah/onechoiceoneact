<footer class="footer_wrapper">
    <div class="container footer_content">
        <div class="social_wrapper">
            <?php $items = get_field('social_items') ?? [] ?>
            <?php foreach ($items as $item): ?>
                <a href="<?php echo $item['social_item_link'] ?>">
                    <img src="<?php echo $item['social_item_image'] ?>" alt=""/>
                </a>
            <?php endforeach; ?>
        </div>
        <div>
            <?php
            wp_nav_menu([
                'theme_location' => 'one_footer_menu',
                'container' => 'ul',
                'container_class' => 'list_menu_wrapper',
                'items_wrap' => '<ul class="list_menu_wrapper">%3$s</ul>',
                'walker' => new One_Menu_Walker(),
            ]);
            ?>
        </div>
        <div class="detail_lagal_website">
            <p>© <?php echo get_field('copy_right_text') ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
