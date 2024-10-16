export function handleAdminBarOverlap(
  drawerButtonId,
  wpAdminBarId = "wpadminbar"
) {
  const button = document.getElementById(drawerButtonId);
  const adminBar = document.getElementById(wpAdminBarId);

  // アドミンバーがないなら終了
  if (!adminBar) {
    return;
  }

  resetButtonPosition(button, adminBar);

  // デバウンス用のタイマー変数。
  let scrollTimeout;
  let resizeTimeout;

  // scroll にイベント付与。
  window.addEventListener("scroll", (e) => {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
      resetButtonPosition(button, adminBar);
    }, 4);
  });

  // resize にもイベント付与
  window.addEventListener("resize", (e) => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      resetButtonPosition(button, adminBar);
    }, 4);
  });
}

function resetButtonPosition(button, adminBar) {
  const adminBarHeight = adminBar.offsetHeight;
  const isWhihin600px = window.matchMedia("(max-width: 600px)").matches;

  if (isWhihin600px && window.scrollY < adminBarHeight) {
    button.style.top = `${adminBarHeight - window.scrollY}px`;
  } else {
    button.style.top = "";
  }
}
