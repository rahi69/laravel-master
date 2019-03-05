<!DOCTYPE html>
<!--[if lt IE 9]>      <html class="no-js no-touch lt-ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js no-touch lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->


<html class="no-js no-touch front-page" lang="en"> <!--<![endif]-->
<head>
    <!--  S = Kenny -->
    <!-- 					     -->
    <!--  Interested in code, web design and web development?  Check out our bestselling books on Web Programming: -->
    <!--  HTML & CSS by Jon Duckett :  https://www.waterstones.com/book/html-and-css/jon-duckett/9781118008188 -->
    <!--  Python in Easy Steps by Mike McGrath : https://www.waterstones.com/book/python-in-easy-steps/mike-mcgrath/9781840785968 -->
    <!--  PHP & MYSQL in Easy Steps by Mike McGrath : https://www.waterstones.com/book/php-and-mysql-in-easy-steps/mike-mcgrath/9781840785371 -->
    <!--  Javascript: The Good Parts by Douglas Crockford : https://www.waterstones.com/book/javascript-the-good-parts/douglas-crockford/9780596517748 -->
    <!--  Learning Python with Raspberry Pi by Alex Bradbury : https://www.waterstones.com/book/learning-python-with-raspberry-pi/alex-bradbury/ben-everard/9781118717059 -->
    <!--  AngularJS: Up and Running by Shyam Seshadri :  https://www.waterstones.com/book/angularjs-up-and-running/shyam-seshadri/brad-green/9781491901946-->

    <!-- 					     -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" ><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQUHVlRRDxABUVlbAQUPXg=="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(21),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(22),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError",l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){M++,N=y.hash,this[u]=g.now()}function o(){M--,y.hash!==N&&i(0,!0);var t=g.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+y,e])}function a(t,e){t.on(e,function(){this[e]=g.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,y=w.location,g=t("loader");if(w[v]&&g.xhrWrappable){var b=t(10),x=t(11),E=t(8),O=t(6),P=t(13),R=t(7),T=t(14),L=t(9),j=t("ee"),S=j.get("tracer");t(15),g.features.spa=!0;var N,M=0;j.on(u,r),j.on(p,r),j.on(d,o),j.on(l,o),j.buffer([u,d,"xhr-done","xhr-resolved"]),O.buffer([u]),P.buffer(["setTimeout"+c,"clearTimeout"+s,u]),T.buffer([u,"new-xhr","send-xhr"+s]),R.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),b.buffer([u]),x.buffer(["propagate",p,l,"executor-err","resolve"+s]),S.buffer([u,"no-"+u]),L.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(T,"send-xhr"+s),a(j,"xhr-resolved"),a(j,"xhr-done"),a(R,m+s),a(R,m+"-done"),a(L,"new-jsonp"),a(L,"jsonp-end"),a(L,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,M>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(8);var b=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof b&&(this.bstStart=g.now())}),o.on(v,function(t,e){var n=t[0];n instanceof b&&i("bst",[n,e,this.bstStart,g.now()])}),a.on(m,function(t,e,n){this.bstStart=g.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+l,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(24)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=r.apply(this,arguments);return o.emit(n+"start",arguments,t),t.then(function(e){return o.emit(n+"end",[null,e],t),e},function(e){throw o.emit(n+"end",[e],t),e})})}var o=t("ee").get("fetch"),i=t(21);e.exports=o;var a=window,s="fetch-",c=s+"body-",f=["arrayBuffer","blob","json","text","formData"],u=a.Request,d=a.Response,p=a.fetch,l="prototype";u&&d&&p&&(i(f,function(t,e){r(u[l],e,c),r(d[l],e,c)}),r(a,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t(24)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],p),c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t(24)(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-"),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t(24)(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=a.context(),n=s(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t(24),a=t("ee").get("promise"),s=i(a),c=t(21),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),s=f.resolve(i);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this),t[1]=s(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),s.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=s(t[0],"cb-",this),t[1]=s(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t(24)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(24)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):v?v(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t(24)(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];e.exports=u;var b=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(l,b),b.prototype=l.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!v&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=a.now()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(e.cat=c.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(16),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,p=t("id"),l=t(19),h=t(18),m=window.XMLHttpRequest;a.features.xhr=!0,t(14),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,l&&(l>34||l<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<d;s++)e.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)})}},{}],16:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],17:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(21),s=t(22),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],18:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],19:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],20:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],21:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],22:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],23:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],24:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(22),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],s])}u(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],s),d}finally{u(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<e.length;c++)s=e[c],a=t[s],r(a)||(t[s]=n(a,f?s+o:o,i,s))}function u(n,r,o){if(!c||e){var i=c;c=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}c=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),s=m(n),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[g[n]];return d&&d.push([b,n,r,a]),a}}function l(t,e){y[t]=m(t).concat(e)}function h(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return y[t]||[]}function v(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",g[n]=e,e in u||(u[e]=[])})}var y={},g={},b={on:l,addEventListener:l,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var s="nr@context",c=t("gos"),f=t(21),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=x.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(g,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()+x.offset],null,"api");var n=l.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-x.offset}var s=(new Date).getTime(),c=t("handle"),f=t(21),u=t("ee"),d=t(20),p=window,l=p.document,h="addEventListener",m="attachEvent",v=p.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:v,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1118.min.js"},b=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),x=e.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:b,userAgent:d};t(17),l[h]?(l[h]("DOMContentLoaded",i,!1),p[h]("load",r,!1)):(l[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,O=t(23)},{}]},{},["loader",2,15,5,3,4]);</script>
    <meta name="og:type" content="website" >
    <meta name="og:url" content="https://www.waterstones.com/" >
    <meta name="og:image" content="https://static.waterstones.com/1.5.40/img/waterstones-logo.png" >
    <meta name="og:title" content="Buy books, stationery and gifts, online and in store | Waterstones" >
    <meta name="description" content="Discover our full range of books at Waterstones.com. Buy online with Free UK Delivery on Orders Over £20 or Click &amp; Collect within hours.

waterstones.com" >
    <meta name="og:description" content="Discover our full range of books at Waterstones.com. Buy online with Free UK Delivery on Orders Over £20 or Click &amp; Collect within hours.

