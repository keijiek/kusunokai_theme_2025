<?php

namespace view\pages;

require_once(__DIR__ . '/parts/_Head.class.php');
require_once(__DIR__ . '/parts/_Header.class.php');
require_once(__DIR__ . '/parts/_Footer.class.php');
require_once(__DIR__ . '/parts/_BackGrounds.class.php');
require_once(__DIR__ . '/parts/_FixedNav.class.php');
require_once(__DIR__ . '/parts/_DrawerMenuSet.class.php');
require_once(__DIR__ . '/parts/_sideBar.class.php');

use view\pages\parts\Head;
use view\pages\parts\Header;
use view\pages\parts\Footer;
use view\pages\parts\BackGrounds;
use view\pages\parts\FixedNav;
use view\pages\parts\DrawerButtonSet;
use view\pages\parts\SiderBar;

abstract class PageRendererBase
{

  protected function __construct() {}

  abstract function content(): void;

  /**
   * ページ全体の表示ロジック
   */
  public function render(): void
  {
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <?php (new Head())->render(); ?>

    <body <?php body_class([]); ?> id="top_of_page">
      <?php wp_body_open(); ?>
      <div class="relative ly_wholeWrap" role="presentation">

        <?php
        // header part に表示したいものを並べる。
        (new BackGrounds())->render();
        (new Header())->render();
        (new FixedNav())->render();
        (new DrawerButtonSet())->render();
        (new SiderBar())->render();
        ?>

        <main class="z-1 my-4 prose px-2 mt-40 mb-20 sm:mb-32 md:mb-40 lg:mb-80">
          <?php
          $this->content();
          ?>
        </main>

        <?php
        // footer part
        (new Footer())->render();
        ?>

      </div>
      <?php wp_footer(); ?>
    </body>

    </html>
<?php
  }
}
