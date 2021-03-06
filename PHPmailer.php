<!doctype html>
<!-- Server: sfs-consume-4 -->
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VgQOV19AAQoJVlNT",licenseKey:"f516fac27e",applicationID:"999221"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(21),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(22),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),c.xhrWrappable&&t(10),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(9),s=t(8),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof x&&(this.bstStart=y.now())}),o.on(w,function(t,n){var e=t[0];e instanceof x&&i("bst",[e,n,this.bstStart,y.now()])}),a.on(m,function(t,n,e){this.bstStart=y.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,y.now(),this.bstType])}),s.on(m,function(){this.bstStart=y.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){function r(t,n,e){var r=t[n];"function"==typeof r&&(t[n]=function(){var t=i(arguments),n={};o.emit(e+"before-start",[t],n);var a;n[m]&&n[m].dt&&(a=n[m].dt);var s=r.apply(this,t);return o.emit(e+"start",[t,a],s),s.then(function(t){return o.emit(e+"end",[null,t],s),t},function(t){throw o.emit(e+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(22),a=t(21);n.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,l=s.Response,p=s.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,n){r(d[h],n,f),r(l[h],n,f)}),r(s,"fetch",c),o.on(c+"end",function(t,n){var e=this;if(n){var r=n.headers.get("content-length");null!==r&&(e.rxSize=r),o.emit(c+"done",[null,n],e)}else o.emit(c+"done",[t],e)}))},{}],7:[function(t,n,e){var r=t("ee").get("history"),o=t("wrap-function")(r);n.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,n,e){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],9:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],10:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",s)}function i(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];n.exports=u;var x=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,n,e){function r(t){if(!i(t))return null;var n=window.NREUM;if(!n.loader_config)return null;var e=(n.loader_config.accountID||"").toString()||null,r=(n.loader_config.agentID||"").toString()||null,s=(n.loader_config.trustKey||"").toString()||null;if(!e||!r)return null;var c=a.generateCatId(),f=a.generateCatId(),u=Date.now(),d=o(c,f,u,e,r,s);return{header:d,guid:c,traceId:f,timestamp:u}}function o(t,n,e,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:n,ti:e}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function i(t){var n=!1,e=!1,r={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(r=NREUM.init.distributed_tracing,e=!!r.enabled),e)if(t.sameOrigin)n=!0;else if(r.allowed_origins instanceof Array)for(var o=0;o<r.allowed_origins.length;o++){var i=s(r.allowed_origins[o]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){n=!0;break}}return e&&n}var a=t(19),s=t(13);n.exports={generateTracePayload:r,shouldGenerateTrace:i}},{}],12:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);n.aborted||(e.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==n.status&&(n.status=0):i(this,t),e.cbTime=this.cbTime,u.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime]))}}function o(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.parsedOrigin=c(n),t.sameOrigin=t.parsedOrigin.sameOrigin}function i(t,n){t.params.status=n.status;var e=w(n,t.lastSize);if(e&&(t.metrics.rxSize=e),t.sameOrigin){var r=n.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,n.loadCaptureCalled=!1,t.addEventListener("load",function(e){i(n,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var e=f(this.parsedOrigin);e&&e.header&&(n.setRequestHeader("newrelic",e.header),this.dt=e)}),u.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=m(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<l;s++)n.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),u.on("xhr-load-added",function(t,n){var e=""+p(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,n){var e=""+p(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],n)}),u.on("removeEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],n)}),u.on("fn-start",function(t,n,e){n instanceof v&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,n){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)}),u.on("fetch-before-start",function(t){var n,e=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url&&(n=t[0].url),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var r=f(this.parsedOrigin);if(r&&r.header){var o=r.header;if("string"==typeof t[0]){var i={};for(var a in e)i[a]=e[a];i.headers=new Headers(e.headers||{}),i.headers.set("newrelic",o),this.dt=r,t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&(t[0].headers.append("newrelic",o),this.dt=r)}})}},{}],13:[function(t,n,e){var r={};n.exports=function(t){if(t in r)return r[t];var n=document.createElement("a"),e=window.location,o={};n.href=t,o.port=n.port;var i=n.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=n.hostname||e.hostname,o.pathname=n.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!n.protocol||":"===n.protocol||n.protocol===e.protocol,s=n.hostname===document.domain&&n.port===e.port;return o.sameOrigin=a&&(!n.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],14:[function(t,n,e){function r(t,n){var e=t.responseType;return"json"===e&&null!==n?n:"arraybuffer"===e||"blob"===e||"json"===e?o(t.response):"text"===e||"document"===e||""===e||void 0===e?o(t.responseText):void 0}var o=t(16);n.exports=r},{}],15:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(21),s=t(22),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t,n){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,n])}},{}],16:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],17:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],18:[function(t,n,e){function r(t,n){var e=t.getEntries();e.forEach(function(t){"first-paint"===t.name?c("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&c("timing",["fcp",Math.floor(t.startTime)])})}function o(t,n){var e=t.getEntries();e.length>0&&c("lcp",[e[e.length-1]])}function i(t){if(t instanceof u&&!l){var n,e=Math.round(t.timeStamp);n=e>1e12?Date.now()-e:f.now()-e,l=!0,c("timing",["fi",e,{type:t.type,fid:n}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,s,c=t("handle"),f=t("loader"),u=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),s=new PerformanceObserver(o);try{a.observe({entryTypes:["paint"]}),s.observe({entryTypes:["largest-contentful-paint"]})}catch(d){}}if("addEventListener"in document){var l=!1,p=["click","keydown","mousedown","pointerdown","touchstart"];p.forEach(function(t){document.addEventListener(t,i,!1)})}}},{}],19:[function(t,n,e){function r(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(n=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(n=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}n.exports={generateUuid:r,generateCatId:o}},{}],20:[function(t,n,e){function r(t,n){if(!o)return!1;if(t!==o)return!1;if(!n)return!0;if(!i)return!1;for(var e=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==e[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}n.exports={agent:o,version:i,match:r}},{}],21:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],22:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],23:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=m(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([x,e,r,a]),a}}function p(t,n){g[t]=m(t).concat(n)}function h(t,n){var e=g[t];if(e)for(var r=0;r<e.length;r++)e[r]===n&&e.splice(r,1)}function m(t){return g[t]||[]}function w(t){return d[t]=d[t]||o(e)}function v(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var g={},y={},x={on:p,addEventListener:p,removeEventListener:h,emit:e,get:w,listeners:m,context:n,buffer:v,abort:a,aborted:!1};return x}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(21),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!E++){var t=b.info=NREUM.info,n=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=p.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(21),u=t("ee"),d=t(20),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1167.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:g,features:{},xhrWrappable:x,userAgent:d};t(15),t(18),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,O=t(23)},{}],"wrap-function":[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(22),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}]},{},["loader",2,12,4,3]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":1,"licenseKey":"f516fac27e","agent":"","transactionName":"MVRXZBQHCBZRV0wIDAgec0UIBRIMX1oXEgVIUlpeFRMLAB5XVw8XFF5ZXAMUFUtWXVQEEFx3XFwDLwgWRFVWAgYlXltEFAkKCVVGFg0CElRGRA==","applicationID":"999221","errorBeacon":"bam.nr-data.net","applicationTime":119}</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        
        
        <script  src="//a.fsdn.com/con/js/sftheme/cmp2.js?1584480249" ></script>
        



        <script>
            /*global unescape, window, SF*/
            // Setup our namespace
            if (!window.SF) { window.SF = {}; }
            if (!window.net) { window.net = {}; }
            if (!window.net.sf) { window.net.sf = {}; }
            SF.Ads = {};
            SF.cdn = '//a.fsdn.com/con';
            SF.deploy_time = '1584480249';
            SF.sandiego = true;
            SF.sandiego_chrome = true;
            
            SF.Breakpoints = {
              small: 0,
              medium: 640,
              leaderboard: 743,
              billboard: 985,
              large: 1053,
              xlarge: 1295,
              xxlarge: 1366
            };
            SF.initial_breakpoints_visible = {};
            for (var bp in SF.Breakpoints) {
                if (!SF.Breakpoints.hasOwnProperty(bp)) {
                    continue;
                }
                SF.initial_breakpoints_visible[bp] = !window.matchMedia || window.matchMedia('(min-width: ' + SF.Breakpoints[bp] + 'px)').matches;
            }
            SF.Ads.viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            SF.Ads.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        </script><script>

            SF.Ads.prebidOptions = {
                showIndicators: false,
                analytics: false,
                timeout: 650,
                timeouts_by_bids: {650: 3, 2000: 1, 3000: 0},
                
            };

            SF.Ads.prebidUnits = [];if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "364668"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "728x90", "ct": "472239"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "position": "atf", "sizes": [2], "accountId": "15680", "zoneId": "486002"}, "bidder": "rubicon"},
                            {"params": {"placementId": 9265096}, "bidder": "appnexus"},
                            {"params": {"placement": 4224517, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 178263, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12120069}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1392148432591-0',
                    tag: 'SF_Temp5_728x90_A',
                    mediaTypes: { banner: { sizes: [] } }
                }; 
                if (SF.Ads.viewportWidth >= 728 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728, 90]];
                } 
                if (SF.Ads.viewportWidth >= 970 && SF.Ads.viewportHeight >= 901){
                    thisUnit.mediaTypes.banner.sizes = [[728, 90], [970, 250]];
                }

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "542316"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "320x50", "ct": "630563"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "position": "atf", "sizes": [43], "accountId": "15680", "zoneId": "610848"}, "bidder": "rubicon"},
                            {"params": {"placementId": 12559081}, "bidder": "appnexus"},
                            {"params": {"placement": 4738794, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 189802, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12558822}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1512154506943-0',
                    tag: 'SF_Mobile_320x50_A',
                    mediaTypes: { banner: { sizes: [[320, 50]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "364669"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "728x90", "ct": "472240"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "sizes": [2], "accountId": "15680", "zoneId": "486004"}, "bidder": "rubicon"},
                            {"params": {"placementId": 9265097}, "bidder": "appnexus"},
                            {"params": {"placement": 4225352, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 178264, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12120070}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1392148432592-0',
                    tag: 'SF_Temp5_728x90_B',
                    mediaTypes: { banner: { sizes: [] } }
                }; 
                if (SF.Ads.viewportWidth >= 728 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728, 90]];
                } 
                if (SF.Ads.viewportWidth >= 1280 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728, 90], [970, 250]];
                }

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "364665"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "300x250", "ct": "472236"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "position": "atf", "sizes": [15, 10], "accountId": "15680", "zoneId": "486002"}, "bidder": "rubicon"},
                            {"params": {"placementId": 9265099}, "bidder": "appnexus"},
                            {"params": {"placement": 4224515, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 178259, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12120065}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1392148432593-0',
                    tag: 'SF_Temp5_300x250_A',
                    mediaTypes: { banner: { sizes: [[300, 250], [300, 600]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "364666"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "300x250", "ct": "472237"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "sizes": [15], "accountId": "15680", "zoneId": "486004"}, "bidder": "rubicon"},
                            {"params": {"placementId": 9265101}, "bidder": "appnexus"},
                            {"params": {"placement": 4224506, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 178261, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12120067}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1392148432594-0',
                    tag: 'SF_Temp5_300x250_B',
                    mediaTypes: { banner: { sizes: [[300, 250]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "364667"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "300x250", "ct": "472238"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "sizes": [15], "accountId": "15680", "zoneId": "486004"}, "bidder": "rubicon"},
                            {"params": {"placementId": 9265102}, "bidder": "appnexus"},
                            {"params": {"placement": 4224516, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 178262, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12120068}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1392148432598-0',
                    tag: 'SF_Temp5_300x250_C',
                    mediaTypes: { banner: { sizes: [[300, 250]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "542317"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "300x250", "ct": "627928"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "sizes": [43], "accountId": "15680", "zoneId": "798260"}, "bidder": "rubicon"},
                            {"params": {"placementId": 12559084}, "bidder": "appnexus"},
                            {"params": {"placement": 4738792, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 189801, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12558816}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1512154653435-0',
                    tag: 'SF_Mobile_Multi_B',
                    mediaTypes: { banner: { sizes: [[300, 50], [300, 250], [320, 50], [320, 100]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"params": {"tagid": "542318"}, "bidder": "sovrn"},
                            {"params": {"cp": 558092, "cf": "300x250", "ct": "627932"}, "bidder": "pulsepoint"},
                            {"params": {"siteId": "103240", "sizes": [43], "accountId": "15680", "zoneId": "798260"}, "bidder": "rubicon"},
                            {"params": {"placementId": 12559087}, "bidder": "appnexus"},
                            {"params": {"placement": 4738791, "network": "10676.1"}, "bidder": "aol"},
                            {"params": {"dmxid": 189800, "memberid": "101054"}, "bidder": "districtmDMX"},
                            {"params": {"placementId": 12558815}, "bidder": "districtm"},
                            ],
                    code: 'div-gpt-ad-1512154755912-0',
                    tag: 'SF_Mobile_Multi_C',
                    mediaTypes: { banner: { sizes: [[300, 50], [300, 250], [320, 50], [320, 100]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            SF.Ads.prebidAdjustments = {"bidder_deflations": {"rubiconlite": 1, "komoona": 0.92, "onefiftytwo": 0.9, "indexexchange": 0.95, "sovrn": 0.94, "aardvark": 1, "aol": 0.98, "brealtime": 0.98, "districtm": 1, "oftmedia": 0.9, "emxdigital": 1, "pulsepoint": 0.93, "rubicon": 1.1, "indexex#hange": 0.98, "springserve": 0.001, "districtmdmx": 1, "appnexus": 1, "rhythmone": 0.85}, "inflation": 1.18, "floor": 0.02};
        </script>
        <script id="pbjs_script" data-dom="https://d3tglifpd8whs6.cloudfront.net"  src="//a.fsdn.com/con/js/sftheme/vendor/bizx-prebid.js?1584480249" ></script>
        <script>
            bizx.cmp.ifConsent('all', 'all', function(){
                SF.Ads.disallowPersonalization = 0;
            }, function(){
                SF.Ads.disallowPersonalization = 1;
            }, function () {
                if (window.bizxPrebid){
                    window.bizxPrebid.Ads.initPrebid(window.bizxPrebid.adUnits);
                }
            });
        </script>
        
        <link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
        
        <link rel="stylesheet" href="//a.fsdn.com/con/css/sandiego.css?1584480249">
        

        
        
        <meta id="project_name" name="project_name" content="phpmailer">

        
        <meta name="description" content="A full-featured email creation and transfer class for PHP">
        <meta name="keywords" content=" Open Source, Open Source Software, Development, Community, Source Code, Secure,  Downloads, Free Software">
<noscript>
    <meta http-equiv="refresh" content="5; url=https://downloads.sourceforge.net/project/phpmailer/phpmailer-fe/PHPMailer-FE%20v4.11/PHPMailer-FE_v4.11.zip?r=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fphpmailer%2F&amp;ts=1584539053&amp;use_mirror=excellmedia">
</noscript>

        <title>Download PHPMailer from SourceForge.net</title>
        <link rel="icon" sizes="180x180" href="//a.fsdn.com/con/img/sandiego/logo-180x180.png" type="image/png">
<link rel="icon" sizes="any" href="//a.fsdn.com/con/img/sandiego/svg/originals/sf-icon-orange-no_sf.svg" type="image/svg+xml">
<link rel="apple-touch-icon" sizes="180x180" href="//a.fsdn.com/con/img/sandiego/logo-180x180.png">
<link rel="mask-icon" href="//a.fsdn.com/con/img/sandiego/svg/originals/sf-icon-orange-no_sf.svg" color="#FF6600">
    
        <link rel="canonical" href="https://sourceforge.net/projects/phpmailer/">
    
        
        <script>
            /*global unescape, window, console, jQuery, $, net, SF, DD_belatedPNG, ga */
            if (!window.SF) {
                window.SF = {};
            }
        </script>

        <script>
            SF.EU_country_codes = ["BE", "FR", "BG", "DK", "VG", "WF", "HR", "BM", "DE", "HU", "JE", "FI", "FK", "YT", "NL", "PT", "CW", "NC", "LV", "RE", "LT", "LU", "PF", "GI", "TF", "RO", "PN", "TC", "PL", "PM", "GS", "GR", "GP", "EE", "IT", "GG", "CZ", "CY", "SX", "IO", "AT", "AW", "AX", "GL", "IE", "KY", "ES", "ME", "MF", "BL", "GF", "SK", "MT", "SI", "SH", "MQ", "MS", "AI", "SE", "GB"];
            SF.unknown_country_codes = ["", "A1", "A2", "O1"];
        </script>
        
<script src="//a.fsdn.com/con/js/min/sf.sandiego-head.js?1584480249"></script>



        <style>.nf5d04a8cc45230d632e9895fc20bd60897ac891f { display: none !important; }</style>
    <link rel="alternate" type="application/rss+xml" title="PHPMailer&#8230;Recent Activity" href="/p/phpmailer/activity/feed" />
    


        
<script>
    SF.adblock = true;
</script><script>
       /*global Foundation */
           /*global googletag, bizxPrebid */
            SF.Ads.gptExpected();
       var gptadslots=[];
       var gptadHandlers={};
       var gptadRenderers=[];
       var gptadComplements={};
       SF.Ads.slotsById = {};
       SF.Ads.idsByPath = {};

       googletag.cmd.push(function() {
           var leaderboard = googletag.sizeMapping()
               .addSize([970, 901], [[728, 90], [970, 250]])
               .addSize([728, 200], [[728, 90]])
               .build();
           var leaderboardInContent = googletag.sizeMapping()
               .addSize([1280, 200], [[728, 90], [970, 250]])
               .addSize([728, 200], [[728, 90]])
               .build();

            //prebid_log('GPT push define slots and targeting');
            googletag.pubads()
               .setForceSafeFrame(true)
               .setTargeting('usingSafeFrame','1')
               .setSafeFrameConfig({
                    allowOverlayExpansion: true,
                    allowPushExpansion: true,
                    sandbox: true
            });

            var thisSlot;
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_728x90_A',[],'div-gpt-ad-1392148432591-0')
                                                    .defineSizeMapping( leaderboard )
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            gptadComplements['/41014381/Sourceforge/SF_Temp5_728x90_A'] = ["SF_Temp5_HubIcon_200x90_A", ["728x90"]] ;
            SF.Ads.slotsById['div-gpt-ad-1392148432591-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Temp5_728x90_A'] = 'div-gpt-ad-1392148432591-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_HubIcon_200x90_A',[200, 90],'div-gpt-ad-1324209358854-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"200x90")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1324209358854-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Temp5_HubIcon_200x90_A'] = 'div-gpt-ad-1324209358854-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_320x50_A',[320, 50],'div-gpt-ad-1512154506943-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"320x50")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1512154506943-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Mobile_320x50_A'] = 'div-gpt-ad-1512154506943-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_728x90_B',[],'div-gpt-ad-1392148432592-0')
                                                    .defineSizeMapping( leaderboardInContent )
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1392148432592-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Temp5_728x90_B'] = 'div-gpt-ad-1392148432592-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_300x250_A',[[300, 250], [300, 600]],'div-gpt-ad-1392148432593-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"300x250,300x600")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1392148432593-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Temp5_300x250_A'] = 'div-gpt-ad-1392148432593-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_300x250_B',[300, 250],'div-gpt-ad-1392148432594-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"300x250")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1392148432594-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Temp5_300x250_B'] = 'div-gpt-ad-1392148432594-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_300x250_C',[300, 250],'div-gpt-ad-1392148432598-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"300x250")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1392148432598-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Temp5_300x250_C'] = 'div-gpt-ad-1392148432598-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_Multi_B',[[300, 50], [300, 250], [320, 50], [320, 100]],'div-gpt-ad-1512154653435-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"300x50,300x250,320x50,320x100")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1512154653435-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Mobile_Multi_B'] = 'div-gpt-ad-1512154653435-0';
            thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_Multi_C',[[300, 50], [300, 250], [320, 50], [320, 100]],'div-gpt-ad-1512154755912-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('shortname',"phpmailer")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/phpmailer/files/latest/download")
                                                        .setTargeting('sz',"300x50,300x250,320x50,320x100")
                                                        .setTargeting('page_type',"pg_download");
            gptadslots.push(thisSlot);
            SF.Ads.slotsById['div-gpt-ad-1512154755912-0'] = thisSlot;
            SF.Ads.idsByPath['/41014381/Sourceforge/SF_Mobile_Multi_C'] = 'div-gpt-ad-1512154755912-0';   
            

            googletag.pubads().setRequestNonPersonalizedAds(SF.Ads.disallowPersonalization);

            googletag.pubads().setTargeting('requestSource', 'GPT');
            googletag.pubads().enableAsyncRendering();

            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().addEventListener('slotOnload', function(event) {
                SF.Ads.Helpers.getSizeAndSetClass.call(this, event);
            });
            googletag.pubads().addEventListener('slotRenderEnded', function(event) {
                var unitName = event.slot.getAdUnitPath();
                if ( unitName in gptadHandlers ) {
                   for (var i = 0; i < gptadHandlers[unitName].length; i++) {
                       try {
                           SF.Ads.RenderHandlers[gptadHandlers[unitName][i]].call(this, event);
                       } catch (e) {
                       }
                   }
                }

                SF.Ads.RenderHandlers.decorateSizeDelivered.call(this, event);
                if (unitName in gptadComplements) {
                    if (gptadComplements[unitName][1].indexOf(SF.Ads.Helpers.getSizeDelivered(event)) >=0) {
                        gptadRenderers[gptadComplements[unitName][0]].call();
                    }
                }
                if(SF.Ads.scrollFixable) {
                    SF.Ads.scrollFixable.scrollRelocate();
                }
            });
            googletag.pubads().addEventListener('slotVisibilityChanged', SF.Ads.visibilityChangedTracker);
            SF.Ads.setupAdRefresh();
            googletag.pubads().addEventListener('impressionViewable', SF.Ads.RenderHandlers.viewabilityInstrumentation);
            
            googletag.pubads().addEventListener('slotRenderEnded', SF.Ads.listenerForBlockThis);
            bizxPrebid.Ads.pushToGoogle();

            googletag.enableServices();
        });
   </script> 

        

        
<!-- CCM Tag -->
<script>
  (function () {
      bizx.cmp.ifConsent('all', 'all', function () {
          /*global _ml:true, window */
          _ml = window._ml || {};
          _ml.eid = '771';

          var s = document.getElementsByTagName('script')[0], cd = new Date(), mltag = document.createElement('script');
          mltag.type = 'text/javascript';
          mltag.async = true;
          mltag.src = '//ml314.com/tag.aspx?' + cd.getDate() + cd.getMonth() + cd.getFullYear();
          s.parentNode.insertBefore(mltag, s);
      });
  })();
</script>
<!-- End CCM Tag -->

        
    <script src="//a.fsdn.com/con/js/adframe.js?1584480249"></script>

    
    <script>

        /*jshint ignore:start*/
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() {
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        /*jshint ignore:end*/

        //var $ = jQuery.noConflict(); // jshint ignore:line
    </script>
    <script>
        SF.devicePixelRatio = Math.round(window.getDevicePixelRatio()*10)/10;
            ga('create', "UA-36130941-1", {
                'name': 'sfnt1', 'sampleRate': 9});
            
                /*global _ml:true */
                if (typeof _ml !== 'undefined' && _ml.us) {
                    if (_ml.us.tp && _ml.us.tp.length > 0) {
                        ga('sfnt1.set', 'dimension2', _ml.us.tp[0]);
                    }
                    if (_ml.us.pc && _ml.us.pc.length > 0) {
                        ga('sfnt1.set', 'dimension7', _ml.us.pc[0]);
                    }
                    ga('sfnt1.set', 'dimension3', _ml.us.ind);
                    ga('sfnt1.set', 'dimension4', _ml.us.cr);
                    ga('sfnt1.set', 'dimension5', _ml.us.cs);
                    ga('sfnt1.set', 'dimension6', _ml.us.dm);
                    ga('sfnt1.set', 'dimension8', _ml.us.sn);
                }

                
                    ga('sfnt1.set', 'dimension9', 'phpmailer');
                    ga('sfnt1.set', 'dimension10', 'pg_dwnld');
                    ga('sfnt1.set', 'dimension11','/phpmailer-fe/PHPMailer-FE v4.11/PHPMailer-FE_v4.11.zip');
                    
                        
                    ga('sfnt1.set', 'dimension13', 'Logged Out');
                    ga('sfnt1.set', 'dimension14', 'No');  
                    
                    ga('sfnt1.set', 'dimension16', 'sync');
                    ga('sfnt1.set', 'dimension17', SF.devicePixelRatio);
            ga('sfnt1.send', 'pageview');
        

        
    </script>
    
    <script>
        /* globals bizx */
        function initPiwik(){
            var _paq = window._paq = window._paq || [];
            _paq.push(['trackPageView', document.title, {
                    dimension1: 'phpmailer',
                dimension2: 'pg_dwnld',
                dimension3: SF.devicePixelRatio,
                
            }]);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//analytics.slashdotmedia.com/";
                _paq.push(['setTrackerUrl', u+'sf.php']);
                _paq.push(['setSiteId', 39]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'sf.js'; s.parentNode.insertBefore(g,s);
            })();
        }
        bizx.cmp.ifConsent('publisher', ['storage', 'measurement'], initPiwik);
    </script>
<script>
    SF.ShowProgressBar = true;
</script>





        <script> try{(function(){ var cb = new Date().getTime(); var s = document.createElement("script"); s.defer = true; s.src = "//tag.crsspxl.com/s1.js?d=2396&cb="+cb; var s0 = document.getElementsByTagName('script')[0]; s0.parentNode.insertBefore(s, s0); })();}catch(e){} </script>


        

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "WebSite",
                "name": "SourceForge",
                "url": "https://sourceforge.net/"
            }
        </script>
    </head>
    <body id="pg_dwnld"
          class="  anonymous has-ads no-cmp sandiego ">
        

        <div id="busy-spinner"></div>
        
        
<div id="messages">
</div>


        <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
    <!-- Menu -->
    <ul class="header-nav-menulist">
        <li class="highlight search">
            <form method="get" action="/directory/">
    
        <input type="text" placeholder="Search for software or solutions" autocomplete="off" name="q" >
        
        <label>
        <input type="submit" class="bt" value="">
            

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
        </label>
    
    </form>
        </li>
        
        <li class="highlight"><a href="https://sourceforge.net/auth/">Join/Login</a></li>
        
        <li><a href="/directory/">Open Source Software</a></li>
        <li><a href="/software/">Business Software</a></li>
        <li><a href="/blog" title="Blog">Blog</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/support">Help</a></li>
        <li class="social row">
            <span class="social-label">Connect</span>
            <span class="social-icons">
                
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
<a href="/user/newsletters" rel=nofollow class="newsletter" title="Subscribe to our newsletter">

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve"><path fill="#FFFFFF" d="M0,6v30h42V6H0z M24.2,21.2c-0.8,0.8-2.3,2-3.2,2c-0.9,0-2.4-1.2-3.2-2L5.8,9.7h30.3L24.2,21.2z M13.7,21l-9.9,9.4V11.6L13.7,21z M15.7,23L15.7,23c0.5,0.5,2.9,2.9,5.3,2.9c2.4,0,4.8-2.4,5.2-2.8l0.1-0.1l9.8,9.4H5.8L15.7,23z M28.3,21l9.9-9.5v18.9L28.3,21z"/></svg></a>
<span></span>
            </span>
        </li>
        <li><a href="https://slashdotmedia.com/privacy-statement/" rel="nofollow">Privacy</a></li>
        <li><a id="header-nav-more" data-toggle="header-nav-more header-nav-more-content" data-toggler=".toggled">More</a></li>
        <li>
            <ul id="header-nav-more-content" class="toggled" data-toggler=".toggled">
                

    

    
    
    
        <li><a href="/articles/">Articles</a></li>
    
    
        <li><a href="/business-voip/">Business VoIP</a></li>
    
    
    
        <li><a href="/speedtest/">Internet Speed Test</a></li>
    

    
 
                
                <li><a href="/create">Create</a></li>
                
                <li><a href="/top">Top Downloaded Projects</a></li>
                <li><a href="https://deals.sourceforge.net/?utm_source=sourceforge&utm_medium=navbar&utm_campaign=homepage">Deals</a></li>
                <li><a href="/blog/category/sitestatus/">Site Status</a></li>
                <li><a href="https://twitter.com/sfnet_ops" rel="nofollow">@sfnet_ops</a></li>
                <li><a href="https://twitter.com/sourceforge" rel="nofollow">@sourceforge</a></li>
                <li><a href="https://p.sf.net/sourceforge/docs">Site Documentation</a></li>
                <li><a href="/support">Support Request</a></li>
                <li><a href="https://slashdotmedia.com/terms-of-use/" rel="nofollow">Terms</a></li>
                <li><a href="https://slashdotmedia.com/opt-out-choices/" rel="nofollow">Opt Out</a></li>
                <li><a href="https://slashdotmedia.com/" rel="nofollow">Advertise</a></li>
            </ul>
        </li>
    </ul>
</div>

        <div class="off-canvas-content" data-off-canvas-content>
            
            
<script>
    SF.linkout_icon = '<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><polygon class="st0" points="243.2,243.2 56.8,243.2 56.8,56.8 123,56.8 123,9 9,9 9,291 291,291 291,179.4 243.2,179 "/><polygon class="st0" points="128.5,213 155,186.5 176,165.5 206.7,196.3 235.5,132.5 248.9,102.6 290.6,9.8 291,9 290.6,9.2 197.4,51.1 169.1,63.8 103.7,93.3 137,126.5 115.9,147.5 89.5,174 "/></svg>';
</script>


    <section class="sandiego l-header-nav-top show-for-large">
        <div class="row">
            <a href="/" title="Home" class="sf-logo">
                

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
            </a>
            <nav class="links">

                <a href="/support" title="Help">Help</a>
                
                <a href="/create" title="Create">Create</a>
                

                
                <a href="/user/registration/" title="Join" >Join</a>
                <a href="https://sourceforge.net/auth/" title="Login">Login</a>
                
            </nav>
        </div>
    </section>

<div class="l-header-nav sticky sandiego l-header-nav-collapse">

    <section class="sandiego l-header-nav-top hide-for-large">
        <div class="row">
            <a href="/" title="Home" class="sf-logo">
                

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
            </a>
            <div class="title-bar-right">
                <button type="button" class="menu-icon" data-toggle="offCanvas"></button>
            </div>
        </div>
    </section>
    <section class="sandiego l-header-nav-bottom">
        <nav class="row">
            <a href="/" title="Home" class="sf-logo">
                

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
            </a>
            <div class="links">
                

    
        <div class="nav-dropdown">
            <a href="/directory/" title="Browse">Open Source Software</a>

            <ul class="nav-dropdown-menu">
                <li><a href="/directory/business-enterprise/financial/accounting/">Accounting</a></li>
                <li><a href="/directory/business-enterprise/enterprise/crm/">CRM</a></li>
                <li><a href="/directory/business-enterprise/enterprise/enterprisebi/">Business Intelligence</a></li>
                <li><a href="/directory/graphics/graphics/3dmodeling/">CAD</a></li>
                <li><a href="/directory/business-enterprise/enterprise/plm/">PLM</a></li>
                <li><a href="/directory/business-enterprise/enterprise/processmanagement/">BPM</a></li>
                <li><a href="/directory/business-enterprise/project-management/">Project Management</a></li>
                <li><a href="/directory/business-enterprise/knowledgemanagement/">Knowledge Management</a></li>
                <li><a href="/directory/development/">Development</a></li>
                <li><a href="/directory/business-enterprise/enterprise/sales/">Sales</a></li>
                <li><a href="/directory/business-enterprise/ecommerce/">E-Commerce</a></li>
                <li><a href="/directory/business-enterprise/enterprise/erp/">ERP</a></li>
                <li><a href="/directory/business-enterprise/enterprise/humanresources/">HR</a></li>
                <li><a href="/directory/system-administration/">IT Management</a></li>
                <li><a href="/directory/security-utilities/">IT Security</a></li>
                <li><a href="/directory/business-enterprise/suites/">Office</a></li>
                <li><a href="/directory/science-engineering/">Science & Engineering</a></li>
                <li><a href="/directory/games/games/">Games</a></li>
                <li><a href="/directory/">All Software</a></li>
            </ul>
        </div>

        <div class="nav-dropdown">
            <a href="/software/">Business Software</a>
            <ul class="nav-dropdown-menu  dropdown-with-pane">
                
                <li class="pane-parent">
                    <a href="/software/crm/">CRM</a>
                    <div class="sub-pane">
                        
                        <div class="heading">CRM</div>
                        

                        
                            <a href="/software/crm/">CRM</a>
                        
                            <a href="/software/customer-service/">Customer Service</a>
                        
                            <a href="/software/customer-experience/">Customer Experience</a>
                        
                            <a href="/software/point-of-sale/">Point of Sale</a>
                        
                            <a href="/software/lead-management/">Lead Management</a>
                        
                            <a href="/software/event-management/">Event Management</a>
                        
                            <a href="/software/survey/">Survey</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/finance/">Finance</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Finance</div>
                        

                        
                            <a href="/software/accounting/">Accounting</a>
                        
                            <a href="/software/billing-and-invoicing/">Billing and Invoicing</a>
                        
                            <a href="/software/budgeting/">Budgeting</a>
                        
                            <a href="/software/payment-processing/">Payment Processing</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/business-intelligence/">Analytics</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Analytics</div>
                        

                        
                            <a href="/software/big-data/">Big Data</a>
                        
                            <a href="/software/business-intelligence/">Business Intelligence</a>
                        
                            <a href="/software/predictive-analytics/">Predictive Analytics</a>
                        
                            <a href="/software/reporting/">Reporting</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/collaboration/">Collaboration</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Collaboration</div>
                        

                        
                            <a href="/software/collaboration/">Team Collaboration</a>
                        
                            <a href="/software/idea-management/">Idea Management</a>
                        
                            <a href="/software/web-conferencing/">Web Conferencing</a>
                        
                            <a href="/software/employee-communication-tools/">Employee Communication Tools</a>
                        
                            <a href="/software/screen-sharing/">Screen Sharing</a>
                        
                            <a href="/software/cad/">CAD</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/communications/">Communications</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Communications</div>
                        

                        
                            <a href="/software/call-center/">Call Center</a>
                        
                            <a href="/software/call-recording/">Call Recording</a>
                        
                            <a href="/software/call-tracking/">Call Tracking</a>
                        
                            <a href="/software/ivr/">IVR</a>
                        
                            <a href="/software/predictive-dialer/">Predictive Dialer</a>
                        
                            <a href="/software/telephony/">Telephony</a>
                        
                            <a href="/software/voip/">VoIP</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/marketing/">Marketing</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Marketing</div>
                        

                        
                            <a href="/software/brand-management/">Brand Management</a>
                        
                            <a href="/software/campaign-management/">Campaign Management</a>
                        
                            <a href="/software/digital-asset-management/">Digital Asset Management</a>
                        
                            <a href="/software/email-marketing/">Email Marketing</a>
                        
                            <a href="/software/lead-generation/">Lead Generation</a>
                        
                            <a href="/software/marketing-automation/">Marketing Automation</a>
                        
                            <a href="/software/seo/">SEO</a>
                        
                            <a href="/software/digital-signage/">Digital Signage</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/erp/">ERP</a>
                    <div class="sub-pane">
                        
                        <div class="heading">ERP</div>
                        

                        
                            <a href="/software/erp/">ERP</a>
                        
                            <a href="/software/product-lifecycle-management/">PLM</a>
                        
                            <a href="/software/business-process-management/">Business Process Management</a>
                        
                            <a href="/software/ehs-management/">EHS Management</a>
                        
                            <a href="/software/supply-chain-management/">Supply Chain Management</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/human-resources/">HR</a>
                    <div class="sub-pane">
                        
                        <div class="heading">HR</div>
                        

                        
                            <a href="/software/360-degree-feedback/">360 Degree Feedback</a>
                        
                            <a href="/software/human-resources/">Human Resource Management</a>
                        
                            <a href="/software/employee-engagement/">Employee Engagement</a>
                        
                            <a href="/software/applicant-tracking/">Applicant Tracking</a>
                        
                            <a href="/software/time-clock/">Time Clock</a>
                        
                            <a href="/software/workforce-management/">Workforce Management</a>
                        
                            <a href="/software/recruiting/">Recruiting</a>
                        
                            <a href="/software/performance-appraisal/">Performance Appraisal</a>
                        
                            <a href="/software/training/">Training</a>
                        
                            <a href="/software/learning-management-system/">LMS</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/it-management/">IT Management</a>
                    <div class="sub-pane">
                        
                        <div class="heading">IT Management</div>
                        

                        
                            <a href="/software/application-performance-management/">Application Performance Management</a>
                        
                            <a href="/software/it-asset-management/">IT Asset Management</a>
                        
                            <a href="/software/database-management/">Database Management</a>
                        
                            <a href="/software/network-monitoring/">Network Monitoring</a>
                        
                            <a href="/software/help-desk/">Help Desk</a>
                        
                            <a href="/software/issue-tracking/">Issue Tracking</a>
                        
                            <a href="/software/devops/">DevOps</a>
                        
                            <a href="/software/compliance/">Compliance</a>
                        
                            <a href="/software/remote-desktop/">Remote Desktop</a>
                        
                            <a href="/software/remote-support/">Remote Support</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/it-security/">Security</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Security</div>
                        

                        
                            <a href="/software/it-security/">IT Security</a>
                        
                            <a href="/software/endpoint-protection/">Endpoint Protection</a>
                        
                            <a href="/software/identity-management/">Identity Management</a>
                        
                            <a href="/software/network-security/">Network Security</a>
                        
                            <a href="/software/email-security/">Email Security</a>
                        
                            <a href="/software/risk-management/">Risk Management</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/project-management/">Project Management</a>
                    <div class="sub-pane">
                        
                        <div class="heading">Project Management</div>
                        

                        
                            <a href="/software/project-management/">Project Management</a>
                        
                            <a href="/software/content-management/">Content Management System (CMS)</a>
                        
                            <a href="/software/task-management/">Task Management</a>
                        
                            <a href="/software/project-portfolio-management/">Project Portfolio Management</a>
                        
                            <a href="/software/time-tracking/">Time Tracking</a>
                        
                            <a href="/software/pdf/">PDF</a>
                        

                    </div>
                </li>
                
                 <li>
                    <a href="/software/">All Software</a>
                 </li>
            </ul>
        </div>

        <div class="nav-dropdown">
            <a href="#">Services</a>
            <ul class="nav-dropdown-menu">
                
                <li><a href="/business-voip/">Business VoIP</a></li>
                

                
                <li><a href="/speedtest/">Internet Speed Test</a></li>
                

            </ul>
        </div>

        <div class="nav-dropdown">
            <a href="#">Resources</a>
            <ul class="nav-dropdown-menu">
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/articles">Articles</a></li>
                  <li><a href="https://deals.sourceforge.net/?utm_source=sourceforge&utm_medium=navbar&utm_campaign=homepage">Deals</a></li>
            </ul>
        </div>
    

                <div class="dev-menu-when-stuck">
                    Menu
                    <ul class="dev-menu-dropdown header-nav-menulist">
                        <li><a href="/support">Help</a></li>
                        <li><a href="/create">Create</a></li>
                        <li><a href="/user/registration/" title="Join" >Join</a></li>
                        <li><a href="https://sourceforge.net/auth/" title="Login">Login</a></li>
                    </ul>
                </div>
                <div class="search-toggle-when-stuck">
                    <a class="search-toggle">
                        

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
                    </a>
                </div>
            </div>

            <div class="search">
                <div class="social-icons">
                    
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
<a href="/user/newsletters" rel=nofollow class="newsletter" title="Subscribe to our newsletter">

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve"><path fill="#FFFFFF" d="M0,6v30h42V6H0z M24.2,21.2c-0.8,0.8-2.3,2-3.2,2c-0.9,0-2.4-1.2-3.2-2L5.8,9.7h30.3L24.2,21.2z M13.7,21l-9.9,9.4V11.6L13.7,21z M15.7,23L15.7,23c0.5,0.5,2.9,2.9,5.3,2.9c2.4,0,4.8-2.4,5.2-2.8l0.1-0.1l9.8,9.4H5.8L15.7,23z M28.3,21l9.9-9.5v18.9L28.3,21z"/></svg></a>
<span></span>
                </div>
                
                    
                
                <form method="get" action="/directory/">
    
    <div class="typeahead__container">
      <div class="typeahead__field">
        <div class="typeahead__query">
        
        <input type="text" placeholder="Search for software or solutions" autocomplete="off" name="q" >
        
        </div>
        
        <label>
        <input type="submit" class="bt" value="">
            

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
        </label>
    
      </div>
    </div>
    
    </form>
            </div>
        </nav>
    </section>
    <div id="banner-sterling" class="sterling">
        
        
        


    


<div id="SF_Temp5_728x90_A_wrapped" data-id="div-gpt-ad-1392148432591-0" class="draper   
visibility_rules
 v_728_leaderboard  v_970_billboard ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    var el = document.getElementById('SF_Temp5_728x90_A_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1392148432591-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Temp5_728x90_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1392148432591-0').parents('.draper').css("min-height", 90 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432591-0');
    });
};
gptadRenderers['SF_Temp5_728x90_A']();  // jshint ignore:line
}
</script>
        


    


