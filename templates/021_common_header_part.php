<div class="container m-auto pt-4 px-2 2xl:px-0 flex flex-row justify-between " role="presentation">
  <h1 class="text-2xl md:text-3xl text-amber-950 font-bold">
    <a href="<?php echo home_url() ?>"><?php echo bloginfo('name') ?></a>
  </h1>

  <nav class="hidden lg:block">
    <ul class="flex flex-row gap-4">
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

  <button
    id="js_drawerButton"
    class="block z-30 lg:hidden rounded p-4 bg-lime-800 text-white hover:bg-lime-600 transition"
    aria-controls="js_drawerPanel"
    aria-expanded="false"
    type="button">
    MENU
  </button>

</div>
