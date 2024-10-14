<?php

namespace config;

class SetContentWidth
{

  private $filterName;
  private $contentWidth;

  function __construct(string $filterName, int $contentWidth)
  {
    $this->filterName = $filterName;
    $this->contentWidth = $contentWidth;
    add_action('after_setup_theme', [$this, 'set_content_width'], 0);
  }

  function set_content_width()
  {
    $GLOBALS['content_width'] = apply_filters($this->filterName, $this->contentWidth);
  }
}
