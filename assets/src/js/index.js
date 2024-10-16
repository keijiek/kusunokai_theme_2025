//import swup
import Swup from "swup";

// Rellax (https://dixonandmoe.com/rellax/)
// import Rellax from "rellax";

import "flowbite";

// import { drawerToggle } from "./drawerMenu";
import { fixHeaderByScroll } from "./fixHeaderByScroll";
import { handleAdminBarOverlap } from "./handleAdminBarOverlap";

// entry point
document.addEventListener("DOMContentLoaded", () => {
  const swup = new Swup();
  // rellax
  // const rellax = new Rellax(".rellax");

  // drawerToggle();
  fixHeaderByScroll("js_fixableHeader");

  // アドミンバーに fixed な要素が隠れる問題の、css だけでは対応不可能な、600px以下の absolute なアドミンバーに合わせて top 値を変える処理。
  handleAdminBarOverlap("js_drawerButton");
});
