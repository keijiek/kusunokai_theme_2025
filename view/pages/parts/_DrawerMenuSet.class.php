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
    <button type="button" id="js_drawerButton" class="bl_drawerButton flex lg:hidden flex-col fixed z-10 right-0 bg-lime-800 text-white  w-16 rounded-bl-lg">
      <div class="bg-inherit w-full grid place-items-center ">
        <svg class="w-[48px] h-[48px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
      </div>
      <div class="grid place-items-center w-full -translate-y-2">menu</div>
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