<div id="SF_Mobile_320x50_A_wrapped" data-id="div-gpt-ad-1512154506943-0" class="draper   
">
</div>
<script>
/*global googletag */
if (!SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    var el = document.getElementById('SF_Mobile_320x50_A_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1512154506943-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Mobile_320x50_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1512154506943-0').parents('.draper').css("min-height", 50 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1512154506943-0');
    });
};
gptadRenderers['SF_Mobile_320x50_A']();  // jshint ignore:line
}
</script>
        


    


<div id="SF_Temp5_HubIcon_200x90_A_wrapped" data-id="div-gpt-ad-1324209358854-0" class="draper hub  
visibility_rules
 v_200_billboard ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.billboard) {
(function(){
    
    var el = document.getElementById('SF_Temp5_HubIcon_200x90_A_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1324209358854-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Temp5_HubIcon_200x90_A'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1324209358854-0');
    });
};

}
</script>
    </div>
</div>

            
                

                
<div class="full-width-masthead project-masthead" id="downloading" >
    
    
<div class="backdrop" style="box-sizing: content-box; padding-bottom: 131px"></div>

    <div class="content">
        
    <nav id="breadcrumbs" class="breadcrumbs rtl">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="/"><span itemprop="name">Home</span></a>
            <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/directory/"><span itemprop="name">Browse</span></a>
                <meta itemprop="position" content="2" />
            </li>
            <li class="project" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">PHPMailer</span><meta itemprop="position" content="3" />
            </li>
            
        </ul>
    </nav>


        <div id="starting">
            

