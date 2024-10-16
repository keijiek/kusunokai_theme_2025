/**
 * @param {string} fixableHeaderId : スクロールで状態を変化させる要素のid
 * @param {int} threshold
 */
export function fixHeaderByScroll(fixableHeaderId, threshold = 400) {
  const header = document.getElementById(fixableHeaderId);

  // 初期化
  toggleHeaderVisibility(header, threshold);

  // イベントリスナ―登録
  window.addEventListener("scroll", (e) => {
    toggleHeaderVisibility(header, threshold);
  });
}

/**
 * @param {HTMLElement} header
 */
function toggleHeaderVisibility(header, threshold) {
  const scrollLength = window.scrollY;

  if (threshold < scrollLength) {
    header.classList.add("js_active");
  } else {
    header.classList.remove("js_active");
  }
}
