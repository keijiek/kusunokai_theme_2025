<?php

namespace custom_post;

class PostTypesRegister
{
  function __construct()
  {
    add_action('init', [$this, 'registerCustomPostTypes']);
  }

  public function registerCustomPostTypes()
  {
    register_post_type(
      POST_NEWS_LETTER,
      [
        'label'         => '楠の会ニュース',
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'menu_position' => 05,
        'menu_icon'     => 'dashicons-media-document',
        'supports'      => [
          'title',
        ]
      ]
    );

    register_post_type(
      POST_URGENT_NOTICE,
      [
        'label'         => '緊急告知',
        'public'        => true,
        'has_archive'   => false,
        'show_in_rest'  => true,
        'menu_position' => 05,
        'menu_icon'     => 'dashicons-warning',
        'supports'      => [
          'title',
          'editor'
        ]
      ]
    );

    register_post_type(
      POST_NOTICE,
      [
        'label'         => 'お知らせ',
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'menu_position' => 05,
        'menu_icon'     => 'dashicons-bell',
        'supports'      => [
          'title',
          'editor'
        ]
      ]
    );
  }
}