<div class="overview">

    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>


    <div class="title">
        
        
        
        
        <h1 itemprop="name"><a href="/projects/phpmailer/" itemprop="url">PHPMailer</a></h1>
        
        <h3 class="summary">
            A full-featured email creation and transfer class for PHP
        </h3>
         
          


        
        
        <h3 class="brought-by">

            

            Brought to you by:
            
                
                    <a href="/u/coolbru/">coolbru</a>
                
            
        </h3>
        

        
    </div>

    
</div>

            <p id="downloader" class="">
    Your download will start shortly...
</p>



<div class="radial-progress">
    <div class="circle">
        <div class="mask full">
            <div class="fill"></div>
        </div>
        <div class="mask half">
            <div class="fill"></div>
            <div class="fill fix"></div>
        </div>
    </div>
    <div class="inset"></div>
</div>



<script id="redirect-template" type="text/x-handlebars-template">
Learn more: check out <a href="/projects/phpmailer/postdownload">screenshots, reviews, and more</a>. We'll take you there in a few moments.
</script>
            


        </div>

        <div class="buttons clearfix">
            

            
            <a class="button default" data-open="psp-newsletter-modal">Get Updates</a>
    <div class="psp_newsletter_subscribe reveal" data-reveal id="psp-newsletter-modal" data-v-offset="0">
        <div class="modal-content">
            <div class="small-12 row modal-header">
                <div class="sf-email-icon small-6 medium-4">
                    <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g><circle class="st0" cx="149.8" cy="150.3" r="149"/><path class="st1" d="M240.7,115.6l-27.6-20.7V64.5h-40.5l-17.4-13c-3.3-2.4-7.8-2.4-11.1,0l-17.4,13H86.3v30.4l-27.6,20.7c-2.5,1.2-4.3,3.8-4.3,6.8v109.4H245V122.4C245,119.4,243.3,116.8,240.7,115.6z"/><polygon class="st2" points="208.9,139.8 152.4,185.5 90.6,139.8 90.6,69.8 208.9,69.8 "/><g><path class="st3" d="M240.7,115.6l-27.6-20.7V64.5h-40.5l-17.4-13c-3.3-2.4-7.8-2.4-11.1,0l-17.4,13H86.3v30.4l-27.6,20.7c-2.5,1.2-4.3,3.8-4.3,6.8v109.4H245V122.4C245,119.4,243.3,116.8,240.7,115.6z M62.9,124.9l63.8,48.3l-63.8,46.1C62.9,219.3,62.9,124.9,62.9,124.9z M133.6,178.5l16.1,12.2l16.1-12.2l62,44.9H71.6L133.6,178.5z M172.9,173.2l63.8-48.3v94.4L172.9,173.2z M230.9,118.7l-17.8,13.4v-26.8L230.9,118.7z M149.2,58.2c0.3-0.2,0.7-0.2,1,0l8.4,6.3h-17.9L149.2,58.2z M204.8,72.9v65.6l-55,41.7l-55-41.7V72.9 M86.3,132.2l-17.8-13.4l17.8-13.3V132.2z"/></g></g><g><path class="st4" d="M155.4,121c0-12.5-4.4-18.2-6.8-20.3c-0.5-0.4-1.2,0-1.1,0.6c0.5,7-8.4,8.8-8.4,19.8l0,0c0,0,0,0,0,0.1c0,6.7,5.1,12.2,11.4,12.2c6.3,0,11.4-5.5,11.4-12.2c0,0,0,0,0-0.1l0,0c0-3.1-1.2-6.1-2.4-8.3c-0.2-0.4-0.9-0.3-0.8,0.1C160.8,122.5,155.4,128.4,155.4,121z"/><g><path class="st4" d="M141.9,147.3c-0.3,0-0.6-0.1-0.8-0.3l-29-29c-0.4-0.4-0.4-1.1,0-1.5l30.6-30.6c0.2-0.2,0.5-0.3,0.8-0.3h8.8c0.5,0,0.9,0.3,1,0.7c0.1,0.3,0.1,0.8-0.2,1.2l-28.8,28.8c-0.6,0.6-0.6,1.5,0,2.1l22.8,22.8c0.4,0.4,0.4,1.1,0,1.5l-4.4,4.4C142.5,147.2,142.2,147.3,141.9,147.3z"/></g><g><path class="st4" d="M147.7,152.4c-0.5,0-0.9-0.3-1-0.7c-0.1-0.3-0.1-0.8,0.2-1.2l28.8-28.8c0.3-0.3,0.4-0.7,0.4-1.1s-0.2-0.8-0.4-1.1L153,96.8c-0.4-0.4-0.4-1.1,0-1.5l4.4-4.4c0.2-0.2,0.5-0.3,0.8-0.3s0.6,0.1,0.8,0.3l29,29c0.2,0.2,0.3,0.5,0.3,0.8s-0.1,0.6-0.3,0.8l-30.6,30.6c-0.2,0.2-0.5,0.3-0.8,0.3L147.7,152.4L147.7,152.4z"/></g></g></svg>
                </div>
                <div class="column small-12 medium-8">
                    <span class="subscribe-tagline medium-8">Get project updates, sponsored content from our select partners, and more.</span>
                </div>
            </div>

            

