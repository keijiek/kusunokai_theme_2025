<?php

namespace config;

use function initial_config\register_menus;

class NavMenuRegisterer
{

  private array $menu = [];

  function __construct() {}

  function addMenu(string $location, string $description): NavMenuRegisterer
  {
    $this->menu[$location] = $description;
    return $this;
  }

  function excute()
  {
    add_action('after_setup_theme', function () {
      register_nav_menus($this->menu);
    });
  }

  function registerMenu()
  {
    register_nav_menus($this->menu);
  }
}
