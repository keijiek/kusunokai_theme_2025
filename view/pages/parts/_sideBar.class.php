<?php

namespace view\pages\parts;

class SiderBar
{

  function __construct() {}

  function render()
  {
?>
    <nav class="fixed right-0 inset-y-0 z-0 flex justify-center align-middle">
      <ul class="flex justify-center align-middle">
        <li class="rotate-90 w-[100px]">
          <a href="#" class="flex h-[100px]">
            <div class="w-[50px] h-[50px] bg-gray-500"></div>
            <span>Instagram</span>
          </a>
        </li>
        <li class="rotate-90 w-[100px]">
          <a href="#" class="flex">
            <div class="w-[50px] h-[50px] bg-gray-500"></div>
            <span>Instagram</span>
          </a>
        </li>
      </ul>
    </nav>
<?php
  }
}