<form action="/user/newsletters/subscribe" method="post"
      class="newsletter-subscribe-form compliance-form optin-wide kmunl-subscribe-form"
      data-shortname="phpmailer" data-handler="KMUNSWidget" >
    <input type="hidden" name="XZsK9wo1xw6nDm8O7P8KXwr96wqkSH8OwTsOXPGNu" value="user">
    <input type="hidden" name="Xc8Ktwo1xw7XDjMOsdi4yw6ZvwpnCscKKwq4Kw5zDj8Ke" value="PSP">

    <div class="row">
        <div class="column small-12 large-6">
            <input type="email" class="subscriber-email" name="XcMK7wo9lw67Dg8K5wqAmL8K3I8KGSQzCiTDCgcKVwqg"  placeholder="Enter your email address" value="" required autocapitalize="none">
            
        </div>
        <label class="column ">
            <span class="show-for-sr">Country</span><span class="input">
<select id="country-masthead" name="XcsK9wo1xw6nDm8O7P8O4OsO7PsOVwq5yKC3DpsKSw4Q" required class=" use-placeholder-color"  autocomplete="country">
    
    <option value=""></option>
    
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN" selected>India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set-state column small-6 large-3">
            <span class="show-for-sr">State</span>
            <span class="input">
<select id="state-masthead" name="XcMKtwpZlw7PDisK5wqAmL8K3I8KGSQzCiTDCgcKVwqg"  class=" use-placeholder-color"  autocomplete="address-level1">
    
    <option value=""></option>
    
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>
    </div>
    <div class="row">
        
            <div class="column small-12 large-4">
                
