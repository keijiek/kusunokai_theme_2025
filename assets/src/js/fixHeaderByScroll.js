/**
 * @param {string} fixableHeaderId : スクロールで状態を変化させる要素のid
 */
export function fixHeaderByScroll(fixableHeaderId) {
  const header = document.getElementById(fixableHeaderId);

  // 初期化
  toggleHeaderVisibility(header);

  // イベントリスナ―登録
  window.addEventListener("scroll", (e) => {
    toggleHeaderVisibility(header);
  });
}

/**
 * @param {HTMLElement} header
 */
function toggleHeaderVisibility(header) {
  const scrollLength = window.scrollY;
  const threshold = window.innerWidth * 1.0;

  if (threshold < scrollLength) {
    header.classList.remove("hidden");
    header.classList.add("js_active");
  } else {
    header.classList.remove("js_active");
  }
}
