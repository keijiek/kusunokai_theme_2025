<?php

namespace view\pages\parts;

class DrawerButtonSet
{
  function __construct() {}

  function render()
  {
    $this->button();
  }
  function button()
  {
?>
    <button type="button" id="js_drawerButton" class="bl_drawerButton z-10">
      Button
    </button>
  <?php
  }

  function panel()
  {
  ?>
    <div id="js_drawerPanel z-10">
      <nav>
        <ul>
          <?php
          foreach (NAV_MENU_ITEMS as $item) {
          ?>
            <li>
              <a href="<?= $item->href ?>">
                <img src="<?= $item->icon ?>" alt="">
                <span><?= $item->title ?></span>
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </nav>
    </div>
<?php
  }
}
