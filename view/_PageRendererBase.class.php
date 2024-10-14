<?php

namespace view;

abstract class PageRendererBase
{
  private array $helmet_templates = [];
  private array $boots_templates = [];

  protected function __construct()
  {
    $this->default_helmet_templates();
    $this->default_boots_templates();
  }

  abstract function content(): void;

  /**
   * ページ全体の表示ロジック
   */
  public function view(): void
  {
    $this->render_templates_in_order($this->helmet_templates);
?>
    <main class="z-1 my-4 prose">
      <?php
      $this->content();
      ?>
    </main>
<?php
    $this->render_templates_in_order($this->boots_templates);
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
