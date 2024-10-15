<?php

namespace view\pages\parts;

class FixedNav
{

  function render()
  {
?>
    <nav class="fixed top-0 sm:top-12 md:top-8 inset-x-0 w-full h-12" aria-hidden="true">
      <ul class="flex gap-6 justify-center">
        <li>item</li>
        <li>item</li>
        <li>item</li>
      </ul>
    </nav>
<?php
  }
}
