<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class('m-0 p-0 '); ?> id="top_of_page">
  <?php
  wp_body_open();
  ?>
  <div class="relative el_relativeCotentWrap">
    <img
      class="absolute top-0 inset-x-0 w-full  -z-10"
      src="<?php echo get_theme_file_uri('assets/images/leaf_bird_4k.png') ?>"
      aria-hidden="true"
      role="presentation"
      alt="" />
    <div class="absolute h-full w-full bl_bg -z-20 hidden"></div>
