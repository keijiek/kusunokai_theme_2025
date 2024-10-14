<?php

namespace custom_post;

class PostTypesRegister
{

  private $postTypes = [];

  function __construct() {}

  function addPostType(string $slug, array $args): PostTypesRegister
  {
    $this->postTypes[] = new PostType($slug, $args);
    return $this;
  }

  function excute()
  {
    if ($this->postTypes) {
      add_action('init', function () {
        foreach ($this->postTypes as $postType) {
          register_post_type($postType->slug, $postType->args);
        }
      });
    }
  }
}
