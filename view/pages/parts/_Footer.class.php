<?php

namespace view\pages\parts;

class Footer
{
  function render()
  {
?>
    <footer class="mt-8">
      <div class="pb-6 grid place-items-center">
        <small class="bg-white bg-opacity-50 py-2 px-5 text-xl shadow-xl rounded-badge">&copy; 2024 <?php echo bloginfo('name') ?></small>
      </div>
    </footer>
<?php
  }
}
