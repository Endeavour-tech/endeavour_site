import AppFooter from "./components/AppFooter.js";
import AppHeader from "./components/AppHeader.js";
import scrollDown from './additionnals.js'


//Define Custom Elements

customElements.define('app-header', AppHeader)
customElements.define('app-footer', AppFooter)

//ScrollDown scripts

scrollDown()