<?php

namespace enqueue_scripts;

class EnqueueFile
{
  private $handle;
  private $file_path;
  private $depends;

  /**
   * @param string $handle: ハンドル名
   * @param string $file_relative_pat: テンプレートディレクトリのルートからの相対パス。冒頭のスラッシュは不要
   * @param array $depends: 依存対象のハンドル名を指定
   */
  function __construct(string $handle, string $file_relative_path, array $depends)
  {
    $this->handle = $handle;
    $this->file_path = $file_relative_path;
    $this->depends = $depends;
  }

  function handle()
  {
    return $this->handle;
  }

  function uri()
  {
    return get_theme_file_uri($this->file_path);
  }

  function hash()
  {
    return filemtime(get_theme_file_path($this->file_path));
  }

  function depends()
  {
    return $this->depends;
  }

  function isCss()
  {
    return preg_match('/\.(css)$/i', $this->file_path);
  }

  function isJs()
  {
    return preg_match('/\.(js)$/i', $this->file_path) || preg_match('/\.(mjs)$/i', $this->file_path);
  }
}