<label>
    <span class="show-for-sr">Full Name</span>
    <input name="XccKwwoNpw6LCn2_CqDt:w7s8fsOPK8KzbcObwqNQ" type="text" value="" placeholder="Full name" required autocomplete="name" >
</label>
<span class="fielderror"></span>
            </div>

            <div class="column small-12 large-4 field-group-phone">
                
    
    <span>
    <input type="text" name="XfMKuwoprw6nDisOWI8KwwqglK8KZwrMhw49TR8KPwqM" value="" placeholder="Ext" class="phone-ext" autocomplete="work tel-extension">
    </span>
    <label class="phone-label">
        <span class="show-for-sr">Phone Number</span>
        <input type="text" name="XcMKuwoprw6nDisK5wqAmL8K3I8KGSQzCiTDCgcKVwqg" value="" placeholder="Phone " class="phone"  autocomplete="work tel-national">
    </label>
    <span class="fielderror"></span>
    <span class="fielderror"></span>
            </div>

            
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Job Title</span>
        <input type="text" name="XdsK0wo1mwrdJZ8K1ajLDpMOEw7jDqBHDrjfDrVvDtA" value="" placeholder="Job Title" class="job"  autocomplete="organization-title">
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Industry</span>
        <input type="text" name="XfcK3woxgw7LDnMO9NMKxw6zDsyPChMOibcOQwqvDgcKowpk" value="" placeholder="Industry" class="industry" >
        <span class="fielderror"></span>
    </label>
        </div>
        <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company</span>
        <input type="text" name="XcsK9wo1pw7fDjsOnP8O4OsO7PsOVwq5yKC3DpsKSw4Q" value="" placeholder="Company " class="company"  autocomplete="organization">
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company Size</span>
        
<select id="employees-2491116" name="XfMK7wo90w6vDgMOwI8Ktwq8lK8KZwrMhw49TR8KPwqM"  class="employees use-placeholder-color" >
    
    <option value="">Company Size:</option>
    
    <option value="1 - 25">1 - 25</option>
    <option value="26 - 99">26 - 99</option>
    <option value="100 - 499">100 - 499</option>
    <option value="500 - 999">500 - 999</option>
    <option value="1,000 - 4,999">1,000 - 4,999</option>
    <option value="5,000 - 9,999">5,000 - 9,999</option>
    <option value="10,000 - 19,999">10,000 - 19,999</option>
    <option value="20,000 or More">20,000 or More</option>
</select>

        <span class="fielderror"></span>
    </label>
    </div>
        

        <div class="column small-12">
            
                
 

<label class="input-set input-set-kmu kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XdsK1wo9xwrdJZ8K1ajLDpMOEw7jDqBHDrjfDrVvDtA" value="phpmailer"   data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


                
                
 

<label class="input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XfsKwwodzw7TDg8OsMsK8wrlnwr5HwqZtw5IAwqDDsQI" value="sitewide"   data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


                
 

<label class="input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XfsKwwodzw7TDg8OsMsK8wrlnwr5HwqZtw5IAwqDDsQI" value="sitewide research"   data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>


            

            

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="hardware"   data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="network-security"   data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="cloud"   data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="software-development"   data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="artificial-intelligence"   data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XesK9wo1qw7PDjsOqMsKXwrFwwrkfL8OnUsKSwqjDrsO4" value="email"   data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XesK9wo1qw7PDjsOqMsKXwrFwwrkfL8OnUsKSwqjDrsO4" value="phone"   data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XesK9wo1qw7PDjsOqMsKXwrFwwrkfL8OnUsKSwqjDrsO4" value="sms"   data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    
</div>


            <input type="hidden" name="XfsKwwodzw7TDg8OsMsK8wrlnwr5HwqZtw5IAwqDDsQI" class="input-assumed-newsletters" value="">
            <input type="hidden" name="XdsK1wo9xwrdJZ8K1ajLDpMOEw7jDqBHDrjfDrVvDtA" class="input-assumed-kmu" value="">
        </div>

        
 

<label class="input-set input-set-agree-general allow-precheck column small-12">
    <span class="checkbox"> <input type="checkbox" name="XcsK9wo1qw7TDisOnMsO4OsO7PsOVwq5yKC3DpsKSw4Q" value="consent"   data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>


        
 

<label class="input-set input-set-agree-general-gdpr minimum-explicit-required column small-12">
    <span class="checkbox"> <input type="checkbox" name="XcsK9wo1qw7TDisOnMsO4OsO7PsOVwq5yKC3DpsKSw4Q" value="consent"   data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>



        <div class="subscriber-submit-wrapper column small-12">
            

    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="bottomleft"
          data-size="invisible"
          >
    </div>


            <button type="submit" class="subscriber-submit blue button">
                <span>
                    Subscribe
                </span>
            </button>
        </div>
    </div>
    
  <input type="hidden" name="_visit_cookie" value="45323047-6343-4a3a-b841-6bb971e85970"/>
    <input type='hidden' name='timestamp' value='1584539053'/>
    <input type='hidden' name='spinner' value='Xdd7iBIeviUbI3BXNd0CDIaJOAAs'/>
    <p class='nf5d04a8cc45230d632e9895fc20bd60897ac891f'><label for='XcsK2wo1qw6LDlsK5dsO4OsO7PsOVwq5yKC3DpsKSw4Q'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XcsK2wo1qw6LDlsK5dsO4OsO7PsOVwq5yKC3DpsKSw4Q' name='Xc8K2wo1qw6LDlsK5di4yw6ZvwpnCscKKwq4Kw5zDj8Ke' type=
             'text'/></p>
    <p class='nf5d04a8cc45230d632e9895fc20bd60897ac891f'><label for='XcsK2wo1qw6LDlsK5d8O4OsO7PsOVwq5yKC3DpsKSw4Q'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XcsK2wo1qw6LDlsK5d8O4OsO7PsOVwq5yKC3DpsKSw4Q' name='Xc8K2wo1qw6LDlsK4di4yw6ZvwpnCscKKwq4Kw5zDj8Ke' type=
             'text'/></p>
</form>


            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="column small-12 row close-container">
                <a class="close-text column small-12" data-close href="#">No, thanks</a>
            </div>
        </div>
    </div>
            

            <a id="share-project-button" class="button default" href="#">Share This</a>
            

<div class="social-sharing-buttons invisible hide">
    
    
    
    <a rel=nofollow class="social-media-icon twitter" href="https://twitter.com/share?url=https://sourceforge.net/projects/phpmailer/files/latest/download&amp;text=Download%20PHPMailer%20on%20SourceForge%20for%20free%21%20A%20full-featured%20email%20creation%20and%20transfer%20class%20for%20PHP" title="Share PHPMailer on SourceForge on Twitter">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
    <a rel=nofollow class="social-media-icon facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://sourceforge.net/projects/phpmailer/files/latest/download&title=PHPMailer%20on%20SourceForge" title="Share PHPMailer on SourceForge on facebook">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
    <a rel=nofollow class="social-media-icon linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https://sourceforge.net/projects/phpmailer/files/latest/download&title=PHPMailer%20on%20SourceForge&source=SourceForge.net" title="Share PHPMailer on SourceForge on LinkedIn">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
</div>


            
                
    
    <div class="reveal" id="mirror-modal">
        <div class="modal-content row">
            <div class="column small-12 row modal-header">
            </div>

            <div id="mirror-drawer"></div>

            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <a class="button default mirror " id="btn-problems-downloading" data-release-url="https://downloads.sourceforge.net/project/phpmailer/phpmailer-fe/PHPMailer-FE%20v4.11/PHPMailer-FE_v4.11.zip?r=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fphpmailer%2F&amp;ts=1584539053&amp;use_mirror=excellmedia" rel="nofollow" href="/settings/mirror_choices?projectname=phpmailer&amp;filename=phpmailer-fe/PHPMailer-FE%20v4.11/PHPMailer-FE_v4.11.zip&amp;selected=excellmedia">Problems Downloading?</a>
            
        </div>

        <div class="file-info">
            <div class="file-name">
                    PHPMailer-FE_v4.11.zip
                
            </div>

            
            
            <div id="scanned_by">
                <span>Scanned by:</span> <a href="http://www.bitdefender.com/business/" rel="nofollow"><img alt="Bitdefender" src="//a.fsdn.com/con/img/bitdefender.png" width="116" height="17"/></a>
            </div>
        </div>

        
    </div>
    <div id="mirror">
        <div class="mirror-title">Mirror Provided by</div><a id="provider_top" href="http://excellmedia.net/" title="Excell Media"><img class="mirror-logo" alt="Excell Media"
                  src="https://a.fsdn.com/mirrorimages/excellmedia-xlarge.png" width="230" height="126" 
                    srcset="https://a.fsdn.com/mirrorimages/excellmedia-hidpi.png 2x" /></a>
          <div class="mirror-footer">Learn more about Excell Media  - <a href="http://excellmedia.net/" title="Excell Media">Visit Site</a></div>
    </div>
</div>

                <div class="l-two-column-page">
                    <div class="l-content-column">
                        
<div class="project-body">
    <article class="main-content">

         
    
    <section id="project-nel" class="small-12 columns">
        <header>
            <h2>Other Useful Business Software</h2>
        </header>
        


    

    

    <div class="nel standard can-truncate "
        data-id="4171" data-cid="4783">
        
        
        
