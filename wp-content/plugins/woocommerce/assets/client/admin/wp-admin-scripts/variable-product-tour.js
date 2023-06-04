!function(){"use strict";var e={};(function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(e);var t=window.wp.element,o=window.wp.i18n,r=window.wc.components,n=window.wc.data,i=window.wc.tracks;function a(e,t){var o,r;return null===(o=e[t])||void 0===o||null===(r=o.meta)||void 0===r?void 0:r.name}const c=document.createElement("div");c.setAttribute("id","variable-product-tour-root"),(0,t.render)((0,t.createElement)((()=>{const[e,c]=(0,t.useState)(!1),{updateUserPreferences:d,variable_product_tour_shown:s}=(0,n.useUserPreferences)(),u={steps:[{referenceElements:{desktop:".attribute_tab"},focusElement:{desktop:".attribute_tab"},meta:{name:"attributes",heading:(0,o.__)("Start by adding attributes","woocommerce"),descriptions:{desktop:(0,o.__)("Add attributes like size and color for customers to choose from on the product page. We will use them to generate product variations.","woocommerce")},primaryButton:{text:(0,o.__)("Got it","woocommerce")}}}],options:{effects:{spotlight:{interactivity:{enabled:!0,rootElementSelector:"#wpwrap"}},arrowIndicator:!0,liveResize:{mutation:!0,resize:!0,rootElementSelector:"#wpwrap"}}},closeHandler:(e,t)=>{d({variable_product_tour_shown:"yes"}),c(!1),t===e.length-1?(0,i.recordEvent)("variable_product_tour_completed",{step:a(e,t)}):(0,i.recordEvent)("variable_product_tour_dismissed",{step:a(e,t)})}};return(0,t.useEffect)((()=>{const e=document.querySelector("#product-type");if("yes"!==s&&e)return e.addEventListener("change",t),()=>{e.removeEventListener("change",t)};function t(){"variable"===e.value&&(c(!0),(0,i.recordEvent)("variable_product_tour_started",{step:a(u.steps,0)}))}})),e?(0,t.createElement)(r.TourKit,{config:u}):null}),null),document.body.appendChild(c)),(window.wc=window.wc||{}).variableProductTour=e}();