waterstones.com" >
    <meta name="keywords" content="books, buy books, books online, paperback books, waterstones.com" >

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Waterstones">

    <meta name="HandheldFriendly" content="true">
    <meta name="p:domain_verify" content="d6bfa3b9cce920407c86840c9e5470e7"/>
    <meta name="msapplication-tap-highlight" content="no"/>


    <title>Buy books, stationery and gifts, online and in store | Waterstones</title>


    <link href="https://static.waterstones.com/1.5.40/css/bundle.css" media="all" rel="stylesheet" type="text/css" >
    <link href="https://static.waterstones.com/1.5.40/css/print.css" media="print" rel="stylesheet" type="text/css" >

    <!--[if lt IE 9]>
    <script src="https://static.waterstones.com/1.5.40/js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript" src="https://static.waterstones.com/1.5.40/js/bundle.js"></script>
    <script type="text/javascript" src="https://static.waterstones.com/1.5.40/js/ecommerce.js"></script>

    <!--[if lte IE 9]>
    <script src="https://static.waterstones.com/1.5.40/js/jquery.placeholder.js"></script>
    <![endif]-->



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrOnNff8I7i7Uov8GSBs_ZaN2743AxlmE"></script>


    <script>
        ws_dl = [{"gtm-user_id":"","gtm-user_logged_in":"No","gtm-waterstones_card_number":"","gtm-waterstones_cardholder":"No","gtm-page_type":"index\/index","gtm-session_id":"iru4tgu0ctk0op0vcdltg4he05","gtm-user_ip":"188.208.57.54"}]
    </script>


    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-7951506-1', 'auto');ga('require', 'GTM-PZMM84K');</script>




    <script>(function(w,d,s,l,i){ w[l]=w[l]||[];w[l].push({ 'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','ws_dl','GTM-N66L6Q');</script>

    <link rel="shortcut icon" type="image/png" href="https://static.waterstones.com/1.5.40/img/favicon.png">
    <link rel="icon" type="image/png" href="https://static.waterstones.com/1.5.40/img/favicon.png">

    <link rel="icon" sizes="180x180" href="https://static.waterstones.com/1.5.40/img/touch-icon-180x180.png">
    <link rel="apple-touch-icon-precomposed"
          href="https://static.waterstones.com/1.5.40/img/apple-touch-icon-180x180-precomposed.png">

    <link rel="publisher" href="https://plus.google.com/104518605237134368274">


</head>

<body class=" ">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N66L6Q"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="main-container">

    <header id="masthead" class="">
        <div id="header-bar" class="header-bar">
            <div class="row">
                <div class="right-menu span7 tablet-span6 mobile-span12">
                    <ul>
                        <li class="nav-account"><a href="/signin?ov=1&continue=/">Sign In / Register</a></li>
                        <li class="nav-plus"><a href="/plus"></a></li>
                        <li class="nav-wish-lists"><a href="/account/lists" >Wish list</a></li>
                    </ul>
                </div>
                <div class="right-menu navbar-redesign span5 tablet-span6 mobile-hide">
                    <ul>
                        <li class="nav-shops-li">
                            <a href="/shops" class="nav-shops">Shop Finder</a>
                        </li>
                        <li>
                            <a href="/help">Help</a>
                        </li>
                        <li>
                            <a href="/events">Events</a>
                        </li>
                        <li>
                            <a href="/blog">Blog</a>
                        </li>
                        <li>
                            <a href="/win">Win</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row inner" id="main-logos">
            <div class="span12">
                <a class="logo" href="/">Waterstones</a>
            </div>
        </div>
        <div class="main-nav-holder">

            <a id="nav-menu-button" class="nav-trigger-button">
                <div>MENU</div>
                <span></span>
            </a>
            <a href="/shops" class="nav-shop-finder">
                <div>SHOPS</div>
            </a>
            <a id="nav-menu-search" class="search-trigger-button icon">
                <div>SEARCH</div>
                <span></span>
            </a>

            <div class="main-nav ">
                <div class="row">
                    <div class="span12">
                        <nav class="main-nav-bar">
                            <div class="navs-container desktop-navs">
                                <ul class="navs">
                                    <li>
                                        <a class="nav-item-new js-nav-item nav-item  "
                                           data-content="NEW" data-subnav="20"
                                           href="/campaign/new-books"
                                        >
                                            New
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-bestsellers js-nav-item nav-item  "
                                           data-content="BESTSELLERS" data-subnav="19"
                                           href="/books/bestsellers "
                                        >
                                            Bestsellers
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-fiction js-nav-item nav-item  has-dropdown"
                                           data-content="FICTION" data-subnav="11"
                                           href="/category/fiction"
                                        >
                                            Fiction
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-non-fiction js-nav-item nav-item  has-dropdown"
                                           data-content="NON-FICTION" data-subnav="12"
                                           href="/non-fiction-books"
                                        >
                                            Non-Fiction
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-children&#039;s js-nav-item nav-item  has-dropdown"
                                           data-content="CHILDREN&#039;S" data-subnav="13"
                                           href="/category/childrens-teenage"
                                        >
                                            Children&#039;s
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-stationery &amp; gifts js-nav-item nav-item  has-dropdown"
                                           data-content="STATIONERY &amp; GIFTS" data-subnav="14"
                                           href="/category/stationery-gifts"
                                        >
                                            Stationery &amp; Gifts
                                        </a>
                                    </li>
                                </ul>

                                <ul class="subnavs">
                                    <li class="subnav" data-id="11">
                                        <div class="row">
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="44" data-navid="11"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Highlights</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="https://www.waterstonesgiftcards.com/"
                                                               target="_blank">Gift Cards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/special-editions/sort/pub-date-desc"
                                                            >Signed &amp; Special Editions</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/book-awards"
                                                            >Book Awards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/blog"
                                                            >Book Blog</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/books-of-the-month"
                                                            >Books of the Month</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/cultural-highlights"
                                                            >Cultural Highlights</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/new-books"
                                                            >New &amp; Coming Soon</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="37" data-navid="11"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/fiction">Fiction</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/poetry-drama-criticism/anthologies"
                                                            >Anthologies and Short Stories</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/audiobook-cds"
                                                            >CD Audiobooks</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/fiction/classic-fiction"
                                                            >Classics</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/poetry-drama-criticism/classical-texts"
                                                            >Classical Texts</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/fiction/fiction-in-translation"
                                                            >Fiction in Translation</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/fiction/historical-fiction"
                                                            >Historical Fiction</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/poetry-drama-criticism"
                                                            >Poetry, Drama &amp; Literary Criticism</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/romance-erotica"
                                                            >Romance</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="38" data-navid="11"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/crime-thrillers-mystery">Crime</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/british-library-crime-classics"
                                                            >British Library Classics</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/crime-thrillers-mystery/crime-mystery/classic-crime"
                                                            >Classic Crime</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/crime-thrillers-mystery/crime-mystery/historical-mysteries"
                                                            >Historical Crime</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/crime-thrillers-mystery/thrillers"
                                                            >Thrillers</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/crime-thrillers-mystery/true-crime"
                                                            >True Crime</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="39" data-navid="11"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/science-fiction-fantasy-horror">Sci-fi &amp; Fantasy</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/science-fiction-fantasy-horror/science-fiction"
                                                            >Science Fiction</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/science-fiction-fantasy-horror/fantasy"
                                                            >Fantasy</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/science-fiction-fantasy-horror/horror-ghost-stories"
                                                            >Horror</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/graphic-novels-manga"
                                                            >Graphic Novels &amp; Manga</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/game-of-thrones-books"
                                                            >A Game of Thrones</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/doctor-who-books"
                                                            >Doctor Who</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/science-fiction-fantasy-horror/science-fiction/star-wars"
                                                            >Star Wars</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="subnav" data-id="12">
                                        <div class="row">
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="48" data-navid="12"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Highlights</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="https://www.waterstonesgiftcards.com/"
                                                               target="_blank">Gift Cards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/special-editions/sort/pub-date-desc"
                                                            >Signed &amp; Special Editions</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/book-awards"
                                                            >Book Awards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/blog"
                                                            >Book Blog</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/books-of-the-month"
                                                            >Books of the Month</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/cultural-highlights"
                                                            >Cultural Highlights</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/new-books"
                                                            >New &amp; Coming Soon</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="46" data-navid="12"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/non-fiction-books">Non-Fiction Books</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/art-fashion-photography"
                                                            >Art, Fashion &amp; Photography</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/popular-science-nature/popular-science/popular-astronomy-and-space"
                                                            >Astronomy &amp; Space</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/biography-true-stories"
                                                            >Biography &amp; True Stories</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/business-finance-law"
                                                            >Business, Finance &amp; Law</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/audiobook-cds"
                                                            >CD Audiobooks</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/computing-internet"
                                                            >Computing &amp; Internet</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/entertainment"
                                                            >Entertainment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="80" data-navid="12"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/food-drink"
                                                            >Food &amp; Drink</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/health-lifestyle"
                                                            >Health &amp; Lifestyle</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/history"
                                                            >History</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/hobbies-quizzes-games"
                                                            >Hobbies, Quizzes &amp; Games</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/home-garden"
                                                            >Home &amp; Garden</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/humour"
                                                            >Humour</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/language-reference"
                                                            >Language &amp; Reference</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/spirituality-beliefs/mind-body-and-spirit"
                                                            >Mind, Body and Spirit</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/popular-science-nature/nature-natural-history"
                                                            >Nature Writing</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="79" data-navid="12"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/popular-science-nature/pets"
                                                            >Pets</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/spirituality-beliefs/philosophy"
                                                            >Philosophy</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/politics-society-education/politics-government"
                                                            >Politics</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/popular-science-nature/popular-science"
                                                            >Popular Science</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/science-technology-medicine"
                                                            >Science, Technology &amp; Medicine</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/spirituality-beliefs"
                                                            >Spirituality &amp; Beliefs</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/sports-leisure"
                                                            >Sports</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/transport-general-interest"
                                                            >Transport</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/travel-maps"
                                                            >Travel &amp; Maps</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/crime-thrillers-mystery/true-crime"
                                                            >True Crime</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="subnav" data-id="13">
                                        <div class="row">
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="51" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Highlights</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="https://www.waterstonesgiftcards.com/"
                                                               target="_blank">Gift Cards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/special-editions/sort/pub-date-desc"
                                                            >Signed &amp; Special Editions</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/book-awards"
                                                            >Book Awards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/blog"
                                                            >Book Blog</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/books-of-the-month"
                                                            >Books of the Month</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/cultural-highlights"
                                                            >Cultural Highlights</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/new-books"
                                                            >New &amp; Coming Soon</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/cultural-highlights/book-awards/the-waterstones-childrens-book-prize"
                                                            >Waterstones Children&#039;s Book Prize</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/waterstones-childrens-laureate"
                                                            >Waterstones Children&#039;s Laureate</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="52" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Age Group</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/baby-and-toddler"
                                                            >Baby &amp; Toddler</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/ages-5-8"
                                                            >Ages 5 to 8</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/ages-9-12"
                                                            >Ages 9 to 12</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/teen-and-young-adult"
                                                            >Teenage / Young Adult</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="50" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Popular Categories</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/early-learning"
                                                            >Early learning</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/fiction"
                                                            >Children&#039;s Fiction</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/hobbies-interests"
                                                            >Hobbies &amp; Interests</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/interactive-activity-books"
                                                            >Interactive &amp; Activity Books</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/education"
                                                            >Learning &amp; Education</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/poetry-and-anthologies"
                                                            >Poetry &amp; Anthologies</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/childrens-teenage/reference"
                                                            >Reference</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="77" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Toys, Games &amp; Stationery</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/childrens-stationery"
                                                            >Children&#039;s Stationery</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/childrens-crafts-hobbies/colouring-painting"
                                                            >Colouring &amp; Painting</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/childrens-crafts-hobbies"
                                                            >Crafts &amp; Hobbies</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/childrens-toys-and-games/educational-games"
                                                            >Educational Toys &amp; Games</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/lego"
                                                            >LEGO ®</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/childrens-toys-and-games/plush-and-soft-toys/jelly-cat"
                                                            >Jelly Cat</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/childrens-toys-and-games/plush-and-soft-toys"
                                                            >Soft Toys</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="84" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Characters, Friends &amp; Series</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/series/the-gruffalo"
                                                            >The Gruffalo</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/series/guess-how-much-i-love-you"
                                                            >Guess How Much I Love You</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/harry-potter-books"
                                                            >Harry Potter</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/series/paddington"
                                                            >Paddington</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/series/peppa-pig"
                                                            >Peppa Pig</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="78" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href=""
                                                            ></a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/beatrix-potter"
                                                            >Peter Rabbit</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/series/the-very-hungry-caterpillar"
                                                            >The Very Hungry Caterpillar</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/liz-pichon/24153"
                                                            >Tom Gates</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/jeff-kinney/50442"
                                                            >Wimpy Kid</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/series/winnnie-the-pooh"
                                                            >Winnie the Pooh</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="53" data-navid="13"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Popular Authors</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/roald-dahl-books"
                                                            >Roald Dahl</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/julia-donaldson"
                                                            >Julia Donaldson</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/beatrix-potter"
                                                            >Beatrix Potter</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/harry-potter-books"
                                                            >J.K. Rowling</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/david-walliams"
                                                            > David Walliams</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/author/jacqueline-wilson"
                                                            >Jacqueline Wilson</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href=""
                                                            > </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="subnav" data-id="14">
                                        <div class="row">
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="81" data-navid="14"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                        <span class="name ">Highlights</span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/sale-2018"
                                                            >Sale</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="https://www.waterstonesgiftcards.com/"
                                                               target="_blank">Gift Cards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/special-editions/sort/pub-date-desc"
                                                            >Signed and Special Editions</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/cultural-highlights/book-awards"
                                                            >Book Awards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/blog"
                                                            >Book Blog</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/books-of-the-month"
                                                            >Books of the Month</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/cultural-highlights"
                                                            >Cultural Highlights</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/new-books"
                                                            >New and Coming Soon</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="73" data-navid="14"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/stationery-gifts/gifts">Gifts</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/hobbies-quizzes-games/adult-colouring-books"
                                                            >Adult Colouring Books</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/gifts/gadgets-technology"
                                                            >Gadgets &amp; Technology</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/help/gift-cards-and-vouchers/32"
                                                            >Gift Cards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/min_price/0/max_price/5"
                                                            >Gifts Under £5</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/home-kitchen-garden"
                                                            >Home, Kitchen &amp; Garden</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/gifts/literary-gifts"
                                                            >Literary Gifts</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/gifts/penguin-collection"
                                                            >Penguin Collection</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/campaign/special-editions/sort/pub-date-desc"
                                                            >Special Editions</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/book-accessories/tote-bags"
                                                            >Tote Bags</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="74" data-navid="14"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/toys-games">Toys &amp; Games</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/games/board-games"
                                                            >Board Games</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/games/card-games"
                                                            >Card Games</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/childrens-toys-and-games/educational-games"
                                                            >Educational Toys and Games</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/childrens-toys-and-games/plush-and-soft-toys/jelly-cat"
                                                            >Jelly Cat</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/jigsaw-puzzles"
                                                            >Jigsaw Puzzles</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/lego"
                                                            >LEGO ®</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/childrens-toys-and-games/plush-and-soft-toys"
                                                            >Soft Toys</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/trading-cards"
                                                            >Trading Cards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/travel-games"
                                                            >Travel Games</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/games/trivia-games"
                                                            >Trivia Games</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="72" data-navid="14"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/stationery-gifts/">Stationery</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/calendars-and-diaries/wall-calendars"
                                                            >2019 Calendars</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/toys-games/arts-and-crafts"
                                                            >Arts &amp; Crafts</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/cards"
                                                            >Cards, Postcards &amp; Notecards</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/childrens-crafts-hobbies"
                                                            >Children&#039;s Crafts &amp; Hobbies</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/childrens-stationery"
                                                            >Children&#039;s Stationery</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/calendars-and-diaries/full-year-diaries"
                                                            >Full Year Diaries</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/notebooks-journals"
                                                            >Notebooks &amp; Journals</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/calendars-and-diaries/mid-year-diaries"
                                                            >Mid-year Diaries</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/notebooks-journals/moleskine-notebooks"
                                                            >Moleskine Notebooks</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/stationery-equipment"
                                                            >Stationery Equipment</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/pens-and-pencils"
                                                            >Pens &amp; Pencils</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-wrap span3 alpha omega"
                                                 data-id="82" data-navid="14"
                                                 data-colour="#5c5c5c" style="color: #5c5c5c">
                                                <div class="span12">
                                                    <div class="nav-header">
                                                                                <span class="name nav-header-link"><a
                                                                                            href="/category/stationery-gifts/book-accessories">Book Accessories</a></span>
                                                    </div>

                                                    <ul>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/book-accessories/book-lights-and-lamps"
                                                            >Book Lights and Lamps</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/book-accessories/bookmarks"
                                                            >Bookmarks</a>
                                                        </li>
                                                        <li class="subnav-item"
                                                        >
                                                            <a class="name"
                                                               href="/category/stationery-gifts/book-accessories/magnifiers-and-reading-glasses"
                                                            >Reading Glasses &amp; Magnifiers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="navs-container mobile-navs">
                                <ul class="navs">
                                    <li>
                                        <a class="nav-item-new js-nav-item nav-item "
                                           data-subnav="324" href="https://www.waterstones.com/campaign/new-books"
                                        >
                                            New
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-bestsellers js-nav-item nav-item "
                                           data-subnav="310" href="https://www.waterstones.com/books/bestsellers"
                                        >
                                            BESTSELLERS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-highlights js-nav-item nav-item has-dropdown"
                                           data-subnav="295"  >
                                            Highlights
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-fiction js-nav-item nav-item has-dropdown"
                                           data-subnav="243"  >
                                            Fiction
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-children&#039;s js-nav-item nav-item has-dropdown"
                                           data-subnav="272"  >
                                            Children&#039;s
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-non-fiction js-nav-item nav-item has-dropdown"
                                           data-subnav="251"  >
                                            Non-Fiction
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-stationery &amp; gifts js-nav-item nav-item has-dropdown"
                                           data-subnav="344"  >
                                            Stationery &amp; Gifts
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-cd audiobooks js-nav-item nav-item "
                                           data-subnav="525" href="/audiobook-cds"
                                        >
                                            CD Audiobooks
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-special editions js-nav-item nav-item "
                                           data-subnav="415" href="/campaign/special-editions/sort/pub-date-desc"
                                        >
                                            Special Editions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-shop finder js-nav-item nav-item "
                                           data-subnav="302" href="/bookshops"
                                        >
                                            Shop Finder
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-help js-nav-item nav-item has-dropdown"
                                           data-subnav="526"  >
                                            Help
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-events js-nav-item nav-item "
                                           data-subnav="303" href="/events"
                                        >
                                            Events
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-book blog js-nav-item nav-item "
                                           data-subnav="307" href="/blog"
                                        >
                                            Book Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-competitions and prize draws js-nav-item nav-item "
                                           data-subnav="420" href="/win"
                                        >
                                            COMPETITIONS AND PRIZE DRAWS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-sign in js-nav-item nav-item "
                                           data-subnav="241" href="/account"
                                        >
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item-home js-nav-item nav-item "
                                           data-subnav="242" href="/"
                                        >
                                            Home
                                        </a>
                                    </li>

                                </ul>

                                <ul class="subnavs">
                                    <li class="subnav" data-id="528">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-about us js-nav-item nav-item "
                                                   data-subnav="535"
                                                   href="/help/about-us/44"
                                                >
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-affiliate programme js-nav-item nav-item "
                                                   data-subnav="536"
                                                   href="/help/affiliate-programme/45"
                                                >
                                                    Affiliate Programme
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book trust js-nav-item nav-item "
                                                   data-subnav="537"
                                                   href="/help/book-trust/49"
                                                >
                                                    Book Trust
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-recycling electrical equipment js-nav-item nav-item "
                                                   data-subnav="538"
                                                   href="/help/recycling-electrical-equipment/40"
                                                >
                                                    Recycling Electrical Equipment
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-stamp card js-nav-item nav-item "
                                                   data-subnav="539"
                                                   href="/help/stamp-card/187"
                                                >
                                                    Stamp Card
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones children&#039;s laureate js-nav-item nav-item "
                                                   data-subnav="540"
                                                   href="/help/waterstones-children&#039;s-laureate/347"
                                                >
                                                    Waterstones Children&#039;s Laureate
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="529">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-careers at waterstones js-nav-item nav-item "
                                                   data-subnav="541"
                                                   href="/help/careers-at-waterstones/47"
                                                >
                                                    Careers at Waterstones
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-job applicant privacy notice js-nav-item nav-item "
                                                   data-subnav="542"
                                                   href="/help/job-applicant-privacy-notice/1404"
                                                >
                                                    Job Applicant Privacy Notice
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="530">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-contact us js-nav-item nav-item "
                                                   data-subnav="543"
                                                   href="/help/contact-us/28"
                                                >
                                                    Contact Us
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-event tickets js-nav-item nav-item "
                                                   data-subnav="544"
                                                   href="/help/event-tickets/50"
                                                >
                                                    Event Tickets
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="531">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-how to get published js-nav-item nav-item "
                                                   data-subnav="545"
                                                   href="/help/how-to-get-published/156"
                                                >
                                                    How To Get Published
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-independent publishers js-nav-item nav-item "
                                                   data-subnav="546"
                                                   href="/help/independent-publishers/48"
                                                >
                                                    Independent Publishers
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="532">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-accessibility js-nav-item nav-item "
                                                   data-subnav="547"
                                                   href="/help/accessibility/5"
                                                >
                                                    Accessibility
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-account sales js-nav-item nav-item "
                                                   data-subnav="548"
                                                   href="/help/account-sales/11"
                                                >
                                                    Account Sales
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-click &amp; collect js-nav-item nav-item "
                                                   data-subnav="549"
                                                   href="/help/click-&amp;-collect/27"
                                                >
                                                    Click &amp; Collect
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-delivery options js-nav-item nav-item "
                                                   data-subnav="550"
                                                   href="/help/delivery-options/19"
                                                >
                                                    Delivery Options
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-ebooks &amp; mp3 audio downloads js-nav-item nav-item "
                                                   data-subnav="551"
                                                   href="/help/ebooks-&amp;-mp3-audio-downloads/836"
                                                >
                                                    eBooks &amp; MP3 Audio Downloads
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-free uk delivery js-nav-item nav-item "
                                                   data-subnav="552"
                                                   href="/help/free-uk-delivery/13"
                                                >
                                                    Free UK Delivery
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards and vouchers js-nav-item nav-item "
                                                   data-subnav="553"
                                                   href="/help/gift-cards-and-vouchers/32"
                                                >
                                                    Gift Cards and Vouchers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-international shoppers js-nav-item nav-item "
                                                   data-subnav="554"
                                                   href="/help/international-shoppers/53"
                                                >
                                                    International Shoppers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-online pricing and payments js-nav-item nav-item "
                                                   data-subnav="555"
                                                   href="/help/online-pricing-and-payments/35"
                                                >
                                                    Online Pricing and Payments
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-returning items js-nav-item nav-item "
                                                   data-subnav="556"
                                                   href="/help/returning-items/41"
                                                >
                                                    Returning Items
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-secure shopping js-nav-item nav-item "
                                                   data-subnav="557"
                                                   href="/help/secure-shopping/43"
                                                >
                                                    Secure Shopping
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-update your browser js-nav-item nav-item "
                                                   data-subnav="558"
                                                   href="/help/update-your-browser/340"
                                                >
                                                    Update Your Browser
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones marketplace js-nav-item nav-item "
                                                   data-subnav="559"
                                                   href="/help/waterstones-marketplace/838"
                                                >
                                                    Waterstones Marketplace
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="533">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="534">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="381">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards js-nav-item nav-item "
                                                   data-subnav="578"
                                                   href="https://www.waterstonesgiftcards.com/"
                                                >
                                                    Gift Cards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book awards js-nav-item nav-item "
                                                   data-subnav="384"
                                                   href="/book-awards"
                                                >
                                                    Book Awards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-books of the month js-nav-item nav-item "
                                                   data-subnav="385"
                                                   href="/books-of-the-month"
                                                >
                                                    Books of the Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-cultural highlights js-nav-item nav-item "
                                                   data-subnav="386"
                                                   href="/category/cultural-highlights"
                                                >
                                                    Cultural Highlights
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-new &amp; coming soon js-nav-item nav-item "
                                                   data-subnav="387"
                                                   href="/campaign/new-books"
                                                >
                                                    New &amp; Coming Soon
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-signed &amp; special editions js-nav-item nav-item "
                                                   data-subnav="388"
                                                   href="/campaign/special-editions/sort/pub-date-desc"
                                                >
                                                    Signed &amp; Special Editions
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="389">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book awards js-nav-item nav-item "
                                                   data-subnav="391"
                                                   href="/book-awards"
                                                >
                                                    Book Awards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book blog js-nav-item nav-item "
                                                   data-subnav="392"
                                                   href="/blog"
                                                >
                                                    Book blog
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-books of the month js-nav-item nav-item "
                                                   data-subnav="393"
                                                   href="/books-of-the-month"
                                                >
                                                    Books of the Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-new &amp; coming soon js-nav-item nav-item "
                                                   data-subnav="394"
                                                   href="/campaign/new-books"
                                                >
                                                    New &amp; Coming Soon
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-signed &amp; special editions js-nav-item nav-item "
                                                   data-subnav="395"
                                                   href="/campaign/special-editions/sort/pub-date-desc"
                                                >
                                                    Signed &amp; Special Editions
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones children&#039;s book prize js-nav-item nav-item "
                                                   data-subnav="507"
                                                   href="/category/cultural-highlights/book-awards/the-waterstones-childrens-book-prize"
                                                >
                                                    Waterstones Children&#039;s Book Prize
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones children&#039;s laureate js-nav-item nav-item "
                                                   data-subnav="471"
                                                   href="/waterstones-childrens-laureate"
                                                >
                                                    Waterstones Children&#039;s Laureate
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards js-nav-item nav-item "
                                                   data-subnav="576"
                                                   href="https://www.waterstonesgiftcards.com/"
                                                >
                                                    Gift Cards
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="396">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book awards js-nav-item nav-item "
                                                   data-subnav="399"
                                                   href="/book-awards"
                                                >
                                                    Book Awards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book blog js-nav-item nav-item "
                                                   data-subnav="400"
                                                   href="/blog"
                                                >
                                                    Book Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-books of the month js-nav-item nav-item "
                                                   data-subnav="401"
                                                   href="/campaign/books-of-the-month"
                                                >
                                                    Books of the Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-cultural highlights js-nav-item nav-item "
                                                   data-subnav="402"
                                                   href="/category/cultural-highlights"
                                                >
                                                    Cultural Highlights
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards js-nav-item nav-item "
                                                   data-subnav="575"
                                                   href="https://www.waterstonesgiftcards.com/"
                                                >
                                                    Gift Cards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-new &amp; coming soon js-nav-item nav-item "
                                                   data-subnav="403"
                                                   href="/campaign/new-books"
                                                >
                                                    New &amp; Coming Soon
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-signed &amp; special editions js-nav-item nav-item "
                                                   data-subnav="404"
                                                   href="/campaign/special-editions/sort/pub-date-desc"
                                                >
                                                    Signed &amp; Special Editions
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="374">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book lights &amp; lamps js-nav-item nav-item "
                                                   data-subnav="375"
                                                   href="/category/stationery-gifts/book-accessories/book-lights-and-lamps"
                                                >
                                                    Book Lights &amp; Lamps
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-bookmarks js-nav-item nav-item "
                                                   data-subnav="376"
                                                   href="/category/stationery-gifts/book-accessories/bookmarks"
                                                >
                                                    Bookmarks
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-reading glasses &amp; magnifiers js-nav-item nav-item "
                                                   data-subnav="377"
                                                   href="/category/stationery-gifts/book-accessories/magnifiers-and-reading-glasses"
                                                >
                                                    Reading Glasses &amp; Magnifiers
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="442">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-fiction home js-nav-item nav-item "
                                                   data-subnav="443"
                                                   href="/category/fiction"
                                                >
                                                    Fiction Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-anthologies and short stories js-nav-item nav-item "
                                                   data-subnav="444"
                                                   href="/category/poetry-drama-criticism/anthologies"
                                                >
                                                    Anthologies and Short Stories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-classics js-nav-item nav-item "
                                                   data-subnav="445"
                                                   href="/category/fiction/classic-fiction"
                                                >
                                                    Classics
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-cd audio js-nav-item nav-item "
                                                   data-subnav="446"
                                                   href="/audiobook-cds"
                                                >
                                                    CD Audio
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-classical texts js-nav-item nav-item "
                                                   data-subnav="447"
                                                   href="/category/poetry-drama-criticism/classical-texts"
                                                >
                                                    Classical Texts
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-fiction in translation js-nav-item nav-item "
                                                   data-subnav="449"
                                                   href="/category/fiction/fiction-in-translation"
                                                >
                                                    Fiction in Translation
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-historical fiction js-nav-item nav-item "
                                                   data-subnav="450"
                                                   href="/category/fiction/historical-fiction"
                                                >
                                                    Historical Fiction
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-poetry, drama &amp; criticism js-nav-item nav-item "
                                                   data-subnav="451"
                                                   href="/category/poetry-drama-criticism"
                                                >
                                                    Poetry, Drama &amp; Criticism
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-romance js-nav-item nav-item "
                                                   data-subnav="452"
                                                   href="/category/romance-erotica"
                                                >
                                                    Romance
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="274">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-baby &amp; toddler js-nav-item nav-item "
                                                   data-subnav="275"
                                                   href="/category/childrens-teenage/baby-and-toddler"
                                                >
                                                    Baby &amp; Toddler
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-ages 5-8 js-nav-item nav-item "
                                                   data-subnav="276"
                                                   href="/category/childrens-teenage/ages-5-8"
                                                >
                                                    Ages 5-8
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-ages 9-12 js-nav-item nav-item "
                                                   data-subnav="277"
                                                   href="/category/childrens-teenage/ages-9-12"
                                                >
                                                    Ages 9-12
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-teenage/young adult js-nav-item nav-item "
                                                   data-subnav="278"
                                                   href="/category/childrens-teenage/teen-and-young-adult"
                                                >
                                                    Teenage/Young Adult
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="354">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-special editions js-nav-item nav-item "
                                                   data-subnav="492"
                                                   href="/campaign/special-editions/sort/pub-date-desc"
                                                >
                                                    Special Editions
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-adult colouring books js-nav-item nav-item "
                                                   data-subnav="490"
                                                   href="/category/hobbies-quizzes-games/adult-colouring-books"
                                                >
                                                    Adult Colouring Books
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gadgets &amp; technology js-nav-item nav-item "
                                                   data-subnav="356"
                                                   href="/category/stationery-gifts/gifts/gadgets-technology"
                                                >
                                                    Gadgets &amp; Technology
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards js-nav-item nav-item "
                                                   data-subnav="491"
                                                   href="/help/gift-cards-and-vouchers/32"
                                                >
                                                    Gift Cards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gifts under £5 js-nav-item nav-item "
                                                   data-subnav="360"
                                                   href="/category/stationery-gifts/min_price/0/max_price/5"
                                                >
                                                    Gifts Under £5
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-home, kitchen &amp; garden js-nav-item nav-item "
                                                   data-subnav="359"
                                                   href="/category/stationery-gifts/home-kitchen-garden"
                                                >
                                                    Home, Kitchen &amp; Garden
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-literary gifts js-nav-item nav-item "
                                                   data-subnav="355"
                                                   href="/category/stationery-gifts/gifts/literary-gifts"
                                                >
                                                    Literary Gifts
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-tote bags js-nav-item nav-item "
                                                   data-subnav="358"
                                                   href="/category/stationery-gifts/book-accessories/tote-bags"
                                                >
                                                    Tote Bags
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-penguin collection js-nav-item nav-item "
                                                   data-subnav="357"
                                                   href="/category/stationery-gifts/gifts/penguin-collection"
                                                >
                                                    Penguin Collection
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="454">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-crime home js-nav-item nav-item "
                                                   data-subnav="455"
                                                   href="/category/crime-thrillers-mystery"
                                                >
                                                    Crime Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-british library classics js-nav-item nav-item "
                                                   data-subnav="456"
                                                   href="/books/search/term/british+library+crime+classics"
                                                >
                                                    British Library Classics
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-classic crime js-nav-item nav-item "
                                                   data-subnav="457"
                                                   href="/category/crime-thrillers-mystery/crime-mystery/classic-crime"
                                                >
                                                    Classic Crime
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-historical crime js-nav-item nav-item "
                                                   data-subnav="458"
                                                   href="/category/crime-thrillers-mystery/crime-mystery/historical-mysteries"
                                                >
                                                    Historical Crime
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-thrillers js-nav-item nav-item "
                                                   data-subnav="460"
                                                   href="/category/crime-thrillers-mystery/thrillers"
                                                >
                                                    Thrillers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-true crime js-nav-item nav-item "
                                                   data-subnav="461"
                                                   href="/category/crime-thrillers-mystery/true-crime"
                                                >
                                                    True Crime
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="421">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-the gruffalo js-nav-item nav-item "
                                                   data-subnav="426"
                                                   href="/series/the-gruffalo"
                                                >
                                                    The Gruffalo
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-guess how much i love you js-nav-item nav-item "
                                                   data-subnav="422"
                                                   href="/series/guess-how-much-i-love-you"
                                                >
                                                    Guess How Much I Love You
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-harry potter js-nav-item nav-item "
                                                   data-subnav="423"
                                                   href="/harry-potter-books"
                                                >
                                                    Harry Potter
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-paddington js-nav-item nav-item "
                                                   data-subnav="472"
                                                   href="/series/paddington"
                                                >
                                                    Paddington
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-peppa pig js-nav-item nav-item "
                                                   data-subnav="425"
                                                   href="/series/peppa-pig"
                                                >
                                                    Peppa Pig
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-peter rabbit js-nav-item nav-item "
                                                   data-subnav="427"
                                                   href="/author/beatrix-potter"
                                                >
                                                    Peter Rabbit
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-the very hungry caterpillar js-nav-item nav-item "
                                                   data-subnav="428"
                                                   href="/series/the-very-hungry-caterpillar"
                                                >
                                                    The Very Hungry Caterpillar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-tom gates js-nav-item nav-item "
                                                   data-subnav="589"
                                                   href="/author/liz-pichon/24153"
                                                >
                                                    Tom Gates
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-wimpy kid js-nav-item nav-item "
                                                   data-subnav="588"
                                                   href="/author/jeff-kinney/50442"
                                                >
                                                    Wimpy Kid
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-winnie the pooh js-nav-item nav-item "
                                                   data-subnav="430"
                                                   href="/series/winnnie-the-pooh"
                                                >
                                                    Winnie the Pooh
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="295">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards js-nav-item nav-item "
                                                   data-subnav="574"
                                                   href="https://www.waterstonesgiftcards.com/"
                                                   target="_blank" >
                                                    Gift Cards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-signed and special editions js-nav-item nav-item "
                                                   data-subnav="498"
                                                   href="/campaign/special-editions/sort/pub-date-desc"
                                                >
                                                    Signed and Special Editions
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book awards js-nav-item nav-item "
                                                   data-subnav="296"
                                                   href="/book-awards"
                                                >
                                                    Book Awards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book blog js-nav-item nav-item "
                                                   data-subnav="297"
                                                   href="/blog"
                                                >
                                                    Book Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-books of the month js-nav-item nav-item "
                                                   data-subnav="330"
                                                   href="/campaign/books-of-the-month"
                                                >
                                                    Books of the Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-cultural highlights js-nav-item nav-item "
                                                   data-subnav="329"
                                                   href="/category/in-the-media"
                                                >
                                                    Cultural Highlights
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones children&#039;s book prize  js-nav-item nav-item "
                                                   data-subnav="583"
                                                   href="/category/cultural-highlights/book-awards/the-waterstones-childrens-book-prize"
                                                >
                                                    Waterstones Children&#039;s Book Prize
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones children&#039;s laureate js-nav-item nav-item "
                                                   data-subnav="405"
                                                   href="/waterstones-childrens-laureate"
                                                >
                                                    Waterstones Children&#039;s Laureate
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="462">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-sci-fi, fantasy &amp; horror home js-nav-item nav-item "
                                                   data-subnav="463"
                                                   href="/category/science-fiction-fantasy-horror"
                                                >
                                                    Sci-fi, Fantasy &amp; Horror Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-science fiction js-nav-item nav-item "
                                                   data-subnav="464"
                                                   href="/category/science-fiction-fantasy-horror/science-fiction"
                                                >
                                                    Science Fiction
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-fantasy js-nav-item nav-item "
                                                   data-subnav="465"
                                                   href="/category/science-fiction-fantasy-horror/fantasy"
                                                >
                                                    Fantasy
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-horror js-nav-item nav-item "
                                                   data-subnav="466"
                                                   href="/category/science-fiction-fantasy-horror/horror-ghost-stories"
                                                >
                                                    Horror
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-graphic novels &amp; manga js-nav-item nav-item "
                                                   data-subnav="467"
                                                   href="/category/graphic-novels-manga"
                                                >
                                                    Graphic Novels &amp; Manga
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-a game of thrones js-nav-item nav-item "
                                                   data-subnav="468"
                                                   href="/category/science-fiction-fantasy-horror/fantasy/a-game-of-thrones"
                                                >
                                                    A Game of Thrones
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-doctor who js-nav-item nav-item "
                                                   data-subnav="469"
                                                   href="/campaign/doctor-who-books"
                                                >
                                                    Doctor Who
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-star wars js-nav-item nav-item "
                                                   data-subnav="470"
                                                   href="/category/science-fiction-fantasy-horror/science-fiction/star-wars"
                                                >
                                                    Star Wars
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="346">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-arts &amp; crafts js-nav-item nav-item "
                                                   data-subnav="353"
                                                   href="/category/toys-games/arts-and-crafts"
                                                >
                                                    Arts &amp; Crafts
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-cards, postcards &amp; notecards  js-nav-item nav-item "
                                                   data-subnav="352"
                                                   href="/category/stationery-gifts/cards"
                                                >
                                                    Cards, Postcards &amp; Notecards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-children&#039;s crafts &amp; hobbies js-nav-item nav-item "
                                                   data-subnav="496"
                                                   href="/category/stationery-gifts/childrens-crafts-hobbies"
                                                >
                                                    Children&#039;s Crafts &amp; Hobbies
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-children&#039;s stationery js-nav-item nav-item "
                                                   data-subnav="497"
                                                   href="/category/stationery-gifts/childrens-stationery"
                                                >
                                                    Children&#039;s Stationery
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-notebooks &amp; journals js-nav-item nav-item "
                                                   data-subnav="347"
                                                   href="/category/stationery-gifts/notebooks-journals"
                                                >
                                                    Notebooks &amp; Journals
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-moleskine notebooks js-nav-item nav-item "
                                                   data-subnav="348"
                                                   href="/category/stationery-gifts/notebooks-journals/moleskine-notebooks"
                                                >
                                                    Moleskine Notebooks
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-stationery equipment js-nav-item nav-item "
                                                   data-subnav="350"
                                                   href="/category/stationery-gifts/stationery-equipment"
                                                >
                                                    Stationery Equipment
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-pens &amp; pencils js-nav-item nav-item "
                                                   data-subnav="351"
                                                   href="/category/stationery-gifts/pens-and-pencils"
                                                >
                                                    Pens &amp; Pencils
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="243">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-highlights js-nav-item nav-item has-dropdown"
                                                   data-subnav="396"
                                                >
                                                    Highlights
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-fiction js-nav-item nav-item has-dropdown"
                                                   data-subnav="442"
                                                >
                                                    Fiction
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-crime js-nav-item nav-item has-dropdown"
                                                   data-subnav="454"
                                                >
                                                    Crime
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-sci-fi, fantasy &amp; horror js-nav-item nav-item has-dropdown"
                                                   data-subnav="462"
                                                >
                                                    Sci-Fi, Fantasy &amp; Horror
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="272">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-highlights js-nav-item nav-item has-dropdown"
                                                   data-subnav="389"
                                                >
                                                    Highlights
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-children&#039;s home js-nav-item nav-item "
                                                   data-subnav="273"
                                                   href="/category/childrens-teenage"
                                                >
                                                    Children&#039;s Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-browse by age group js-nav-item nav-item has-dropdown"
                                                   data-subnav="274"
                                                >
                                                    Browse by Age Group
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-characters, friends &amp; series js-nav-item nav-item has-dropdown"
                                                   data-subnav="421"
                                                >
                                                    Characters, Friends &amp; Series
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-early learning js-nav-item nav-item "
                                                   data-subnav="279"
                                                   href="/category/childrens-teenage/early-learning"
                                                >
                                                    Early Learning
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-children&#039;s fiction js-nav-item nav-item "
                                                   data-subnav="281"
                                                   href="/category/childrens-teenage/fiction"
                                                >
                                                    Children&#039;s Fiction
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-hobbies &amp; interests js-nav-item nav-item "
                                                   data-subnav="282"
                                                   href="/category/childrens-teenage/hobbies-interests"
                                                >
                                                    Hobbies &amp; Interests
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-interactive &amp; activity books js-nav-item nav-item "
                                                   data-subnav="283"
                                                   href="/category/childrens-teenage/interactive-activity-books"
                                                >
                                                    Interactive &amp; Activity Books
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-learning and education js-nav-item nav-item "
                                                   data-subnav="489"
                                                   href="/category/childrens-teenage/education"
                                                >
                                                    Learning and Education
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-poetry &amp; anthologies js-nav-item nav-item "
                                                   data-subnav="285"
                                                   href="/category/childrens-teenage/poetry-and-anthologies"
                                                >
                                                    Poetry &amp; Anthologies
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-popular authors js-nav-item nav-item has-dropdown"
                                                   data-subnav="431"
                                                >
                                                    Popular Authors
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-reference js-nav-item nav-item "
                                                   data-subnav="286"
                                                   href="/category/childrens-teenage/reference"
                                                >
                                                    Reference
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="361">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-toys &amp; games home js-nav-item nav-item "
                                                   data-subnav="440"
                                                   href="/category/toys-games"
                                                >
                                                    Toys &amp; Games Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-board games js-nav-item nav-item "
                                                   data-subnav="362"
                                                   href="/category/toys-games/games/board-games"
                                                >
                                                    Board Games
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-card games js-nav-item nav-item "
                                                   data-subnav="364"
                                                   href="/category/toys-games/games/card-games"
                                                >
                                                    Card Games
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-educational toys and games js-nav-item nav-item "
                                                   data-subnav="493"
                                                   href="/category/toys-games/childrens-toys-and-games/educational-games"
                                                >
                                                    Educational Toys and Games
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-jelly cat js-nav-item nav-item "
                                                   data-subnav="494"
                                                   href="/category/toys-games/childrens-toys-and-games/plush-and-soft-toys/jelly-cat"
                                                >
                                                    Jelly Cat
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-jigsaw puzzles js-nav-item nav-item "
                                                   data-subnav="363"
                                                   href="/category/toys-games/jigsaw-puzzles"
                                                >
                                                    Jigsaw Puzzles
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-lego ® js-nav-item nav-item "
                                                   data-subnav="438"
                                                   href="/category/toys-games/lego"
                                                >
                                                    LEGO ®
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-soft toys js-nav-item nav-item "
                                                   data-subnav="495"
                                                   href="/category/toys-games/childrens-toys-and-games/plush-and-soft-toys"
                                                >
                                                    Soft Toys
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-trading cards js-nav-item nav-item "
                                                   data-subnav="365"
                                                   href="/category/toys-games/trading-cards"
                                                >
                                                    Trading Cards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-trivia games js-nav-item nav-item "
                                                   data-subnav="366"
                                                   href="/category/toys-games/games/trivia-games"
                                                >
                                                    Trivia Games
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-travel games js-nav-item nav-item "
                                                   data-subnav="367"
                                                   href="/category/toys-games/travel-games%20+"
                                                >
                                                    Travel Games
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="251">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-highlights js-nav-item nav-item has-dropdown"
                                                   data-subnav="381"
                                                >
                                                    Highlights
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-non-fiction bestsellers js-nav-item nav-item "
                                                   data-subnav="252"
                                                   href="/non-fiction-books"
                                                >
                                                    Non-Fiction Bestsellers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-art, fashion &amp; photography js-nav-item nav-item "
                                                   data-subnav="253"
                                                   href="/category/art-fashion-photography"
                                                >
                                                    Art, Fashion &amp; Photography
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-astronomy &amp; space js-nav-item nav-item "
                                                   data-subnav="314"
                                                   href="https://www.waterstones.com/category/popular-science-nature/popular-science/popular-astronomy-and-space"
                                                >
                                                    Astronomy &amp; Space
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-biography &amp; true stories js-nav-item nav-item "
                                                   data-subnav="254"
                                                   href="/category/biography-true-stories"
                                                >
                                                    Biography &amp; True Stories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-business, finance &amp; law js-nav-item nav-item "
                                                   data-subnav="255"
                                                   href="/category/business-finance-law"
                                                >
                                                    Business, Finance &amp; Law
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-cd audiobooks js-nav-item nav-item "
                                                   data-subnav="315"
                                                   href="/audiobook-cds"
                                                >
                                                    CD Audiobooks
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-computing &amp; internet js-nav-item nav-item "
                                                   data-subnav="256"
                                                   href="/category/computing-internet"
                                                >
                                                    Computing &amp; Internet
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-entertainment js-nav-item nav-item "
                                                   data-subnav="316"
                                                   href="https://www.waterstones.com/christmas/entertainment"
                                                >
                                                    Entertainment
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-food &amp; drink js-nav-item nav-item "
                                                   data-subnav="257"
                                                   href="/category/food-drink"
                                                >
                                                    Food &amp; Drink
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-health &amp; lifestyle js-nav-item nav-item "
                                                   data-subnav="258"
                                                   href="/category/health-lifestyle"
                                                >
                                                    Health &amp; Lifestyle
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-history js-nav-item nav-item "
                                                   data-subnav="259"
                                                   href="/category/history"
                                                >
                                                    History
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-hobbies, quizzes &amp; games js-nav-item nav-item "
                                                   data-subnav="341"
                                                   href="/category/hobbies-quizzes-games"
                                                >
                                                    Hobbies, Quizzes &amp; Games
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-home &amp; garden js-nav-item nav-item "
                                                   data-subnav="260"
                                                   href="/category/home-garden"
                                                >
                                                    Home &amp; Garden
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-humour js-nav-item nav-item "
                                                   data-subnav="261"
                                                   href="/category/humour"
                                                >
                                                    Humour
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-language &amp; reference js-nav-item nav-item "
                                                   data-subnav="262"
                                                   href="/category/language-reference"
                                                >
                                                    Language &amp; Reference
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-mind, body &amp; spirit js-nav-item nav-item "
                                                   data-subnav="325"
                                                   href="https://www.waterstones.com/category/spirituality-beliefs/mind-body-and-spirit"
                                                >
                                                    Mind, Body &amp; Spirit
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-mindfulness js-nav-item nav-item "
                                                   data-subnav="318"
                                                   href="https://www.waterstones.com/category/spirituality-beliefs/mind-body-and-spirit/mindfulness"
                                                >
                                                    Mindfulness
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-nature writing js-nav-item nav-item "
                                                   data-subnav="319"
                                                   href="https://www.waterstones.com/category/popular-science-nature/nature-natural-history"
                                                >
                                                    Nature Writing
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-pets js-nav-item nav-item "
                                                   data-subnav="321"
                                                   href="https://www.waterstones.com/category/popular-science-nature/pets"
                                                >
                                                    Pets
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-philosophy js-nav-item nav-item "
                                                   data-subnav="326"
                                                   href="https://www.waterstones.com/category/spirituality-beliefs/philosophy"
                                                >
                                                    Philosophy
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-poetry, drama &amp; criticism js-nav-item nav-item "
                                                   data-subnav="264"
                                                   href="/category/poetry-drama-criticism"
                                                >
                                                    Poetry, Drama &amp; Criticism
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-politics, society &amp; education js-nav-item nav-item "
                                                   data-subnav="267"
                                                   href="/category/politics-society-education"
                                                >
                                                    Politics, Society &amp; Education
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-popular science js-nav-item nav-item "
                                                   data-subnav="265"
                                                   href="/category/popular-science-nature/popular-science"
                                                >
                                                    Popular Science
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-science, technology &amp; medicine js-nav-item nav-item "
                                                   data-subnav="266"
                                                   href="/category/science-technology-medicine"
                                                >
                                                    Science, Technology &amp; Medicine
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-sports js-nav-item nav-item "
                                                   data-subnav="269"
                                                   href="/category/sports-leisure"
                                                >
                                                    Sports
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-transport js-nav-item nav-item "
                                                   data-subnav="270"
                                                   href="/category/sports-leisure/transport-general-interest"
                                                >
                                                    Transport
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-travel &amp; maps js-nav-item nav-item "
                                                   data-subnav="271"
                                                   href="/category/travel-maps"
                                                >
                                                    Travel &amp; Maps
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-true crime js-nav-item nav-item "
                                                   data-subnav="343"
                                                   href="/category/crime-thrillers-mystery/true-crime"
                                                >
                                                    True Crime
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="344">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gift cards js-nav-item nav-item "
                                                   data-subnav="577"
                                                   href="https://www.waterstonesgiftcards.com/"
                                                >
                                                    Gift Cards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-stationery &amp; gifts home js-nav-item nav-item "
                                                   data-subnav="345"
                                                   href="/category/stationery-gifts"
                                                >
                                                    Stationery &amp; Gifts Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-book accessories js-nav-item nav-item has-dropdown"
                                                   data-subnav="374"
                                                >
                                                    Book Accessories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-gifts js-nav-item nav-item has-dropdown"
                                                   data-subnav="354"
                                                >
                                                    Gifts
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-full year diaries js-nav-item nav-item "
                                                   data-subnav="509"
                                                   href="/category/stationery-gifts/calendars-and-diaries/full-year-diaries"
                                                >
                                                    Full Year Diaries
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-2019 calendars js-nav-item nav-item "
                                                   data-subnav="573"
                                                   href="/category/stationery-gifts/calendars-and-diaries/wall-calendars"
                                                >
                                                    2019 Calendars
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-stationery js-nav-item nav-item has-dropdown"
                                                   data-subnav="346"
                                                >
                                                    Stationery
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-toys &amp; games js-nav-item nav-item has-dropdown"
                                                   data-subnav="361"
                                                >
                                                    Toys &amp; Games
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="431">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-beatrix potter js-nav-item nav-item "
                                                   data-subnav="434"
                                                   href="/author/beatrix-potter"
                                                >
                                                    Beatrix Potter
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-david walliams js-nav-item nav-item "
                                                   data-subnav="436"
                                                   href="/author/david-walliams"
                                                >
                                                    David Walliams
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-jacqueline wilson js-nav-item nav-item "
                                                   data-subnav="437"
                                                   href="/author/jacqueline-wilson"
                                                >
                                                    Jacqueline Wilson
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-j.k. rowling js-nav-item nav-item "
                                                   data-subnav="435"
                                                   href="/harry-potter-books"
                                                >
                                                    J.K. Rowling
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-julia donaldson js-nav-item nav-item "
                                                   data-subnav="433"
                                                   href="/author/julia-donaldson"
                                                >
                                                    Julia Donaldson
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-roald dahl js-nav-item nav-item "
                                                   data-subnav="432"
                                                   href="/author/roald-dahl-books"
                                                >
                                                    Roald Dahl
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav" data-id="526">
                                        <ul class="navs">
                                            <li class="back">
                                                <a>BACK</a>
                                            </li>
                                            <li>
                                                <a class="nav-item-frequently asked questions js-nav-item nav-item "
                                                   data-subnav="527"
                                                   href="/help"
                                                >
                                                    Frequently asked questions
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-about waterstones js-nav-item nav-item has-dropdown"
                                                   data-subnav="528"
                                                >
                                                    About Waterstones
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-careers js-nav-item nav-item has-dropdown"
                                                   data-subnav="529"
                                                >
                                                    Careers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-contact us js-nav-item nav-item has-dropdown"
                                                   data-subnav="530"
                                                >
                                                    Contact Us
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-publishers &amp; authors js-nav-item nav-item has-dropdown"
                                                   data-subnav="531"
                                                >
                                                    Publishers &amp; Authors
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-shopping with us js-nav-item nav-item has-dropdown"
                                                   data-subnav="532"
                                                >
                                                    Shopping with Us
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-terms &amp; conditions &amp; legal js-nav-item nav-item has-dropdown"
                                                   data-subnav="533"
                                                >
                                                    Terms &amp; Conditions &amp; Legal
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-item-waterstones rewards js-nav-item nav-item has-dropdown"
                                                   data-subnav="534"
                                                >
                                                    Waterstones Rewards
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </nav>

                        <div class="header-basket with-dropdown">
                            <a href="/checkout/basket" class="basket" id="nav_basket">
                                <strong class="basket-count">0</strong>
                                <div>Basket</div>
                            </a>
                            <div class="nav-dropdown nav-dropdown-basket">
                                <div class="inner">
                                    <table class="dropdown-basket-delivery " >
                                        <tr class="deliverymessage">
                                            <td class="image dropdown-basket-delivery-icon"> &nbsp; </td>
                                            <td class="info dropdown-basket-delivery-message">
                                                <div class="incentive-message">Spend another <b><span id="free-delivery-amount">£19.94</span></b> to qualify for free UK delivery.
                                                </div>
                                                <div class="free-message">Your order qualifies for free UK delivery.</div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="table-wrap">


                                        <table class="items" style="display:none">
                                            <tbody>
                                            <tr class="template">
                                                <td class="image">
                                                    <a class="product-image" href="">
                                                        <img src="/images/cover404.png" alt="default image" />
                                                    </a>
                                                </td>
                                                <td class="info">
                                                    <a class="title dotdotdot" href="/"></a>

                                                    <span class="basket-product-price-was" style="display:none; text-decoration: line-through;"></span>
                                                    <span class="basket-product-price-amount" style="display:none"></span>
                                                    <span class="basket-product-unavailable" style="display:none">Unavailable</span>

                                                    <span class="format"></span>
                                                </td>
                                                <td class="qty">
                                                    <form action="/checkout/setbasketitemqty" method="post" class="setquantity-form">
                                                        <input type="hidden" name="productid" value="" class="productid" />
                                                        <input type="hidden" name="redirect" value="/basket" />
                                                        <input type="hidden" name="mode" value="update" />
                                                        <div class="basket-product-update-quantity text-right">
                                                            <input class="basket-product-update-quantity-input input quantity" type="tel" name="quantity" maxlength="3" autocomplete="off" /><br/>
                                                            <button type="submit" class="button-block basket-product-button-remove text-center">Update</button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <table class="items basket-totals" style="display:none">
                                        <tfoot>
                                        <tr>
                                            <td class="count">
                                                0 items                                        </td>
                                            <td class="total text-right">
                                                £0.00
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                    <div class="button-container" style="display:none">
                                        <a href="/checkout/basket" class="button button-teal">Checkout</a>

                                        <div class="clearfix"></div>
                                    </div>

                                    <p class="text-center basket-empty" >
                                        Your basket is empty.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="header-search">
                            <div class="input-search-outer">
                                <form action="/index/search" method="get" class="mainsearchform"
                                      onsubmit="preventEmptySearch(event, this)">
                                    <div class="input-wrap">
                                        <input type="text" placeholder="Title, author, keyword or ISBN"
                                               class="input input-search" name="term" value="">
                                        <button class="input-search-button icon" type="submit"></button>

                                        <div class="autocomplete-target"></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="autocomplete-popout">
                            <ul class="outer-list">
                                <li>
                                    <ul class="inner-list">
                                        <li class="heading">Books</li>
                                        <li class="item">
                                            <span class="title"></span>
                                            <span class="subtitle"></span>
                                        </li>
                                        <li class="item">
                                            <span class="title"></span>
                                            <span class="subtitle"></span>
                                        </li>
                                        <li class="item">
                                            <span class="title"></span>
                                            <span class="subtitle"></span>
                                        </li>
                                        <li class="item">
                                            <span class="title"></span>
                                            <span class="subtitle"></span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>





    <script>
        function stripslashes(str) {
            str = str.replace(/\\'/g, '\'');
            str = str.replace(/\\"/g, '"');
            str = str.replace(/\\0/g, '\0');
            str = str.replace(/\\\\/g, '\\');
            return str;
        }

        function getpage(id)
        {
            document.getElementById("page_ajax_spinner").style.display = 'block';
            $.ajax({
                type: "POST",
                url: "/pages/loadpage/id/" + id, dataType: 'json',
                success: function (data) {

                    document.getElementById("pagesmain").insertAdjacentHTML('beforeEnd', stripslashes(data));

                    document.getElementById("page_ajax_spinner").style.display = 'none';

                    $('.slick_carousel.books_carousel:not(.slick_category_page)').on('init', function (event, slick) {
                        slick.refresh = slick.unfilterSlides;
                    }).not('.slick-initialized').slick({
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        autoplay: false,
                        dots: false,
                        swipe: true,
                        arrows: true,
                        lazyLoad: 'progressive',
                        adaptiveHeight: true,
                        responsive: [
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 4
                                }
                            },
                            {
                                breakpoint: 750,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3
                                }
                            },
                            {
                                breakpoint: 580,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            }
                        ]
                    });
                    $('.slick_carousel.slick_category_page').on('init', function (event, slick) {
                        slick.refresh = slick.unfilterSlides;
                    }).not('.slick-initialized').slick({
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        autoplay: false,
                        dots: false,
                        swipe: true,
                        arrows: true,
                        lazyLoad: 'progressive',
                        adaptiveHeight: true,
                        responsive: [
                            {
                                breakpoint: 974,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3
                                }
                            },
                            {
                                breakpoint: 845,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 640,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3
                                }
                            },
                            {
                                breakpoint: 580,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            }
                        ]
                    });
                    $('.slick_carousel.pod_slider4').not('.slick-initialized').slick({
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        autoplay: false,
                        dots: false,
                        swipe: true,
                        arrows: true,
                        lazyLoad: 'progressive',
                        adaptiveHeight: true,
                        responsive: [
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 4
                                }
                            },
                            {
                                breakpoint: 750,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 580,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    $('.slick_carousel.pod_slider3').not('.slick-initialized').slick({
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        autoplay: false,
                        dots: false,
                        swipe: true,
                        arrows: true,
                        lazyLoad: 'progressive',
                        adaptiveHeight: true,
                        responsive: [
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3
                                }
                            },
                            {
                                breakpoint: 750,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 580,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });

                    $('.slick_carousel.pod_slider2').not('.slick-initialized').slick({
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay: false,
                        dots: false,
                        swipe: true,
                        arrows: true,
                        lazyLoad: 'progressive',
                        adaptiveHeight: true,
                        responsive: [
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 750,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 580,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    $('.slick-gallery').not('.slick-initialized').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        swipeToSlide: true,
                        autoplay: true,
                        autoplaySpeed: 7000,
                        fade: false,
                        cssEase: 'linear',
                        speed: 1000,
                        dots: true,
                        arrows: false,
                        lazyLoad: 'progressive',
                        adaptiveHeight: true
                    });

                    $('.basket-form').basketUpdate({
                        postUpdate: function (data) {

                            var pre = $('.pre-add', this),
                                post = $('.post-add', this),
                                added = $('.added-basket', this.parents('.book-preview')),
                                bookTitle = $(this).closest(".book-preview").find(".title").html(),
                                basketListItem = $('#nav_basket', masthead).closest('li');

                            pre.animate({opacity: 0}, 250, function () {
                                pre.hide();
                                post.css({opacity: 0}).show().animate({opacity: 1});
                                added.addClass('added-show');
                            });

                            if (!bookTitle) {
                                bookTitle = $(".book-title").html();
                            }
                            $(".nav-dropdown-added .item-name").html(bookTitle);

                            basketListItem.addClass('active');
                            $('.dotdotdot').dotdotdot();

                            setTimeout(function () {
                                basketListItem.removeClass('active');
                            }, 3000);

                            return false;
                        }
                    });

                    $('.nav-dropdown-basket .setquantity-form').basketUpdate();

                    $('.wl-add-all').basketUpdate();




                }
            });

        }

    </script>


    <div class="main-page home-page" id="pagesmain">
        <div class="row home-row">
        </div>

        {{--Slide Show--}}
        <div class="hero-banner">
            <div class="hero-slide">
                <a href="/campaign/books-of-the-month">
                    <img class="mobile-hide" srcset="
					https://cdn.waterstones.com/images/00126081-420x117.jpeg 420w,
					https://cdn.waterstones.com/images/00126081-770x214.jpeg 770w,
					https://cdn.waterstones.com/images/00126081-1024x284.jpeg 1024w,
					https://cdn.waterstones.com/images/00126081-1366x379.jpeg 1366w,
					https://cdn.waterstones.com/images/00126081-1920x533.jpeg 1920w,
					https://cdn.waterstones.com/images/00126081-3600x1000.jpeg 3200w"
                         sizes="100vw"
                         src="https://cdn.waterstones.com/images/00126081-1920x533.jpeg"
                         width="100%"
                         alt="Waterstones Books of the Month for March" />
                    <img class="desktop-hide tablet-hide mobile-show" srcset="
					https://cdn.waterstones.com/images/00126082-420x280.jpeg 420w,
					https://cdn.waterstones.com/images/00126082-770x513.jpeg 770w,
					https://cdn.waterstones.com/images/00126082-1000x667.jpeg 1000w"
                         src="https://cdn.waterstones.com/images/00126082-420x280.jpeg"
                         sizes="100vw"
                         alt="Waterstones Books of the Month for March" />
                </a>
            </div>
            <div class="hero-slide">
                <a href="/book/the-secret-commonwealth-the-book-of-dust-volume-two/philip-pullman/christopher-wormell/9780241373330">
                    <img class="mobile-hide" srcset="
					https://cdn.waterstones.com/images/00125971-420x117.jpeg 420w,
					https://cdn.waterstones.com/images/00125971-770x214.jpeg 770w,
					https://cdn.waterstones.com/images/00125971-1024x284.jpeg 1024w,
					https://cdn.waterstones.com/images/00125971-1366x379.jpeg 1366w,
					https://cdn.waterstones.com/images/00125971-1920x533.jpeg 1920w,
					https://cdn.waterstones.com/images/00125971-3600x1000.jpeg 3200w"
                         sizes="100vw"
                         src="https://cdn.waterstones.com/images/00125971-1920x533.jpeg"
                         width="100%"
                         alt="The Secret Commonwealth: The Book of Dust Volume 2 by Philip Pullman" />
                    <img class="desktop-hide tablet-hide mobile-show" srcset="
					https://cdn.waterstones.com/images/00125972-420x280.jpeg 420w,
					https://cdn.waterstones.com/images/00125972-770x513.jpeg 770w,
					https://cdn.waterstones.com/images/00125972-1000x667.jpeg 1000w"
                         src="https://cdn.waterstones.com/images/00125972-420x280.jpeg"
                         sizes="100vw"
                         alt="The Secret Commonwealth: The Book of Dust Volume 2 by Philip Pullman" />
                </a>
            </div>
            <div class="hero-slide">
                <a href="/book/lanny/max-porter/9780571340286">
                    <img class="mobile-hide" srcset="
					https://cdn.waterstones.com/images/00126211-420x117.jpeg 420w,
					https://cdn.waterstones.com/images/00126211-770x214.jpeg 770w,
					https://cdn.waterstones.com/images/00126211-1024x284.jpeg 1024w,
					https://cdn.waterstones.com/images/00126211-1366x379.jpeg 1366w,
					https://cdn.waterstones.com/images/00126211-1920x533.jpeg 1920w,
					https://cdn.waterstones.com/images/00126211-3600x1000.jpeg 3200w"
                         sizes="100vw"
                         src="https://cdn.waterstones.com/images/00126211-1920x533.jpeg"
                         width="100%"
                         alt="Lanny by Max Porter" />
                    <img class="desktop-hide tablet-hide mobile-show" srcset="
					https://cdn.waterstones.com/images/00126212-420x280.jpeg 420w,
					https://cdn.waterstones.com/images/00126212-770x513.jpeg 770w,
					https://cdn.waterstones.com/images/00126212-1000x667.jpeg 1000w"
                         src="https://cdn.waterstones.com/images/00126212-420x280.jpeg"
                         sizes="100vw"
                         alt="Lanny by Max Porter" />
                </a>
            </div>
        </div>

        {{--END Slide Show--}}
{{-------------------------------------------------------------------------------}}

        <div class="row home-row">
            {{--span12 (about1)--}}

            <div class="span12">
                <div class=" ">
                    <div class="slick_carousel pod_slider3">
                        <div class="span6">
                            <a href="/category/cultural-highlights/book-awards/the-womens-prize-for-fiction">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126182-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126182-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126182-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126182-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126182-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/listening-to-the-animals-becoming-the-supervet/noel-fitzpatrick/9781409183761">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126169-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126169-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126169-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126169-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126169-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/black-leopard-red-wolf/marlon-james/9781785175572">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125901-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125901-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125901-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125901-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125901-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/fing/9780008342579">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126084-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126084-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126084-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126084-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126084-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/campaign/world-book-day">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126040-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126040-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126040-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126040-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126040-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/booklist/483078/the-oscars-and-baftas-2019">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125873-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125873-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125873-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125873-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125873-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/the-waterstones-childrens-book-prize">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125794-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125794-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125794-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125794-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125794-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/still-me/jojo-moyes/9781405924207">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125490-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125490-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125490-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125490-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125490-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/category/cultural-highlights/book-awards/the-cilip-carnegie-medal-and-kate-greenaway-medal-awards">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125678-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125678-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125678-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125678-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125678-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/veggie-lean-in-15/joe-wicks/9781509856152">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125498-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125498-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125498-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125498-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125498-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/the-testaments/9781784742324">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00124947-280x217.png 280w,
				    		https://cdn.waterstones.com/images/00124947-374x289.png 374w,
				    		https://cdn.waterstones.com/images/00124947-561x434.png 561w,
				    		https://cdn.waterstones.com/images/00124947-988x764.png 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00124947-580x449.png"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/book/diary-of-an-awesome-friendly-kid/jeff-kinney/9780241405604">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00124066-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00124066-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00124066-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00124066-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00124066-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span12" style="min-height: 20px;"><div></div></div>
            <header class="span12 pages-header-row"><a class="button button-teal" href="/books/bestsellers">See More</a> <h2><em>Everyone is Talking About...<br /></em></h2></header>
            {{--END span12 (about1)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Fiction2)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9781473678835"
                             data-productid="8897402"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="When the Dogs Don&#039;t Bark">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/when-the-dogs-dont-bark/professor-angela-gallop/9781473678835">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4736/9781473678835.jpg" alt="When the Dogs Don&#039;t Bark" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/when-the-dogs-dont-bark/professor-angela-gallop/9781473678835" class="title link-invert">When the Dogs Don&#039;t Bark</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/when-the-dogs-dont-bark/professor-angela-gallop/9781473678835" class="text-gold"><b>Professor Angela Gallop</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781784741723"
                             data-productid="8794560"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Invisible Women">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/invisible-women/caroline-criado-perez/9781784741723">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7847/9781784741723.jpg" alt="Invisible Women" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/invisible-women/caroline-criado-perez/9781784741723" class="title link-invert">Invisible Women</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/invisible-women/caroline-criado-perez/9781784741723" class="text-gold"><b>Caroline Criado-Perez</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£13.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9780008291372"
                             data-productid="8929050"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The World I Fell Out Of">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-world-i-fell-out-of/melanie-reid/andrew-marr/9780008291372">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0082/9780008291372.jpg" alt="The World I Fell Out Of" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-world-i-fell-out-of/melanie-reid/andrew-marr/9780008291372" class="title link-invert">The World I Fell Out Of</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-world-i-fell-out-of/melanie-reid/andrew-marr/9780008291372" class="text-gold"><b>Melanie Reid</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9780099282556"
                             data-productid="1770871"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Waterlog">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/waterlog/roger-deakin/9780099282556">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0992/9780099282556.jpg" alt="Waterlog" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/waterlog/roger-deakin/9780099282556" class="title link-invert">Waterlog</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/waterlog/roger-deakin/9780099282556" class="text-gold"><b>Roger Deakin</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£9.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9781529014068"
                             data-productid="9011683"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Pinch of Nom">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/pinch-of-nom/kay-featherstone/kate-allinson/9781529014068">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/5290/9781529014068.jpg" alt="Pinch of Nom" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/pinch-of-nom/kay-featherstone/kate-allinson/9781529014068" class="title link-invert">Pinch of Nom</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/pinch-of-nom/kay-featherstone/kate-allinson/9781529014068" class="text-gold"><b>Kay Featherstone</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£10.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9780241355213"
                             data-productid="9010308"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Uninhabitable Earth">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-uninhabitable-earth/david-wallace-wells/9780241355213">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2413/9780241355213.jpg" alt="The Uninhabitable Earth" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-uninhabitable-earth/david-wallace-wells/9780241355213" class="title link-invert">The Uninhabitable Earth</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-uninhabitable-earth/david-wallace-wells/9780241355213" class="text-gold"><b>David Wallace-Wells</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9780008299576"
                             data-productid="9407944"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Dangerous Hero">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/dangerous-hero/tom-bower/9780008299576">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9780/0082/9780008299576.jpg" alt="Dangerous Hero" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/dangerous-hero/tom-bower/9780008299576" class="title link-invert">Dangerous Hero</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/dangerous-hero/tom-bower/9780008299576" class="text-gold"><b>Tom Bower</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9780500022894"
                             data-productid="9132929"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Cold War Steve Presents... The Festival of Brexit">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/cold-war-steve-presents-the-festival-of-brexit/cold-war-steve/9780500022894">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/5000/9780500022894.jpg" alt="Cold War Steve Presents... The Festival of Brexit" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/cold-war-steve-presents-the-festival-of-brexit/cold-war-steve/9780500022894" class="title link-invert">Cold War Steve Presents... The Festival of Brexit</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/cold-war-steve-presents-the-festival-of-brexit/cold-war-steve/9780500022894" class="text-gold"><b>Cold War Steve</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.95</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9781789291322"
                             data-productid="9106864"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="For Freddie">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/for-freddie/rachael-bland/9781789291322">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7892/9781789291322.jpg" alt="For Freddie" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/for-freddie/rachael-bland/9781789291322" class="title link-invert">For Freddie</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/for-freddie/rachael-bland/9781789291322" class="text-gold"><b>Rachael Bland</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£13.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9781847924759"
                             data-productid="8870813"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Gendered Brain">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-gendered-brain/gina-rippon/9781847924759">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/8479/9781847924759.jpg" alt="The Gendered Brain" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-gendered-brain/gina-rippon/9781847924759" class="title link-invert">The Gendered Brain</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-gendered-brain/gina-rippon/9781847924759" class="text-gold"><b>Gina Rippon</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9781408893210"
                             data-productid="8150110"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Utopia for Realists">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/utopia-for-realists/rutger-bregman/9781408893210">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408893210.jpg" alt="Utopia for Realists" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/utopia-for-realists/rutger-bregman/9781408893210" class="title link-invert">Utopia for Realists</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/utopia-for-realists/rutger-bregman/9781408893210" class="text-gold"><b>Rutger Bregman</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9781509837021"
                             data-productid="8952913"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="War Doctor">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/war-doctor/david-nott/9781509837021">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/5098/9781509837021.jpg" alt="War Doctor" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/war-doctor/david-nott/9781509837021" class="title link-invert">War Doctor</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/war-doctor/david-nott/9781509837021" class="text-gold"><b>David Nott</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£18.99</span>
                                            <span class="price">&nbsp;&nbsp;£15.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9780857524485"
                             data-productid="8870124"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Five">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-five/hallie-rubenhold/9780857524485">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/8575/9780857524485.jpg" alt="The Five" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-five/hallie-rubenhold/9780857524485" class="title link-invert">The Five</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-five/hallie-rubenhold/9780857524485" class="text-gold"><b>Hallie Rubenhold</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9780755307500"
                             data-productid="487"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Small Island">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/small-island/andrea-levy/9780755307500">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/7553/9780755307500.jpg" alt="Small Island" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/small-island/andrea-levy/9780755307500" class="title link-invert">Small Island</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/small-island/andrea-levy/9780755307500" class="text-gold"><b>Andrea Levy</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£8.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9781472939975"
                             data-productid="7954110"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Wonders Beyond Numbers">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/wonders-beyond-numbers/johnny-ball/9781472939975">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4729/9781472939975.jpg" alt="Wonders Beyond Numbers" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/wonders-beyond-numbers/johnny-ball/9781472939975" class="title link-invert">Wonders Beyond Numbers</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/wonders-beyond-numbers/johnny-ball/9781472939975" class="text-gold"><b>Johnny Ball</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£9.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781509886401"
                             data-productid="8950190"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="It&#039;s Not About the Burqa">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/its-not-about-the-burqa/mariam-khan/9781509886401">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/5098/9781509886401.jpg" alt="It&#039;s Not About the Burqa" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/its-not-about-the-burqa/mariam-khan/9781509886401" class="title link-invert">It&#039;s Not About the Burqa</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/its-not-about-the-burqa/mariam-khan/9781509886401" class="text-gold"><b>Mariam Khan</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9780753552599"
                             data-productid="8539127"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Double Crossed">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/double-crossed/brian-wood/9780753552599">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/7535/9780753552599.jpg" alt="Double Crossed" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/double-crossed/brian-wood/9780753552599" class="title link-invert">Double Crossed</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/double-crossed/brian-wood/9780753552599" class="text-gold"><b>Brian Wood</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781785942990"
                             data-productid="8817684"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="On the Front Line with the Women Who Fight Back">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/on-the-front-line-with-the-women-who-fight-back/stacey-dooley/9781785942990">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/7859/9781785942990.jpg" alt="On the Front Line with the Women Who Fight Back" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/on-the-front-line-with-the-women-who-fight-back/stacey-dooley/9781785942990" class="title link-invert">On the Front Line with the Women Who Fight Back</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/on-the-front-line-with-the-women-who-fight-back/stacey-dooley/9781785942990" class="text-gold"><b>Stacey Dooley</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div>
            <header class="span12 pages-header-row"><a class="button button-teal" href="/category/fiction
">See More</a> <h2><i>Our Best Fiction Books</i></h2></header>
            {{--END span12 (Fiction2)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Non-Fiction3)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9781784708030"
                             data-productid="8870130"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Western Wind">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-western-wind/samantha-harvey/9781784708030">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7847/9781784708030.jpg" alt="The Western Wind" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-western-wind/samantha-harvey/9781784708030" class="title link-invert">The Western Wind</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-western-wind/samantha-harvey/9781784708030" class="text-gold"><b>Samantha Harvey</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781408709979"
                             data-productid="8598403"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Tangerine">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/tangerine/christine-mangan/9781408709979">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4087/9781408709979.jpg" alt="Tangerine" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/tangerine/christine-mangan/9781408709979" class="title link-invert">Tangerine</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/tangerine/christine-mangan/9781408709979" class="text-gold"><b>Christine Mangan</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9781405924207"
                             data-productid="8802895"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Still Me">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/still-me/jojo-moyes/9781405924207">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4059/9781405924207.jpg" alt="Still Me" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/still-me/jojo-moyes/9781405924207" class="title link-invert">Still Me</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/still-me/jojo-moyes/9781405924207" class="text-gold"><b>Jojo Moyes</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.49</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9781784705718"
                             data-productid="8436907"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="If I Die Before I Wake">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/if-i-die-before-i-wake/emily-koch/9781784705718">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7847/9781784705718.jpg" alt="If I Die Before I Wake" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/if-i-die-before-i-wake/emily-koch/9781784705718" class="title link-invert">If I Die Before I Wake</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/if-i-die-before-i-wake/emily-koch/9781784705718" class="text-gold"><b>Emily Koch</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9780241315545"
                             data-productid="8819228"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Black Leopard, Red Wolf">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/black-leopard-red-wolf/marlon-james/9780241315545">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2413/9780241315545.jpg" alt="Black Leopard, Red Wolf" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/black-leopard-red-wolf/marlon-james/9780241315545" class="title link-invert">Black Leopard, Red Wolf</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/black-leopard-red-wolf/marlon-james/9780241315545" class="text-gold"><b>Marlon James</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9781785763670"
                             data-productid="8601532"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Tattooist of Auschwitz">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-tattooist-of-auschwitz/heather-morris/9781785763670">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/7857/9781785763670.jpg" alt="The Tattooist of Auschwitz" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-tattooist-of-auschwitz/heather-morris/9781785763670" class="title link-invert">The Tattooist of Auschwitz</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-tattooist-of-auschwitz/heather-morris/9781785763670" class="text-gold"><b>Heather Morris</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9781447278269"
                             data-productid="8597594"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Wild Fire">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/wild-fire/ann-cleeves/9781447278269">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4472/9781447278269.jpg" alt="Wild Fire" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/wild-fire/ann-cleeves/9781447278269" class="title link-invert">Wild Fire</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/wild-fire/ann-cleeves/9781447278269" class="text-gold"><b>Ann Cleeves</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9780008172145"
                             data-productid="8056988"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Eleanor Oliphant is Completely Fine">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/eleanor-oliphant-is-completely-fine/gail-honeyman/9780008172145">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9780/0081/9780008172145.jpg" alt="Eleanor Oliphant is Completely Fine" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/eleanor-oliphant-is-completely-fine/gail-honeyman/9780008172145" class="title link-invert">Eleanor Oliphant is Completely Fine</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/eleanor-oliphant-is-completely-fine/gail-honeyman/9780008172145" class="text-gold"><b>Gail Honeyman</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9780571338757"
                             data-productid="8962398"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Milkman">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/milkman/anna-burns/9780571338757">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/5713/9780571338757.jpg" alt="Milkman" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/milkman/anna-burns/9780571338757" class="title link-invert">Milkman</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/milkman/anna-burns/9780571338757" class="text-gold"><b>Anna Burns</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9781473639737"
                             data-productid="8777145"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Women of the Dunes">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/women-of-the-dunes/sarah-maine/9781473639737">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4736/9781473639737.jpg" alt="Women of the Dunes" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/women-of-the-dunes/sarah-maine/9781473639737" class="title link-invert">Women of the Dunes</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/women-of-the-dunes/sarah-maine/9781473639737" class="text-gold"><b>Sarah Maine</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9780571333134"
                             data-productid="8228090"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Conversations with Friends">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/conversations-with-friends/sally-rooney/9780571333134">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/5713/9780571333134.jpg" alt="Conversations with Friends" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/conversations-with-friends/sally-rooney/9780571333134" class="title link-invert">Conversations with Friends</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/conversations-with-friends/sally-rooney/9780571333134" class="text-gold"><b>Sally Rooney</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9780751568257"
                             data-productid="8786727"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Broken Ground">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/broken-ground/val-mcdermid/9780751568257">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/7515/9780751568257.jpg" alt="Broken Ground" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/broken-ground/val-mcdermid/9780751568257" class="title link-invert">Broken Ground</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/broken-ground/val-mcdermid/9780751568257" class="text-gold"><b>Val McDermid</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9781784708313"
                             data-productid="8802823"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Only Story">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-only-story/julian-barnes/9781784708313">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/7847/9781784708313.jpg" alt="The Only Story" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-only-story/julian-barnes/9781784708313" class="title link-invert">The Only Story</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-only-story/julian-barnes/9781784708313" class="text-gold"><b>Julian Barnes</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9780008272111"
                             data-productid="8757728"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Binding">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-binding/bridget-collins/9780008272111">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0082/9780008272111.jpg" alt="The Binding" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-binding/bridget-collins/9780008272111" class="title link-invert">The Binding</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-binding/bridget-collins/9780008272111" class="text-gold"><b>Bridget Collins</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9780241330234"
                             data-productid="8869624"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Librarian">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-librarian/salley-vickers/9780241330234">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9780/2413/9780241330234.jpg" alt="The Librarian" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-librarian/salley-vickers/9780241330234" class="title link-invert">The Librarian</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-librarian/salley-vickers/9780241330234" class="text-gold"><b>Salley Vickers</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781784161217"
                             data-productid="8749257"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Old Baggage">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/old-baggage/lissa-evans/9781784161217">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7841/9781784161217.jpg" alt="Old Baggage" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/old-baggage/lissa-evans/9781784161217" class="title link-invert">Old Baggage</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/old-baggage/lissa-evans/9781784161217" class="text-gold"><b>Lissa Evans</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9781408889510"
                             data-productid="8558044"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Seven Deaths of Evelyn Hardcastle">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-seven-deaths-of-evelyn-hardcastle/stuart-turton/9781408889510">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408889510.jpg" alt="The Seven Deaths of Evelyn Hardcastle" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-seven-deaths-of-evelyn-hardcastle/stuart-turton/9781408889510" class="title link-invert">The Seven Deaths of Evelyn Hardcastle</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-seven-deaths-of-evelyn-hardcastle/stuart-turton/9781408889510" class="text-gold"><b>Stuart Turton</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781408883464"
                             data-productid="8830312"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Priory of the Orange Tree">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-priory-of-the-orange-tree/samantha-shannon/9781408883464">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/4088/9781408883464.jpg" alt="The Priory of the Orange Tree" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-priory-of-the-orange-tree/samantha-shannon/9781408883464" class="title link-invert">The Priory of the Orange Tree</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-priory-of-the-orange-tree/samantha-shannon/9781408883464" class="text-gold"><b>Samantha Shannon</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/non-fiction-books
">See More</a> <h2><i>Our Best Non-Fiction Books</i></h2></header>
            {{--END span12 (Non-Fiction3)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Childern4)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9781784705756"
                             data-productid="8498607"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Talking to My Daughter About the Economy">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/talking-to-my-daughter-about-the-economy/yanis-varoufakis/9781784705756">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7847/9781784705756.jpg" alt="Talking to My Daughter About the Economy" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/talking-to-my-daughter-about-the-economy/yanis-varoufakis/9781784705756" class="title link-invert">Talking to My Daughter About the Economy</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/talking-to-my-daughter-about-the-economy/yanis-varoufakis/9781784705756" class="text-gold"><b>Yanis Varoufakis</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781509858637"
                             data-productid="8269444"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="This is Going to Hurt">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/this-is-going-to-hurt/adam-kay/9781509858637">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/5098/9781509858637.jpg" alt="This is Going to Hurt" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/this-is-going-to-hurt/adam-kay/9781509858637" class="title link-invert">This is Going to Hurt</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/this-is-going-to-hurt/adam-kay/9781509858637" class="text-gold"><b>Adam Kay</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9780241978726"
                             data-productid="8918415"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Cut Out Girl">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-cut-out-girl/bart-van-es/9780241978726">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2419/9780241978726.jpg" alt="The Cut Out Girl" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-cut-out-girl/bart-van-es/9780241978726" class="title link-invert">The Cut Out Girl</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-cut-out-girl/bart-van-es/9780241978726" class="text-gold"><b>Bart van Es</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9780241982105"
                             data-productid="8801155"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Everything I Know About Love">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/everything-i-know-about-love/dolly-alderton/9780241982105">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2419/9780241982105.jpg" alt="Everything I Know About Love" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/everything-i-know-about-love/dolly-alderton/9780241982105" class="title link-invert">Everything I Know About Love</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/everything-i-know-about-love/dolly-alderton/9780241982105" class="text-gold"><b>Dolly Alderton</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9781509837021"
                             data-productid="8952913"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="War Doctor">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/war-doctor/david-nott/9781509837021">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/5098/9781509837021.jpg" alt="War Doctor" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/war-doctor/david-nott/9781509837021" class="title link-invert">War Doctor</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/war-doctor/david-nott/9781509837021" class="text-gold"><b>David Nott</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£18.99</span>
                                            <span class="price">&nbsp;&nbsp;£15.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9781409183761"
                             data-productid="9287465"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Listening to the Animals: Becoming The Supervet">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/listening-to-the-animals-becoming-the-supervet/noel-fitzpatrick/9781409183761">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4091/9781409183761.jpg" alt="Listening to the Animals: Becoming The Supervet" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/listening-to-the-animals-becoming-the-supervet/noel-fitzpatrick/9781409183761" class="title link-invert">Listening to the Animals: Becoming The Supervet</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/listening-to-the-animals-becoming-the-supervet/noel-fitzpatrick/9781409183761" class="text-gold"><b>Noel Fitzpatrick</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£3.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9781405937184"
                             data-productid="8832060"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Salt Path">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-salt-path/raynor-winn/9781405937184">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4059/9781405937184.jpg" alt="The Salt Path" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-salt-path/raynor-winn/9781405937184" class="title link-invert">The Salt Path</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-salt-path/raynor-winn/9781405937184" class="text-gold"><b>Raynor Winn</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9781784706883"
                             data-productid="8755867"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Language of Kindness">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-language-of-kindness/christie-watson/9781784706883">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/7847/9781784706883.jpg" alt="The Language of Kindness" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-language-of-kindness/christie-watson/9781784706883" class="title link-invert">The Language of Kindness</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-language-of-kindness/christie-watson/9781784706883" class="text-gold"><b>Christie Watson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9780241334140"
                             data-productid="8615190"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Becoming">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/becoming/michelle-obama/9780241334140">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v4/large/9780/2413/9780241334140.jpg" alt="Becoming" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/becoming/michelle-obama/9780241334140" class="title link-invert">Becoming</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/becoming/michelle-obama/9780241334140" class="text-gold"><b>Michelle Obama</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£25.00</span>
                                            <span class="price">&nbsp;&nbsp;£19.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9781786892690"
                             data-productid="8843263"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Notes on a Nervous Planet">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/notes-on-a-nervous-planet/matt-haig/9781786892690">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/7868/9781786892690.jpg" alt="Notes on a Nervous Planet" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/notes-on-a-nervous-planet/matt-haig/9781786892690" class="title link-invert">Notes on a Nervous Planet</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/notes-on-a-nervous-planet/matt-haig/9781786892690" class="text-gold"><b>Matt Haig</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9780099511021"
                             data-productid="8796734"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Educated">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/educated/tara-westover/9780099511021">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0995/9780099511021.jpg" alt="Educated" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/educated/tara-westover/9780099511021" class="title link-invert">Educated</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/educated/tara-westover/9780099511021" class="text-gold"><b>Tara Westover</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9781780723990"
                             data-productid="9419588"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="9 Lessons in Brexit">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/9-lessons-in-brexit/ivan-rogers/9781780723990">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7807/9781780723990.jpg" alt="9 Lessons in Brexit" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/9-lessons-in-brexit/ivan-rogers/9781780723990" class="title link-invert">9 Lessons in Brexit</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/9-lessons-in-brexit/ivan-rogers/9781780723990" class="text-gold"><b>Ivan Rogers</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9780141988351"
                             data-productid="8911153"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Chernobyl">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/chernobyl/serhii-plokhy/9780141988351">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/1419/9780141988351.jpg" alt="Chernobyl" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/chernobyl/serhii-plokhy/9780141988351" class="title link-invert">Chernobyl</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/chernobyl/serhii-plokhy/9780141988351" class="text-gold"><b>Serhii Plokhy</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9780857524485"
                             data-productid="8870124"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Five">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-five/hallie-rubenhold/9780857524485">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/8575/9780857524485.jpg" alt="The Five" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-five/hallie-rubenhold/9780857524485" class="title link-invert">The Five</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-five/hallie-rubenhold/9780857524485" class="text-gold"><b>Hallie Rubenhold</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9780099590088"
                             data-productid="2856144"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Sapiens">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/sapiens/yuval-noah-harari/9780099590088">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0995/9780099590088.jpg" alt="Sapiens" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/sapiens/yuval-noah-harari/9780099590088" class="title link-invert">Sapiens</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/sapiens/yuval-noah-harari/9780099590088" class="text-gold"><b>Yuval Noah Harari</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£8.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781509856152"
                             data-productid="8796941"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Veggie Lean in 15">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/veggie-lean-in-15/joe-wicks/9781509856152">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/5098/9781509856152.jpg" alt="Veggie Lean in 15" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/veggie-lean-in-15/joe-wicks/9781509856152" class="title link-invert">Veggie Lean in 15</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/veggie-lean-in-15/joe-wicks/9781509856152" class="text-gold"><b>Joe Wicks</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£16.99</span>
                                            <span class="price">&nbsp;&nbsp;£8.49</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9781846045127"
                             data-productid="8337574"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Choice">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-choice/edith-eger/9781846045127">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/8460/9781846045127.jpg" alt="The Choice" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-choice/edith-eger/9781846045127" class="title link-invert">The Choice</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-choice/edith-eger/9781846045127" class="text-gold"><b>Edith Eger</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781784163082"
                             data-productid="8899287"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="In Your Defence">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/in-your-defence/sarah-langford/9781784163082">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/7841/9781784163082.jpg" alt="In Your Defence" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/in-your-defence/sarah-langford/9781784163082" class="title link-invert">In Your Defence</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/in-your-defence/sarah-langford/9781784163082" class="text-gold"><b>Sarah Langford</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/category/childrens-teenage">See More</a> <h2><em>Our Best Children's Books</em></h2></header>
            {{--END span12 (Childern4)--}}
 {{-------------------------------------------------------------------------------}}
            {{--span12 (Young5)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9780008342579"
                             data-productid="9448579"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Fing">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/fing/9780008342579">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9780/0083/9780008342579.jpg" alt="Fing" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/fing/9780008342579" class="title link-invert">Fing</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/fing/9780008342579" class="text-gold"><b>David Walliams</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£12.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.49</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781471124297"
                             data-productid="8268517"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="A Pinch of Magic">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/a-pinch-of-magic/michelle-harrison/9781471124297">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4711/9781471124297.jpg" alt="A Pinch of Magic" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/a-pinch-of-magic/michelle-harrison/9781471124297" class="title link-invert">A Pinch of Magic</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/a-pinch-of-magic/michelle-harrison/9781471124297" class="text-gold"><b>Michelle Harrison</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9781407195575"
                             data-productid="9028801"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Wonky Donkey">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-wonky-donkey/craig-smith/katz-cowley/9781407195575">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/4071/9781407195575.jpg" alt="The Wonky Donkey" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-wonky-donkey/craig-smith/katz-cowley/9781407195575" class="title link-invert">The Wonky Donkey</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-wonky-donkey/craig-smith/katz-cowley/9781407195575" class="text-gold"><b>Craig Smith</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9780241348925"
                             data-productid="8555636"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Ten Minutes to Bed: Little Unicorn">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/ten-minutes-to-bed-little-unicorn/chris-chatterton/rhiannon-fielding/9780241348925">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2413/9780241348925.jpg" alt="Ten Minutes to Bed: Little Unicorn" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/ten-minutes-to-bed-little-unicorn/chris-chatterton/rhiannon-fielding/9780241348925" class="title link-invert">Ten Minutes to Bed: Little Unicorn</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/ten-minutes-to-bed-little-unicorn/chris-chatterton/rhiannon-fielding/9780241348925" class="text-gold"><b>Chris Chatterton</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9781510105010"
                             data-productid="8472549"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Boy At the Back of the Class">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-boy-at-the-back-of-the-class/onjali-q-rauf/9781510105010">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/5101/9781510105010.jpg" alt="The Boy At the Back of the Class" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-boy-at-the-back-of-the-class/onjali-q-rauf/9781510105010" class="title link-invert">The Boy At the Back of the Class</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-boy-at-the-back-of-the-class/onjali-q-rauf/9781510105010" class="text-gold"><b>Onjali Q. Rauf</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9781407189307"
                             data-productid="9295038"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Tom Gates: Biscuits, Bands and Very Big Plans">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/tom-gates-biscuits-bands-and-very-big-plans/liz-pichon/9781407189307">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4071/9781407189307.jpg" alt="Tom Gates: Biscuits, Bands and Very Big Plans" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/tom-gates-biscuits-bands-and-very-big-plans/liz-pichon/9781407189307" class="title link-invert">Tom Gates: Biscuits, Bands and Very Big Plans</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/tom-gates-biscuits-bands-and-very-big-plans/liz-pichon/9781407189307" class="text-gold"><b>Liz Pichon</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9780192767110"
                             data-productid="8898690"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Isadora Moon Has a Sleepover">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/isadora-moon-has-a-sleepover/harriet-muncaster/9780192767110">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/1927/9780192767110.jpg" alt="Isadora Moon Has a Sleepover" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/isadora-moon-has-a-sleepover/harriet-muncaster/9780192767110" class="title link-invert">Isadora Moon Has a Sleepover</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/isadora-moon-has-a-sleepover/harriet-muncaster/9780192767110" class="text-gold"><b>Harriet Muncaster</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£5.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9781848126497"
                             data-productid="8396614"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Boy Who Grew Dragons">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-boy-who-grew-dragons/andy-shepherd/sara-ogilvie/9781848126497">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/8481/9781848126497.jpg" alt="The Boy Who Grew Dragons" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-boy-who-grew-dragons/andy-shepherd/sara-ogilvie/9781848126497" class="title link-invert">The Boy Who Grew Dragons</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-boy-who-grew-dragons/andy-shepherd/sara-ogilvie/9781848126497" class="text-gold"><b>Andy Shepherd</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£5.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.49</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9780141385259"
                             data-productid="8797296"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Diary of a Wimpy Kid: The Getaway (book 12)">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/diary-of-a-wimpy-kid-the-getaway-book-12/jeff-kinney/9780141385259">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/1413/9780141385259.jpg" alt="Diary of a Wimpy Kid: The Getaway (book 12)" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/diary-of-a-wimpy-kid-the-getaway-book-12/jeff-kinney/9780141385259" class="title link-invert">Diary of a Wimpy Kid: The Getaway (book 12)</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/diary-of-a-wimpy-kid-the-getaway-book-12/jeff-kinney/9780141385259" class="text-gold"><b>Jeff Kinney</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9781408892930"
                             data-productid="8958644"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Hop Little Bunnies">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/hop-little-bunnies/martha-mumford/laura-hughes/9781408892930">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408892930.jpg" alt="Hop Little Bunnies" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/hop-little-bunnies/martha-mumford/laura-hughes/9781408892930" class="title link-invert">Hop Little Bunnies</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/hop-little-bunnies/martha-mumford/laura-hughes/9781408892930" class="text-gold"><b>Martha Mumford</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9780008164669"
                             data-productid="8642409"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Bad Dad">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/bad-dad/david-walliams/9780008164669">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0081/9780008164669.jpg" alt="Bad Dad" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/bad-dad/david-walliams/9780008164669" class="title link-invert">Bad Dad</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/bad-dad/david-walliams/9780008164669" class="text-gold"><b>David Walliams</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9780141376134"
                             data-productid="9020281"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="There&#039;s a Dragon in Your Book">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/theres-a-dragon-in-your-book/9780141376134">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/1413/9780141376134.jpg" alt="There&#039;s a Dragon in Your Book" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/theres-a-dragon-in-your-book/9780141376134" class="title link-invert">There&#039;s a Dragon in Your Book</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/theres-a-dragon-in-your-book/9780141376134" class="text-gold"><b>Tom Fletcher</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9781407195827"
                             data-productid="9298870"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Baby Shark (UK PB)">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/baby-shark-uk-pb/john-john-bajet/john-john-bajet/9781407195827">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4071/9781407195827.jpg" alt="Baby Shark (UK PB)" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/baby-shark-uk-pb/john-john-bajet/john-john-bajet/9781407195827" class="title link-invert">Baby Shark (UK PB)</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/baby-shark-uk-pb/john-john-bajet/john-john-bajet/9781407195827" class="text-gold"><b>John John Bajet</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9780241346211"
                             data-productid="8996963"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Charlie Changes Into a Chicken">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/charlie-changes-into-a-chicken/sam-copeland/sarah-horne/9780241346211">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9780/2413/9780241346211.jpg" alt="Charlie Changes Into a Chicken" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/charlie-changes-into-a-chicken/sam-copeland/sarah-horne/9780241346211" class="title link-invert">Charlie Changes Into a Chicken</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/charlie-changes-into-a-chicken/sam-copeland/sarah-horne/9780241346211" class="text-gold"><b>Sam Copeland</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9781405288583"
                             data-productid="8208098"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Mr Wolf&#039;s Pancakes">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/mr-wolfs-pancakes/jan-fearnley/9781405288583">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4052/9781405288583.jpg" alt="Mr Wolf&#039;s Pancakes" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/mr-wolfs-pancakes/jan-fearnley/9781405288583" class="title link-invert">Mr Wolf&#039;s Pancakes</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/mr-wolfs-pancakes/jan-fearnley/9781405288583" class="text-gold"><b>Jan Fearnley</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781408855652"
                             data-productid="1365"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Harry Potter and the Philosopher&#039;s Stone">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/harry-potter-and-the-philosophers-stone/j-k-rowling/9781408855652">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855652.jpg" alt="Harry Potter and the Philosopher&#039;s Stone" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/harry-potter-and-the-philosophers-stone/j-k-rowling/9781408855652" class="title link-invert">Harry Potter and the Philosopher&#039;s Stone</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/harry-potter-and-the-philosophers-stone/j-k-rowling/9781408855652" class="text-gold"><b>J. K. Rowling</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9780008256975"
                             data-productid="8898581"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Dog Who Saved the World">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-dog-who-saved-the-world/ross-welford/9780008256975">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/0082/9780008256975.jpg" alt="The Dog Who Saved the World" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-dog-who-saved-the-world/ross-welford/9780008256975" class="title link-invert">The Dog Who Saved the World</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-dog-who-saved-the-world/ross-welford/9780008256975" class="text-gold"><b>Ross Welford</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781848578432"
                             data-productid="9031627"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Girls">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-girls/lauren-ace/jenny-lovlie/9781848578432">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/8485/9781848578432.jpg" alt="The Girls" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-girls/lauren-ace/jenny-lovlie/9781848578432" class="title link-invert">The Girls</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-girls/lauren-ace/jenny-lovlie/9781848578432" class="text-gold"><b>Lauren Ace</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£6.99</span>
                                            <span class="price">&nbsp;&nbsp;£4.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/category/childrens-teenage/teen-and-young-adult">See More</a> <h2>Our Best Young Adult Books</h2></header>
            {{--END span12 (Young5)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Horizon6)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9780141375656"
                             data-productid="8801157"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Two Can Keep a Secret">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/two-can-keep-a-secret/karen-mcmanus/9780141375656">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/1413/9780141375656.jpg" alt="Two Can Keep a Secret" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/two-can-keep-a-secret/karen-mcmanus/9780141375656" class="title link-invert">Two Can Keep a Secret</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/two-can-keep-a-secret/karen-mcmanus/9780141375656" class="text-gold"><b>Karen McManus</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781406391244"
                             data-productid="9402394"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="On the Come Up">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/on-the-come-up/angie-thomas/tim-marrs/9781406391244">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v5/large/9781/4063/9781406391244.jpg" alt="On the Come Up" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/on-the-come-up/angie-thomas/tim-marrs/9781406391244" class="title link-invert">On the Come Up</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/on-the-come-up/angie-thomas/tim-marrs/9781406391244" class="text-gold"><b>Angie Thomas</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9780241365854"
                             data-productid="8771807"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="La Belle Sauvage: The Book of Dust Volume One">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/la-belle-sauvage-the-book-of-dust-volume-one/philip-pullman/christopher-wormell/9780241365854">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2413/9780241365854.jpg" alt="La Belle Sauvage: The Book of Dust Volume One" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/la-belle-sauvage-the-book-of-dust-volume-one/philip-pullman/christopher-wormell/9780241365854" class="title link-invert">La Belle Sauvage: The Book of Dust Volume One</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/la-belle-sauvage-the-book-of-dust-volume-one/philip-pullman/christopher-wormell/9780241365854" class="text-gold"><b>Philip Pullman</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9781471181368"
                             data-productid="8966889"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="This Lie Will Kill You">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/this-lie-will-kill-you/chelsea-pitcher/9781471181368">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4711/9781471181368.jpg" alt="This Lie Will Kill You" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/this-lie-will-kill-you/chelsea-pitcher/9781471181368" class="title link-invert">This Lie Will Kill You</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/this-lie-will-kill-you/chelsea-pitcher/9781471181368" class="text-gold"><b>Chelsea Pitcher</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9780141375632"
                             data-productid="7900867"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="One Of Us Is Lying">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/one-of-us-is-lying/karen-mcmanus/9780141375632">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/1413/9780141375632.jpg" alt="One Of Us Is Lying" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/one-of-us-is-lying/karen-mcmanus/9780141375632" class="title link-invert">One Of Us Is Lying</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/one-of-us-is-lying/karen-mcmanus/9780141375632" class="text-gold"><b>Karen McManus</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9781406372151"
                             data-productid="7810976"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Hate U Give">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-hate-u-give/angie-thomas/9781406372151">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/4063/9781406372151.jpg" alt="The Hate U Give" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-hate-u-give/angie-thomas/9781406372151" class="title link-invert">The Hate U Give</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-hate-u-give/angie-thomas/9781406372151" class="text-gold"><b>Angie Thomas</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9781471182310"
                             data-productid="9018631"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Five Feet Apart">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/five-feet-apart/rachael-lippincott/mikki-daughtry/9781471182310">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4711/9781471182310.jpg" alt="Five Feet Apart" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/five-feet-apart/rachael-lippincott/mikki-daughtry/9781471182310" class="title link-invert">Five Feet Apart</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/five-feet-apart/rachael-lippincott/mikki-daughtry/9781471182310" class="text-gold"><b>Rachael Lippincott</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9781509895977"
                             data-productid="8968035"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Enchantee">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/enchantee/gita-trelease/9781509895977">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/5098/9781509895977.jpg" alt="Enchantee" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/enchantee/gita-trelease/9781509895977" class="title link-invert">Enchantee</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/enchantee/gita-trelease/9781509895977" class="text-gold"><b>Gita Trelease</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9781407189147"
                             data-productid="8612062"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Mortal Engines">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/mortal-engines/philip-reeve/9781407189147">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4071/9781407189147.jpg" alt="Mortal Engines" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/mortal-engines/philip-reeve/9781407189147" class="title link-invert">Mortal Engines</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/mortal-engines/philip-reeve/9781407189147" class="text-gold"><b>Philip Reeve</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9781407177687"
                             data-productid="8891313"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="To All The Boys I&#039;ve Loved Before">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/to-all-the-boys-ive-loved-before/jenny-han/9781407177687">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4071/9781407177687.jpg" alt="To All The Boys I&#039;ve Loved Before" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/to-all-the-boys-ive-loved-before/jenny-han/9781407177687" class="title link-invert">To All The Boys I&#039;ve Loved Before</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/to-all-the-boys-ive-loved-before/jenny-han/9781407177687" class="text-gold"><b>Jenny Han</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9781407186108"
                             data-productid="8300992"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Northern Lights">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/northern-lights/philip-pullman/chris-wormell/9781407186108">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4071/9781407186108.jpg" alt="Northern Lights" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/northern-lights/philip-pullman/chris-wormell/9781407186108" class="title link-invert">Northern Lights</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/northern-lights/philip-pullman/chris-wormell/9781407186108" class="text-gold"><b>Philip Pullman</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9781444951387"
                             data-productid="9031841"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Heartstopper Volume One">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/heartstopper-volume-one/alice-oseman/9781444951387">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4449/9781444951387.jpg" alt="Heartstopper Volume One" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/heartstopper-volume-one/alice-oseman/9781444951387" class="title link-invert">Heartstopper Volume One</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/heartstopper-volume-one/alice-oseman/9781444951387" class="text-gold"><b>Alice Oseman</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£10.99</span>
                                            <span class="price">&nbsp;&nbsp;£8.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9781787701809"
                             data-productid="9294521"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="A Winter&#039;s Promise">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/a-winters-promise/christelle-dabos/hildegarde-serle/9781787701809">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7877/9781787701809.jpg" alt="A Winter&#039;s Promise" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/a-winters-promise/christelle-dabos/hildegarde-serle/9781787701809" class="title link-invert">A Winter&#039;s Promise</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/a-winters-promise/christelle-dabos/hildegarde-serle/9781787701809" class="text-gold"><b>Christelle Dabos</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9781471170201"
                             data-productid="8922924"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Burning">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-burning/laura-bates/9781471170201">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4711/9781471170201.jpg" alt="The Burning" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-burning/laura-bates/9781471170201" class="title link-invert">The Burning</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-burning/laura-bates/9781471170201" class="text-gold"><b>Laura Bates</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9780241346303"
                             data-productid="8643804"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Truth About Keeping Secrets">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-truth-about-keeping-secrets/savannah-brown/9780241346303">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2413/9780241346303.jpg" alt="The Truth About Keeping Secrets" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-truth-about-keeping-secrets/savannah-brown/9780241346303" class="title link-invert">The Truth About Keeping Secrets</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-truth-about-keeping-secrets/savannah-brown/9780241346303" class="text-gold"><b>Savannah Brown</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781471116704"
                             data-productid="8442109"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Queen of Air and Darkness">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/queen-of-air-and-darkness/cassandra-clare/9781471116704">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4711/9781471116704.jpg" alt="Queen of Air and Darkness" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/queen-of-air-and-darkness/cassandra-clare/9781471116704" class="title link-invert">Queen of Air and Darkness</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/queen-of-air-and-darkness/cassandra-clare/9781471116704" class="text-gold"><b>Cassandra Clare</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£12.99</span>
                                            <span class="price">&nbsp;&nbsp;£9.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9781471407277"
                             data-productid="8565472"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Cruel Prince (The Folk of the Air)">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-cruel-prince-the-folk-of-the-air/holly-black/9781471407277">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4714/9781471407277.jpg" alt="The Cruel Prince (The Folk of the Air)" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-cruel-prince-the-folk-of-the-air/holly-black/9781471407277" class="title link-invert">The Cruel Prince (The Folk of the Air)</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-cruel-prince-the-folk-of-the-air/holly-black/9781471407277" class="text-gold"><b>Holly Black</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£7.99</span>
                                            <span class="price">&nbsp;&nbsp;£5.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781409175995"
                             data-productid="8991589"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="War Storm">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/war-storm/victoria-aveyard/9781409175995">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9781/4091/9781409175995.jpg" alt="War Storm" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/war-storm/victoria-aveyard/9781409175995" class="title link-invert">War Storm</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/war-storm/victoria-aveyard/9781409175995" class="text-gold"><b>Victoria Aveyard</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/campaign/new-books">See More</a> <h2><em>On The Horizon - Pre-Order Your Copy Today</em></h2></header>
            {{--END span12 (Horizon6)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Exclusively Yours7)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9780241373330"
                             data-productid="9484965"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The Secret Commonwealth: The Book of Dust Volume Two">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-secret-commonwealth-the-book-of-dust-volume-two/philip-pullman/christopher-wormell/9780241373330">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9780/2413/9780241373330.jpg" alt="The Secret Commonwealth: The Book of Dust Volume Two" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-secret-commonwealth-the-book-of-dust-volume-two/philip-pullman/christopher-wormell/9780241373330" class="title link-invert">The Secret Commonwealth: The Book of Dust Volume Two</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-secret-commonwealth-the-book-of-dust-volume-two/philip-pullman/christopher-wormell/9780241373330" class="text-gold"><b>Philip Pullman</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£15.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781785176135"
                             data-productid="9495604"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="This Storm">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/this-storm/james-ellroy/9781785176135">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176135.jpg" alt="This Storm" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/this-storm/james-ellroy/9781785176135" class="title link-invert">This Storm</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/this-storm/james-ellroy/9781785176135" class="text-gold"><b>James Ellroy</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9780718187767"
                             data-productid="9491438"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Veg">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/veg/jamie-oliver/9780718187767">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9780/7181/9780718187767.jpg" alt="Veg" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/veg/jamie-oliver/9780718187767" class="title link-invert">Veg</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/veg/jamie-oliver/9780718187767" class="text-gold"><b>Jamie Oliver</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£26.00</span>
                                            <span class="price">&nbsp;&nbsp;£13.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9781785175954"
                             data-productid="9472021"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The End of the Ocean">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-end-of-the-ocean/maja-lunde/9781785175954">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785175954.jpg" alt="The End of the Ocean" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-end-of-the-ocean/maja-lunde/9781785175954" class="title link-invert">The End of the Ocean</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-end-of-the-ocean/maja-lunde/9781785175954" class="text-gold"><b>Maja Lunde</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9781529355390"
                             data-productid="9455001"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The Institute">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-institute/stephen-king/9781529355390">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/5293/9781529355390.jpg" alt="The Institute" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-institute/stephen-king/9781529355390" class="title link-invert">The Institute</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-institute/stephen-king/9781529355390" class="text-gold"><b>Stephen King</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£10.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9781785175794"
                             data-productid="9411143"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The Body">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-body/bill-bryson/9781785175794">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175794.jpg" alt="The Body" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-body/bill-bryson/9781785175794" class="title link-invert">The Body</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-body/bill-bryson/9781785175794" class="text-gold"><b>Bill Bryson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£25.00</span>
                                            <span class="price">&nbsp;&nbsp;£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9781784742324"
                             data-productid="9250001"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The Testaments">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-testaments/9781784742324">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/7847/9781784742324.jpg" alt="The Testaments" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-testaments/9781784742324" class="title link-invert">The Testaments</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-testaments/9781784742324" class="text-gold"><b>Margaret Atwood</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£15.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9781785152207"
                             data-productid="9037831"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Cari Mora">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/cari-mora/thomas-harris/9781785152207">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785152207.jpg" alt="Cari Mora" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/cari-mora/thomas-harris/9781785152207" class="title link-invert">Cari Mora</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/cari-mora/thomas-harris/9781785152207" class="text-gold"><b>Thomas Harris</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9781529325287"
                             data-productid="9465987"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="How To">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/how-to/randall-munroe/9781529325287">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/5293/9781529325287.jpg" alt="How To" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/how-to/randall-munroe/9781529325287" class="title link-invert">How To</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/how-to/randall-munroe/9781529325287" class="text-gold"><b>Randall Munroe</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9780241401231"
                             data-productid="9338977"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Agent Running in the Field">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/agent-running-in-the-field/john-le-carre/9780241401231">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9780/2414/9780241401231.jpg" alt="Agent Running in the Field" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/agent-running-in-the-field/john-le-carre/9780241401231" class="title link-invert">Agent Running in the Field</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/agent-running-in-the-field/john-le-carre/9780241401231" class="text-gold"><b>John le Carré</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9781785175589"
                             data-productid="9416075"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Spring">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/spring/ali-smith/9781785175589">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785175589.jpg" alt="Spring" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/spring/ali-smith/9781785175589" class="title link-invert">Spring</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/spring/ali-smith/9781785175589" class="text-gold"><b>Ali Smith</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9780241405604"
                             data-productid="9391548"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Diary of an Awesome Friendly Kid">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/diary-of-an-awesome-friendly-kid/jeff-kinney/9780241405604">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9780/2414/9780241405604.jpg" alt="Diary of an Awesome Friendly Kid" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/diary-of-an-awesome-friendly-kid/jeff-kinney/9780241405604" class="title link-invert">Diary of an Awesome Friendly Kid</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/diary-of-an-awesome-friendly-kid/jeff-kinney/9780241405604" class="text-gold"><b>Jeff Kinney</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£12.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.49</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9781472265883"
                             data-productid="9441560"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Those Who Are Loved">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/those-who-are-loved/victoria-hislop/9781472265883">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4722/9781472265883.jpg" alt="Those Who Are Loved" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/those-who-are-loved/victoria-hislop/9781472265883" class="title link-invert">Those Who Are Loved</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/those-who-are-loved/victoria-hislop/9781472265883" class="text-gold"><b>Victoria Hislop</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9780241143803"
                             data-productid="8827947"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Underland">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/underland/robert-macfarlane/9780241143803">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/bookjackets/large/9780/2411/9780241143803.jpg" alt="Underland" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/underland/robert-macfarlane/9780241143803" class="title link-invert">Underland</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/underland/robert-macfarlane/9780241143803" class="text-gold"><b>Robert Macfarlane</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9781785175695"
                             data-productid="9294259"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Big Sky">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/big-sky/kate-atkinson/9781785175695">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785175695.jpg" alt="Big Sky" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/big-sky/kate-atkinson/9781785175695" class="title link-invert">Big Sky</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/big-sky/kate-atkinson/9781785175695" class="text-gold"><b>Kate Atkinson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781785175381"
                             data-productid="9029957"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Machines Like Me">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/machines-like-me/ian-mcewan/9781785175381">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/7851/9781785175381.jpg" alt="Machines Like Me" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/machines-like-me/ian-mcewan/9781785175381" class="title link-invert">Machines Like Me</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/machines-like-me/ian-mcewan/9781785175381" class="text-gold"><b>Ian McEwan</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£18.99</span>
                                            <span class="price">&nbsp;&nbsp;£15.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9780857056368"
                             data-productid="8996377"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The Girl Who Lived Twice">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-girl-who-lived-twice/david-lagercrantz/george-goulding/9780857056368">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9780/8570/9780857056368.jpg" alt="The Girl Who Lived Twice" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-girl-who-lived-twice/david-lagercrantz/george-goulding/9780857056368" class="title link-invert">The Girl Who Lived Twice</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-girl-who-lived-twice/david-lagercrantz/george-goulding/9780857056368" class="text-gold"><b>David Lagercrantz</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781529393088"
                             data-productid="9338979"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Sweet Sorrow">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/sweet-sorrow/david-nicholls/9781529393088">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/5293/9781529393088.jpg" alt="Sweet Sorrow" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/sweet-sorrow/david-nicholls/9781529393088" class="title link-invert">Sweet Sorrow</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/sweet-sorrow/david-nicholls/9781529393088" class="text-gold"><b>David Nicholls</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/campaign/special-editions/sort/pub-date-desc">See More</a> <h2>Exclusively Yours - Signed and Special Editions</h2></header>
            {{--END span12 (Exclusively Yours7)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 ( Bestselling Stationery and Gifts8)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="9781785174612"
                             data-productid="8758764"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Darkdawn">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/darkdawn/jay-kristoff/9781785174612">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/7851/9781785174612.jpg" alt="Darkdawn" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/darkdawn/jay-kristoff/9781785174612" class="title link-invert">Darkdawn</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/darkdawn/jay-kristoff/9781785174612" class="text-gold"><b>Jay Kristoff</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="9781785175442"
                             data-productid="9378954"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Lost Man">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-lost-man/jane-harper/9781785175442">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175442.jpg" alt="The Lost Man" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-lost-man/jane-harper/9781785175442" class="title link-invert">The Lost Man</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-lost-man/jane-harper/9781785175442" class="text-gold"><b>Jane Harper</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="9781785175572"
                             data-productid="9279530"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Black Leopard, Red Wolf">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/black-leopard-red-wolf/marlon-james/9781785175572">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175572.jpg" alt="Black Leopard, Red Wolf" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/black-leopard-red-wolf/marlon-james/9781785175572" class="title link-invert">Black Leopard, Red Wolf</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/black-leopard-red-wolf/marlon-james/9781785175572" class="text-gold"><b>Marlon James</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="9781786331502"
                             data-productid="8870119"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Daisy Jones and The Six">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/daisy-jones-and-the-six/taylor-jenkins-reid/9781786331502">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7863/9781786331502.jpg" alt="Daisy Jones and The Six" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/daisy-jones-and-the-six/taylor-jenkins-reid/9781786331502" class="title link-invert">Daisy Jones and The Six</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/daisy-jones-and-the-six/taylor-jenkins-reid/9781786331502" class="text-gold"><b>Taylor Jenkins Reid</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="9781785175701"
                             data-productid="9307149"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Pinch of Nom">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/pinch-of-nom/kay-featherstone/kate-allinson/9781785175701">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785175701.jpg" alt="Pinch of Nom" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/pinch-of-nom/kay-featherstone/kate-allinson/9781785175701" class="title link-invert">Pinch of Nom</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/pinch-of-nom/kay-featherstone/kate-allinson/9781785175701" class="text-gold"><b>Kay Featherstone</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£13.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="9781788702270"
                             data-productid="9469731"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Break Point">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/break-point/ollie-ollerton/9781788702270">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7887/9781788702270.jpg" alt="Break Point" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/break-point/ollie-ollerton/9781788702270" class="title link-invert">Break Point</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/break-point/ollie-ollerton/9781788702270" class="text-gold"><b>Ollie Ollerton</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="9781785769931"
                             data-productid="9449190"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Cilka&#039;s Journey">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/cilkas-journey/heather-morris/9781785769931">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/7857/9781785769931.jpg" alt="Cilka&#039;s Journey" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/cilkas-journey/heather-morris/9781785769931" class="title link-invert">Cilka&#039;s Journey</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/cilkas-journey/heather-morris/9781785769931" class="text-gold"><b>Heather Morris</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="9781785176005"
                             data-productid="9479872"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The King&#039;s Evil">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-kings-evil/andrew-taylor/9781785176005">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176005.jpg" alt="The King&#039;s Evil" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-kings-evil/andrew-taylor/9781785176005" class="title link-invert">The King&#039;s Evil</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-kings-evil/andrew-taylor/9781785176005" class="text-gold"><b>Andrew Taylor</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="9781785175541"
                             data-productid="9083698"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="I Owe You One">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/i-owe-you-one/sophie-kinsella/9781785175541">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175541.jpg" alt="I Owe You One" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/i-owe-you-one/sophie-kinsella/9781785175541" class="title link-invert">I Owe You One</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/i-owe-you-one/sophie-kinsella/9781785175541" class="text-gold"><b>Sophie Kinsella</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£15.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="9781785175831"
                             data-productid="9440420"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Hinch Yourself Happy">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/hinch-yourself-happy/mrs-hinch/9781785175831">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785175831.jpg" alt="Hinch Yourself Happy" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/hinch-yourself-happy/mrs-hinch/9781785175831" class="title link-invert">Hinch Yourself Happy</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/hinch-yourself-happy/mrs-hinch/9781785175831" class="text-gold"><b>Mrs Hinch</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9781785175817"
                             data-productid="9410010"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The True Queen">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-true-queen/zen-cho/9781785175817">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/7851/9781785175817.jpg" alt="The True Queen" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-true-queen/zen-cho/9781785175817" class="title link-invert">The True Queen</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-true-queen/zen-cho/9781785175817" class="text-gold"><b>Zen Cho</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="9780008327057"
                             data-productid="9041488"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="BISH BASH BOSH">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/bish-bash-bosh/henry-firth/ian-theasby/9780008327057">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v6/large/9780/0083/9780008327057.jpg" alt="BISH BASH BOSH" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/bish-bash-bosh/henry-firth/ian-theasby/9780008327057" class="title link-invert">BISH BASH BOSH</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/bish-bash-bosh/henry-firth/ian-theasby/9780008327057" class="text-gold"><b>Henry Firth</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp" >£20.00</span>
                                            <span class="price">&nbsp;&nbsp;£10.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="9781409192169"
                             data-productid="9411245"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="The Strawberry Thief">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-strawberry-thief/joanne-harris/9781409192169">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/4091/9781409192169.jpg" alt="The Strawberry Thief" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-strawberry-thief/joanne-harris/9781409192169" class="title link-invert">The Strawberry Thief</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-strawberry-thief/joanne-harris/9781409192169" class="text-gold"><b>Joanne Harris</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9781785175695"
                             data-productid="9294259"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Big Sky">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/big-sky/kate-atkinson/9781785175695">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/7851/9781785175695.jpg" alt="Big Sky" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/big-sky/kate-atkinson/9781785175695" class="title link-invert">Big Sky</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/big-sky/kate-atkinson/9781785175695" class="text-gold"><b>Kate Atkinson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£20.00</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="9781472265180"
                             data-productid="9396348"
                             data-preorder="1"
                             data-buy="1"
                             data-cnc="0"
                        >

                            <div title="Six Tudor Queens: Anna of Kleve, Queen of Secrets">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/six-tudor-queens-anna-of-kleve-queen-of-secrets/alison-weir/9781472265180">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/4722/9781472265180.jpg" alt="Six Tudor Queens: Anna of Kleve, Queen of Secrets" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/six-tudor-queens-anna-of-kleve-queen-of-secrets/alison-weir/9781472265180" class="title link-invert">Six Tudor Queens: Anna of Kleve, Queen of Secrets</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/six-tudor-queens-anna-of-kleve-queen-of-secrets/alison-weir/9781472265180" class="text-gold"><b>Alison Weir</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£18.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9781785175657"
                             data-productid="9295027"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Taking of Annie Thorne">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-taking-of-annie-thorne/c-j-tudor/9781785175657">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175657.jpg" alt="The Taking of Annie Thorne" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-taking-of-annie-thorne/c-j-tudor/9781785175657" class="title link-invert">The Taking of Annie Thorne</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-taking-of-annie-thorne/c-j-tudor/9781785175657" class="text-gold"><b>C. J. Tudor</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="9781785175770"
                             data-productid="9410011"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Secretary">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-secretary/renee-knight/9781785175770">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175770.jpg" alt="The Secretary" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-secretary/renee-knight/9781785175770" class="title link-invert">The Secretary</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-secretary/renee-knight/9781785175770" class="text-gold"><b>Renee Knight</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="9781785175565"
                             data-productid="9190391"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="The Wych Elm">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-wych-elm/tana-french/9781785175565">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785175565.jpg" alt="The Wych Elm" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-wych-elm/tana-french/9781785175565" class="title link-invert">The Wych Elm</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-wych-elm/tana-french/9781785175565" class="text-gold"><b>Tana French</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/category/stationery-gifts">See More</a> <h2><em>Our Bestselling Stationery and Gifts</em></h2></header>
            {{--END span12 ( Bestselling Stationery and Gifts8)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Bookshop Events9)--}}

            <div class="span12"><!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview"
                             data-carousel-position="0"
                             data-isbn="5702016369274"
                             data-productid="9400603"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="LEGO (R) Movie 2 Minifigures">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/lego-r-movie-2-minifigures/5702016369274">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/5702/0163/5702016369274.jpg" alt="LEGO (R) Movie 2 Minifigures" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/lego-r-movie-2-minifigures/5702016369274" class="title link-invert">LEGO ® Movie 2 Minifigures</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/lego-r-movie-2-minifigures/5702016369274" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£2.99</span>

                                        </div>
                                        <span class="format">
                                    Toy
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="1"
                             data-isbn="0852131006020"
                             data-productid="8297343"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Exploding Kittens">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/exploding-kittens/0852131006020">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v5/large/0852/1310/0852131006020.jpg" alt="Exploding Kittens" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/exploding-kittens/0852131006020" class="title link-invert">Exploding Kittens</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/exploding-kittens/0852131006020" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£19.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="2"
                             data-isbn="0766150848472"
                             data-productid="8332271"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Cards Against Humanity">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/cards-against-humanity/0766150848472">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v5/large/0766/1508/0766150848472.jpg" alt="Cards Against Humanity" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/cards-against-humanity/0766150848472" class="title link-invert">Cards Against Humanity</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/cards-against-humanity/0766150848472" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£27.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="3"
                             data-isbn="0849421004118"
                             data-productid="8827285"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Niffler Plush">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/niffler-plush/0849421004118">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/0849/4210/0849421004118.jpg" alt="Niffler Plush" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/niffler-plush/0849421004118" class="title link-invert">Niffler Plush</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/niffler-plush/0849421004118" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£22.99</span>

                                        </div>
                                        <span class="format">
                                    Soft toy
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="4"
                             data-isbn="5036905029612"
                             data-productid="8530569"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Harry Potter Trivial Pursuit">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/harry-potter-trivial-pursuit/5036905029612">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v4/large/5036/9050/5036905029612.jpg" alt="Harry Potter Trivial Pursuit" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/harry-potter-trivial-pursuit/5036905029612" class="title link-invert">Harry Potter Trivial Pursuit</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/harry-potter-trivial-pursuit/5036905029612" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="5"
                             data-isbn="0612615076921"
                             data-productid="9039684"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Felt Bedside Caddy">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/felt-bedside-caddy/0612615076921">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/0612/6150/0612615076921.jpg" alt="Felt Bedside Caddy" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/felt-bedside-caddy/0612615076921" class="title link-invert">Felt Bedside Caddy</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/felt-bedside-caddy/0612615076921" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£17.99</span>

                                        </div>
                                        <span class="format">
                                    General merchandise
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="6"
                             data-isbn="0810270030825"
                             data-productid="8908148"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Unstable Unicorns">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/unstable-unicorns/0810270030825">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/0810/2700/0810270030825.jpg" alt="Unstable Unicorns" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/unstable-unicorns/0810270030825" class="title link-invert">Unstable Unicorns</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/unstable-unicorns/0810270030825" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£19.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="7"
                             data-isbn="0856739001159"
                             data-productid="9039789"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Bananagrams">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/bananagrams/0856739001159">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/0856/7390/0856739001159.jpg" alt="Bananagrams" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/bananagrams/0856739001159" class="title link-invert">Bananagrams</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/bananagrams/0856739001159" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£15.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="8"
                             data-isbn="0810816030104"
                             data-productid="9071125"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="What Do You Meme?">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/what-do-you-meme/0810816030104">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/0810/8160/0810816030104.jpg" alt="What Do You Meme?" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/what-do-you-meme/0810816030104" class="title link-invert">What Do You Meme?</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/what-do-you-meme/0810816030104" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£29.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="9"
                             data-isbn="3558380010494"
                             data-productid="4769634"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Dobble">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/dobble/3558380010494">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/3558/3800/3558380010494.jpg" alt="Dobble" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/dobble/3558380010494" class="title link-invert">Dobble</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/dobble/3558380010494" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Toy
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="10"
                             data-isbn="9336592006207"
                             data-productid="5059861"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Waboba Moon Ball">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/waboba-moon-ball/9336592006207">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v11/large/9336/5920/9336592006207.jpg" alt="Waboba Moon Ball" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/waboba-moon-ball/9336592006207" class="title link-invert">Waboba Moon Ball</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/waboba-moon-ball/9336592006207" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£5.99</span>

                                        </div>
                                        <span class="format">
                                    Toy
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="11"
                             data-isbn="5036905027342"
                             data-productid="9102152"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Friends Trivial Pursuit Bitesize">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/friends-trivial-pursuit-bitesize/5036905027342">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/5036/9050/5036905027342.jpg" alt="Friends Trivial Pursuit Bitesize" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/friends-trivial-pursuit-bitesize/5036905027342" class="title link-invert">Friends Trivial Pursuit Bitesize</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/friends-trivial-pursuit-bitesize/5036905027342" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.99</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="12"
                             data-isbn="5060146590310"
                             data-productid="8011405"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="World Scratch Map">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/world-scratch-map/5060146590310">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/5060/1465/5060146590310.jpg" alt="World Scratch Map" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/world-scratch-map/5060146590310" class="title link-invert">World Scratch Map</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/world-scratch-map/5060146590310" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£17.99</span>

                                        </div>
                                        <span class="format">
                                    Poster
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="13"
                             data-isbn="9781452164601"
                             data-productid="7968897"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Celestial One Line a Day">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/celestial-one-line-a-day/yao-cheng/9781452164601">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v2/large/9781/4521/9781452164601.jpg" alt="Celestial One Line a Day" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/celestial-one-line-a-day/yao-cheng/9781452164601" class="title link-invert">Celestial One Line a Day</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/celestial-one-line-a-day/yao-cheng/9781452164601" class="text-gold"><b>Yao Cheng</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Notebook / blank book
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="14"
                             data-isbn="5060136005404"
                             data-productid="9039698"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="William Morris Acanthus 14oz Ecoffee Cup">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/william-morris-acanthus-14oz-ecoffee-cup/5060136005404">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/5060/1360/5060136005404.jpg" alt="William Morris Acanthus 14oz Ecoffee Cup" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/william-morris-acanthus-14oz-ecoffee-cup/5060136005404" class="title link-invert">William Morris Acanthus 14oz Ecoffee Cup</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/william-morris-acanthus-14oz-ecoffee-cup/5060136005404" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£11.99</span>

                                        </div>
                                        <span class="format">
                                    General merchandise
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="15"
                             data-isbn="9780307719775"
                             data-productid="1581328"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Q And A A Day">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/q-and-a-a-day/potter-style/9780307719775">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9780/3077/9780307719775.jpg" alt="Q And A A Day" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/q-and-a-a-day/potter-style/9780307719775" class="title link-invert">Q And A A Day</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/q-and-a-a-day/potter-style/9780307719775" class="text-gold"><b>Potter Style</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£14.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="16"
                             data-isbn="0612615071803"
                             data-productid="8423537"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Ibed Lap Desk">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/ibed-lap-desk/0612615071803">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v1/large/0612/6150/0612615071803.jpg" alt="Ibed Lap Desk" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/ibed-lap-desk/0612615071803" class="title link-invert">Ibed Lap Desk</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/ibed-lap-desk/0612615071803" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£17.99</span>

                                        </div>
                                        <span class="format">
                                    General merchandise
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview"
                             data-carousel-position="17"
                             data-isbn="5034566124554"
                             data-productid="8423574"
                             data-preorder="0"
                             data-buy="1"
                             data-cnc="1"
                        >

                            <div title="Large Gruffalo">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/large-gruffalo/5034566124554">
                                            <img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/5034/5661/5034566124554.jpg" alt="Large Gruffalo" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="first-click-overlay"></div>
                                    <div class="hover-layer">
                                        <div class="hover-item"></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/product/large-gruffalo/5034566124554" class="title link-invert">Large Gruffalo</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/large-gruffalo/5034566124554" class="text-gold"><b></b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£24.99</span>

                                        </div>
                                        <span class="format">
                                    Soft toy
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black" ></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
                </div>
                <hr style="margin-top: 30px;" /></div><header class="span12 pages-header-row"><a class="button button-teal" href="/events">See More</a> <h2><em>Bookshop Events</em></h2></header>
            {{--END span12 (Bookshop Events9)--}}
{{-------------------------------------------------------------------------------}}
            {{--span12 (Blog10)--}}

            <div class="span12">
                <div class=" ">
                    <div class="slick_carousel pod_slider3">
                        <div class="span6">
                            <a href="/events/world-book-day-events ">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126034-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126034-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126034-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126034-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126034-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/search/author/132">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126094-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126094-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126094-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126094-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126094-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/search/author/49148">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00126095-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00126095-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00126095-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00126095-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00126095-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/search/author/51794 ">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00124494-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00124494-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00124494-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00124494-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00124494-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/search/author/206868 ">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125697-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125697-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125697-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125697-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125697-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/search/author/2364033 ">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125729-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125729-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125729-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125729-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125729-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/ian-mcewan-in-association-with-aye-write/glasgow-sauchiehall-street">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125290-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125290-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125290-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125290-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125290-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="https://www.waterstones.com/events/search/author/1263708">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00123386-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00123386-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00123386-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00123386-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00123386-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/search/author/1647582">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125435-280x237.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125435-374x317.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125435-561x476.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125435-920x780.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125435-580x492.jpeg"
                                     alt="" />
                            </a>
                        </div>
                        <div class="span6">
                            <a href="/events/gruffalo-day-events">
                                <img srcset="
				    		https://cdn.waterstones.com/images/00125848-280x217.jpeg 280w,
				    		https://cdn.waterstones.com/images/00125848-374x289.jpeg 374w,
				    		https://cdn.waterstones.com/images/00125848-561x434.jpeg 561w,
				    		https://cdn.waterstones.com/images/00125848-988x764.jpeg 988w"
                                     sizes="
					    		(max-width: 590px) calc(100vw - 100px),
					    		(max-width: 780px) calc(50vw - 60px),
					    		(max-width: 1300px) calc(33vw - 48px),
					    		374px"
                                     src="https://cdn.waterstones.com/images/00125848-580x449.jpeg"
                                     alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div><div class="span12" style="min-height: 20px;"><header class="span12 pages-header-row"><hr style="margin-bottom: 35px;" /><a class="button button-teal" href="/blog">See More</a>
                    <h2><em>From the Waterstones Blog</em></h2>
                </header></div>



            <div class="span3 preview-brick tablet-span6 mobile-span12 mobile-omega mobile-alpha">
                <div class="blog-preview span12 tablet-span12 mobile-span12">
                    <div class="image-container text-center">
                        <a href="/blog/the-best-books-to-look-out-for-in-february-2019">

                            <img srcset="
                https://cdn.waterstones.com/images/00125900-280x233.jpeg 280w,
                https://cdn.waterstones.com/images/00125900-374x312.jpeg 374w,
                https://cdn.waterstones.com/images/00125900-585x488.jpeg 585w,
                https://cdn.waterstones.com/images/00125900-748x623.jpeg 748w,
                https://cdn.waterstones.com/images/00125900-1450x1208.jpeg 1450w"
                                 sizes="
                (max-width: 640px) calc(100vw - 40px),
                (max-width: 800px) calc(50vw - 50px),
                (max-width: 1300px) calc(25vw - 40px),
                580px"
                                 src="https://cdn.waterstones.com/images/00125900-580x483.jpeg"
                                 alt="The Best Books to Look Out for in February" />

                        </a>
                    </div>
                    <div class="blog-preview-content">
                        <div class="inner">
                            <h2><a href="/blog/the-best-books-to-look-out-for-in-february-2019" class="link-invert">The Best Books to Look Out for in February</a></h2>
                            <p>Myth-fused masterpieces, post-truth era thrills and much more besides: we present February’s highlights.</p>
                            <a href="/blog/the-best-books-to-look-out-for-in-february-2019" class="dot-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span3   preview-bricktablet-span6 mobile-span12 mobile-omega mobile-alpha">
                <div class="blog-preview span12 tablet-span12 mobile-span12">
                    <div class="image-container text-center">
                        <a href="/blog/an-exclusive-recipe-from-pinch-of-nom">

                            <img srcset="
                https://cdn.waterstones.com/images/00123705-280x233.jpeg 280w,
                https://cdn.waterstones.com/images/00123705-374x312.jpeg 374w,
                https://cdn.waterstones.com/images/00123705-585x488.jpeg 585w,
                https://cdn.waterstones.com/images/00123705-748x623.jpeg 748w,
                https://cdn.waterstones.com/images/00123705-1450x1208.jpeg 1450w"
                                 sizes="
                (max-width: 640px) calc(100vw - 40px),
                (max-width: 800px) calc(50vw - 50px),
                (max-width: 1300px) calc(25vw - 40px),
                580px"
                                 src="https://cdn.waterstones.com/images/00123705-580x483.jpeg"
                                 alt="An Exclusive Recipe from Pinch of Nom" />

                        </a>
                    </div>
                    <div class="blog-preview-content">
                        <div class="inner">
                            <h2><a href="/blog/an-exclusive-recipe-from-pinch-of-nom" class="link-invert">An Exclusive Recipe from Pinch of Nom</a></h2>
                            <p>An exclusive recipe in advance of the hit release of the Pinch of Nom cookery book, plus the chance to win a fantastic prize.</p>
                            <a href="/blog/an-exclusive-recipe-from-pinch-of-nom" class="dot-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span3 preview-brick tablet-span6 mobile-span12 mobile-omega mobile-alpha">
                <div class="blog-preview span12 tablet-span12 mobile-span12">
                    <div class="image-container text-center">
                        <a href="/blog/b-p-walter-recommends-his-top-five-domestic-thrillers">

                            <img srcset="
                https://cdn.waterstones.com/images/00125307-280x233.jpeg 280w,
                https://cdn.waterstones.com/images/00125307-374x312.jpeg 374w,
                https://cdn.waterstones.com/images/00125307-585x488.jpeg 585w,
                https://cdn.waterstones.com/images/00125307-748x623.jpeg 748w,
                https://cdn.waterstones.com/images/00125307-1450x1208.jpeg 1450w"
                                 sizes="
                (max-width: 640px) calc(100vw - 40px),
                (max-width: 800px) calc(50vw - 50px),
                (max-width: 1300px) calc(25vw - 40px),
                580px"
                                 src="https://cdn.waterstones.com/images/00125307-580x483.jpeg"
                                 alt="B. P. Walter Recommends his Favourite Domestic Thrillers" />

                        </a>
                    </div>
                    <div class="blog-preview-content">
                        <div class="inner">
                            <h2><a href="/blog/b-p-walter-recommends-his-top-five-domestic-thrillers" class="link-invert">B. P. Walter Recommends his Favourite Domestic Thrillers</a></h2>
                            <p>B.P. Walter, debut author of the gripping A Version of the Truth, discusses his five top psychological thillers. </p>
                            <a href="/blog/b-p-walter-recommends-his-top-five-domestic-thrillers" class="dot-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span3 preview-brick tablet-span6 mobile-span12 mobile-omega mobile-alpha">
                <div class="blog-preview span12 tablet-span12 mobile-span12">
                    <div class="image-container text-center">
                        <a href="/blog/the-best-books-to-look-out-for-in-2019">

                            <img srcset="
                https://cdn.waterstones.com/images/00123855-280x233.jpeg 280w,
                https://cdn.waterstones.com/images/00123855-374x312.jpeg 374w,
                https://cdn.waterstones.com/images/00123855-585x488.jpeg 585w,
                https://cdn.waterstones.com/images/00123855-748x623.jpeg 748w,
                https://cdn.waterstones.com/images/00123855-1450x1208.jpeg 1450w"
                                 sizes="
                (max-width: 640px) calc(100vw - 40px),
                (max-width: 800px) calc(50vw - 50px),
                (max-width: 1300px) calc(25vw - 40px),
                580px"
                                 src="https://cdn.waterstones.com/images/00123855-580x483.jpeg"
                                 alt="Our Preview of 2019" />

                        </a>
                    </div>
                    <div class="blog-preview-content">
                        <div class="inner">
                            <h2><a href="/blog/the-best-books-to-look-out-for-in-2019" class="link-invert">Our Preview of 2019</a></h2>
                            <p>As we head into 2019, we take a look at just some of the brilliant new reading on the horizon.</p>
                            <a href="/blog/the-best-books-to-look-out-for-in-2019" class="dot-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--END span12 (Blog10)--}}
{{-------------------------------------------------------------------------------}}
        </div>
    </div>

    <footer id="footer">
        <div class="footer-body">
            <div class="footer-col footer-col-generic footer-col-4 ">
                <h3>Shopping with us</h3>

                <ul >
                    <li><a class="" href="/bookshops" ><span>Bookshops</span></a></li>
                    <li><a class="" href="/help/click-and-collect/27" ><span>Click &amp; Collect</span></a></li>
                    <li><a class="" href="/help/gift-cards-and-vouchers/32" ><span>Gift Cards</span></a></li>
                    <li><a class="" href="/students" ><span>Student Discount</span></a></li>
                    <li><a class="" href="/plus" ><span>Waterstones Plus</span></a></li>
                </ul>

            </div>
            <div class="footer-col footer-col-generic footer-col-4 ">
                <h3>Customer services</h3>

                <ul >
                    <li><a class="" href="/help/contact-us/28" ><span>Contact Us</span></a></li>
                    <li><a class="" href="/help/accessibility-statement/5" ><span>Accessibility</span></a></li>
                    <li><a class="" href="/help/delivery-options/19" ><span>Delivery Options</span></a></li>
                    <li><a class="" href="/help/privacy-policy/1401" ><span>Privacy Policy</span></a></li>
                    <li><a class="" href="/help/returning-items/41" ><span>Returning Items</span></a></li>
                    <li><a class="" href="/help/supply-of-waterstones-products-to-customers/46" ><span>Terms &amp; Conditions</span></a></li>
                    <li><a class="" href="https://www.waterstones.com/help/modern-slavery-statement/1051" ><span>Modern Slavery Statement</span></a></li>
                    <li><a class="" href="/help/cookie-policy/1408" ><span>Cookie Policy</span></a></li>
                </ul>

            </div>
            <div class="footer-col footer-col-generic footer-col-4 ">
                <h3>About Waterstones</h3>

                <ul >
                    <li><a class="" href="/help/about-us/44" ><span>About us</span></a></li>
                    <li><a class="" href="/help/affiliate-programme/45" ><span>Affiliates</span></a></li>
                    <li><a class="" href="http://www.hatchards.co.uk/" target="_blank"><span>Hatchards</span></a></li>
                    <li><a class="" href="/help/independent-publishers/48" ><span>Independent Publishers</span></a></li>
                    <li><a class="" href="/waterstones-childrens-laureate" ><span>Waterstones Children&#039;s Laureate</span></a></li>
                    <li><a class="" href="/careers" ><span>Careers at Waterstones</span></a></li>
                </ul>

            </div>
            <div class="footer-col footer-col-social footer-col-4 ">
                <h3>Follow us</h3>

                <ul class="socials">
                    <li><a class="icon-twitter" href="https://twitter.com/waterstones" target="_blank"><span>Twitter</span></a></li>
                    <li><a class="icon-facebook" href="https://www.facebook.com/waterstones" target="_blank"><span>Facebook</span></a></li>
                    <li><a class="icon-pinterest" href="http://www.pinterest.com/waterstones/" target="_blank"><span>Pinterest</span></a></li>
                    <li><a class="icon-instagram" href="http://instagram.com/waterstones" target="_blank"><span>Instagram</span></a></li>
                    <li><a class="icon-youtube" href="http://www.youtube.com/user/Waterstonescom" target="_blank"><span>YouTube</span></a></li>
                </ul>

            </div>

            <div class="footer-col nav-col">
                <a href="/help/contact-us/28">Contact us</a>
            </div>
            <div class="footer-col nav-col">
                <a href="/help">Help</a>
            </div>
            <div class="footer-col nav-col">
                <a href="/help/privacy-policy/1401">Privacy Policy</a>
            </div>
            <div class="footer-col nav-col">
                <a href="/help/cookie-policy/1408">Cookie Policy</a>
            </div>
            <div class="footer-col nav-col">
                <a href="/students">Student Discount</a>
            </div>
            <div class="footer-col nav-col">
                <a href="https://www.waterstones.com/help/modern-slavery-statement/1051">Modern Slavery Statement</a>
            </div>


            <small>&copy; Waterstones, 2019. Waterstones Booksellers Limited. Registered in England and Wales. Company number 00610095. Registered office address: 203-206 Piccadilly, London, W1J 9HD.</small>
        </div>
    </footer>


    <div id="loginModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Sign In / Register</h3>
        </header>
        <div class="modal-body">
            <div class="login-area">
                <span class="register-here">Not registered? <a href="/registration" class="default-link">CREATE AN ACCOUNT</a><a href="/plus" class="plus-link">CREATE A <span class="inline-plus">plus</span> ACCOUNT</a></span>



                <form method="post" action="/signin" class="row ajax-login" novalidate>
                    <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>

                    <input type="hidden" name="continue" value="/"/>

                    <input class="input input-large" type="email" name="email" placeholder="Email address"/>
                    <input class="input input-large" type="password" autocomplete="off" name="password" placeholder="Password"/>
                    <div class="captcha-box" style="float: left;margin-bottom: 10px;">
                        <div id="g-recaptcha-modal" class="g-recaptcha-modal" data-sitekey="6LevjSUTAAAAAHZ7bHMXpeebahJ4HTnlcPc-XVD6"></div>
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                    </div>
                    <label class="login-error input-error"></label>

                    <div class="span12 alpha omega submit-wrapper">
                        <div class="submit-wrapper-fields span7 alpha">

                            <div class="remember-me-wrap">
                                <label class="checkbox-label">
                                    <input type="checkbox" class="ws-checkbox ws-checkbox-small" name="keepLoggedIn"/>
                                    <span>Remember me</span>
                                </label>
                                <div class="remember-me-help">?</div>
                            </div>
                            <a href="/reset" class="forgot-pass">Forgotten password?</a>

                        </div>
                        <button class="button button-large button-teal">Sign in</button>
                    </div>

                </form>

            </div>

            <div class="reset-pass row" style="display:none;">
                <span style="font-weight: bold;">Forgotten password</span>

                <p class="message"></p>

                <form action="/reset/confirm" method="post" class="reset-password-form" novalidate>
                    <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>
                    <div class="span12 alpha omega">
                        <p>Please enter your email address below and we'll send you a link to reset your password.</p>
                    </div>

                    <div class="span12 alpha omega contained-width-fields">
                        <div class="invisible right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>

                        <div class="input-wrapper">
                            <input type="email" name="email" class="input input-large" placeholder="Email address" required />
                        </div>

                        <div class="right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>
                    </div>

                </form>
                <a href='' class="login-return">Back to login</a>


            </div>

        </div>

    </div>



    <div id="loginValidModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Sign In</h3>
        </header>
        <div class="modal-body">

            <div class="login-area">

                <form id="loginValidForm" action="/securitylogin" class="row" name="login" autocomplete="off">
                    <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>
                    <input type="hidden" name="start" value="1" />
                    <div class="span12 alpha omega">
                        <a href="/logout" class="lnkLogOut">Not you?</a>
                        <div class="clearfix"></div>
                        <input readonly type="email" name="email" id="login_valid_form_email" value="" placeholder="Email address" class="input input-large"/>

                        <input type="password" name="password" id="login_valid_form_password" value="" class="input input-large" autocomplete="off" placeholder="Password" />

                        <label class="login-error input-error"></label>
                        <div class="span12 alpha omega submit-wrapper">
                            <div class="submit-wrapper-fields span8 mobile-span7 alpha">
                                <a href="/reset" class="forgot-pass">Forgotten password?</a>
                            </div>

                            <button class="button button-large button-teal">Sign in</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

            <div class="reset-pass row" style="display:none;">
                <span style="font-weight: bold;">Forgotten password</span>

                <p class="message"></p>

                <form action="/reset/confirm" method="post" class="reset-password-form" novalidate>
                    <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>
                    <div class="span12 alpha omega">
                        <p>Use the form below to recover your username and password. New details will be emailed to you.</p>
                    </div>

                    <div class="span12 alpha omega contained-width-fields">
                        <div class="invisible right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>

                        <div class="input-wrapper">

                            <input readonly type="email" name="email" value="" placeholder="Email address" class="input input-large"/>
                        </div>

                        <div class="right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>
                    </div>

                    <div class="span12 alpha omega">
                        <p>If you have changed your email address then <a href="https://waterstones.zendesk.com/hc/en-us/requests/new" rel="nofollow">contact us</a> and we will update your details.</p>
                    </div>
                </form>
                <a href='' class="login-return">Back to login</a>


            </div>

        </div>
    </div>


    <div id="collectModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Click &amp; Collect</h3>
        </header>
        <div class="modal-body">
            <div class="subheading">Simply reserve online and pay at the counter when you collect.
                Available in shop from just two hours, subject to availability.
            </div>
            <div class="collect-box thankyou">
                <div class="title">Thank you for your reservation</div>
                <div>Your order is now being processed and we have sent a confirmation email to you at <span id="customeremail"></span></div>
            </div>
            <div class="collect-box book">
                <div class="thumb"></div>
                <div class="info">
                    <div class="title"></div>
                    <div class="price"><span class="wasprice"></span><span class="nowprice"></span></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="collect-box stores open">
                <div class="store-message">
                    This item can be requested from the shops shown below. <span class="to-buy">If this item isn't available to be reserved nearby, <a href="" class="buy-link">add the item to your basket</a> instead and select 'Deliver to my local shop' at the checkout, to be able to collect it from there at a later date.</span>
                    <div style="display:none;">
                        <form class="buy-form" method="post" action="/checkout/setbasketitemqty">
                            <input type="hidden" name="mode" value="add" tabindex="0">
                            <input type="hidden" name="productid" value="" tabindex="0">
                            <input type="hidden" name="quantity" value="1" tabindex="0">
                        </form>
                    </div>
                </div>
                <div class="store-container"></div>
                <div class="search">
                    <div class="book-detail-cnc">
                        <div class="book-detail-cnc-form">
                            <form method="get" action="/reserve/search" class="find-collect clearfix">
                                <input type="hidden" name="isbn" id="searchshopid" value="">
                                <input type="hidden" name="lat" class="lat">
                                <input type="hidden" name="lng" class="lng">
                                <input type="text" name="search" class="input" placeholder="Search for a shop" value="" required="" autocomplete="off" tabindex="-1">
                                <button class="button button-gold" id="searchterm">Go</button>
                                <div class="js-location-container"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collect-box details">
                <form action="/reserve/details" method="post" class="reserve-details-form" novalidate="novalidate">
                    <input type="hidden" name="total" id="bookprice" value="">
                    <input type="hidden" name="isbn" id="collectisbn" value="">
                    <input type="hidden" name="shopid" id="collectshopid" value="">
                    <div class="field">
                        <label>First name<abbr title="required">*</abbr></label>
                        <input type="text" name="customer_firstname" id="customer_firstname" class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field">
                        <label>Last name<abbr title="required">*</abbr></label>
                        <input type="text" name="customer_lastname" id="customer_lastname"  class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field">
                        <label>Email address<abbr title="required">*</abbr></label>
                        <input type="email" name="customer_email" id="customer_email" class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field"></div>
                    <div class="field">
                        <div class="inline-radios">
                            <label>Preferred contact method</label>
                            <div class="fieldset">
                                <label class="radio-label">
                                    <input type="radio" name="preferred_contact_method" value="E" id="pref_E" class="input-radio ws-radio" checked="checked">
                                    <span>Email</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="preferred_contact_method" value="S" id="pref_S" class="input-radio ws-radio">
                                    <span>Text message</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Mobile number<abbr title="required">*</abbr></label>
                        <input type="tel" name="customer_phone" id="customer_phone"  class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field">
                        <label class="checkbox-label">
                            <div class="ws-checkable-outer ws-checkbox-outer"><input type="checkbox" class="ws-checkbox" name="opt_into_mailing" id="opt_into_mailing"></div>
                            <span class="label-content">
                <span>Please provide me with your latest book news, views and details of Waterstones’ special offers.</span>
              </span>
                        </label>
                    </div>
                    <button class="order button button-gold" type="submit">Place Order</button>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="collect-box orderready">
                <div class="title">When will my order be ready to collect?</div>
                <div>Following the initial email, you will be contacted by the shop to confirm that your item is available for collection.</div>
                <div class="shopcontact">Call us on <span class="shopphone"></span> or send us an email at <span class="shopemail"></span></div>
                <button class="js-modal-close button button-teal">OK</button>
            </div>
        </div>
        <div class="collect-error">
            <div class="title">Unfortunately there has been a problem with your order</div>
            <div class="error-message"></div>
            <div class="shopcontact">Please try again or alternatively you can contact your chosen shop on <span class="shopphone"></span> or send us an email at <span class="shopemail"></span></div>
            <p></p>
        </div>
    </div>






</div>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"1fd17811e3","applicationID":"15896488","transactionName":"MQdTNRBYXUNZAURbVghNchQRTVxdFwteVlweTVgPBlxL","queueTime":0,"applicationTime":146,"atts":"HUBEQ1hCEUVLB0JtWAEHXxU9SkdCUQxXEANEL14bC1VfUWRNBRwJRkpmCAxdXEdLQn5mGVdSH1FZGWR\/b1QECRkUFAtXVxcDGRglVVFSCT4eU1IIAwAJUgESfw8QVAcNQW8fDlceAhtKQFMOFmZXVUwHU0ZcAkALQyxWERwaEVVBSg8NXz4LXREKGgtCRw0SBURRAU1YAFcSAERaAg5FBlZRVgANQBwQUBY9UAUGS1ZDS0AKEAheWh9TUgEdBQ9MBQYbSkBDBBNMVkNMPUVAUERYEz1NG04cGgMSCEIbHw==","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
