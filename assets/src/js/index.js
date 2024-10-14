//import swup
import Swup from "swup";

import "flowbite";

// import { drawerToggle } from "./drawerMenu";
import { fixHeaderByScroll } from "./fixHeaderByScroll";

// entry point
document.addEventListener("DOMContentLoaded", () => {
  const swup = new Swup();

  // drawerToggle();
  fixHeaderByScroll("js_fixableHeader");
});
