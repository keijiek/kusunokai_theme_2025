<?php

namespace view;

require_once(__DIR__ . '/_PageRendererBase.class.php');

use view\PageRendererBase;

class FrontPageRenderer extends PageRendererBase
{
  public function __construct()
  {
    parent::__construct();
  }

  public function content(): void
  {
?>

    <section class="container mx-auto">
      <h2>ページタイトル2</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempora magnam consectetur ratione provident repellendus totam illum officia. Quae vero ullam placeat nesciunt? In cum reiciendis dolor quasi veniam placeat?</p>
    </section>


<?php
  }
}
