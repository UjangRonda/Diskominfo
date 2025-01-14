var __defProp=Object.defineProperty,__defProps=Object.defineProperties,__getOwnPropDescs=Object.getOwnPropertyDescriptors,__getOwnPropSymbols=Object.getOwnPropertySymbols,__hasOwnProp=Object.prototype.hasOwnProperty,__propIsEnum=Object.prototype.propertyIsEnumerable,__defNormalProp=(e,t,r)=>t in e?__defProp(e,t,{enumerable:!0,configurable:!0,writable:!0,value:r}):e[t]=r,__spreadValues=(e,t)=>{for(var r in t||(t={}))__hasOwnProp.call(t,r)&&__defNormalProp(e,r,t[r]);if(__getOwnPropSymbols)for(var r of __getOwnPropSymbols(t))__propIsEnum.call(t,r)&&__defNormalProp(e,r,t[r]);return e},__spreadProps=(e,t)=>__defProps(e,__getOwnPropDescs(t)),__objRest=(e,t)=>{var r={};for(var n in e)__hasOwnProp.call(e,n)&&t.indexOf(n)<0&&(r[n]=e[n]);if(null!=e&&__getOwnPropSymbols)for(var n of __getOwnPropSymbols(e))t.indexOf(n)<0&&__propIsEnum.call(e,n)&&(r[n]=e[n]);return r},__async=(e,t,r)=>new Promise(((n,o)=>{var a=e=>{try{s(r.next(e))}catch(t){o(t)}},i=e=>{try{s(r.throw(e))}catch(t){o(t)}},s=e=>e.done?n(e.value):Promise.resolve(e.value).then(a,i);s((r=r.apply(e,t)).next())}));!function(){"use strict";const e=e=>e.nodeType===Node.ELEMENT_NODE,t=t=>{if(!e(t))return!1;const r=t.getAttribute("aria-hidden"),n=t.getAttribute("hidden");return(t=>!!e(t)&&"none"===window.getComputedStyle(t).display)(t)||"true"===r||null!==n&&""!==n},r=t=>{if(!e(t))return!1;const r=t.getAttribute("aria-hidden"),n=t.getAttribute("hidden");return"true"===r||null!==n&&""!==n||void 0},n=["NOSCRIPT","SCRIPT","style"],o=(e,a,i={includeTextFromVisuallyHiddenElements:!1})=>{var s;const{includeTextFromVisuallyHiddenElements:l}=i;for(let c=0;c<e.length;c++){let u=e[c];switch(u.nodeType){case Node.TEXT_NODE:a+=" "+(null==(s=u.textContent)?void 0:s.trim().replace(/(\n|\r\n)/g,""));break;case Node.ELEMENT_NODE:if(n.includes(u.tagName)||(l?r(u):t(u)))break;const e=u.getAttribute("aria-hidden"),c=u.getAttribute("alt"),d=u.getAttribute("aria-label");if(!e||"false"===e){if(d){a+=" "+d;break}c&&(a+=c+" "),"IMG"!==u.tagName&&(a=o(u.childNodes,a,i))}}}return a},a=(e,t="",r={includeTextFromVisuallyHiddenElements:!1})=>{let n=t;return(t=o(e.childNodes,n,r)).replace(/\s+/g," ").trim()},i=e=>{let t=e.split(" "),r="";for(let n=0;n<t.length;n++){let e=document.getElementById(t[n]);e&&(r=a(e,r))}return r},s=(e,t=0)=>{let r=3735928559^t,n=1103547991^t;for(let o,a=0;a<e.length;a++)o=e.charCodeAt(a),r=Math.imul(r^o,2654435761),n=Math.imul(n^o,1597334677);return r=Math.imul(r^r>>>16,2246822507)^Math.imul(n^n>>>13,3266489909),n=Math.imul(n^n>>>16,2246822507)^Math.imul(r^r>>>13,3266489909),4294967296*(2097151&n)+(r>>>0)},l=(e,t=!1)=>{var r;if("html"===e.nodeName.toLowerCase())return"/HTML";if("body"===e.nodeName.toLowerCase())return"/HTML/BODY";if("head"===e.nodeName.toLowerCase())return"/HTML/HEAD";let n=0;const o=null==(r=e.parentElement)?void 0:r.children;if(!o)return"";for(let a=0;a<o.length;a++){let r=o[a];if(r===e)return l(e.parentElement,!0)+`/${e.tagName}[${n+1}]`+(t?"":c(e));r.tagName===e.tagName&&n++}return""};function c(e){const t={s:"src",h:"href"},r=e.innerText?s(e.innerText):"";return Object.keys(t).reduce(((r,n)=>{const o=t[n],a=e.getAttribute(o)||"";return e.hasAttribute&&e.hasAttribute(o)&&""!==a?r+";"+n+":"+s(a):r}),"|"+r)}const u=new RegExp("^(data:)"),d=new RegExp("(.)(gif|jpe?g|tiff?|png|webp|bmp)","i"),p=e=>{if(u.test(e))return e;e&&(e=e.replace(/^(http|https)(:\/\/)/,"").replace(/^(www\.)/,""));const t=e.match(d);return(null==t?void 0:t.index)&&(null==t?void 0:t.length)?e.substring(0,t.index+t[0].length):e.split("?")[0]},m=e=>{let t=e.closest("label"),r="";if(t){for(let e of t.childNodes)e.nodeType===Node.TEXT_NODE&&(r+=e.textContent);if(r.trim())return r.trim()}if(e.id){let t=(e=>{const t=document.querySelectorAll("LABEL");for(let r=0;r<t.length;r++)if(t[r].htmlFor===e)return t[r];return null})(e.id);if(t)return a(t,"")}const n=e.getAttribute("aria-label"),o=e.getAttribute("aria-labelledby");if(n)return n;if(o)return i(o);const s=e.getAttribute("title");if(s)return s;return a(e,"")||""},g=["script","noscript","style","meta","link","path","circle","rect","ellipse","line","polygon","polyline","g"],f=[".uwy",".uwy *",".uw-sl *"],h=["data-uw-ignore","data-uw-rm-ignore"],E=e=>!(e instanceof HTMLElement)||h.some((t=>e.hasAttribute(t)))||f.some((t=>e.classList.contains(t)))||g.includes(e.nodeName.toLowerCase()),b=(e,t)=>{try{if("childList"===t){const t=[...e.addedNodes].reduce(((e,t)=>{if(t instanceof HTMLElement){const r=[...t.getElementsByTagName("*")];return[...e,...r]}return e}),[]);return[].filter.call([...e.addedNodes,...t],(e=>!E(e)))}return"attributes"===t?E(e.target)?[]:[e.target]:[]}catch(r){return[]}},y=e=>__async(this,null,(function*(){const t=yield fetch(e);return yield t.json()})),A={AriaEditorValues:[],BrokenLink:[],Contrast:[],EmptyControls:[],ExternalLink:[],Forms:[],Headings:[],Language:[],MissingAlts:[],Pdfs:[],VagueLinks:[]},v=UserWayWidgetApp.ContextHolder.config.remediation,T=UserWayWidgetApp.ContextHolder.config.tunings,_=UserWayWidgetApp.ContextHolder.config.services,N=UserWayWidgetApp.ContextHolder.config.imageAlt,{isMobile:O,language:w}=UserWayWidgetApp.ContextHolder.config;function R(e){__spreadValues({},e)}const I=()=>__async(this,null,(function*(){if(null==v?void 0:v.consolidated){const e=yield y(v.consolidated);return e.MissingAlts.reverse(),void R(e)}R(A)})),L="https://api.userway.org/api/",S="https://cdn77.api.userway.org/";var C=(e=>(e.Remediation="remediation",e.AriaEditor="aria-editor",e))(C||{}),x=(e=>(e.KeyboardNavEnabled="app-key-nav-enabled",e))(x||{});const D=e=>{const t=UserWayWidgetApp.getLib("util"),{registerPostMessageListener:r}=t;return r((t=>{var r;(null==(r=null==t?void 0:t.data)?void 0:r.isUserWay)&&e(t)}))},M=document.documentElement,k={attributes:!0,attributeFilter:["aria-label","alt"],childList:!0,subtree:!0},P=new Set,U=e=>{P.add(e)},W=new MutationObserver((e=>{const t=(e=>{const t=[];for(const r of e)t.push(...b(r,r.type));return t})(e);t.length&&P.forEach((e=>e(t)))})),B=[{src:"wave.min.js",name:"Wave"},{src:"axe.min.js",name:"BrowserStack"}],H=[{url:"wave.webaim.org",name:"Wave"}],j=(e,t)=>{try{const r=[];return"childList"===t&&e.addedNodes.length&&e.addedNodes.forEach((e=>{const t=(e=>{if("script"===e.nodeName.toLowerCase()){const t=B.find((t=>e.src.includes(t.src)));if(t)return t}return"iframe"===e.nodeName.toLowerCase()&&e.title.toLowerCase().includes("equalweb")?{name:"EqualWeb"}:null})(e);t&&r.push(t)})),r}catch(r){return[]}},F=(e,t)=>__async(this,null,(function*(){const{account:r}=UserWayWidgetApp.ContextHolder.config,n={date:(new Date).toISOString(),url:window.location.href,scannerName:e,a11yScore:t};yield fetch(`${L}scaner-activity/${r}`,{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(n)}).catch((e=>{console.log(e)}))})),G=e=>{try{UserWayWidgetApp.getLib("scan_manager").accessibilityScore().then((t=>{F(e,t)}))}catch(t){console.log(t)}},X=document.documentElement,$={childList:!0,subtree:!0},V=new MutationObserver((e=>{const t=(e=>{const t=[];for(const r of e)t.push(...j(r,r.type));return t})(e)[0];t&&G(t.name)}));var K="object"==typeof global&&global&&global.Object===Object&&global,Z="object"==typeof self&&self&&self.Object===Object&&self,q=K||Z||Function("return this")(),z=q.Symbol,Y=Object.prototype,Q=Y.hasOwnProperty,J=Y.toString,ee=z?z.toStringTag:void 0;var te=Object.prototype.toString;var re=z?z.toStringTag:void 0;function ne(e){return null==e?void 0===e?"[object Undefined]":"[object Null]":re&&re in Object(e)?function(e){var t=Q.call(e,ee),r=e[ee];try{e[ee]=void 0;var n=!0}catch(a){}var o=J.call(e);return n&&(t?e[ee]=r:delete e[ee]),o}(e):function(e){return te.call(e)}(e)}var oe=/\s/;var ae=/^\s+/;function ie(e){return e?e.slice(0,function(e){for(var t=e.length;t--&&oe.test(e.charAt(t)););return t}(e)+1).replace(ae,""):e}function se(e){var t=typeof e;return null!=e&&("object"==t||"function"==t)}var le=/^[-+]0x[0-9a-f]+$/i,ce=/^0b[01]+$/i,ue=/^0o[0-7]+$/i,de=parseInt;function pe(e){if("number"==typeof e)return e;if(function(e){return"symbol"==typeof e||function(e){return null!=e&&"object"==typeof e}(e)&&"[object Symbol]"==ne(e)}(e))return NaN;if(se(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=se(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=ie(e);var r=ce.test(e);return r||ue.test(e)?de(e.slice(2),r?2:8):le.test(e)?NaN:+e}var me=function(){return q.Date.now()},ge=Math.max,fe=Math.min;function he(e,t,r){var n,o,a,i,s,l,c=0,u=!1,d=!1,p=!0;if("function"!=typeof e)throw new TypeError("Expected a function");function m(t){var r=n,a=o;return n=o=void 0,c=t,i=e.apply(a,r)}function g(e){var r=e-l;return void 0===l||r>=t||r<0||d&&e-c>=a}function f(){var e=me();if(g(e))return h(e);s=setTimeout(f,function(e){var r=t-(e-l);return d?fe(r,a-(e-c)):r}(e))}function h(e){return s=void 0,p&&n?m(e):(n=o=void 0,i)}function E(){var e=me(),r=g(e);if(n=arguments,o=this,l=e,r){if(void 0===s)return function(e){return c=e,s=setTimeout(f,t),u?m(e):i}(l);if(d)return clearTimeout(s),s=setTimeout(f,t),m(l)}return void 0===s&&(s=setTimeout(f,t)),i}return t=pe(t)||0,se(r)&&(u=!!r.leading,a=(d="maxWait"in r)?ge(pe(r.maxWait)||0,t):a,p="trailing"in r?!!r.trailing:p),E.cancel=function(){void 0!==s&&clearTimeout(s),c=0,n=l=o=s=void 0},E.flush=function(){return void 0===s?i:h(me())},E}let Ee=!0;const be=e=>{setTimeout((()=>{Ee=!1}),2e3);const t=function(e,t,r){var n=!0,o=!0;if("function"!=typeof e)throw new TypeError("Expected a function");return se(r)&&(n="leading"in r?!!r.leading:n,o="trailing"in r?!!r.trailing:o),he(e,t,{leading:n,maxWait:t,trailing:o})}((t=>e(t)),300,{leading:!0,trailing:!0}),r=he((t=>e(t)),500,{maxWait:2e3,leading:!0,trailing:!0});return{run:e=>Ee?t(e):r(e)}};var ye=(e=>(e.TABINDEX="tabindex",e.ROLE="role",e.TYPE="type",e.SRC="src",e.ARIA_LEVEL="ariaLevel",e.ORIGINAL_ALT="originalAlt",e))(ye||{}),Ae=(e=>(e.UNKNOWN="UNKNOWN",e.NOT_ALLOWED="NOT_ALLOWED",e.TEXT_NODE="TEXT_NODE",e.LANDMARK="LANDMARK",e.CONTROL="CONTROL",e.HEADING="HEADING",e.HAS_ALT_DESCRIPTION="HAS_ALT_DESCRIPTION",e.COMPOSED_TEXT_NODES="COMPOSED_TEXT_NODES",e.IFRAME="IFRAME",e.HIDDEN_FOR_READER="HIDDEN_FOR_READER",e))(Ae||{}),ve=(e=>(e.UNKNOWN="unknown",e.TEXT="text",e.IMAGE="image",e.HEADING="heading",e.FOOTER="footer",e.HEADER="header",e.NAV="nav",e.MAIN="main",e.FORM="form",e.LANDMARK="landmark",e.LINK="link",e.BUTTON="button",e.CHECKBOX="checkbox",e.RADIOBUTTON="radiobutton",e.INPUT="input",e.TEXTAREA="textarea",e.SELECT="select",e.ABBR="abbr",e.LIST_ITEM="list item",e))(ve||{});const Te="accessibility-tree-observer",_e=["uw-sl","uwy","uw-s10-reading-guide","uw-s12-tooltip"],Ne=(e,t)=>t.ariaLabel?t.ariaLabel:t.ariaLabelledBy?i(t.ariaLabelledBy):a(e,""),Oe={},we=UserWayWidgetApp.getLib("accessibility_tree_walker");let Re,Ie=[],Le=1;const Se=(e,t)=>{var r;if(Ie=[],(e=>{const t=3===e.nodeType;return _e.some((t=>!!e.closest&&e.closest(`.${t}`)))||!t&&e.hasAttribute("data-uw-rm-ignore")})(e)&&!t)return null;const n={node:e,type:we.identifyElementType(e)},o=(e=>{if(!e||!e.type)return{};const{node:t}=e;return[Ae.UNKNOWN,Ae.NOT_ALLOWED,Ae.TEXT_NODE].includes(e.type)?{uwAtoId:t.uwAtoId}:{tagName:t.tagName,tabindex:t.getAttribute("tabindex")||"",role:t.getAttribute("role")||"",ariaLevel:t.getAttribute("aria-level")||"",ariaLabel:t.getAttribute("aria-label")||"",ariaLabelledBy:t.getAttribute("aria-labelledby")||"",type:t.getAttribute("type")||"",uwAtoId:t.uwAtoId}})(n);Re=we.identifyElementType(e);const s=Re===Ae.HIDDEN_FOR_READER;let c,u;switch(Ie=(e=>(e.tabindex&&Ie.push({name:ye.TABINDEX,value:e.tabindex}),e.role&&Ie.push({name:ye.ROLE,value:e.role}),e.type&&Ie.push({name:ye.TYPE,value:e.type}),e.ariaLevel&&Ie.push({name:ye.ARIA_LEVEL,value:e.ariaLevel}),Ie))(o),s&&((e,t)=>{const r=e.cloneNode(!0);r.removeAttribute("aria-hidden"),Re=we.identifyElementType(r),Re!==Ae.UNKNOWN||"IMG"!==t.tagName&&"img"!==t.role||(Re=Ae.HAS_ALT_DESCRIPTION)})(e,o),Re){case Ae.TEXT_NODE:c=(e=>{const t=ve.TEXT;let r="";e.textContent&&(r=e.textContent.trim().replace(/(\n|\r\n)/g,"").replace(/\s+/g," "));const n={};return e.parentElement&&(n.parentXpath=l(e.parentElement)),{semanticType:t,textToRead:r,additionalParams:n}})(e),Oe.parentXpath=null==(r=c.additionalParams)?void 0:r.parentXpath;break;case Ae.COMPOSED_TEXT_NODES:c=((e,t)=>({semanticType:"LI"===t.tagName?ve.LIST_ITEM:ve.TEXT,textToRead:t.ariaLabel||a(e,"")}))(e,o);break;case Ae.HIDDEN_FOR_READER:c={semanticType:ve.UNKNOWN,textToRead:""};break;case Ae.HEADING:c=((e,t)=>({semanticType:ve.HEADING,textToRead:t.ariaLabel||a(e,"")}))(e,o);break;case Ae.LANDMARK:c=(e=>{let t,r="";e.ariaLabel?r=e.ariaLabel:e.ariaLabelledBy&&(r=i(e.ariaLabelledBy));const{tagName:n}=e,{role:o}=e;return t="FOOTER"===n||"contentinfo"===o?ve.FOOTER:"HEADER"===n||"banner"===o?ve.HEADER:"FORM"===n||"form"===o?ve.FORM:"MAIN"===n||"main"===o?ve.MAIN:"NAV"===n||"navigation"===o?ve.NAV:ve.LANDMARK,{semanticType:t,textToRead:r}})(o);break;case Ae.CONTROL:c=((e,t)=>{const{tagName:r,role:n,type:o,ariaLabel:a,ariaLabelledBy:s}=t;let l=!1,c="",u=ve.TEXT;return"menuitem"===n||"option"===n?(c=Ne(e,t),l=!0):"link"===n||"A"===r&&!n?(u=ve.LINK,c=Ne(e,t),l=!0):"button"===n||"BUTTON"===r?(u=ve.BUTTON,c=Ne(e,t),l=!0):"INPUT"!==r||"button"!==o&&"submit"!==o&&"reset"!==o||(u=ve.BUTTON,a?c=a:s&&(c=i(s)),l=!0),l||(c=m(e),"checkbox"===n||"INPUT"===r&&"checkbox"===o?u=ve.CHECKBOX:"radio"===n||"INPUT"===r&&"radio"===o?u=ve.RADIOBUTTON:"INPUT"===r&&(u=ve.INPUT),"TEXTAREA"===r&&(u=ve.TEXTAREA),"SELECT"===r&&(u=ve.SELECT)),{semanticType:u,textToRead:c}})(e,o);break;case Ae.HAS_ALT_DESCRIPTION:c=((e,t,r)=>{const{tagName:n,role:o,ariaLabel:a}=t,i=e.getAttribute("alt")||"",s=e.getAttribute("title")||"",l=e.getAttribute("data-uw-rm-ima-original")||"";let c="",u=ve.TEXT;const d=r;return"IMG"!==n&&"img"!==o||(u=ve.IMAGE,d.push({name:ye.SRC,value:e.src}),d.push({name:ye.ORIGINAL_ALT,value:l}),c=a||i||l||c),"ABBR"===n&&(u=ve.ABBR,c=s),{semanticType:u,textToRead:c,attributesToReturn:d}})(e,o,Ie),c.attributesToReturn&&(Ie=c.attributesToReturn);break;case Ae.UNKNOWN:c=((e,t)=>{let r=ve.TEXT;return"DIV"!==t.tagName||e.innerHTML||(r=ve.LANDMARK),{semanticType:r,textToRead:""}})(e,o);break;default:c={textToRead:"",semanticType:ve.TEXT}}return o.uwAtoId?u=o.uwAtoId:(u=Le,Le+=1,n.node.uwAtoId=u),__spreadValues({id:u,xpath:l(e),label:c.textToRead.replace(/\|/g,"").trim(),tagName:o.tagName||"",type:c.semanticType,hidden:s,attributes:Ie,el:n.node},Oe)},Ce=UserWayWidgetApp.getLib("accessibility_tree_walker");let xe=[];const De=()=>{let e=null;xe=[];do{const t=Ce.getNextAccessibilityTreeNode(e);if(!t)break;const r=Se(t.node);r&&xe.push(r),e=t.node}while(e);xe=xe.map((e=>{const t=e,{el:r}=t;return __objRest(t,["el"])})),((e,t=["userway"])=>{const r=__spreadProps(__spreadValues({},e),{isUserWay:!0});t.forEach((e=>{let t=window.frames[e];if(!t||"function"!=typeof t.postMessage)try{t=document.querySelector(`iframe[name=${e}]`),t=t?t.contentWindow:null}catch(n){console.error(n)}t&&t.postMessage(r,"*")}))})({action:Te,type:"userway:ato-output:get",data:{nodes:xe,version:Date.now()}},["uwAccessibilityEditor"])},Me={enabled:!1},ke={"userway:ato-input:enable":()=>{Me.enabled||(Me.enabled=!0,U(De),De())},"userway:ato-input:disable":()=>{var e;Me.enabled&&(Me.enabled=!1,e=De,P.delete(e))},"userway:ato-input:get":De},Pe={automaticcoupons:/automaticcoupons/,"shopping.yahoo":/shopping\.yahoo/,shopperapproved:/shopperapproved/,rakuten:/rakuten/,"translate.google":/translate\.google/,"maps.googleapis.com":/maps\.googleapis\.com/,"s.w.org":/s\.w\.org/,avatar:/avatar/,companylogos:/companylogos/,favicon:/favicon/,activecampaign:/lt\.php(.*)?l=open/,aweber:/openrate\.aweber\.com/,bananatag:/bl-1\.com/,boomerang:/mailstat\.us\/tr/,"campaign monitor":/cmail(\d+)\.com\/t\//,"cirrus insight":/tracking\.cirrusinsight\.com/,close:/close\.com\/email_opened/,"constant contact":/rs6\.net\/on\.jsp/,contactmonkey:/contactmonkey\.com\/api\/v1\/tracker/,convertkit:/convertkit-mail\.com\/o/,"critical impact":/portal\.criticalimpact\.com\/c2\//,emarsys:/emarsys\.com\/e2t\/o/,gem:/zen\.sr\/o/,getnotify:/email81\.com\/case/,getresponse:/getresponse\.com\/open\.html/,growthdot:/growthdot\.com\/api\/mail-tracking/,front:/app\.frontapp\.com\/(.*)?\/seen/,hubspot:/t\.(hubspotemail|hubspotfree|signaux|senal|sidekickopen|sigopn)/,icontact:/click\.icptrack\.com\/icp/,intercom:/(via\.intercom\.io\/o)|(intercom-mail\.com\/via\/o)/,litmus:/emltrk\.com/,mailchimp:/list-manage\.com\/track/,mailgun:/email\.(mailgun|mg)(.*)?\/o/,mailjet:/mjt\.lu\/oo/,mailspring:/getmailspring\.com\/open/,mailtrack:/(mailtrack\.io\/trace)|(mltrk\.io\/pixel)/,mandrill:/mandrillapp\.com\/track/,marketo:/resources\.marketo\.com\/trk/,mixmax:/(email|track)\.mixmax\.com/,mixpanel:/api\.mixpanel\.com\/track/,nethunt:/nethunt\.co(.*)?\/pixel\.gif/,newton:/tr\.cloudmagic\.com/,outreach:/api\/mailings\/opened/,phplist:/phplist\.com\/lists\/ut\.php/,polymail:/polymail\.io/,postmark:/pstmrk\.it\/open/,"return path":/returnpath\.net\/pixel\.gif/,sailthru:/sailthru\.com\/trk/,salesforce:/nova\.collect\.igodigital\.com/,sendgrid:/wf\/open\?upn/,sendy:/sendy\/t\//,streak:/mailfoogae\.appspot\.com/,superhuman:/r\.superhuman\.com/,thunderhead:/na5\.thunderhead\.com/,tinyletter:/tinyletterapp\.com.*open\.gif/,yamm:/yamm-track\.appspot/,yesware:/t\.yesware\.com/,"zendesk sell":/futuresimple\.com\/api\/v1\/sprite\.png/,bing:/bat\.bing\.com/,teads:/cm\.teads\.tv/},Ue=["icon","cart","logo"],We=["h1","h2","h3","h4","h5","h6","span","a","p","figcaption","caption","div"],Be=["heading"],He=new RegExp("^(data:)"),je=new RegExp(/\.svg(\?.*)?$/,"i"),Fe=new RegExp(/^[!@#$%^&*()_+{}[\]`:;<>,.?~\\|\-="'/]+$/,"u");var Ge=(e=>(e.EXCLUDED_SRC="EXCLUDED_SRC",e.HIDDEN_FROM_SCREEN_READER="HIDDEN_FROM_SCREEN_READER",e.BASE64="BASE64",e.SVG="SVG",e.SMALL_SIZE="SMALL_SIZE",e.MICRO_SIZE="MICRO_SIZE",e.WRONG_SRC="WRONG_SRC",e.ASPECT_RATIO="ASPECT_RATIO",e.CUSTOM_CONFIG="CUSTOM_CONFIG",e))(Ge||{});const Xe=["SVG","SMALL_SIZE","HIDDEN_FROM_SCREEN_READER"],$e="data-uw-rm-alt-original",Ve="REMEDIATION_IMAGE_MISSING_ALT",Ke="data-uw-rm-alt",Ze=["jpg","jpeg","png","gif","bmp","tiff","tif","svg","webp","ico","apng","heif","heic","avif","eps","raw","cr2","nef","orf","sr2"];var qe=(e=>(e.CorrectAlt="ALT",e.Reverted="RT",e.Backend="BE",e.Excluded="EX",e.Hidden="HD",e.Base64="BS64",e.Svg="SVG",e.Small="SM",e.Micro="MC",e.InvalidSrc="SRC",e.AspectRatio="AR",e.AI="AI",e.AIQuotaExceed="QU",e.ClosestText="CT",e.CustomConfig="CC",e.NotLoaded="NL",e))(qe||{});_.editorBuildUrl;const ze=e=>e.filter((e=>{var t,r;const n=(e=>{switch(e){case Ve:return"alt";case"aria-editor":return"ariaEditor";case"REMEDIATION_EMPTY_CONTROLS":return"emptyControls";case"REMEDIATION_FORM_LABEL":return"forms";case"REMEDIATION_BROKEN_LINK":return"brokenLinks";case"REMEDIATION_META_VIEWPORT":return"metaViewport";case"REMEDIATION_EXTERNAL_LINK_TARGETS":return"externalLinks";case"REMEDIATION_SKIP_NAVIGATION_LINK":return"skipLinks";case"REMEDIATION_VAGUE_LINK":return"vagueLinks";case"REMEDIATION_HEADING":return"headings";default:return null}})(e.ruleId);if(!n||!_.paidAi)return!0;const o=v[n];if(!o)return!0;const a=!1!==(null==(r=null==(t=o.config)?void 0:t.mobile)?void 0:r.enabled);return o.enabled&&(!O||a)})),Ye=(e,t)=>{if(0===e.length)return Promise.resolve();const r=e[0];return Promise.all(r.map((e=>e(t)))).then((()=>Ye(e.slice(1),t)))},Qe=(()=>{let e,t=!1,r=[],n=null;const o=a=>{if(!a.length)return;if(t)return n&&clearTimeout(n),void(n=setTimeout((()=>{o(r),n=null}),800));t=!0;const i=()=>{t=!1};((e,t)=>{const r=e.map((e=>e.map((e=>e.run))));return Ye(r,t)})(e,a).then(i).catch(i),r=[]},{run:a}=be(o),i=e=>{r.push(...e),a(r)},s=()=>{const e=(()=>{const e=g.join(","),t=h.map((e=>`[${e}]`)).join(","),r=`${e},${t}`;return[...document.body.querySelectorAll(`*:not(${r})`),document.documentElement].filter((e=>!e.closest(t))).map((e=>e))})();a([...e]),D((e=>{if(!e.data)return;const{data:{action:t,type:r}}=e;t===Te&&ke[r]&&ke[r]()})),U(i)};return{run:a,init:()=>__async(this,null,(function*(){if((()=>{var e;if((null==(e=window.location)?void 0:e.pathname.indexOf("wp-admin"))>-1)return!0;if(!(null==v?void 0:v.commonSettings))return!1;const{mobile:t,disabledPages:r}=v.commonSettings.config;return!(!O||!t||t.enabled)||!!(null==r?void 0:r.some((e=>{var t;return(null==(t=window.location)?void 0:t.href.indexOf(e))>-1})))})())return;const t=yield Promise.resolve().then((()=>$t));e=t.RulesGroups.map((e=>ze(e))),T.tech_rem_on_tab||s();const r=D((e=>{var t;(null==(t=null==e?void 0:e.data)?void 0:t.type)===x.KeyboardNavEnabled&&(s(),r())}))})),onDomUpdates:i}})();(()=>{__async(this,null,(function*(){var e;yield I();const t=null!=(e=T.tech_rem_in_throttle_ms)?e:500;setTimeout((()=>{Qe.init(),((e=M,t=k)=>{T.tech_rem_on_tab||W.observe(e,t);const r=D((n=>{var o;(null==(o=null==n?void 0:n.data)?void 0:o.type)===x.KeyboardNavEnabled&&(W.observe(e,t),r())}))})()}),t)}))})(),V.observe(X,$),(()=>{const e=H.find((e=>e.url.includes(window.location.origin)));e&&G(e.name)})();const Je=({currentSrc:e,src:t})=>e||t,et=(e,t)=>{try{const r=e.getAttribute("height"),n=e.getAttribute("width"),{width:o,height:a}=window.getComputedStyle(e);return parseInt(n||o,10)>t&&parseInt(r||a,10)>t}catch(r){return!1}},tt=(e,{decorative:t,approved:r,fixedByUserWay:n,loadingFromMS:o})=>{var a;return{src:Je(e),alt:e.alt,originalAlt:null!=(a=e.getAttribute($e))?a:"",decorative:t,approved:r,fixedByUserWay:n,loadingFromMS:o}},rt=e=>{e.setAttribute("role","presentation"),e.removeAttribute("aria-hidden"),e.setAttribute("alt","")},nt=e=>{if(!e)return"";try{const{hostname:t}=new URL(e);return t.replace(/^https?:\/\//,"").replace(/^www\./,"").replace(/\.[a-zA-Z0-9]*$/,"")}catch(t){return""}},ot=e=>{const t=Je(e);return He.test(t)},at=e=>{const t=e.trim();if(new RegExp(`\\.(${Ze.join("|")})$`,"i").test(t))return!0;if(t.length>500)return!0;if(!t)return!0;const r=t.split(/\s+/).length;if(/[0-9]{5,}/.test(t)&&1===r)return!0;return!!Fe.test(t)},{enabled:it,config:st}=(null==v?void 0:v.alt)||{enabled:!1,config:{}},lt=null==st?void 0:st.decorative,ct=(e,t="selectors")=>{if(!lt||!it)return!1;const r=lt[t];return!!Array.isArray(r)&&r.some((t=>e.matches(t)))},ut=(e,t)=>{const r=t.alt.trim(),n=Je(t),o=e.find((e=>p(e.src).toLowerCase()===p(n).toLowerCase()));if(!o||null===o.alt)return null;const{decorative:a,alt:i,approved:s,reverted:l}=o;if(l&&!a)return t.setAttribute(Ke,qe.Reverted),tt(t,{approved:!0,decorative:!r,fixedByUserWay:!1,loadingFromMS:!1});const c=!(!v||"AUTO"===v.strategy)&&!s;!a||c||ct(t,"ignoreSelectors")||rt(t);const u=s||!r||at(r);i&&!c&&u&&!a&&t.setAttribute("alt",i),t.setAttribute(Ke,qe.Backend);const d=tt(t,{approved:s,decorative:a,fixedByUserWay:!0,loadingFromMS:!1});return c&&(d.alt=i),d},dt=e=>{if("string"!=typeof e)return!1;for(const t of Object.values(Pe)){const r=new RegExp(t,"i");if(e.match(r))return!0}return!1},pt=e=>{const t=e.getAttribute("width"),r=e.getAttribute("height");if(t&&parseFloat(t)>0&&r&&parseFloat(r)>0)return!0;const{width:n,height:o}=window.getComputedStyle(e);try{if(0===parseFloat(n)&&0===parseFloat(o))return!1}catch(l){return!1}const a=/^\d*px?/i,i=a.test(n),s=a.test(o);return!(!i||!s)},mt=e=>{if(ct(e))return Ge.CUSTOM_CONFIG;const t=Je(e),r=at(e.alt),n=pt(e);var o;if(!(o=t)||!o.match(He)&&![/^https?:\/\/.{1,256}\.[a-z]{2,63}\/.+$/gim,/^https?:\/\/[^:\/\s]{1,256}:\d{1,5}\/.+$/gim].some((e=>e.test(o))))return Ge.WRONG_SRC;if(dt(t))return Ge.EXCLUDED_SRC;if(!!n&&!et(e,10)&&r)return Ge.MICRO_SIZE;if(!!n&&(e=>{try{const{width:t,height:r}=window.getComputedStyle(e),n=parseInt(t,10),o=parseInt(r,10);return!!(n<=20&&o>=10*n||o<=20&&n>=10*o)}catch(t){return!1}})(e))return Ge.ASPECT_RATIO;if(ot(e)&&r)return Ge.BASE64;if("true"===e.getAttribute("aria-hidden")||"presentation"===e.getAttribute("role")||"none"===e.getAttribute("role"))return Ge.HIDDEN_FROM_SCREEN_READER;if(je.test(t)&&r)return Ge.SVG;return!(!n||et(e,50))&&r?Ge.SMALL_SIZE:null},gt=e=>{switch(e){case Ge.ASPECT_RATIO:return qe.AspectRatio;case Ge.BASE64:return qe.Base64;case Ge.EXCLUDED_SRC:return qe.Excluded;case Ge.SVG:return qe.Svg;case Ge.MICRO_SIZE:return qe.Micro;case Ge.SMALL_SIZE:return qe.Small;case Ge.WRONG_SRC:return qe.InvalidSrc;case Ge.CUSTOM_CONFIG:return qe.CustomConfig;case Ge.HIDDEN_FROM_SCREEN_READER:default:return qe.Hidden}},ft=new Map,ht=(e,t)=>{const r=l(e);ft.set(r,t)},Et=e=>{const t=l(e);return ft.get(t)||null},bt=e=>((e,t,r,n)=>{const o=UserWayWidgetApp.getLib("remediation_manager"),a=UserWayWidgetApp.getLib("remediation_helper_outcome");if(!a.of)return;const i=a.of(e,{items:t},null,r,n);o.HelperCallbackAggregator.onHelperRemediationCompleted(i)})(Ve,e,e.filter((e=>e.fixedByUserWay)).length,e.filter((e=>!e.approved)).length),yt=e=>{e.hasAttribute($e)||e.setAttribute($e,e.alt)},At=(e,t=[])=>{if(0===e.length)return;const{paidAi:r}=_,n=[];for(const o of e){const e=o,a=at(e.alt),i=Je(e),s=Et(e),l=ct(e,"ignoreSelectors");yt(e),je.test(i)&&r&&e.setAttribute("role","img");const c=ut(t,e);if(c){n.push(c);continue}if(l){e.setAttribute(Ke,gt(Ge.CUSTOM_CONFIG));continue}if(!r)continue;const u=null==s?void 0:s.shouldBeDecorativeReason;if(!a&&!u){e.setAttribute(Ke,qe.CorrectAlt),n.push(tt(e,{approved:!0,decorative:!1,fixedByUserWay:!1}));continue}if(void 0!==u){rt(e),e.setAttribute(Ke,gt(u)),u&&Xe.includes(u)&&n.push(tt(e,{approved:!1,decorative:!0,fixedByUserWay:!0}));continue}const d=null==s?void 0:s.relevantText;if(d){e.setAttribute("alt",d),e.setAttribute(Ke,qe.ClosestText),n.push(tt(e,{approved:!1,decorative:!1,fixedByUserWay:!0}));continue}const{quota:p,usage:m}=N;m>=p?(e.setAttribute(Ke,qe.AIQuotaExceed),n.push(tt(e,{approved:!1,decorative:!1,fixedByUserWay:!0}))):(e.setAttribute(Ke,qe.AI),n.push(tt(e,{approved:!1,decorative:!1,fixedByUserWay:!0,loadingFromMS:!0})))}bt(n)},vt=e=>{const t=e.replace(/^https?:\/\//,"");return document.querySelectorAll(`img[src*="${t}" i],img[srcset*="${t}" i]`)},Tt=e=>__async(this,null,(function*(){const{account:t}=UserWayWidgetApp.ContextHolder.config,{siteId:r}=_,{resourceHash:n}=N,o=encodeURIComponent(e),a=yield fetch(`${S}api/img-dscr/v2/${t}/${r}/${n}/alts.json?dto=${o}`,{method:"GET",headers:{"Content-Type":"application/json"}});return(yield a.json()).payload})),_t=e=>{const t=`(.*\\.(${Ze.join("|")}))\\?.*$`,r=new RegExp(t),n=e.match(r);if(!n){const t=new URL(e),r=[];let n=!1;return t.searchParams.forEach(((e,t)=>{Ze.some((t=>e.endsWith(t)))?n=!0:r.push(t)})),n&&r.forEach((e=>t.searchParams.delete(e))),n?t.toString():e}return n&&n[1]?n[1]:e};var Nt=(e=>(e.RO="RO",e))(Nt||{});const Ot=(e,t)=>e.src.localeCompare(t.src),wt=(e,t=1)=>{if(t>=15)return console.warn("Max split level exceed"),[];const r=((e,t)=>{const r=Math.ceil(e.length/t),n=[];for(let o=0;o<e.length;o+=r)n.push(e.slice(o,o+r));return n})(e,t),n=[];for(const o of r){const r={sorted:o,tier:N.tier,pageUrl:window.location.href},a=JSON.stringify(r);if(encodeURIComponent(a).length/1024>8)return wt(e,t+1);n.push(a)}return n},Rt=e=>e?e.replace(/\n/g,"").replace(/ {2,}/g," ").trim():"",It=(e,t)=>{if(!e)return null;const r="next"===t.type?e.nextSibling:e.previousSibling;if((null==r?void 0:r.nodeType)===Node.TEXT_NODE){if(!Rt(r.nodeValue))return It(r,{type:t.type})}return r},Lt=e=>{const t=e.nodeType===Node.ELEMENT_NODE,r=e instanceof Element&&"hide"===e.getAttribute("data-uw-rm-heading");if(e.nodeType===Node.TEXT_NODE)return!0;if(t&&!r){const t=We.some((t=>t===e.nodeName.toLowerCase())),r=Be.some((t=>{var r;return t===(null==(r=e.getAttribute("role"))?void 0:r.toLowerCase())}));return t||r}return!1},St=Array.from(new Set([...We,"a","span","strong","em","b","i","q","mark"])),Ct=e=>{if((null==e?void 0:e.nodeType)===Node.TEXT_NODE){const t=Rt(e.nodeValue);if(t&&!at(t))return t}if((null==e?void 0:e.nodeType)===Node.ELEMENT_NODE&&St.includes(e.tagName.toLowerCase()))for(const t of e.childNodes){const e=Ct(t);if(e)return e}return null},xt=e=>{const t=e.nodeType===Node.ELEMENT_NODE,r=e.nodeType===Node.TEXT_NODE;if(!r&&!t)return!1;if(t&&"img"===e.nodeName.toLowerCase())return!0;if(r)return!!Rt(e.textContent);const n=We.some((t=>t===e.nodeName.toLowerCase())),o=Be.some((t=>{var r;return t===(null==(r=e.getAttribute("role"))?void 0:r.toLowerCase())}));return n||o};let Dt=0;const Mt=e=>{const t=e.parentElement;if(!t)return null;if(t.getElementsByTagName("img").length>1)return Dt=0,null;if(1===[].slice.call(t.childNodes).filter(xt).length)return Mt(t);const r=(e=>{let t=It(e,{type:"next"}),r=It(e,{type:"prev"}),n=null,o=null;for(;t||r;){t&&Lt(t)&&(n=Ct(t)),r&&Lt(r)&&(o=Ct(r));const e=n||o;if(e)return e;t=It(t,{type:"next"}),r=It(r,{type:"prev"})}return null})(e);return r?(Dt=0,r):(Dt+=1,"body"===t.tagName.toLowerCase()?(Dt=0,null):Dt<2?Mt(t):(Dt=0,null))},kt=e=>{const t=e.closest("figure");if(t){const e=Array.from(t.children).find((e=>"figcaption"===e.tagName.toLowerCase()));if(e){const t=Rt(e.textContent);if(t&&!at(t))return t}}const r=[].slice.call(e.classList).join(" "),n=e.id||"",o=(a=r+n).trim()&&Ue.find((e=>a.includes(e)))||null;var a;if(o)return o;const i=Mt(e);return i||null},Pt=(e,t)=>{if(!pt(e))return!1;const r=Je(e);return nt(r)!==t&&!et(e,20)},Ut=(e,t,r)=>{e.addEventListener("load",(()=>{t()})),e.addEventListener("error",(()=>{rt(e),e.setAttribute(Ke,qe.NotLoaded),r()}))};function Wt(e){return["data-lazy-src","data-src","data-lazy"].some((t=>e.hasAttribute(t)))}const Bt=e=>(t,r)=>{if(dt(e.src))return rt(e),e.setAttribute(Ke,qe.Excluded),void r(e);if((e=>e.complete&&0!==e.naturalHeight)(e))return void t(e);if("lazy"===e.loading||Wt(e))return void Ut(e,(()=>t(e)),(()=>r(e)));const n=new Image;Ut(n,(()=>t(e)),(()=>r(e))),n.src=e.src},Ht=[],jt=(e,t)=>{if(!N)return;const{state:r}=N;if("ALTS_OFF"===r)return;const n=(e=>{var t,r;const n=[];for(const o of e){const e=Je(o),t=nt(e);if(t){let e=n.find((e=>e.name===t));e||(e={name:t,weight:0},n.push(e)),e.weight+=1}}return null!=(r=null==(t=n.sort(((e,t)=>e.weight<t.weight?1:-1))[0])?void 0:t.name)?r:""})(e),o=[],a=[];for(const s of e){const e=s,t=Pt(e,n),r=mt(e),i=at(e.alt),l=r&&!Xe.includes(r)||t||ot(e)||ct(e,"ignoreSelectors"),c={};if(r&&(c.shouldBeDecorativeReason=r),l)a.push(e);else{if(i){const t=kt(e);t&&(c.relevantText=t)}o.push(e)}Object.keys(c).length&&ht(e,c)}try{const e=(e=>{const t=e,r=t.filter(((e,r)=>r===t.findIndex((t=>Je(e)===Je(t))))).map((e=>{const t=e,r=t.alt.trim(),n=r&&!at(r),o=Je(t),a=Et(t);return{src:_t(o),alt:t.alt.trim(),dir:n||mt(t)||(null==a?void 0:a.relevantText)?Nt.RO:void 0}}));return r.sort(Ot),r})(o),r=wt(e);if(r.length)for(const n of r)Tt(n).then((e=>{if(!e)return void t();const{missingAlts:r}=e,n=o.filter((e=>r.find((t=>p(t.src)===p(Je(e))))));At(n,r),t()})).catch((e=>{console.error("Get missing alts error: ",e),t()}));At(a),Ht.length=0,r.length||t()}catch(i){console.error(i)}},Ft=he(((e,t)=>jt(e,t)),1e3,{maxWait:2e3,leading:!1,trailing:!0}),Gt=[(({ruleId:e,isTargetElement:t,rule:r,postMessageApi:n,forceRun:o})=>(n&&D((e=>{const t=null==e?void 0:e.data;if(!t)return;const{type:r,action:o}=t;o!==C.Remediation&&o!==C.AriaEditor||n[r]&&n[r](t.data?t.data:t)})),{run:n=>__async(this,null,(function*(){try{if(!t)return void(yield r({context:{elements:n}}));const a=n.filter((r=>!r.hasAttribute(`uw-ignore-${e}`)&&t(r)));if(!a.length)return void(o&&(yield r({context:{elements:[]}})));yield r({context:{elements:a}})}catch(a){console.warn(a)}})),stop:()=>{},rerun:()=>{},ruleId:e}))({ruleId:Ve,rule:({context:{elements:e}})=>new Promise((t=>{const r=e.reduce(((e,t)=>t.getAttribute("src")||t.getAttribute("srcset")||Wt(t)?[...e,new Promise(Bt(t))]:(rt(t),t.setAttribute(Ke,qe.InvalidSrc),e)),[]);let n=0;const o=r.map((e=>e.then((e=>{Ht.push(e),Ft(Ht,t)})).catch((e=>{rt(e),e.setAttribute(Ke,qe.InvalidSrc),n++}))));Promise.all(o).then((()=>{r.length===n&&t()}))})),isTargetElement:e=>{const t="img"===e.tagName.toLowerCase(),r=e.hasAttribute(Ke);return!(!t||r)},postMessageApi:{"image-alt-update":({src:e,decorative:t,alt:r,role:n})=>{const o=vt(e);if(o.length){for(const e of o)e.setAttribute("alt",null!=r?r:""),t?rt(e):("presentation"!==e.getAttribute("role")&&"none"!==e.getAttribute("role")||e.removeAttribute("role"),e.hasAttribute("aria-hidden")&&e.removeAttribute("aria-hidden")),["link","button","heading"].includes(n)&&e.setAttribute("aria-label",r);bt([tt(o[0],{approved:!0,decorative:t,fixedByUserWay:!1})])}},"image-alt-revert":({src:e})=>{const t=vt(e);for(const r of t){const e=r.getAttribute($e);null!==e&&r.setAttribute("alt",e)}}}})],Xt=[Gt],$t=Object.freeze(Object.defineProperty({__proto__:null,RulesGroups:Xt,RulesListPhaseA:Gt},Symbol.toStringTag,{value:"Module"}))}();