<span id="61734853-02d0-40e9-96e4-99976a153e57"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp/?b=25759&c=4783&cb=3422db8120&z=23149', "Rufus is a utility that helps format and create bootable USB flash drives, such as USB keys/pendrives, memory sticks, etc.", '61734853-02d0-40e9-96e4-99976a153e57');
</script>

        
        <a class="application-image thumbnail"  href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25759__zoneid=23149__cb=3422db8120__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Frufus.mirror%2F" target="_blank" rel="nofollow">
            <img class="main-image" src="data:image/png;base64,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" alt="Rufus is a utility that helps format and create bootable USB flash drives, such as USB keys/pendrives, memory sticks, etc. Icon">
            
        </a>
        <div class="wrapper">
            <div class="heading">
                <div class="heading-main">
                    
                    <a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25759__zoneid=23149__cb=3422db8120__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Frufus.mirror%2F" target="_blank" rel="nofollow" title="Find out more about Rufus is a utility that helps format and create bootable USB flash drives, such as USB keys/pendrives, memory sticks, etc.">Rufus is a utility that helps format and create bootable USB flash drives, such as USB keys/pendrives, memory sticks, etc.</a>

                    
                    <p class="teaser">Despite its small size, Rufus provides everything you need!</p>
                </div>
            </div>

            
            

            <div class="tiles">
                <div class="tile">
                    
                    <div class="description ">
                        <div class="description-inner">
                            Rufus is a standalone app designed to format and create a bootable USB drive for a large variety of ISOs. The app is just over 1MB in size and is notably faster than similar competitor apps such as the Windows 7 USB utility, Universal USB Installer, and UNetbootin.

Rufus can come in handy when you need to simply format a USB drive, install an OS on a machine that lacks a CD/DVD-ROM drive, or when you need to boot an operating system temporarily without intentions of actually installing the media. This can be immensely useful while you're on the go or just need access to an OS for a temporary, isolated reason. The app can even be used to flash firmware to BIOS or other destinations by just using DOS.

Even though Rufus is a tiny utility in comparison to other USB creation tools that can be rather bulky in size, it contends easily with the competition and creates bootable USB drives in record time!
                        </div>
                    </div>
                </div>

                
            </div>

        </div>

        
        <div class="download standard">
            
            

            

            
            
    <a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25759__zoneid=23149__cb=3422db8120__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Frufus.mirror%2F">Download Now</a>
        </div>

        
    </div>





    

    

    <div class="nel standard can-truncate "
        data-id="4190" data-cid="4795">
        
        
        
<span id="f12dde65-d842-4737-aad8-4f6055871aa0"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp/?b=25804&c=4795&cb=b73497f322&z=23193', "Calibre Is An Open-source And Easy To Use E-book Manager", 'f12dde65-d842-4737-aad8-4f6055871aa0');
</script>

        
        <a class="application-image thumbnail"  href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25804__zoneid=23193__cb=b73497f322__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fcalibre-ebook-manager.mirror%2F" target="_blank" rel="nofollow">
            <img class="main-image" src="data:image/png;base64,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" alt="Calibre Is An Open-source And Easy To Use E-book Manager Icon">
            
        </a>
        <div class="wrapper">
            <div class="heading">
                <div class="heading-main">
                    
                    <a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25804__zoneid=23193__cb=b73497f322__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fcalibre-ebook-manager.mirror%2F" target="_blank" rel="nofollow" title="Find out more about Calibre Is An Open-source And Easy To Use E-book Manager">Calibre Is An Open-source And Easy To Use E-book Manager</a>

                    
                    <p class="teaser">Calibre has the ability to view, convert, edit, and catalog e-books of almost any e-book format.</p>
                </div>
            </div>

            
            

            <div class="tiles">
                <div class="tile">
                    
                    <div class="description ">
                        <div class="description-inner">
                            Calibre is a cross-platform open-source suite of e-book software. Calibre supports organizing existing e-books into virtual libraries, displaying, editing, creating and converting e-books, as well as syncing e-books with a variety of e-readers. Editing books is supported for EPUB and AZW3 formats.
                        </div>
                    </div>
                </div>

                
            </div>

        </div>

        
        <div class="download standard">
            
            

            

            
            
    <a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25804__zoneid=23193__cb=b73497f322__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fcalibre-ebook-manager.mirror%2F">Learn More</a>
        </div>

        
    </div>





    

    

    <div class="nel standard can-truncate "
        data-id="4686" data-cid="5046">
        
        
        
<span id="12240b47-1eb1-4697-9b04-f4a5185027c7"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp/?b=26725&c=5046&cb=1632321316&z=24058', "A safe way to flash OS images to SD cards And USB drives", '12240b47-1eb1-4697-9b04-f4a5185027c7');
</script>

        
        <a class="application-image thumbnail"  href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=26725__zoneid=24058__cb=1632321316__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fetcher.mirror%2F" target="_blank" rel="nofollow">
            <img class="main-image" src="data:image/png;base64,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" alt="A safe way to flash OS images to SD cards And USB drives Icon">
            
        </a>
        <div class="wrapper">
            <div class="heading">
                <div class="heading-main">
                    
                    <a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=26725__zoneid=24058__cb=1632321316__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fetcher.mirror%2F" target="_blank" rel="nofollow" title="Find out more about A safe way to flash OS images to SD cards And USB drives">A safe way to flash OS images to SD cards And USB drives</a>

                    
                    <p class="teaser">Written with Electron for cross platform use (windows, macOS, and Linux).</p>
                </div>
            </div>

            
            

            <div class="tiles">
                <div class="tile">
                    
                    <div class="description ">
                        <div class="description-inner">
                            Etcher is a powerful OS image flasher. It protects a user from accidentally overwriting hard-drives by making drive selection obvious; and with validated flashing there is no more writing images to corrupted drives. It is also called balenaEtcher since it is developed by balena.

In addition, Etcher can flash directly Raspberry Pi devices that support usbboot. Use for .iso and .img files, as well as zipped folders to create live SD cards and USB flash drives.
                        </div>
                    </div>
                </div>

                
            </div>

        </div>

        
        <div class="download standard">
            
            

            

            
            
    <a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=26725__zoneid=24058__cb=1632321316__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fetcher.mirror%2F">Learn More</a>
        </div>

        
    </div>





    

    

    <div class="nel standard can-truncate "
        data-id="4173" data-cid="4784">
        
        
        
<span id="c253b6eb-2a59-4b12-ab61-ce14fec9223c"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp/?b=25770&c=4784&cb=b7032d2e60&z=23151', "Classic Shell Reborn, Windows enhancement software", 'c253b6eb-2a59-4b12-ab61-ce14fec9223c');
</script>

        
        <a class="application-image thumbnail"  href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25770__zoneid=23151__cb=b7032d2e60__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fopen-shell.mirror%2F" target="_blank" rel="nofollow">
            <img class="main-image" src="data:image/png;base64,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" alt="Classic Shell Reborn, Windows enhancement software Icon">
            
        </a>
        <div class="wrapper">
            <div class="heading">
                <div class="heading-main">
                    
                    <a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25770__zoneid=23151__cb=b7032d2e60__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fopen-shell.mirror%2F" target="_blank" rel="nofollow" title="Find out more about Classic Shell Reborn, Windows enhancement software">Classic Shell Reborn, Windows enhancement software</a>

                    
                    <p class="teaser">OpenShell is a fork and continuation of the project Classic Shell.</p>
                </div>
            </div>

            
            

            <div class="tiles">
                <div class="tile">
                    
                    <div class="description ">
                        <div class="description-inner">
                            Improve your productivity and user experience with Open Shell, a Windows start menu alternative for Windows 10. Bringing back the classic start menu style.
                        </div>
                    </div>
                </div>

                
            </div>

        </div>

        
        <div class="download standard">
            
            

            

            
            
    <a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=25770__zoneid=23151__cb=b7032d2e60__oadest=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fopen-shell.mirror%2F">Learn More</a>
        </div>

        
    </div>





<div class="nel-empty">
  
<span id="3f1411a9-b50c-40b5-a9e8-ec5a5691930a"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=3f1411a9-b50c-40b5-a9e8-ec5a5691930a&z=18219',
        '',
        '3f1411a9-b50c-40b5-a9e8-ec5a5691930a');
</script>
  
    
    
    
<span id="2395a5f2-3973-483a-8683-ebd7f52c56d7"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=2395a5f2-3973-483a-8683-ebd7f52c56d7&z=18823',
        '',
        '2395a5f2-3973-483a-8683-ebd7f52c56d7');
</script>
  
</div>

    </section>
    


        
        <div class="small-12 columns hr-bottom">
            <aside class="content-supplement">
                <header>
                    <h3>PHPMailer Overview</h3>
                </header>

                <div class="project-container">
                    
                    <p id="summary">A full-featured email creation and transfer class for PHP</p>
                    
                    <p id="description">A PHP email creation and transport class featuring file attachments, SMTP servers, CCs, BCCs, HTML messages, word wrap, and more. Sends email via sendmail, PHP mail(), QMail, or with SMTP.<br>
<br>
PHPMailer is used by many popular PHP development frameworks and is one of the most popular email-generating and sending libraries in the world.<br>
<br>
This project is defunct here on sourceforge - it&#39;s now maintained on Github at <a href="https://github.com/PHPMailer/PHPMailer" rel="nofollow noopener">https://github.com/PHPMailer/PHPMailer</a>.<br>
<br>
Documentation is available at <a href="https://github.com/PHPMailer/PHPMailer/wiki" rel="nofollow noopener">https://github.com/PHPMailer/PHPMailer/wiki</a></p>
                </div>
            </aside>
        </div>
        


        


        
        <div class="small-12 columns hr-bottom">
            
<section id="project-additional-trove" class="content-supplement">
    <header>
        <h2>Additional Details for PHPMailer</h2>
    </header>
    <div class="project-container">
        

        

        

        

        <section class="project-info">
            <header>
                <h4>Registered</h4>
            </header>
            <section class="content">
                2001-04-24
            </section>
        </section>

        
        <section class="project-info">
            <header>
                <h3>Last Updated</h3>
            </header>
            <section class="content">
                <time itemprop="dateModified" class="dateUpdated" datetime="2016-04-21">2016-04-21</time>
            </section>
        </section>
        <section class="project-info">
            <header>
                <h3>Categories</h3>
            </header></section>
        <section class="project-info">
            <header>
                <h3>Maintainers</h3>
            </header><a href="https://sourceforge.net/u/coolbru/"><span>coolbru</span></a>
        </section>
    </div>
</section>

        </div>
        
        
<aside class="m-wide-widget m-wide-projects-widget ">
    <header>Recommended Projects</header>
    <div class="body">
        <ul>
            
            




<li>
    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="https://sourceforge.net/projects/bmh" title="Find out more about PHPMailer-BMH (Bounce Mail Handler)">
                
                <strong>PHPMailer-BMH (Bounce Mail Handler)</strong>
            </a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true" >


    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
</div>


        <a href="/projects/bmh/reviews/" class="count" title="Reviews">1 Review</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/bmh/files/stats/timeline" title="Downloads This Week">0 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/bmh/activity">
        <time class="dateUpdated" datetime="2015-09-23">2015-09-23</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="https://sourceforge.net/projects/bmh" title="Find out more about PHPMailer-BMH (Bounce Mail Handler)" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
            




<li>
    

<div class="project-icon   " >
    
    
    <img alt="phpList Icon" 
src="//a.fsdn.com/allura/p/phplist/icon?1535118314"
     loading="lazy"/></div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="https://sourceforge.net/projects/phplist" title="Find out more about phpList">
                
                <strong>phpList</strong>
            </a>
            
                <a href="https://sourceforge.net/projects/phplist" title="Find out more about phpList" class="summary-inline">Powerful Open Source Email Marketing app with analytics &amp; segmentation</a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true" >


    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    <div class="star responsive empty">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
</div>


        <a href="/projects/phplist/reviews/" class="count" title="Reviews">35 Reviews</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/phplist/files/stats/timeline" title="Downloads This Week">774 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/phplist/activity">
        <time class="dateUpdated" datetime="2020-03-11">7 days ago</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="https://sourceforge.net/projects/phplist" title="Find out more about phpList" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
            




<li>
    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="https://sourceforge.net/projects/xpertmailer" title="Find out more about XPertMailer">
                
                <strong>XPertMailer</strong>
            </a>
            
        </div>
        
        <div class="stats">
            
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/xpertmailer/files/stats/timeline" title="Downloads This Week">0 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/xpertmailer/activity">
        <time class="dateUpdated" datetime="2013-04-11">2013-04-11</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="https://sourceforge.net/projects/xpertmailer" title="Find out more about XPertMailer" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
        </ul>
    </div>
