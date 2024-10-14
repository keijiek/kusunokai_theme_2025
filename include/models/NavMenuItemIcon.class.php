<?php

namespace models;

class NavMenuItemIcon
{
  public string $file_uri;
  public string $width;
  public string $height;

  function __construct(string $file_uri)
  {
    $this->file_uri = $file_uri;
  }
}
