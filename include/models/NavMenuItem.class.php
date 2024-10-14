<?php

namespace models;

class NavMenuItem
{
  public string $href;
  public string $title;
  public string $icon;
  public int $iconWidth;
  public int $iconHeight;

  function __construct($href, $title, $icon, $iconWidth, $iconHeight)
  {
    $this->href = $href;
    $this->title = $title;
    $this->icon = $icon;
    $this->iconWidth = $iconWidth;
    $this->iconHeight = $iconHeight;
  }
}
