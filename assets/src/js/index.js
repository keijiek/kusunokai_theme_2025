//import swup
import Swup from "swup";

// Rellax (https://dixonandmoe.com/rellax/)
// import Rellax from "rellax";

import "flowbite";

// import { drawerToggle } from "./drawerMenu";
import { fixHeaderByScroll } from "./fixHeaderByScroll";

// entry point
document.addEventListener("DOMContentLoaded", () => {
  const swup = new Swup();
  // rellax
  // const rellax = new Rellax(".rellax");

  // drawerToggle();
  fixHeaderByScroll("js_fixableHeader");
});
