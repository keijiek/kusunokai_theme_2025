<?php

namespace view\pages;

require_once(__DIR__ . '/parts/_Head.class.php');
require_once(__DIR__ . '/parts/_Header.class.php');
require_once(__DIR__ . '/parts/_Footer.class.php');
require_once(__DIR__ . '/parts/_BackGrounds.class.php');
require_once(__DIR__ . '/parts/_FixedNav.class.php');

use view\pages\parts\Head;
use view\pages\parts\Header;
use view\pages\parts\Footer;
use view\pages\parts\BackGrounds;
use view\pages\parts\FixedNav;

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

    <body <?php body_class('m-0 p-0 '); ?> id="top_of_page">
      <?php wp_body_open(); ?>
      <div class="relative" role="presentation">

        <?php
        // header part に表示したいものを並べる。
        (new BackGrounds())->render();
        (new Header())->render();
        (new FixedNav())->render();
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

  private function render_templates_in_order(array $template_files)
  {
    foreach ($template_files as $file) {
      require_once($file);
    }
  }

  /**
   * デフォルトのヘルメット・テンプレートファイル群のパス
   */
  private function default_helmet_templates()
  {
    $this->helmet_templates[] = dirname(__DIR__) . '/templates/010_starting_edge.php';
    $this->helmet_templates[] = dirname(__DIR__) . '/templates/020_header_element.php';
  }

  /**
   * デフォルトのブーツ・テンプレートファイル群のパス
   */
  private function default_boots_templates()
  {
    $this->boots_templates[] = dirname(__DIR__) . '/templates/110_footer_element.php';
    $this->boots_templates[] = dirname(__DIR__) . '/templates/120_ending_edge.php';
  }

  /**
   * @param string[] $template_file_paths: テンプレートファイル絶対パスの配列。それぞれ require_once の対象となる。
   */
  public function set_helmet_templates(array $template_file_paths): PageRendererBase
  {
    $this->helmet_templates = $template_file_paths;
    return $this;
  }

  /**
   * @param string[] $template_file_paths: テンプレートファイル絶対パスの配列。それぞれ require_once の対象となる。
   */
  public function set_boots_templates(array $template_file_paths): PageRendererBase
  {
    $this->boots_templates = $template_file_paths;
    return $this;
  }
}
