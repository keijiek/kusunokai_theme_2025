<?php

namespace enqueue_scripts;

require_once(__DIR__ . '/EnqueueFile.class.php');

use enqueue_scripts\EnqueueFile;

/**
 * addFile() と addAdminFile() でファイルを登録したのち、excute() でそれらを enqueue する。
 */
class EnqueueScriptsManager
{
  public array $enqueueFiles = [];
  public array $enqueueAdminFiles = [];

  function __construct() {}

  /**
   * 表側ページに enqueue するファイルを登録
   */
  function addFile(EnqueueFile $file): EnqueueScriptsManager
  {
    $this->enqueueFiles[] = $file;
    return $this;
  }

  /**
   * 管理画面に enqueue するファイルを登録
   */
  function addFileToAdmin(EnqueueFile $file): EnqueueScriptsManager
  {
    $this->enqueueAdminFiles[] = $file;
    return $this;
  }

  /**
   * 登録された全ファイルを enqueue する
   */
  function excute()
  {
    if ($this->enqueueFiles) {
      add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
    }
    if ($this->enqueueAdminFiles) {
      add_action('admin_enqueue_scripts', [$this, 'enqueueAdminScripts']);
    }
  }

  function enqueueScripts()
  {
    foreach ($this->enqueueFiles as $file) {
      $this->enqueueFile($file);
    }
  }

  function enqueueAdminScripts()
  {
    foreach ($this->enqueueAdminFiles as $file) {
      $this->enqueueFile($file);
    }
  }

  /**
   * ひとつのファイルを enqueue する関数。
   * wp_enqueue_style() と wp_enqueue_script() の引数を調整したいときはここを変更。
   */
  private function enqueueFile(EnqueueFile $file)
  {
    if ($file->isCss()) {
      wp_enqueue_style($file->handle(), $file->uri(), $file->depends(), $file->hash());
    } elseif ($file->isJs()) {
      wp_enqueue_script($file->handle(), $file->uri(), $file->depends(), $file->hash());
    }
  }
}
