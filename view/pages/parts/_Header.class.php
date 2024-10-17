<?php

namespace view\pages\parts;

class Header
{
  function render()
  {
?>
    <header class="px-4">
      <div class="container mx-auto px-2 lg:px-0 pt-4">
        <h1 class="text-2xl md:text-3xl text-amber-950 font-bold">
          <a href="<?php echo home_url() ?>"><?php echo bloginfo('name') ?></a>
        </h1>

        <nav class="hidden lg:block">
          <ul class="flex flex-row gap-4">
            <?php
            foreach (NAV_MENU_ITEMS as $item) {
            ?>
              <li class="flex gap-2 align-middle justify-start">
                <a href="<?= $item->href ?>" class="text-lg flex items-center justify-start gap-1">
                  <img
                    src="<?= $item->icon ?>"
                    width="36"
                    height="36"
                    class="block"
                    alt="" />
                  <span class="leading-none"><?= $item->title ?></span>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>

        </nav>

      </div>
    </header>
<?php
  }
}
