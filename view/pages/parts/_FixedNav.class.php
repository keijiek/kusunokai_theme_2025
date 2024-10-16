<?php

namespace view\pages\parts;

class FixedNav
{

  function render()
  {
?>
    <nav id="js_fixableHeader" class="bl_stickyHeaderNav" aria-hidden="true">
      <ul class="flex gap-6 justify-center">
        <?php
        foreach (NAV_MENU_ITEMS as $item) {
        ?>
          <li class="flex gap-2 align-middle justify-start">
            <a href="<?= $item->href ?>" class="text-lg">
              <img
                src="<?= $item->icon ?>"
                width="36"
                height="36"
                class="inline"
                alt="" />
              <span><?= $item->title ?></span>
            </a>
          </li>
        <?php
        }
        ?>
      </ul>
    </nav>
<?php
  }
}