</aside>

        <hr class="bottom">


        
        <div class="small-12 columns content-supplement">
            

    <div class="m-project-activity columns small-12 ">
        <div class="heading">
            <h3>Project Activity</h3>
            <div>
                <a class="button yellow icon-only follow-action-disabled show-for-medium"
                   href="https://sourceforge.net/auth/?return_to=%2Fprojects%2Fphpmailer%2Ffiles%2Flatest%2Fdownload"
                        title="Follow PHPMailer - Requires login"><svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg></a>
                <a class="button blue icon-only show-for-medium" href="/p/phpmailer/activity/feed" title="RSS"><svg    xmlns="http://www.w3.org/2000/svg"           viewBox="0 0 1408.1818 1408"   version="1.1">  <path     d="m 384,1216 q 0,80 -56,136 -56,56 -136,56 -80,0 -136,-56 -56,-56 -56,-136 0,-80 56,-136 56,-56 136,-56 80,0 136,56 56,56 56,136 z m 512,123 q 2,28 -17,48 -18,21 -47,21 l -135,0 q -25,0 -43,-16.5 Q 636,1375 634,1350 612,1121 449.5,958.5 287,796 58,774 33,772 16.5,754 0,736 0,711 L 0,576 q 0,-29 21,-47 17,-17 43,-17 l 5,0 q 160,13 306,80.5 146,67.5 259,181.5 114,113 181.5,259 67.5,146 80.5,306 z m 512,2 q 2,27 -18,47 -18,20 -46,20 l -143,0 q -26,0 -44.5,-17.5 Q 1138,1373 1137,1348 1125,1133 1036,939.5 947,746 804.5,603.5 662,461 468.5,372 275,283 60,270 35,269 17.5,250.5 0,232 0,207 L 0,64 Q 0,36 20,18 38,0 64,0 l 3,0 Q 329,13 568.5,120 808,227 994,414 q 187,186 294,425.5 107,239.5 120,501.5 z"          /></svg></a>
            </div>
        </div>
        <div id="project-activity">
            
            <div class="space--placeholder" style="height: 315px"></div>
        </div>
        <p class="all-activities"><a href="/p/phpmailer/activity">See All Activity &gt;</a></p>
    </div>

    <script type="text/x-handlebars-template" id="project-activity-template">
    
        <ul class="list-of-activities">
            {{#each timeline}}
            <li class="item">
                <time datetime="{{ iso8601date this.published }}" title="{{ readable_date this.published }}">{{ ago this.published }}</time>
                <div>
                {{#ifTagged "release"}}
                  {{ cap this.verb }}
                {{else}}
                  {{ icon this.actor.activity_extras.icon_url }}
                  {{ activity_obj this.actor }}
                  {{ this.verb }}
                {{/ifTagged}}
                {{ activity_obj this.obj }}
                {{#if this.target.activity_name}} on {{ activity_obj this.target }}{{/if}}
                </div>
                <div class="summary">
                    {{ this.obj.activity_extras.summary }}
                </div>
            </li>
            {{/each}}
        </ul>
    
    </script>

        </div>
        
        


        

        

        
        <div class="dlp_newsletter_subscribe">
            
<div class="m-kmu row">
    <div class="small-12 column">
        <div class="row is-collapse-child">
            <div class="small-12 column">
                <h1>Keep Me Updated!</h1>
                <div class="subscribe-tagline">Get PHPMailer updates, sponsored content from our select partners and more.</div>
                

<form action="/user/newsletters/subscribe" method="post"
      class="newsletter-subscribe-form compliance-form optin-wide kmunl-subscribe-form"
      data-shortname="phpmailer" data-handler="KMUNSWidget" data-delay-captcha>
    <input type="hidden" name="XZsK9wo1xw6nDm8O7P8KXwr96wqkSH8OwTsOXPGNu" value="user">
    <input type="hidden" name="Xc8Ktwo1xw7XDjMOsdi4yw6ZvwpnCscKKwq4Kw5zDj8Ke" value="DLP">

    <div class="row">
        <div class="column small-12 large-6">
            <input type="email" class="subscriber-email" name="XcMK7wo9lw67Dg8K5wqAmL8K3I8KGSQzCiTDCgcKVwqg"  placeholder="Enter your email address" value="" required autocapitalize="none">
            
        </div>
        <label class="column ">
            <span class="show-for-sr">Country</span><span class="input">
<select id="country" name="XcsK9wo1xw6nDm8O7P8O4OsO7PsOVwq5yKC3DpsKSw4Q" required class=" use-placeholder-color"  autocomplete="country">
    
    <option value=""></option>
    
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN" selected>India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set-state column small-6 large-3">
            <span class="show-for-sr">State</span>
            <span class="input">
<select id="state" name="XcMKtwpZlw7PDisK5wqAmL8K3I8KGSQzCiTDCgcKVwqg"  class=" use-placeholder-color"  autocomplete="address-level1">
    
    <option value=""></option>
    
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>
    </div>
    <div class="row">
        
            <div class="column small-12 large-4">
                
<label>
    <span class="show-for-sr">Full Name</span>
    <input name="XccKwwoNpw6LCn2_CqDt:w7s8fsOPK8KzbcObwqNQ" type="text" value="" placeholder="Full name" required autocomplete="name" >
</label>
<span class="fielderror"></span>
            </div>

            <div class="column small-12 large-4 field-group-phone">
                
    
    <span>
    <input type="text" name="XfMKuwoprw6nDisOWI8KwwqglK8KZwrMhw49TR8KPwqM" value="" placeholder="Ext" class="phone-ext" autocomplete="work tel-extension">
    </span>
    <label class="phone-label">
        <span class="show-for-sr">Phone Number</span>
        <input type="text" name="XcMKuwoprw6nDisK5wqAmL8K3I8KGSQzCiTDCgcKVwqg" value="" placeholder="Phone " class="phone"  autocomplete="work tel-national">
    </label>
    <span class="fielderror"></span>
    <span class="fielderror"></span>
            </div>

            
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Job Title</span>
        <input type="text" name="XdsK0wo1mwrdJZ8K1ajLDpMOEw7jDqBHDrjfDrVvDtA" value="" placeholder="Job Title" class="job"  autocomplete="organization-title">
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Industry</span>
        <input type="text" name="XfcK3woxgw7LDnMO9NMKxw6zDsyPChMOibcOQwqvDgcKowpk" value="" placeholder="Industry" class="industry" >
        <span class="fielderror"></span>
    </label>
        </div>
        <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company</span>
        <input type="text" name="XcsK9wo1pw7fDjsOnP8O4OsO7PsOVwq5yKC3DpsKSw4Q" value="" placeholder="Company " class="company"  autocomplete="organization">
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company Size</span>
        
<select id="employees-8449324" name="XfMK7wo90w6vDgMOwI8Ktwq8lK8KZwrMhw49TR8KPwqM"  class="employees use-placeholder-color" >
    
    <option value="">Company Size:</option>
    
    <option value="1 - 25">1 - 25</option>
    <option value="26 - 99">26 - 99</option>
    <option value="100 - 499">100 - 499</option>
    <option value="500 - 999">500 - 999</option>
    <option value="1,000 - 4,999">1,000 - 4,999</option>
    <option value="5,000 - 9,999">5,000 - 9,999</option>
    <option value="10,000 - 19,999">10,000 - 19,999</option>
    <option value="20,000 or More">20,000 or More</option>
</select>

        <span class="fielderror"></span>
    </label>
    </div>
        

        <div class="column small-12">
            
                
 

<label class="input-set input-set-kmu kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XdsK1wo9xwrdJZ8K1ajLDpMOEw7jDqBHDrjfDrVvDtA" value="phpmailer"   data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


                
                
 

<label class="input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XfsKwwodzw7TDg8OsMsK8wrlnwr5HwqZtw5IAwqDDsQI" value="sitewide"   data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


                
 

<label class="input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XfsKwwodzw7TDg8OsMsK8wrlnwr5HwqZtw5IAwqDDsQI" value="sitewide research"   data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>


            

            

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="hardware"   data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="network-security"   data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="cloud"   data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="software-development"   data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XeMKxwoRiw6LDncO6GcK8wrNlwqQUM8Kzw4dMwr3CosOl" value="artificial-intelligence"   data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XesK9wo1qw7PDjsOqMsKXwrFwwrkfL8OnUsKSwqjDrsO4" value="email"   data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XesK9wo1qw7PDjsOqMsKXwrFwwrkfL8OnUsKSwqjDrsO4" value="phone"   data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XesK9wo1qw7PDjsOqMsKXwrFwwrkfL8OnUsKSwqjDrsO4" value="sms"   data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    
</div>


            <input type="hidden" name="XfsKwwodzw7TDg8OsMsK8wrlnwr5HwqZtw5IAwqDDsQI" class="input-assumed-newsletters" value="">
            <input type="hidden" name="XdsK1wo9xwrdJZ8K1ajLDpMOEw7jDqBHDrjfDrVvDtA" class="input-assumed-kmu" value="">
        </div>

        
 

<label class="input-set input-set-agree-general allow-precheck column small-12">
    <span class="checkbox"> <input type="checkbox" name="XcsK9wo1qw7TDisOnMsO4OsO7PsOVwq5yKC3DpsKSw4Q" value="consent"   data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>


        
 

<label class="input-set input-set-agree-general-gdpr minimum-explicit-required column small-12">
    <span class="checkbox"> <input type="checkbox" name="XcsK9wo1qw7TDisOnMsO4OsO7PsOVwq5yKC3DpsKSw4Q" value="consent"   data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>



        <div class="subscriber-submit-wrapper column small-12">
            

    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="bottomleft"
          data-size="invisible"
          >
    </div>


            <button type="submit" class="subscriber-submit  button">
                <span>
                    Subscribe
                </span>
            </button>
        </div>
    </div>
    
  <input type="hidden" name="_visit_cookie" value="45323047-6343-4a3a-b841-6bb971e85970"/>
    <input type='hidden' name='timestamp' value='1584539053'/>
    <input type='hidden' name='spinner' value='Xdd7iBIeviUbI3BXNd0CDIaJOAAs'/>
    <p class='nf5d04a8cc45230d632e9895fc20bd60897ac891f'><label for='XcsK2wo1qw6LDlsK4dsO4OsO7PsOVwq5yKC3DpsKSw4Q'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XcsK2wo1qw6LDlsK4dsO4OsO7PsOVwq5yKC3DpsKSw4Q' name='Xc8K2wo1qw6LDlsK5di4yw6ZvwpnCscKKwq4Kw5zDj8Ke' type=
             'text'/></p>
    <p class='nf5d04a8cc45230d632e9895fc20bd60897ac891f'><label for='XcsK2wo1qw6LDlsK4d8O4OsO7PsOVwq5yKC3DpsKSw4Q'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XcsK2wo1qw6LDlsK4d8O4OsO7PsOVwq5yKC3DpsKSw4Q' name='Xc8K2wo1qw6LDlsK4di4yw6ZvwpnCscKKwq4Kw5zDj8Ke' type=
             'text'/></p>
</form>


            </div>
        </div>
    </div>
</div>

        </div>
        
        <section class="sterling">
            


    


<div id="SF_Temp5_728x90_B_wrapped" data-id="div-gpt-ad-1392148432592-0" class="draper   
visibility_rules
 v_728_leaderboard  v_970_xlarge ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    var el = document.getElementById('SF_Temp5_728x90_B_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1392148432592-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Temp5_728x90_B'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432592-0');
    });
};
gptadRenderers['SF_Temp5_728x90_B']();  // jshint ignore:line
}
</script>
        </section>
        
    </article>
</div>
                    </div>
                    <div class="l-gutter">
                    </div>
                    <div class="l-side-column">
                        
<div class="scroll-fixable">
    
    <section class="sterling">
    


    
    


<div id="SF_Temp5_300x250_A_wrapped" data-id="div-gpt-ad-1392148432593-0" class="draper multisize  
visibility_rules
 v_300_large ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    var el = document.getElementById('SF_Temp5_300x250_A_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1392148432593-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Temp5_300x250_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1392148432593-0').parents('.draper').css("min-height", 250 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432593-0');
    });
};
gptadRenderers['SF_Temp5_300x250_A']();  // jshint ignore:line
}
</script>


    


