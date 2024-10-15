<?php

namespace view\pages\parts;

class Head
{
  function render()
  {
?>

    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?php bloginfo('description'); ?>">
      <?php wp_head(); ?>
    </head>
<?php
  }
}
