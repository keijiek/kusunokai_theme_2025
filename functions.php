<?php

/**
 * デバッグ用
 */
function vardump(mixed $args)
{
  echo ('<pre>');
  var_dump($args);
  echo ('</pre>');
}


/**
 * デバッグ。ログをファイルに出力。
 * 改良の余地は多分にあり
 */
function vardump_file(mixed $args, string $title = '')
{
  // 変数の用意
  $dir = __DIR__ . '/log/var_dump';
  $date_time = new \DateTimeImmutable('now');
  $file_name =  $date_time->format('Ymd_Hi') . ($title ? '_' . $title : '') . '.md';

  // ディレクトリが無ければ作成
  if (!is_dir($dir)) {
    mkdir($dir, 0775, true);
  }

  ob_start(); // ob 開始
  echo ($title ? '# ' . $title . PHP_EOL . PHP_EOL : '');
  echo ('## ' . $date_time->format('H:i (s.v\s), d\t\h M. Y (e, P)') . PHP_EOL . PHP_EOL);
  echo ('```bash' . PHP_EOL);
  var_dump($args);
  echo ('```' . PHP_EOL);
  $output = ob_get_contents(); // ob 出力を変数に取得
  ob_end_clean(); // ob 終了

  file_put_contents($dir . '/' . $file_name, $output, FILE_APPEND);
  // 第三引数に定数「FILE_APPEND」を与えれば、第一引数のファイル末尾に出力を追加していく挙動になる。
}

/**
 * よく使うフォルダのパス
 */
define('IMAGES_DIR', get_theme_file_uri('assets/images'));

/* ************************************************************
 * カスタム投稿のスラグ
 ************************************************************ */
define('POST_NEWS_LETTER', 'newsletters');
define('POST_URGENT_NOTICE', 'urgent_notices');
define('POST_NOTICE', 'notices');


/** ************************************************************************
 * メニューのスラグ
 */
define('GLOBAL_NAV_MENU', 'global_nav_menu');


/** ************************************************************************
 * コンフィグ
 */
// $GLOBALS['content_width'] の値を設定。ブロックエディタにも影響。
require_once(__DIR__ . '/include/config/SetContentWIdth.class.php');
new config\SetContentWidth('set_my_content_width', 1536);

// 基本機能のアクティベート
require_once(__DIR__ . '/include/config/EssentialFeatures.class.php');
new config\EssentialFeaturesActivator();

// uploads 内のメディアファイルを相対 uri で取得させる(ドメイン部分を消す)
require_once(__DIR__ . '/include/config/RemoveDomainFromUrl.class.php');
new config\RemoveDomainFromUrl();


/** ************************************************************************
 * ファイルのエンキュー
 */
require_once(__DIR__ . '/include/enqueue_scripts/EnqueueScriptsManager.class.php');
require_once(__DIR__ . '/include/enqueue_scripts/EnqueueFile.class.php');

use enqueue_scripts\EnqueueScriptsManager;
use enqueue_scripts\EnqueueFile;

(new EnqueueScriptsManager())
  ->addFile(new EnqueueFile('tailwind_css', 'assets/dist/tailwindcss/index.css', ['custom_css']))
  ->addFile(new EnqueueFile('tailwind_js', 'assets/dist/tailwindcss/index.js', []))
  ->addFile(new EnqueueFile('bundled_js', 'assets/dist/js/index.js', []))
  ->addFile(new EnqueueFile('custom_css', 'assets/css/custom.css', []))
  ->excute();


/** ************************************************************************
 * カスタムポストタイプの登録
 */
require_once(__DIR__ . '/include/custom_posts/PostTypesRegister.class.php');

new custom_post\PostTypesRegister();


/** ************************************************************************
 * メニュー登録
 */
add_action('after_setup_theme', 'register_custom_nav_menues');
function register_custom_nav_menues()
{
  register_nav_menus([
    GLOBAL_NAV_MENU => '共通グローバルメニュー',
  ]);
}

/**
 * 管理画面に依存しない形のメニュー
 */
require_once(__DIR__ . '/include/models/NavMenuItem.class.php');

use models\NavMenuItem;

define('NAV_MENU_ITEMS', [
  new NavMenuItem(home_url('/'), 'ホーム', IMAGES_DIR . '/icon_home.svg', 72, 72),
  new NavMenuItem(home_url('/' . POST_NEWS_LETTER), '楠の会ニュース', IMAGES_DIR . '/icon_newsLetter.svg', 72, 72),
  new NavMenuItem(home_url('/' . POST_NOTICE), 'お知らせ', IMAGES_DIR . '/icon_notice.svg', 72, 72),
  new NavMenuItem(home_url('/about_us'), '宮崎県楠の会について', IMAGES_DIR . '/icon_notice.svg', 72, 72),
]);
