<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One Choice. One Act.</title>
</head>
<body dir="ltr">
<header class="headerWrapper container">
    <div class="logo_brand">
        <span>One Choice. One Act.</span>
    </div>

    <ul class="list_menu_wrapper">
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Author</a></li>
        <li><a href="">Testimonials</a></li>
        <li><a href="">Blog</a></li>
    </ul>

    <div>
        <a href="#" class="btn_header">Buy the book</a>
    </div>

    <div class="humbarger_menu">
        <img src="<?php echo one_url_images?>/menu.svg" alt="menu icon" />
    </div>
</header>


<!-- MOBILE MENU OVERLAY -->
<div class="mobile_menu_overlay">
    <div class="mobile_menu_content">
        <button class="close_mobile_menu">×</button>

        <ul class="mobile_menu_list">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Author</a></li>
            <li><a href="">Testimonials</a></li>
            <li><a href="">Blog</a></li>
        </ul>

        <div class="mobile_btn_header_wrapper">
            <button class="mobile_btn_header">Buy the book</button>
        </div>
    </div>
</div>

<img
    class="hero_section_first_shadow"
    src="<?php echo one_url_images?>/shadowRight.svg"
    alt=""
/>
<img
    class="hero_section_second_shadow"
    src="<?php echo one_url_images?>/shadowLeft.svg"
    alt=""
/>