<div id="SF_Temp5_300x250_B_wrapped" data-id="div-gpt-ad-1392148432594-0" class="draper medrec  
visibility_rules
 v_300_large ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    var el = document.getElementById('SF_Temp5_300x250_B_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1392148432594-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Temp5_300x250_B'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1392148432594-0').parents('.draper').css("min-height", 250 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432594-0');
    });
};
gptadRenderers['SF_Temp5_300x250_B']();  // jshint ignore:line
}
</script>
    


    


<div id="SF_Temp5_300x250_C_wrapped" data-id="div-gpt-ad-1392148432598-0" class="draper medrec  
visibility_rules
 v_300_large ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    var el = document.getElementById('SF_Temp5_300x250_C_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1392148432598-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Temp5_300x250_C'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432598-0');
    });
};
gptadRenderers['SF_Temp5_300x250_C']();  // jshint ignore:line
}
</script>
    </section>

    
    

    
</div>

    
<script>
if (!SF.adblock && SF.initial_breakpoints_visible.large) {
    
    SF.Ads.scrollFixable = new SF.ScrollFixable($('.scroll-fixable').eq(0), {"watchAvoidStickiness": true, "avoidElement": ".l-header-nav, .l-header-nav-bottom", "adjustHorizontal": false});
    
}
</script>

                    </div>
                </div>
            
            

<footer class="sandiego">
    <section class="l-nav-top">
        <nav class="row">
            <div class="columns show-for-large large-2">
                <a href="/about" title="About">About</a>
                <a href="/blog/category/sitestatus/" title="Site Status">Site Status</a>
                <a href="https://twitter.com/sfnet_ops" title="@sfnet_ops" rel="nofollow">@sfnet_ops</a>
            </div>
            <div class="columns show-for-large large-2">
                
                    <a href="/create" title="Create a Project">Create a Project</a>
                    <a href="/directory/" title="Open Source Software Directory">Open Source Software</a>
                    <a href="/software/" title="Business Software Directory">Business Software</a>
                

                
                <a href="/top" title="Top Downloaded Projects">Top Downloaded Projects</a>
                
            </div>
            <div class="columns show-for-large large-2">
                <a href="/blog/" title="Blog">Blog</a>
                <a href="https://twitter.com/sourceforge" title="@sourceforge" rel="nofollow">@sourceforge</a>
                <a href="https://library.slashdotmedia.com/" title="Resources" rel="nofollow">Resources</a>
            </div>
            <div class="columns show-for-large large-2">
                <a href="/articles/" title="Industry News">Articles</a>
                
                <a href="https://p.sf.net/sourceforge/docs" title="Site Documentation">Site Documentation</a>
                
                <a href="/support" title="Support Request">Support Request</a>
            </div>

            <div class="columns small-12 large-4 sf-logo">
                <a href="/" title="Home" class="sf-logo">
                    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
                </a>
            </div>
        </nav>
    </section>

    <section class="l-nav-bottom">
        <nav class="row">
            <div class="columns small-12 large-6 copyright-notice">&copy; 2020 Slashdot Media. All Rights Reserved.</div>
            <div class="columns large-6 links">
                
                <span class="show-for-large">
                    <a href="http://slashdotmedia.com/terms-of-use" title="Terms" rel="nofollow">Terms</a>
                    <a href="http://slashdotmedia.com/privacy-statement/" title="Privacy" rel="nofollow">Privacy</a>
                </span>
                <span id='teconsent'></span>
                
                <span class="show-for-large">
                    
                    <a href="http://slashdotmedia.com/opt-out-choices" title="Opt Out" rel="nofollow">Opt Out</a>
                    
                    <a href="http://slashdotmedia.com/" title="Advertise" rel="nofollow">Advertise</a>
                </span>
            </div>
        </nav>
    </section>
</footer>


<div id="l-no-css" style="font-family:sans-serif;width:100%;font-size:2em;background:#fff;color:#ff3300;padding:2rem;border:1px solid #ff3300;position:absolute;top: 0;left:0;box-sizing: border-box;">
    Oh no! Some styles failed to load.
    
        Please try <a href="https://sourceforge.net/projects/phpmailer/files/latest/download?css-reload=1" rel="nofollow">reloading this page</a>
    
</div>
<script>

document.addEventListener('DOMContentLoaded', function () {
    var hasCSS = window.getComputedStyle(document.querySelector('#l-no-css')).display === 'none';
    if(!hasCSS) {
        var svgs = document.querySelectorAll('svg');
        for (var x=0; x<svgs.length; x++){
            svgs[x].style.display = 'none';
        }
        window.scroll(0, 0);  
        document.getElementById('offCanvas').style.display = 'none';
        var dropdowns = document.querySelectorAll('.nav-dropdown-menu');
        for (x=0; x<dropdowns.length; x++){
            dropdowns[x].style.display = 'none';
        }
        var backdrop = document.querySelectorAll('.backdrop');
        if (backdrop.length) {
            backdrop[0].style.display = 'none';
        }
        var dlpNewsletterModal = document.getElementById('psp-newsletter-modal');
        if (dlpNewsletterModal) {
            dlpNewsletterModal.style.display = 'none';
        }
        var problemDownloading = document.getElementById('btn-problems-downloading');
        if (problemDownloading) {
            problemDownloading.setAttribute('href', problemDownloading.getAttribute('data-release-url'));
            problemDownloading.style.fontSize = '40px';
        }
    }
});
</script>


        </div>

        
            
    
    <div id="overlay-blockthis-wrapper" style="display: none;">
        <div id="overlay-blockthis">
            <h2>Thanks for helping keep SourceForge clean.</h2>
            <a href="#" id="btn-blockthis-close">X</a>
            <form class="dropzone small-12" action="/api/instrumentation/gpt" id="blockthisForm" method="POST">
                <div class="row small-12">
                    <div class="column description small-12">
                        
  <input type="hidden" name="_visit_cookie" value="45323047-6343-4a3a-b841-6bb971e85970"/>
                            <input type='hidden' name='timestamp' value='1584539053'/>
                            <input type='hidden' name='spinner' value='Xdd7iBIeviUbI3BXNd0CDIaJOAAs'/>
                            <p class='nf5d04a8cc45230d632e9895fc20bd60897ac891f'><label for='XcsK2wo1qw6LDlsK7dsO4OsO7PsOVwq5yKC3DpsKSw4Q'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XcsK2wo1qw6LDlsK7dsO4OsO7PsOVwq5yKC3DpsKSw4Q' name='Xc8K2wo1qw6LDlsK5di4yw6ZvwpnCscKKwq4Kw5zDj8Ke' type=
             'text'/></p>
                            <p class='nf5d04a8cc45230d632e9895fc20bd60897ac891f'><label for='XcsK2wo1qw6LDlsK7d8O4OsO7PsOVwq5yKC3DpsKSw4Q'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XcsK2wo1qw6LDlsK7d8O4OsO7PsOVwq5yKC3DpsKSw4Q' name='Xc8K2wo1qw6LDlsK4di4yw6ZvwpnCscKKwq4Kw5zDj8Ke' type=
             'text'/></p>
                        Briefly describe the problem (required):
                        <input name="XfsK6wod3w6TDncOgNsK8wrV6wqNHwqZtw5IAwqDDsQI" type="text" required>
                    </div>
                </div>
                <div class="column small-12">
                    <div class="upload-text">Upload screenshot of ad (required):</div>
                    <div id='upload-it'>
                        <a href="#" onclick="return false">Select a file</a>, or drag & drop file here.
                    </div>
                    <div id="upload-it-placeholder"></div> 

                    <div class="dropzone-previews" style="display: none"></div>
                    <div class="dz-message" style="display: none"></div> 
                    
                    <div id="dropzone-preview-template" style="display: none">
                        <div class="dz-preview dz-file-preview">
                            <img data-dz-thumbnail src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt=""/>
                            <div class="dz-success-mark"><span>✔</span></div>
                            <div class="dz-error-mark"><span>✘</span></div>
                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                        </div>
                    </div>
                </div>
                <div class="column small-12">
                    <u>Screenshot instructions:</u>
                    
                    <a data-external target=_blank href="http://windows.microsoft.com/en-us/windows/take-screen-capture-print-screen#take-screen-capture-print-screen=windows-8">Windows</a>
                    
                </div>
                <div class="row small-12">
                    <div class="column large-5 small-6">
                        <p>
                            <u>Click URL instructions:</u><br>
                            Right-click on the ad, choose "Copy Link", then paste here &rarr;<br>
                            (This may not be possible with some types of ads)
                        </p>
                        <a class="more-info" href="https://sourceforge.net/p/forge/documentation/Report%20a%20problem%20with%20Ad%20content/" target="_blank">More information about our ad policies</a>
                    </div>
                    <div class="column large-7 small-6">
                        <p>Please provide the ad click URL, if possible:
                        <input name="XfMK9wo5tw6TDhMOWM8K6wrAlK8KZwrMhw49TR8KPwqM" type="url">
                        </p>
                        <textarea id="gpt-info" name="XccK6woNww6bCn2_CqDt:w7s8fsOPK8KzbcObwqNQ"></textarea>
                        <input class="button" type="submit" id="btn-blockthis-submit" value="Submit Report">
                    </div>
                </div>
            </form>
        </div>
    </div>

        

        <script src="//ads.pro-market.net/ads/scripts/site-143572.js"></script>
        
<div id="newsletter-floating" class="sandiego">
    
    <h2>Get latest updates about Open Source Projects, Conferences and News.</h2>
    <a class="button blue" href="/user/newsletters?source=floating">Sign Up</a>
    
    <a id="btn-float-close">No, Thank you</a>
</div>

        

    
        
<script src="//a.fsdn.com/con/js/min/sf.sandiego-base.js?1584480249"></script>


        
<script src="//a.fsdn.com/con/js/min/sf.sandiego-foundation-base.js?1584480249"></script>



    <script>
        SF.pspRedirect = true;
        SF.pdlpRedirect = true; //pdlp trafficking %row is active, and its ROW.

        SF.downloadRedirectDelay = 40000;
        SF.cantDownload = false;
        SF.countdownDisplay = 'ProgressionDisplayCircle';

        $.extend(SF, {"downloadDelay": 5000, "noCountDown": false, "shortname": "phpmailer"});
            SF.Ads.enableLeadgenResize = true;
    </script>


        

        <script>
            /* global Foundation */
            $(document).foundation();
            Foundation.Triggers.forceListenersNow();
        </script>
        <noscript><p><img src="//analytics.slashdotmedia.com/sf.php?idsite=39" style="border:0;" alt="" /></p></noscript><script src="https://www.google.com/recaptcha/api.js?onload=recaptchaLoadCallback&render=explicit" async defer></script><script>
            var _linkedin_data_partner_id = "97055";
            </script><script>
            (function(){var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})();
            </script>
            <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=97055&fmt=gif" />
            </noscript><script type="text/javascript">
            bizx.cmp.ifConsent('all', 'all', function () {
               /*jshint ignore:start*/
               adroll_adv_id = "3QEU55AVURGVNFYKGPRLHU";
               adroll_pix_id = "EPGGWMNOENDCJMRYE2IIFV";
               (function () {
                   var _onload = function(){
                       if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
                       if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
                       var scr = document.createElement("script");
                       var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                       scr.setAttribute('async', 'true');
                       scr.type = "text/javascript";
                       scr.src = host + "/j/roundtrip.js";
                       ((document.getElementsByTagName('head') || [null])[0] ||
                           document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                   };
                   if (window.addEventListener) {window.addEventListener('load', _onload, false);}
                   else {window.attachEvent('onload', _onload)}
                   _onload(); 
               }());
               /*jshint ignore:end*/
            });
            </script>
    
    
<script src="//a.fsdn.com/con/js/min/sf.sandiego-dwnld.js?1584480249"></script>


    




        
        








        
    </body>
</html>