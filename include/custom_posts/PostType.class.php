<?php

namespace custom_post;

class PostType
{
  public string $slug;
  public array $args;

  function __construct(string $slug, array $args)
  {
    $this->slug = $slug;
    $this->args = $args;
  }
}
