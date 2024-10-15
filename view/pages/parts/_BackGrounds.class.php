<?php

namespace view\pages\parts;

class BackGrounds
{
  function render()
  {
?>
    <div class="fixed top-0 w-full h-screen -z-10 opacity-50 bg-center bg-repeat-y bg-cover" style="background-image: url(<?= get_theme_file_uri('assets/images/body_bg.png') ?>)"></div>
    <img
      class="absolute top-0 inset-x-0 w-full  -z-10"
      src="<?php echo get_theme_file_uri('assets/images/leaf_bird_4k.png') ?>"
      aria-hidden="true"
      role="presentation"
      alt="">
    <img
      class="absolute bottom-0 -z-10 w-full h-auto opacity-80"
      src="<?= get_theme_file_uri('assets/images/footer_bg.png') ?>"
      aria-hidden="true"
      role="presentation"
      alt="" />
<?php
  }
}
