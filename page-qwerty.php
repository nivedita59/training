<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

//get_header();
	hestia_output_wrapper_header_start( false ); ?> 
		<div class="container">
			<div class="row">
			<!--	<div class="col-md-10 col-md-offset-1 text-center">
			
			
    <!DOCTYPE html>
<!--[if lte IE 8]><html class="old-browser"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="Simplilearn" dir="ltr" lang="en-US">
    <head>
	
	
 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>Big Data Hadoop Architect Masters Program Training - Simplilearn</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UgYHVF5UGwIDUVZTAgIH"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,n,e)])}catch(s){try{i("ierr",[s,c.now(),!0])}catch(u){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t){i("err",[t,c.now()])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),u=!0)}s.on("fn-start",function(t,n,e){u&&(d+=1)}),s.on("fn-err",function(t,n,e){u&&(this.thrown=!0,o(e))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script>
            <link rel="shortcut icon" href="https://www.simplilearn.com/static/frontend/images/favicon.png" />
            						<link rel="apple-touch-icon" sizes="57x57" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-57x57.png">
						<link rel="apple-touch-icon" sizes="60x60" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-60x60.png">
						<link rel="apple-touch-icon" sizes="72x72" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-72x72.png">
						<link rel="apple-touch-icon" sizes="76x76" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-76x76.png">
						<link rel="apple-touch-icon" sizes="114x114" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-114x114.png">
						<link rel="apple-touch-icon" sizes="120x120" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-120x120.png">
						<link rel="apple-touch-icon" sizes="144x144" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-144x144.png">
						<link rel="apple-touch-icon" sizes="152x152" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-152x152.png">
						<link rel="apple-touch-icon" sizes="180x180" href="https://www.simplilearn.com/static/frontend/images/favicon/apple-touch-icon-180x180.png">
						<link rel="icon" type="image/png" href="https://www.simplilearn.com/static/frontend/images/favicon/favicon-32x32.png" sizes="32x32.png">
						<link rel="icon" type="image/png" href="https://www.simplilearn.com/static/frontend/images/favicon/favicon-194x194.png" sizes="194x194">
						<link rel="icon" type="image/png" href="https://www.simplilearn.com/static/frontend/images/favicon/favicon-96x96.png" sizes="96x96">
						<link rel="icon" type="image/png" href="https://www.simplilearn.com/static/frontend/images/favicon/android-chrome-192x192.png" sizes="192x192">
						<link rel="icon" type="image/png" href="https://www.simplilearn.com/static/frontend/images/favicon/favicon-16x16.png" sizes="16x16">
						<link rel="mask-icon" href="https://www.simplilearn.com/static/frontend/images/favicon/safari-pinned-tab.svg" color="#ffffff">
						<meta name="msapplication-TileColor" content="#da532c">
						<meta name="msapplication-TileImage" content="/mstile-144x144.png">
						<meta name="theme-color" content="#ffffff">
						            <link rel="alternate" type="application/rss+xml" href="https://www.simplilearn.com/feed/" title="Simplilearn Updates   " />
            <link type="application/opensearchdescription+xml" rel="search" href="/simpli_search.xml"/>

						        <!-- Meta tags : Start -->
            <meta name="description" content="Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects." >

                            <meta name="keywords" content="Big Data Hadoop Architect, Big Data Architect, Masters Program, Learning Path, Course, Simplilearn" />
                            <link rel="canonical" href="https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"/>
                                <meta property="og:site_name" content="Simplilearn.com"/>
                <meta property="og:url" content="https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training" >
                <meta property="og:title" content="Big Data Hadoop Architect Masters Program" >
                <meta property="og:description" content="Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects." >
                <meta property="og:image" content="https://www.simplilearn.com/ice9/course_images/course_thumbnail_default.png" >
                    <meta property="og:type" content="simplilearn_com:course" >
            
               <meta name="twitter:card" content="app"/>
               <meta name="twitter:site:id" content="@Simplilearn"/>
               <meta name="twitter:creator" content="@Simplilearn"/>

               <meta property="twitter:app:name:iphone" content="Simplilearn" />
               <meta property="twitter:app:id:iphone" content="963042747" />
               <meta property="twitter:app:name:ipad" content="Simplilearn" />
               <meta property="twitter:app:id:ipad" content="963042747" />
               <meta property="twitter:app:name:googleplay" content="Simplilearn" />
               <meta property="twitter:app:id:googleplay" content="com.mobile.simplilearn" />
                        <meta name="twitter:url" content="https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training" >
                <meta name="twitter:site" content="@simplilearn"/>
                <meta name="twitter:title" content="Big Data Hadoop Architect" >
                <meta name="twitter:description" content="Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects." >
                <meta name="twitter:image" content="https://www.simplilearn.com/ice9/course_images/course_thumbnail_default.png" >
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
                        <script type="application/ld+json">
                {
                    "@context" : "http://schema.org",
                    "@type" : "Organization",
                    "name" : "Simplilearn Americas, Inc.",
                    "url" : "https://www.simplilearn.com",
                    "sameAs" : ["https://www.facebook.com/simplilearn","https://www.twitter.com/simplilearn","https://www.youtube.com/user/Simplilearn","http://www.linkedin.com/company/simplilearn","https://plus.google.com/+simplilearn/","https://in.pinterest.com/simplilearn/"],
                    "logo": "https://www.simplilearn.com/logo.png",
                    "legalName" : "Simplilearn Americas, Inc.",
                    "address":[
                    { "@type": "PostalAddress", "addressCountry": "United States", "addressLocality": "San Francisco", "addressRegion": "California", "postalCode": "94105", "streetAddress": "201 Spear Street, Suite 1100" }
                    ,
                    { "@type": "PostalAddress", "addressCountry": "India", "addressLocality": "Bangalore", "addressRegion": "Karnataka", "postalCode": "560102", "streetAddress": "# 53/1 C, Manoj Arcade, 24th Main, Harlkunte 2nd Sector, HSR Layout" }
                    ],
                    "contactPoint" : [
                    { "@type" : "ContactPoint", "telephone" : "+1-844-532-7688", "contactType" : "Customer Service", "contactOption" : "TollFree", "areaServed" : ["US","CA","MX"] }
                    ,
                    { "@type" : "ContactPoint", "telephone" : "(+91)-1-800-102-9602", "contactType" : "Customer Service", "contactOption" : "TollFree", "areaServed" : "IN" }
                    ]
                }
            </script>

		<!--            <script>(function (u, n, i, v, e, r, s, a, l) {u[r] = {}; u[r].uid = '144f549d-9d4f-43c0-9c75-473403758420';a = n.createElement(v); a.src = e; a.async = s;n.getElementsByTagName(i)[0].appendChild(a);})(window, document, 'head', 'script', 'https://cdn.getambassador.com/us.js', 'mbsy', true);</script>-->
        <!-- Meta tags : End -->
        <link rel="stylesheet" sync href="https://www.simplilearn.com/static/frontend/css/new-css/font.1503293334.css" />
        <style type="text/css">
            [ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak {
                display:none!important
            }
                                </style>
                <link rel="stylesheet" async href="https://www.simplilearn.com/static/frontend/css/new-css/main-min.1504510937.css" />
                <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32079340-1']);
    _gaq.push(['_setDomainName', 'simplilearn.com']);
    _gaq.push(['_addIgnoredRef', 'http://lms.simplilearn.com']);
    _gaq.push(['_trackPageview']);
    _gaq.push(['_setCustomVar', 1, 'SL_Category', 'Big Data and Analytics']);
    _gaq.push(['_setCustomVar', 2, 'SL_Citypage', 0]);
   // _gaq.push(['_setCustomVar', 3, 'SL_IsFrs', 0]);
    setTimeout("_gaq.push(['_trackEvent', '30_seconds', 'read','',0,true])", 30000);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();</script>
            </head>
	<body lazy-load-img="1" class="body_fonts" dir-orientation-change>
            <script type="text/javascript">
function downloadGaAtOnload() {
    //GTM init
    setTimeout(function() {
        gtmLoadScript();
    }, 5000);
}
    	if (window.addEventListener)
    		window.addEventListener("load", downloadGaAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", downloadGaAtOnload);
	else window.onload = downloadGaAtOnload;
        function gtmLoadScript() {
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start':new Date().getTime(),
                        event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'user_params' ? '&l=' + l : '';
            j.async = true;
            j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WTL3CF');
    }
</script>
<script>
var _prum = [['id', '5561ef85abe53d2b3caa542f'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
</script>		<!--[if lte IE 9]>
		<div class="ie8-and-bellow"><div class="upgrade-msg" align="center"><p><img src="https://www.simplilearn.com/static/frontend/images/logo-square_v3.png"></p><p style="margin-bottom:0;padding-bottom:0;">Looks like you have an older version of Internet explorer!</p><p>Please upgrade your browser to the latest version or download one of the following browsers to proceed.</p><div id="browsers"><a class="br1" href="https://www.google.com/intl/en/chrome/browser/"><img src="https://www.simplilearn.com/static/frontend/images/ch.jpg" alt="">Chrome</a><a class="br2" href="http://www.mozilla.org/en-US/firefox/new/"><img src="https://www.simplilearn.com/static/frontend/images/ff.jpg" alt="">Firefox</a><a class="br3" href="http://www.opera.com/computer/windows"><img src="https://www.simplilearn.com/static/frontend/images/op.png" alt="">opera</a><a class="br4" href="http://windows.microsoft.com/en-US/internet-explorer/download-ie"><img src="https://www.simplilearn.com/static/frontend/images/ie.jpg" alt="">IE</a></div></div></div>
		<![endif]-->
            <!-- festive offer widget banner section start -->
            <div ng-controller="HeaderPromotionsController" id="promotions-html" class="offer-pormo" ng-class="{'promotions-html':(isPromotionLoaded && !slideUpStatus) }">
            </div>
            <div  ng-controller="MenuCtrl as menu">
            <!-- festive offer widget banner section end -->
            <!-- Header Start -->
                        <header class="header_section" ng-controller="HeaderController" ng-init="headerInit('1-800-102-9602','1-800-102-9602');init_CountryData();init_enterprise('');" esc-action="" show-status="showStatus">
            <!--New Header design Start-->
            <div class="container nav_container header_global">
		<nav class="new_menu_wrap" dir-hide-body-click invoker-class="js-menu-container" container-class="js-menu-container" callback-fn="menu.hideAllMenus()">
    <ul class="js-menu-container main_navbar_ul">
        <li class="main_menu_course sprite_home" ng-click="menu.addMenuClass()" ng-class="{'main_menu_course_active':(menu.isMenuVisible)}" dir-lazy-hov="menu.showMainMenu(null, null);$event.stopPropagation()"
                       hide-menu="menu.hideMenu()" visibility="{{menu.isMenuVisible}}" direction="b-r b-l"><span id="courses-menu">All courses</span>
        </li>
                            <li class="resources_menu hidden-xs hidden-sm" ng-class="{'resources_menu_active':(menu.isFRSMenuVisible)}" dir-lazy-hov="menu.showFRSMainMenu('Big Data and Analytics')"
                hide-menu="menu.hideFRSMenu()" visibility="{{menu.isFRSMenuVisible}}" direction="b-r b-l" ng-mouseover="menu.loadFrsMegaMenuImages();gMCJ.frsMenuHover()"><span id="resources-menu">Resources</span>
            </li>
                        <li class="search_topbar sprite_home" dir-lazy-hov="menu.showSearch()"
                           hide-menu="menu.hideSearch()" visibility="{{menu.isSearchVisible}}" direction="b-r b-l">
                Search
                <div class="search hover_search" ng-style="{'display':(menu.isSearchVisible)?'block':'none'}" ng-cloak>
                    <form name="homepage-search-tag" class="home_search_form" action="https://www.simplilearn.com/search" method="get" is-ipad="isIpad" >
                        <span class="search_icon_mobi"></span>
                        <input id="header_srch" stop-event="mousemove touchstart" type="text" autocomplete="off" ng-keyup="gMCJ.searchInitiated()" class="form-control search_in" name="tag"  placeholder="Search from 400+ Courses"/>
                        <button stop-event="mousemove touchstart" class="btn btn-info btn-lg search_btn btn-success" ng-click="gMCJ.searchClick('Search_tab_header')">
                            <span class="search_icon"></span>
                            <span></span>
                        </button>
                    </form>
                </div>
            </li>
                    
    </ul>
</nav>
		<div class="mid_logo mid_logo_common">
			<a href="https://www.simplilearn.com/" class="logo" ng-click="gMCJ.logoClick($event)">
                        	<!--<img src="https://www.simplilearn.com/ice9/new_logo.svgz" alt="">-->
			</a>
		</div>
		<nav class="new_menu_wrap nav-right">
			<ul>
				<li class="menu_partner visible-lg visible-md"  ng-style="{'display':(isLoggedIn)?'':'inline-block'}">
					<a href="https://www.simplilearn.com/corporate-training" ng-click="gaHeaderControllerJs.gaFireOnCorporateTrainingClick($event)" target="_blank">Corporate<br/> training</a>
				</li>

				<li class="menu_instructor" ng-style="{'display':(isLoggedIn)?'none':''}" ng-cloak>
					<a href="https://www.simplilearn.com/become-our-trainer" ng-click="gaHeaderControllerJs.gaFireOnBeInstructorClick($event)" target="_blank" rel="nofollow">Become an<br/> instructor</a>
				</li>
				<li  class="menu_instructor" ng-class="((isLoggedIn)?'display-inline-block':'hide')" ng-cloak>
					<a ng-href="{{lms_url}}">My courses</a>
				</li>
				<li class="menu_cart sprite_home hidden-xs hidden-sm" ng-show="(cart_count > 0)">
					<a class="cart_wrap" href="https://www.simplilearn.com/cart" rel="nofollow">
						<span class="cart_counts" ng-cloak  ng-bind="cart_count"></span>
					</a>
				</li>
				<li id="loginBtn" class="menu_login" ng-click="gaHeaderControllerJs.gaFireOnLoginTabOpen(); showLogin($event)"
					ng-style="{'display':(isLoggedIn)?'none':''}" ng-cloak> Login </li>
				<li class="menu_logedin sprite_home" ng-style="{'display':(isLoggedIn)?'inline-block':''}" ng-cloak>
                                <div class="logedin_dropdown">
                                    <div class="logedin_dropdown_ins">
                                        <span class="">
                                            <a class="sprite_home settings_loggedin" href="https://accounts.simplilearn.com/profile" target="_blank" >Settings</a>
					</span>
					<span class="logout_logedin sprite_home" ng-click="logoutUser($event)" >Logout</span>
                                    </div>
				</div>
				</li>
			</ul>
		</nav>
	</div>
		<!--simplilearn companies section End-->
		<!--New Header design End-->
		<!--desktop login start-->
		<!-- Modal -->
		<div class="log-reg-form" >
			<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-style="headerFormsStyle">
				<div class="modal-dialog" role="document" ng-class="{'login-cls':(loginFormStyle.display=='inline-block')}">
				<div class="modal-content">
				<h3 class="bg-h3 text-center" ng-class="regSuccessClass" ng-cloak ng-bind="regSuccessMsg"></h3>
				<div class="modal-header" ng-hide="regSuccessMsg">
				   <a href="" class="close" data-dismiss="modal" aria-label="Close" ng-click="closeLogin($event)"></a>
					<h4 class="modal-title" id="myModalLabel">
						<!--<h2 class="login_heading" ng-style="loginFormHeadingStyle">Log in</h2>-->
						<h3 class="login_heading bg-h3 text-center course-txt-center" ng-style="loginFormStyle">Log in</h3>
						<!--<h3 class="register_heading bg-h3" ng-style="registerFormHeadingStyle">Create your Account</h3>-->
						<h3 class="register_heading bg-h3 text-center course-txt-center" ng-style="registerFormStyle">Create your Account</h3>
						<h3 class="bg-h3 text-center" ng-style="forgotPwdStyle">Forgot Password</h3>

					</h4>
				</div>
	<div class="modal-body" ng-hide="regSuccessMsg" id="login-register">
                </div>
</div>
	<div  ng-style="loginRegFormStyle" class="modal-footer">
		<div class="create_account">
			<p class="signup_link bg-small-meta-text" ng-style="loginFormStyle"><span>Don't have an account?</span> <a href="" class="forgot_password bg-small-meta-text"  id='registerBtn' ng-click="gaHeaderControllerJs.gaFireOnSignupTabOpen(); showRegister($event)">Sign up Now</a> </p>
			<p class="login_link bg-small-meta-text" ng-style="registerFormStyle"><span>Already a member?</span> <a href="" id="login_btn" class="forgot_password bg-small-meta-text" ng-click="gaHeaderControllerJs.gaFireOnLoginTabOpen(); showLogin($event)">Login</a> </p>
			<!--<div class="note-login" ng-hide="noteClass">
			<p><b>Note:</b></p>
							<p>We have moved away from Facebook and Google+ logins. To access your account please use the forgot password link to generate a new password. Alternatively, you can also use LinkedIn to login if your LinkedIn email id matches with your Facebook or Google+ account.</p>
			</div>-->
		</div>
	</div>
	</div>
  </div>
</div>

<!--<div class="modal-backdrop fade in"></div>-->
<!--desktop login End-->
</header>
<div class="clear"></div>
            <div id="body_content" class="wrapper backend-wrap  wrapper_ins">
            <script type="application/ld+json">
   {
   "@context": "http://schema.org",
   "@type": "EducationalTrack",
   "@id": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
   "name": "Big Data Hadoop Architect",
   "description": "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
   "subjectOfStudy": "Big Data and Analytics",
   "provider":
   { "@type":"Organization", "name":"Simplilearn", "sameAs":"https://www.simplilearn.com" }
   ,
   "seller":
   { "@type":"Organization", "name":"Simplilearn", "sameAs":"https://www.simplilearn.com" }
   ,
   "grantsCredential": "True",
   "isAccessibleForFree" : "False",
   "containsEducationalCourse" : [
   "https://www.simplilearn.com/big-data-and-analytics/big-data-and-hadoop-training","https://www.simplilearn.com/big-data-and-analytics/apache-spark-scala-certification-training","https://www.simplilearn.com/big-data-and-analytics/mongodb-certification-training","https://www.simplilearn.com/big-data-and-analytics/apache-cassandra-certification-training"   ],
   "outcome" : "This course gives you an in-depth knowledge of hadoop development and real-time processing using spark and nosql database technology. you will also learn storm, kafka, and impala. you get 100+ hours of instructor-led and 200+ hours of self-paced learning. with 7 projects to be executed on cloudlabs and other platforms, this is the perfect course for data management and analytics professionals.",
   "image" : "https://www.simplilearn.com/ice9/banners/course_page_banners/1280x160/5_Big_data_and_analytics/green1_5.svgz",
   "instructor" :
   { "@type": "Person", "name": "Industry Leading Experts" }
   ,
   "inLanguage" : "en",
   "audience" :
   { "@type": "Audience", "audienceType": [ "Students", "Working Professionals" ] }
   ,
   "timeRequired" : ""
   }
</script>
<div class="masters_prgm_new" ng-controller="BundleController" ng-init="defaultFunction('15,637,594,506')">
 <div class="banner-breadcrumb">
   <div class="container breadcrumb-small-text">
   <span><a href="https://www.simplilearn.com/" ng-click="breadcrumEvent($event)" target="_blank"><span>Home</span></a> ></span>
   <span><a href="https://www.simplilearn.com/big-data-and-analytics/" ng-click="breadcrumEvent($event)"><span>Big Data and Analytics</span></a> ></span>
   <span>Big Data Hadoop Architect</span>
     </div>
 </div>
   <section class="header_wrapper_lp">
   <div class="header_section_lp" style="background-image:url('../wp-content/themes/hestia-child/img/j.jpg');height:380px;">
  <div class="container">
    <div class="row">
     <div class="col-md-8 banner_section_lp">
      <div class="text_video_lp">
       <span class="master_icons"></span>
       <div class="heading_lp">
        <h1 class="light-40sp">Big Data Hadoop Architect</h1>
        <p>Masters Program</p>       </div>
       <p class="subtext_lp">This course gives you an in-depth knowledge of Hadoop Development and real-time processing using Spark and NoSQL database technology. You will also learn Storm, Kafka, and Impala. You get 100+ hours of instructor-led and 200+ hours of self-paced learning. With 7 projects to be executed on CloudLabs and other platforms, this is the perfect course for Data Management and Analytics professionals.</p>
               </div>
      <div class="key_features_lp">
       <div class="key_featuresTop_lp">
        <div class="col-md-6 keyfeatures_block border-rt">
        <div>
          <p class="big24_lp">365 days course access</p>
          <p class="small14_lp">Access to 100+ live instructor-led online classes</p>
         </div>
         <div class="no-margin-bot">
          <p class="big24_lp">Practice on CloudLabs</p>
          <p class="small14_lp">Execute projects on cloud-based Hadoop lab</p>
         </div>
         </div>
          <div class="col-md-6 keyfeatures_block">
             <div>
                <a href="https://www.simplilearn.com/job-assist" target="_blank" ng-click="gaFirejobAssistClick($event)" class="big24_lp">Simplilearn JobAssist</a><sup class="big24_lp">&trade;</sup>
                <p class="small14_lp">Get noticed by the top hiring companies</p>
                </div>
                          <div class="no-margin-bot">
                <p class="big24_lp">Rs.19 lacs - Rs.26 lacs</p>
                <p class="small14_lp">Annual average salary in India</p>
             </div></div></div>
                     <div class="col-md-12 keyfeatures_block enroll_lp">
<!--<p class="big24_lp">Rs. 44999</p>-->
          <button type="button" class="btn btn-primary btn-lg btn-flat" dir-form-submit='frmOnlineBundles' ng-click="gaOnEnroll()">ONLINE</button>
		  <button type="button" class="btn btn-primary btn-lg btn-flat" dir-form-submit='frmOnlineBundles' ng-click="gaOnEnroll()><style="align:right"></style>OFFLINE</button>
                <br></br>   <!-- <p class="font10">* 18.00 % GST extra</p>-->
          </div>
       </div></div>
      <div class="col-md-4 right-pannel hidden-xs hidden-sm">
	  <button type="button" class="btn btn-primary btn-lg btn-flat" dir-form-submit='frmOnlineBundles' ng-click="gaOnEnroll()">ONLINE</button>
		  <button type="button" class="btn btn-primary btn-lg btn-flat" dir-form-submit='frmOnlineBundles' ng-click="gaOnEnroll()">OFFLINE</button>
    <ul><li>
    <span>Course 1</span>
        <a class="link-grey" href="https://www.simplilearn.com/big-data-and-analytics/big-data-and-hadoop-training" scroll-link="" scroll-to="15-wrapper" offset-height="150" ng-click="gaFireMasterProgramCourseClick('Big Data Hadoop and Spark Developer')" target="_blank">Big Data Hadoop and Spark Developer</a>
        </li><li>
    <span>Course 2</span>
        <a class="link-grey" href="https://www.simplilearn.com/big-data-and-analytics/apache-spark-scala-certification-training" scroll-link="" scroll-to="637-wrapper" offset-height="150" ng-click="gaFireMasterProgramCourseClick('Apache Spark & Scala')" target="_blank">Apache Spark & Scala</a>
        </li><li>
    <span>Course 3</span>
        <a class="link-grey" href="https://www.simplilearn.com/big-data-and-analytics/mongodb-certification-training" scroll-link="" scroll-to="594-wrapper" offset-height="150" ng-click="gaFireMasterProgramCourseClick('MongoDB Developer and Administrator')" target="_blank">MongoDB Developer and Administrator</a>
        <ul>
       <li><span>OR</span><a class="link-grey" href="https://www.simplilearn.com/big-data-and-analytics/apache-cassandra-certification-training" scroll-link="" scroll-to="594-wrapper" offset-height="150" ng-click="gaFireMasterProgramCourseClick('Apache Cassandra')" target="_blank">Apache Cassandra</a></li>
      </ul></li><!--<li class="master-certificate">
    Masters Certificate<span>*You will get individual certificates for each course.</span>
      </li>-->
    </ul>
     <div class="footer-pannel large_screen_btn">
      <span class="stars pull-left hidden">
      <span class="star_in" style="width:44px;"></span>
      </span>
            <a href="" class="view-course-btn courses-available-button hidden-xs hidden-sm" ng-click="showBundleAgendaPopUp('https://www.simplilearn.com/ice9/pdfs/agenda/masters-program/big-data-hadoop-architect-masters-program.pdf')">DOWNLOAD SYLLABUS</a>
      <div class="modal fade in course-preview-lead log-reg-form masters-lead-frm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-style="{display:(showBundleAgenda) ? 'block' : 'none'}">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <a href="" class="close" data-dismiss="modal" aria-label="Close" ng-click="hideAgendLeadPopup()" close-on-escape="hideAgendLeadPopup()"></a>
     <h3 class="login_heading bg-h3 text-center agenda_leads" ng-style="loginFormStyle">Masters Syllabus</h3>
   </div>
   <div class="modal-body">
    <div class="form-control-wrapper">
     <form name="previewLeadForm" ng-submit="submitBundleAgendaLead(previewLeadForm.$valid)" novalidate>
      <div class="placeholder_wrap form-control-wrapper">
       <input type="text" class="form-control-material" ng-class="{'error_field': previewLeadForm.email.$dirty && previewLeadForm.email.$invalid}"  ng-model="email" name="email" required>
       <div class="placeholder_span floating-label">Email*</div>
       <div class="floating-label_border"></div>
      </div>
      <div class="support_coutry_code">
       <div class="placeholder_wrap code_wrap ie_class" >
        <div class="select_wraper for_cun" >
         <select class="form-control-material monospace_class" ng-model="queryPhoneCode" name="queryPhoneCode">
          <option ng-repeat="country in countryDataHeaderDropDown" ng-selected="(country.id==queryCountryId)" ng-disabled="$index == '10'" value="+{{country.phnCode}}-" ng-cloak >
           {{($index != '10')?country.code+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;"+country.name:'---------------------------------------------------'}}
          </option>
         </select>
         <b class="caret"></b>
        </div>
        <span class="country_code_span ng-binding">{{ queryPhoneCode }}</span>
        <input type="text" class="form-control-material" name="phone" ng-model="phone" required style="padding-left: {{queryPhoneCode.length*10}}px;"  ng-class="{'error_field': previewLeadForm.phone.$dirty && previewLeadForm.phone.$invalid}">
        <div class="floating-label">Phone Number<sup>*</sup></div>
        <div class="floating-label_border"></div>
       </div>
      </div>
      <div class="form-checkbox">
       <label>
        <input type="checkbox" ng-click="agreeCheck()" ng-class="{'error':(isAagreeCheckDirty && !cAgreeCheck)}"><span class="checkbox-material"><span class="check"></span></span> I agree to be contacted over email and phone
       </label>
      </div>
      <button id="B2C_lead" class=" btn btn-warning col-lg-12 col-xs-12 btn-primary btn-lg" type="submit">DOWNLOAD SYLLABUS</button>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>           </div>
    </div>
       </div>
  </div>
 </div>
</section>
   <section class="ipad_section">
      <div class="container">
         <!--<div class="col-lg-10 col-lg-offset-1 col-md-12">
            <div class="text-center img_section">
               <img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-ipad.png">
            </div>
            <div class="txt_section">
               <p class="big24_lp">Simplilearn Masters Programs now come with an iPad Mini to help you learn on the go.</p>
               <p class="promo-discription">*Use the code INMINI to avail an iPad Mini.</p>
            </div>
         </div>-->
      </div>
   </section>
         <div class="mobile_browchure_btn"><a href="" class="view-course-btn courses-available-button hidden-md hidden-lg" ng-click="showBundleAgendaPopUp('https://www.simplilearn.com/ice9/pdfs/agenda/masters-program/big-data-hadoop-architect-masters-program.pdf')">DOWNLOAD SYLLABUS</a>
      <div class="modal fade in course-preview-lead log-reg-form masters-lead-frm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-style="{display:(showBundleAgenda) ? 'block' : 'none'}">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <a href="" class="close" data-dismiss="modal" aria-label="Close" ng-click="hideAgendLeadPopup()" close-on-escape="hideAgendLeadPopup()"></a>
     <h3 class="login_heading bg-h3 text-center agenda_leads" ng-style="loginFormStyle">Masters Syllabus</h3>
   </div>
   <div class="modal-body">
    <div class="form-control-wrapper">
     <form name="previewLeadForm" ng-submit="submitBundleAgendaLead(previewLeadForm.$valid)" novalidate>
      <div class="placeholder_wrap form-control-wrapper">
       <input type="text" class="form-control-material" ng-class="{'error_field': previewLeadForm.email.$dirty && previewLeadForm.email.$invalid}"  ng-model="email" name="email" required>
       <div class="placeholder_span floating-label">Email*</div>
       <div class="floating-label_border"></div>
      </div>
      <div class="support_coutry_code">
       <div class="placeholder_wrap code_wrap ie_class" >
        <div class="select_wraper for_cun" >
         <select class="form-control-material monospace_class" ng-model="queryPhoneCode" name="queryPhoneCode">
          <option ng-repeat="country in countryDataHeaderDropDown" ng-selected="(country.id==queryCountryId)" ng-disabled="$index == '10'" value="+{{country.phnCode}}-" ng-cloak >
           {{($index != '10')?country.code+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;"+country.name:'---------------------------------------------------'}}
          </option>
         </select>
         <b class="caret"></b>
        </div>
        <span class="country_code_span ng-binding">{{ queryPhoneCode }}</span>
        <input type="text" class="form-control-material" name="phone" ng-model="phone" required style="padding-left: {{queryPhoneCode.length*10}}px;"  ng-class="{'error_field': previewLeadForm.phone.$dirty && previewLeadForm.phone.$invalid}">
        <div class="floating-label">Phone Number<sup>*</sup></div>
        <div class="floating-label_border"></div>
       </div>
      </div>
      <div class="form-checkbox">
       <label>
        <input type="checkbox" ng-click="agreeCheck()" ng-class="{'error':(isAagreeCheckDirty && !cAgreeCheck)}"><span class="checkbox-material"><span class="check"></span></span> I agree to be contacted over email and phone
       </label>
      </div>
      <button id="B2C_lead" class=" btn btn-warning col-lg-12 col-xs-12 btn-primary btn-lg" type="submit">DOWNLOAD SYLLABUS</button>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>   </div>
         <div ng-controller="CoursePageCtrl as cpg" ng-init="gCPCJ.gaOnloadPageType('oneTime','Big Data Hadoop Architect');" class="banner-bot course-banner-bot ng-isolate-scope" sticky-element="" top-postion="0" sticky-style="stickyStyle" offset-height="10" ng-style="stickyStyle" sticky-component-display="stickyComponentDisplay">
    <div class="container">
     <div style="position:relative">
       <ul class="course-content-header" style="display:inline-block">
        <li id="about-course-wrapper"><a href="#about-the-program" scroll-link-with-active="" scroll-to="about-course-wrapper" offset-height="50" ng-click="gCPCJ.gaFireEventsGeneric('bundlestickyClick','About the program')">About the program</a></li>
        <li id="advisors-slider"><a href="" scroll-link-with-active="" scroll-to="advisors-slider" offset-height="50" ng-click="gCPCJ.gaFireEventsGeneric('bundlestickyClick','Course advisor')">Course advisor</a></li>
        <li id="bundle-preview-wrapper"><a href="" scroll-link-with-active="" scroll-to="bundle-preview-wrapper" offset-height="50" ng-click="gCPCJ.gaFireEventsGeneric('bundlestickyClick','Learning path')">Learning path</a></li>
        <li id="faqs-wrapper"><a href="" scroll-link-with-active="" scroll-to="faqs-wrapper" offset-height="50" ng-click="gCPCJ.gaFireEventsGeneric('bundlestickyClick','Faqs')">FAQs</a></li>
        </ul>
       <div class="course-content-header-right " style="display: none;" ng-style="stickyComponentDisplay">
          <form method="post" id="frmOnlineBundles" name="frmOnlineBundles" action="https://www.simplilearn.com/cart/add-to-cart" >
        <input type="hidden" name="itemId" value="b72"/>
        <input type="hidden" name="accessDays" value="365"/>
        <input type="hidden" name="trainingTypeId" value="9"/>
        <input type ="hidden" name="pageSource" value="https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"/>
      <!--  <button class="btn btn-primary btn-sm enr-btn" id="sticky-enroll-btn" dir-form-submit='frmOnlineBundles' ng-click="gCPCJ.gaOnEnroll()" >
        Enroll now</button>-->
       </form></div>
     </div>
    </div>
   </div>
   <div class="course-details-container container lpath clearfix about-course-wrapper" id="about-course-link">
      <div class="col-md-8 course-details-left">
         <h2>About the program</h2>
                  <div class="faq_affiliate blog-guidelines learnig-acc">
            <div class="course-faq">
               <ul dir-accordion acc-arrow-down="arrow-down" acc-arrow-up="arrow-up" keep-first-closed="mobWidthFlag==1?1:hybridWidthFlag" auto-scroll-limit="52">
                  <li><h3>What’s the focus of this learning path?<span class="acc-arrow arrow-up"></span></h3><div><p><div style="text-align: justify;">The Big Data Hadoop Architect Masters Program is designed to impart an in-depth training in big data technologies like Hadoop, Spark, Scala, MongoDB/Cassandra, Kafka, Impala, and Storm. The entire program is a structured learning path recommended by leading industry experts and ensures that you transform into an expert Hadoop Architect.&nbsp;<br />
<br />
The program begins with Big Data Hadoop and Spark developer courses which provide&nbsp;a solid foundation in Big Data Hadoop technology and moves on to Apache Spark and Scala to give you an in-depth understanding of real time processing. Finally, you will get an introduction to the concepts of NoSQL database technology, and you can choose between Apache Cassandra and Mongo DB. &nbsp;We have included Apache Storm, Kafka, and Impala as electives to help you gain a further edge.&nbsp;<br />
<br />
The program provides access to 100+ live instructor-led online classrooms, 90+ hours of self-paced video content, 7+ industry-based projects to be practiced on CloudLabs/Virtual machines, 10+ simulation exams, a community moderated by experts, and other resources that ensure you follow the optimal path to your dream role of a Big Data Hadoop architect.&nbsp;</div></p></div></li><li><h3>What are the learning objectives?<span class="acc-arrow arrow-up"></span></h3><div><p><div style="text-align: justify;">The Masters program is designed to impart an expertise in big data technologies like Hadoop, Spark, Scala, MongoDB/Cassandra, Kafka, Storm, and Impala. The learning path ensures that the participants master the various components of Hadoop ecosystem like Hadoop 2.7, MapReduce, Pig, Hive, Impala, HBase, Sqoop etc., and learn real-time processing in Spark, Spark SQL, Spark streaming, GraphX programming, and Shell scripting spark. The course also includes NoSQL database technology like Cassandra &amp; MongoDB. &nbsp;As electives, the learning path comprises&nbsp;Storm, Impala, and Kafka, which are additional skill sets to ensure you become a Hadoop champion.<br />
&nbsp;
<table border="1" cellpadding="1" cellspacing="1" height="953" width="630">
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Tools/ Language covered</strong></td>
			<td style="text-align: center;"><strong>Objective</strong></td>
		</tr>
		<tr>
			<td style="text-align: center;">Big Data Hadoop and Spark Developer Certification Training</td>
			<td style="text-align: center;">Hadoop and its ecosystem&nbsp;</td>
			<td style="text-align: left;">The course enables you to master the various components of Hadoop ecosystem like Hadoop 2.7, Yarn, MapReduce, Pig, Hive, Impala, HBase, Sqoop, Flume, and Apache Spark.&nbsp;The course is aligned to Cloudera CCA175 certification.&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Spark and Scala Certification Training</td>
			<td style="text-align: center;">Spark and Scala</td>
			<td style="text-align: left;">The course enables you to master the essential skills in Apache Spark &amp; Scala such as Real-time processing, Spark SQL, Spark streaming, Machine learning programming, GraphX programming, and Shell scripting spark.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Cassandra Certification Training<br />
			OR<br />
			MongoDB Developer and Administrator Certification Training</td>
			<td style="text-align: center;">Cassandra<br />
			<br />
			<br />
			<strong>OR</strong><br />
			<br />
			<br />
			MongoDB</td>
			<td style="text-align: left;">The course enables you to understand the basic concepts of Cassandra including its features, architecture, data model, and Hadoop Ecosystem products around it. You will learn to install, configure, and monitor Cassandra.<br />
			&nbsp;
			<div style="text-align: center;"><strong>OR</strong></div>
			<br />
			The course enables you to become an expert MongoDB developer and administrator by gaining an in-depth knowledge of NoSQL and mastering skills of data modelling, ingestion, query, sharding, and data replication.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Impala &nbsp;Certification Training</td>
			<td style="text-align: center;">Impala</td>
			<td style="text-align: left;">The course enables you to gain knowledge of the basic concepts of Massively Parallel Processing (MPP) SQL query. It provides an in-depth understanding of querying in Hive and Impala including Impala architecture, daemon, statestore, and catalog service.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Storm Certification Training</td>
			<td style="text-align: center;">Storm</td>
			<td style="text-align: left;">The course enables you to master the concepts of Apache Storm including its architecture, planning, installation, and configuration. You will learn to use Storm for real-time processing and understand how Storm interfaces with Kafka, Java, and Cassandra.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Kafka Certification Training</td>
			<td style="text-align: center;">Kafka</td>
			<td style="text-align: left;">The course helps you to master the components of Kafka including its architecture, installation, interfaces, and configuration. It includes basics of ZooKeeper and imparts the knowledge to use Kafka for real-time messaging.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Big-Data and Hadoop Administrator</td>
			<td style="text-align: center;">Hadoop framework, HDFS and Hadoop cluster</td>
			<td style="text-align: left;">The course provides a detailed overview of Hadoop framework, Core Hadoop distributions &mdash;Apache Hadoop and Vendor specific distribution&mdash;CDH (Cloudera Distribution of Hadoop) and also imparts knowledge about the need for cluster management solutions,Cloudera manager and its capabilities.</td>
		</tr>
	</tbody>
</table>
</div></p></div></li><li><h3>Why be a Big Data Hadoop Architect?<span class="acc-arrow arrow-up"></span></h3><div><p><div style="text-align: justify;">In addition to being responsible for planning and designing next generation big-data systems, Hadoop Architects also manage large scale development and deployment of Hadoop applications. With Big Data providing knowledge and power to any company that knows how to harness it, Big Data Hadoop Architects have become the critical link between business and technology.<br />
<br />
With the increasing adoption of Big Data and Hadoop over the last few years, Big Data Hadoop architects are in great demand, and are among the highest paid professionals in the IT industry. According to the McKinsey report, it is expected to have a shortage of 1.7 million professionals with big data skills in the U.S. alone by year 2018. According to the latest industry research, Big Data Hadoop architects earn as high as $200K per year.</div></p></div></li><li><h3>What is CloudLab feature offered by Simplilearn?<span class="acc-arrow arrow-up"></span></h3><div><p><div style="text-align: justify;">CloudLab is a cloud- based Hadoop environment to ensure hassle free execution of all the hands-on project work. As CloudLab is a pre-configured real world-like Hadoop setup, you would avoid these potential glitches that appear during a set up through a virtual Machine:</div>

<ul>
	<li style="text-align: justify;">Installation and system compatibility issues</li>
	<li style="text-align: justify;">Difficulties in configuring systems</li>
	<li style="text-align: justify;">Issues with Rights and permissions</li>
	<li style="text-align: justify;">Network slowdown and failure</li>
	<li style="text-align: justify;">Single machine capacity instead of clusters</li>
</ul>

<div style="text-align: justify;">CloudLab projects would be done on cloud- based Hadoop clusters running on Hadoop 2.711.<br />
You will be able to access CloudLab from Simplilearn LMS (Learning Management System). A video on introduction and how to use CloudLab is provided in Simplilearn LMS. You can also access this video here- <a href="https://www.youtube.com/embed/saHIgtHjCdo">Video Link</a>.<br />
<br />
Please Note &ndash; CloudLab access is available only for Big Data Hadoop Developer course and will be available throughout the access period of the course.</div></p></div></li><li><h3>Who can be a Big Data Hadoop Architect?<span class="acc-arrow arrow-up"></span></h3><div><p><div style="text-align: justify;">Big Data Hadoop Architect is a highly desirable career goal for those seeking to fast-track their career in the Hadoop industry. With the number of Big Data career opportunities on the rise, following roles will benefit most from this learning path:-</div>

<ul>
	<li style="text-align: justify;">Software Developers, Testers</li>
	<li style="text-align: justify;">Software Architects</li>
	<li style="text-align: justify;">Analytics Professionals</li>
	<li style="text-align: justify;">Data Management Professionals</li>
	<li style="text-align: justify;">Data warehouse Professionals</li>
	<li style="text-align: justify;">Project Managers</li>
	<li style="text-align: justify;">Mainframe Professionals</li>
	<li style="text-align: justify;">Graduates aspiring to build a career in Big Data Hadoop</li>
</ul></p></div></li><li><h3>How do I earn the Masters Program certificate?<span class="acc-arrow arrow-up"></span></h3><div><p>On completion of the following requirements, you will be eligible to receive the Masters Program certificate that will testify your acquisition of a Big Data Hadoop Architect&rsquo;s skill set.<br />
&nbsp;
<table border="1" cellpadding="1" cellspacing="1" height="267" width="628">
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Course Completion Certificate</strong></td>
			<td style="text-align: center;"><strong>Simulation Exam</strong></td>
			<td style="text-align: center;"><strong>Project Certificate</strong></td>
		</tr>
		<tr>
			<td style="text-align: center;">Big Data Hadoop Developer</td>
			<td style="text-align: center;">Required</td>
			<td style="text-align: center;">Score &gt; 75%</td>
			<td style="text-align: center;">Required</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Spark &amp; Scala</td>
			<td style="text-align: center;">Required</td>
			<td style="text-align: center;">Score &gt; 75%</td>
			<td style="text-align: center;">Required</td>
		</tr>
		<tr>
			<td style="text-align: center;">MongoDB <strong>or</strong> Cassandra</td>
			<td style="text-align: center;">Required</td>
			<td style="text-align: center;">Score &gt; 75%</td>
			<td style="text-align: center;">Required</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Storm</td>
			<td style="text-align: center;">Elective</td>
			<td style="text-align: center;">Score &gt; 75%</td>
			<td style="text-align: center;">Not Required</td>
		</tr>
		<tr>
			<td style="text-align: center;">Apache Kafka</td>
			<td style="text-align: center;">Elective</td>
			<td style="text-align: center;">Score &gt; 75%</td>
			<td style="text-align: center;">Not Required</td>
		</tr>
		<tr>
			<td style="text-align: center;">Impala</td>
			<td style="text-align: center;">Elective</td>
			<td style="text-align: center;">Score &gt; 75%</td>
			<td style="text-align: center;">Not Required</td>
		</tr>
	</tbody>
</table></p></div></li>               </ul>
            </div>
         </div>
         </div>
      <div class="col-md-4 our_training_experts">
       <!--  <div class="us-phone-number hidden-xs hidden-sm">
            <p class="default-text">Contact Us</p>
            <h3>1-800-102-9602<p class="small-meta-text">(Toll Free)</p></h3><span></span>
         </div>-->
       <!--  <div class="frm-margin">
                        <div ng-class="displayDiv" ng-app="Simplilearn" ng-controller="CoursePageFormController" >
<div class="drop_query" ng-init="form_init('72', 'Big Data Hadoop Architect', 'Big Data Hadoop Architect','unknown','2','1')" ng-cloak>
<div class="drop_query_clone"></div>
    <div ng-style="failedDisplayStatus"><span ng-bind="failedMsg"></span></div>
    <div class="form_wrapper form_wrapper_drp_qry sticky_element new-form-wraps" is-ipad="isIpad" ng-style="showDrpQueryFrm">
        <!-- use "hide" class name -->
       <!-- <div>
        <h4 class="heading-label">Request more information</h4>
	    <div class="webengage_close" ng-click="closeMobDropQueryForm()"></div>
	<div class="tabs-headings">
		<!--<h6 class="default-text-bold">Contact Us</h6>-->
            <!--<h6 class="default-text-bold" ng-class="{'active-heading':(showThisFrm==1)}" ng-click="showThisForm(1);leadFormTabClick('b2c','masters-program')">For individuals</h6>
            <h6 class="default-text-bold enterprise-tab" ng-class="{'active-heading':(showThisFrm==2)}" ng-click="showThisForm(2);leadFormTabClick('b2b','masters-program')">For business</h6>
	</div>
    <div class="professionals-form-wrap"  ng-style="{'display':(showThisFrm==1)?'block':'none'}">
            <form name="contactTrainerForm" ng-style="fomrDisplayStatus" ng-submit="submitContactTrainerForm('https://www.simplilearn.com/api/v1',
				{
					category_id:'Big Data and Analytics',type:'drop_query',leadTrainingType:'Not Sure'				})" novalidate class="course-list-drop-query">
                <div ng-class="queryStatusClass"><span ng-bind="queryStatusMsg"></span></div>
                                <div class="placeholder_wrap form-control-wrapper" >
                    <input type="text" class="form-control-material" id="inputEmail3" ng-keyup="catInitFormFill('masters-program')" name="userName" required="" ng-model="userName" ng-class="(contactTrainerForm.userName.$dirty && contactTrainerForm.userName.$error.required) ? 'error' : ''">
                    <!--<span class="placeholder_span">Name *</span>-->
                   <!-- <div class="floating-label">Name<sup>*</sup></div>
                    <div class="floating-label_border"></div>
                </div>
                
                <div class="placeholder_wrap form-control-wrapper" >
                    <input type="email" class="form-control-material" id="inputEmail3" name="userEmail" required="" ng-model="userEmail" ng-class="((contactTrainerForm.userEmail.$dirty && contactTrainerForm.userEmail.$error.required) || (contactTrainerForm.userEmail.$dirty && contactTrainerForm.userEmail.$error.email)) ? 'error' : ''">
                    <!--<span class="placeholder_span">Email *</span>-->
                    <!--<div class="floating-label">Email<sup>*</sup></div>
                    <div class="floating-label_border"></div>
                </div>
                <div class="support_coutry_code" ng-class="(contactTrainerForm.userPhone.$dirty && contactTrainerForm.userPhone.$error.required)? 'error' : ''" >
                    <div class="placeholder_wrap ie_class" >
                        <div class="select_box select_wraper dr_cun" ng-cloak class="ng-cloak">
                            <select class="sel_cr monospace_class" ng-model="phoneCode">

                                <option ng-repeat="country in countryList" ng-selected="(country.code==queryCountryCode)" ng-disabled="$index == '10'" value="+{{country.phnCode}}-" ng-cloak>

                                    {{($index != '10')?country.code+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;"+country.name:'---------------------------------------------------'}}
                                </option>
                            </select>
                            <b class="caret"></b>
                        </div>
                        <span class="country_code_span " ng-bind="phoneCode"></span>
                        <input type="text" name="userPhone" ng-keyup="catInitFormFill('masters-program')" ng-style="phoneInputStyle" ng-model="userPhone" required ng-class="(contactTrainerForm.userPhone.$dirty && contactTrainerForm.userPhone.$error.required)? 'error' : ''"  custom-phone-field=""/>
                        <div class="floating-label">Phone Number<sup>*</sup></div>
                        <div class="floating-label_border"></div>
                    </div>
                </div>

                                                                                <div class="placeholder_wrap list_query form-control-wrapper message-txt textarea-msg">
                    <textarea class="form-control-material" rows="2" name="userQuery" ng-model="userQuery" ></textarea>
                    <!--<span class="placeholder_span">Your Query *</span>-->
                  <!--  <div class="floating-label">Your Message (Optional)</div>
                    <div class="floating-label_border"></div>
                </div>
                				<input type="hidden" name="contactMe" ng-model="contactMe" />
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="contactMe" ng-checked="contactMe" ng-model="contactMe" ng-click="toggleContactMe()" ng-class="(contactMe == 0 && agreeClicked == 1)?'error':''"><span class="checkbox-material"><span class="check"></span></span>
                                        I agree to be contacted over email and phone
                                    </label>
                                </div>

                                <button class="btn btn-success btn-sm btn-flat drop-query-submit" id="b2c_lead" type="button" ng-click="submitContactTrainerForm('https://www.simplilearn.com/api/v1',
				{
					category_id:'Big Data and Analytics',type:'drop_query',leadTrainingType:'Not Sure'				}, '', 'masters-program');




                        " >CONTACT US</button>
				<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
            </form>
                        <div class="referral-query-box" ng-style="successDisplayStatus">
				<center>
            <h4 class="heading-label">Thank you<br />
                <span class="caption-dark">Your submission has been received.</span>
            </h4>
                <div class="webengage_close" ng-click="closeMobDropQueryForm()"></div>
            <p class="caption-dark">Avail exclusive group discounts on enrolling in groups of 3 or more</p>
            <p class="caption-dark">Refer your friends / colleagues</p><br>
            </center>
            <form name="referralQueryForm" class="course-list-drop-query">
                <div class="row placeholder_wrap form-control-wrapper">
                    <div class="col-xs-6 right-mrng">
                        <input type="email" class="form-control-material" name="referEmail" ng-model="referEmail" ng-class="(referralQueryForm.referEmail.$dirty && referralQueryForm.referEmail.$error.email) ? 'error' : ''" />
                        <div class="floating-label">Email</div>
                        <div class="floating-label_border"></div>
                    </div>
                    <div class="col-xs-6 left-mrgn">
                        <input type="text" class="form-control-material" name="referPhone" ng-model="referPhone" ng-class="(referralQueryForm.referPhone.$dirty && referralQueryForm.referPhone.$error.required)? 'error' : ''"  custom-phone-field=""/>
                        <div class="floating-label">Phone Number</div>
                        <div class="floating-label_border"></div>
                    </div>
                </div>
                <div class="row placeholder_wrap form-control-wrapper">
                    <div class="col-xs-6 right-mrng">
                        <input type="email" class="form-control-material" name="referEmail2"  ng-model="referEmail2" ng-class="(referralQueryForm.referEmail2.$dirty && referralQueryForm.referEmail2.$error.email) ? 'error' : ''" />
                        <div class="floating-label">Email</div>
                        <div class="floating-label_border"></div>
                    </div>
                    <div class="col-xs-6 left-mrgn">
                        <input type="text" class="form-control-material" name="referPhone2" ng-model="referPhone2" ng-class="(referralQueryForm.referPhone2.$dirty && referralQueryForm.referPhone2.$error.required)? 'error' : ''"  custom-phone-field=""/>
                        <div class="floating-label">Phone Number</div>
                        <div class="floating-label_border"></div>
                    </div>
                </div>
                <div class="row placeholder_wrap form-control-wrapper">
                    <div class="col-xs-6 right-mrng">
                        <input type="email" class="form-control-material" name="referEmail3" ng-model="referEmail3" ng-class="(referralQueryForm.referEmail3.$dirty && referralQueryForm.referEmail3.$error.email) ? 'error' : ''" />
                        <div class="floating-label">Email</div>
                        <div class="floating-label_border"></div>
                    </div>
                    <div class="col-xs-6 left-mrgn">
                        <input type="text" class="form-control-material" name="referPhone3" ng-model="referPhone3" ng-class="(referralQueryForm.referPhone3.$dirty && referralQueryForm.referPhone3.$error.required)? 'error' : ''"  custom-phone-field=""/>
                        <div class="floating-label">Phone Number</div>
                        <div class="floating-label_border"></div>
                    </div>
                </div>
                <button class="btn btn-success btn-sm btn-flat drop-query-submit" type="button" ng-click="submitReferralQueryForm('https://www.simplilearn.com/api/v1',
				{
					category_id:'Big Data and Analytics',type:'drop_query',leadTrainingType:'Not Sure'				});">SUBMIT</button>
            </form>
			</div>
                        </div>
        <div class="enterprise-form-wrap"  ng-style="{'display':(showThisFrm==2)?'block':'none'}">
            <p ng-show="displayMarketoMsg" class="success_text etrp-suc thanku-text">A Simplilearn representative will get back to you in one business day.</p>
<form ng-hide="displayMarketoMsg" class="market-form course_marketo" name="enterpriseQuery" novalidate ng-init = "setFormName('enterpriseQuery')">
    <input type="hidden" name="cSiteModule" ng-init="catTitle='Big Data Hadoop Architect';pageType='masters-program';cSiteModule='b2b masters'">
    <div class="form-control-wrapper">
        <input type="text" class="form-control-material" required name="cFirstName" ng-model="cFirstName" ng-keyup=initiateEvent('enterpriseQuery'); ng-class="(enterpriseQuery.cFirstName.$dirty && enterpriseQuery.cFirstName.$error.required) ? 'error' : ''">
        <div class="floating-label">First Name*</div>
        <div class="floating-label_border"></div>
    </div>
    <div class="form-control-wrapper">
        <input type="text" class="form-control-material" required  name="cLastName" ng-model="cLastName" ng-keyup=initiateEvent('enterpriseQuery'); ng-class="(enterpriseQuery.cLastName.$dirty && enterpriseQuery.cLastName.$error.required) ? 'error' : ''">
        <div class="floating-label">Last Name*</div>
        <div class="floating-label_border"></div>
    </div>
    <div class="form-control-wrapper">
        <input type="email" class="form-control-material" required  name="cEmail" ng-model="cEmail" ng-keyup=initiateEvent('enterpriseQuery'); ng-class="((enterpriseQuery.cEmail.$dirty && enterpriseQuery.cEmail.$error.required)  || (enterpriseQuery.cEmail.$dirty && enterpriseQuery.cEmail.$error.email)) ? 'error' : ''">
        <div class="floating-label">Email*</div>
        <div class="floating-label_border"></div>
    </div>
    <div class="support_coutry_code" ng-class="(enterpriseQuery.userPhoneB.$dirty && enterpriseQuery.userPhoneB.$error.required)? 'error' : ''" >
        <div class="placeholder_wrap ie_class" >
            <div class="select_box select_wraper dr_cun" ng-cloak class="ng-cloak">
                <select class="sel_cr monospace_class" ng-model="phoneCode">

                    <option ng-repeat="country in countryList" ng-selected="(country.code==queryCountryCode)"  ng-disabled="$index == '10'" value="+{{country.phnCode}}-" ng-cloak>

                        {{($index != '10')?country.code+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;"+country.name:'---------------------------------------------------'}}
                    </option>
                </select>
                <b class="caret"></b>
            </div>
            <span class="country_code_span " ng-bind="phoneCode"></span>
            <input type="text" name="userPhoneB" ng-style="phoneInputStyle" ng-model="userPhoneB" required ng-keyup=initiateEvent('enterpriseQuery'); ng-class="(enterpriseQuery.userPhoneB.$dirty && enterpriseQuery.userPhoneB.$error.required)? 'error' : ''"  custom-phone-field=""/>
            <div class="floating-label">Phone Number<sup>*</sup></div>
            <div class="floating-label_border"></div>
        </div>
    </div>
    <div class="form-control-wrapper company_wrap_div">
        <input type="text" class="form-control-material" required  name="cCompany" ng-model="cCompany" ng-class="(enterpriseQuery.cCompany.$dirty && enterpriseQuery.cCompany.$error.required) ? 'error' : ''">
        <div class="floating-label">Company*</div>
        <div class="floating-label_border"></div>
    </div>
    <div class="form-control-wrapper" ng-show="displayJobTitle">
        <input type="text" class="form-control-material job_titl"  name="jobTitle" ng-model="jobTitle" ng-class="(enterpriseQuery.jobTitle.$error.required) ? 'error' : ''">
        <div class="floating-label">Job Title*</div>
        <div class="floating-label_border"></div>
    </div>
    <div  class="select_wraper select_box form-control-wrapper" ng-class="country_error">
        <select  ng-model="cCountry" class="form-control-material sel_cr" required ng-change="updateEntCountry()" >
            <option value="0">Country*</option>
            <option value="United States">United States</option><option value="India">India</option><option value="United Kingdom">United Kingdom</option><option value="Canada">Canada</option><option value="Australia">Australia</option><option value="South Africa">South Africa</option><option value="Ireland">Ireland</option><option value="New Zealand">New Zealand</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma (Myanmar)">Burma (Myanmar)</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Polynesia">French Polynesia</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="Indonesia">Indonesia</option><option value="Iraq">Iraq</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Barthelemy">Saint Barthelemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin">Saint Martin</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Non-Crimea Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Uruguay">Uruguay</option><option value="US Virgin Islands">US Virgin Islands</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
        </select>
        <b class="caret"></b>
    </div>
    <div ng-show="(displayState)" class="select_wraper select_box form-control-wrapper" ng-class="state_error">
        <select ng-show="(displayState == 1)" class="form-control-material sel_cr" name="cState" ng-model="cState" ng-change="updateStateCheck();">
            <option value="0">Select State*</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option>
        </select>
        <select ng-show="(displayState == 2)" class="form-control-material sel_cr" name="cState" ng-model="cState" ng-change="updateStateCheck();">
            <option value="0">Select Province*</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland</option><option value="NT">Northwest Territories</option><option value="NS">Nova Scotia</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon Territory</option>
        </select>
        <b class="caret"></b>
    </div>
    <div  class="select_wraper select_box form-control-wrapper"  ng-class="cNoEmps_error">
        <select  ng-model="cNoEmps" class="form-control-material sel_cr" required>
            <option value="0">Number of Employees*</option>
            <option value="< 1,000">&lt; 1,000 employees</option><option value="1000 - 5,000">1,000 - 5,000 employees</option><option value="5,001 - 10,000">5,001 - 10,000 employees</option><option value="> 10,000">10,001+ employees </option>
        </select>
        <b class="caret"></b>
    </div>
    <div class="form-checkbox form-control-wrapper">
        <label>
            <input type="hidden" name="cContactMe" ng-model="cContactMe" />
            <input type="checkbox" name="cContactMe" ng-checked="cContactMe" ng-model="cContactMe" ng-click="toggleMarketoClick()" ng-class="(cContactMe == 0 && cAgreeToCnt == 1)?'error':''"><span class="checkbox-material"><span class="check"></span></span>
            I agree to be contacted over email and phone
        </label>
    </div>
    <button type="button" class="btn btn-success btn-sm btn-flat" id="b2b_lead"  ng-click="submitMarketoEnterpriseForm($event);">SUBMIT</button>
</form>        </div>
        </div>
            </div>
            </div>


</div>
                     </div>-->
      </div>
   </div>
   <section id="advisors-slider" class="advisors-slider">
 <div class="profile-slider">
  <div class="dream_stories">
   <div class="container inner_stories ng-isolate-scope" dir-dream-stories="" stop-scroll-on-click="1" auto-scroll="0" arrow-events="1" page-name="" prev-active="prev-btn_enabled" prev-inactive="hidden_cls" next-active="next-btn_enabled" next-inactive="hidden_cls">
    <div class="row">
     <div class="c_screen">
      <h2 class="h2_style-book">Course Advisor</h2>
            <a href="" class="card_arrows prev c_prev"></a>
      <a href="" class="card_arrows next c_next"></a>
            <div class="alumin-mob-slider c_dependent">
       <ul class="alumin-slider-list c_list" style="position: relative; left: 0px;">
               <li class="c_list_item c_story" c_pos="0">
         <div class="c_story"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/program_directors/ronald-van-loon.jpg" title="Ronald van Loon" alt="Ronald van Loon"/></div>
         <div class="quote_descrip_in">
          <h5>Ronald van Loon <small class="caption">Top 10 Big Data & Data Science Influencer, Director - Adversitement</small></h5>
          <p class="quote_descrip_p">Named by Onalytica as one of the three most influential people in Big Data, Ronald is also an author for a number of leading Big Data and Data Science websites, including Datafloq, Data Science Central, and The Guardian. He also regularly speaks at renowned events.</p>
          <p><div class="social-icons">
                     <a href="https://twitter.com/Ronald_vanLoon" class="twitter"  ng-click="cpg.catAdvisorSocialClick($event);"></a>
                               <a href="https://www.linkedin.com/in/ronald-van-loon-5411a" class="linked-in" ng-click="cpg.catAdvisorSocialClick($event);"></a>
                     </div>
          </p>
         </div>
        </li>
                <li class="c_list_item c_story" c_pos="1">
         <div class="c_story"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/program_directors/SinaJamshidi.jpg" title="Sina Jamshidi" alt=""/></div>
         <div class="quote_descrip_in">
          <h5>Sina Jamshidi <small class="caption">Big Data Lead at Bell Labs</small></h5>
          <p class="quote_descrip_p">Sina has over 10 years of experience in the technology field as a Big Data Architect at Bell Labs and a Platinum level trainer. Sina is a very passionate about building a Big Data education ecosystem and has been a contributor in a number of public and journal publications.</p>
          <p><div class="social-icons">
                     <a href="https://twitter.com/sjam3000" class="twitter"  ng-click="cpg.catAdvisorSocialClick($event);"></a>
                               <a href="https://www.linkedin.com/in/sinajamshidi" class="linked-in" ng-click="cpg.catAdvisorSocialClick($event);"></a>
                     </div>
          </p>
         </div>
        </li>
               </ul>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
   <section id="learn-box" class="bundle-preview-wrapper">
      <div class="container container-learning-pth">
         <div class="col-lg-8 col-lg-offset-2">
            <h2 class="h2_style-book">Learning path</h2>
            <span class="course-sticker heading-label">Course 1</span>
            <div class="section-two borderline-none ">
               <div class="fluid-content-box">
                  <div class="box-fluid 15-wrapper crs-wrapper-1-1" ng-class="{'deactive':(getCpreviewStatus(1,1) || getClassroomSStatus(1,1) || getAboutCStatus(1,1)),'in-active-bg':getCpreviewStatus(1,2) || getClassroomSStatus(1,2) || getAboutCStatus(1,2) } ">
                     <span class="badge-label">Online Classroom Flexi Pass</span>                     <span class="rounded-border-cir"></span>
                     <span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz" alt="Big Data Hadoop and Spark Developer Certification Training"></span>
                     <div class="mobile-collapse" ng-class="(getAboutMStatus(1,1))? 'active':''">
                        <div class="pading-box">
                         <h3 ng-class="(getAboutMStatus(1,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,1,1)"><a href="https://www.simplilearn.com/big-data-and-analytics/big-data-and-hadoop-training" target="_blank">Big Data Hadoop And Spark Developer</a></h3>
                                                      <div>
                                                            <div class="col-sm-8 course-info">
                                 <span>The Big Data Hadoop and Spark developer course has been designed to impart an in-depth knowledge of Big Data processing using Hadoop and Spark. The course is packed </span>
                                 <span ng-class="(getAboutCStatus(1,1))? '':'hidden'">with real-life projects and case studies to be executed in the CloudLab.</span>
                                 <span class="readMoreLess" ng-class="(getAboutCStatus(1,1))? 'hidden':''" ng-click="setAboutCStatus($event,1,1)">...Know More</span>
                                 <span class="readMoreLess" ng-class="(getAboutCStatus(1,1))? '':'hidden'" ng-click="setAboutCStatus($event,1,1)">Less</span>
                              </div>
                                                                                          <p class="accredited-by col-sm-4">Powered by
                                 <a class="cards_accredit" href="http://hadoop.apache.org/" target="_blank">
                                 <img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/accreditation_icons/Apache.jpg"
                                    title="Apache" alt="Apache" />
                                 </a>
                              </p>
                                                            <div class="popup-couse-video active" ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(15,'Big Data Hadoop And Spark Developer');pc.setBundleName('Big Data Hadoop Architect');">
                                 <span ng-repeat='cpObj in pc.coursePreviewData[15] | limitTo: 1' data-indexattr="0" ng-if="cpObj.topVideo.video_url">
                                 <a href="#" ng-click="pc.setCourseId(15000);pc.gFCPPT('Big Data Hadoop And Spark Developer',cpObj.topVideo.title); pc.hVLC(cpObj.eLearningId, null, cpObj.topVideo.scoId, cpObj.sectionId,cpObj.isFromELearning,cpObj.topVideo.video_url,cpObj.topVideo.video_type,cpObj.topVideo.title)"  title="Play video" class="play">Course Preview</a>
                                 </span>
                                         <div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
    <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
    <div class="lightbox-holder" stop-event>
        <div class="video_custom_wrapper">
            <div class="video-container course_video">
                <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(15000)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(15000)=='1')?'block':'none'}"></iframe>
                <div id="course_preview_vid-15000" style="left:'50px'"></div>
                <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text">
                    <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                    Enroll for this course and get full access.<br><br>
                    <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()">Enroll now</div>
                </div>
            </div>
        </div>
    </div>
    <!--<a id="fancybox-close" style="display: inline;" ng-click="pc.hidePreview()"></a>-->
</div>
        </div>
        <div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div></div>
                           </div>
                        </div>
                                                <a href="" class="expend-box-btn master-card-btn classroom-schedule " ng-class="getClassroomClasses(1,1 , 0)" ng-click="setClassroomSStatus($event,1,1)"><label>Weekday class starting 15th Sep</label><span>Classroom Schedule</span></a>
                        <a href="" class="expend-box-btn lrn-more master-card-btn " ng-class="getPreviewClasses(1,1)" ng-click="setCpreviewStatus($event,1,1,1)">Course Content</a>
                     </div>
                     <span class="mobile-arrow" ng-class="(getAboutMStatus(1,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,1,1)"></span>
                  </div>
                  </div>
            </div>
                        <div class="section-one append-box classroomDiv" ng-class="(getClassroomSStatus(1,1))?'active':'hidden'" ng-controller="CoursePageCtrl as cpg">
               <!-- ==== use this class name for only classroom "classroom-course-cal" == -->
<!--count batches > 1 -->
    <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Course",
            "@id": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
            "name": "Big Data Hadoop and Spark Developer Certification Training",
            "description": "Interested in Big Data training? Enroll in our Big Data with Hadoop and Spark Certification to master Yarn, MapReduce, Pig, Hive and Impala.",

            "provider": {
            "@type":"Organization",
            "name":"Simplilearn",
            "sameAs":"https://www.simplilearn.com"
            },


            "hasCourseInstance" :[
                    {
            "@type": "CourseInstance",
			"name":"Big Data Hadoop and Spark Developer Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Interested in Big Data training? Enroll in our Big Data with Hadoop and Spark Certification to master Yarn, MapReduce, Pig, Hive and Impala.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-09-15T00:00",
				"inventoryLevel" :"no limit", "price": "20999.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Big Data Hadoop and Spark Developer Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-09-15T00:00",
            "endDate" : "2017-10-14T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"Big Data Hadoop and Spark Developer Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Interested in Big Data training? Enroll in our Big Data with Hadoop and Spark Certification to master Yarn, MapReduce, Pig, Hive and Impala.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-09-23T00:00",
				"inventoryLevel" :"no limit", "price": "20999.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Big Data Hadoop and Spark Developer Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-09-23T00:00",
            "endDate" : "2017-10-22T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"Big Data Hadoop and Spark Developer Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Interested in Big Data training? Enroll in our Big Data with Hadoop and Spark Certification to master Yarn, MapReduce, Pig, Hive and Impala.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-09-25T00:00",
				"inventoryLevel" :"no limit", "price": "20999.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Big Data Hadoop and Spark Developer Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-09-25T00:00",
            "endDate" : "2017-10-11T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"Big Data Hadoop and Spark Developer Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Interested in Big Data training? Enroll in our Big Data with Hadoop and Spark Certification to master Yarn, MapReduce, Pig, Hive and Impala.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-09-30T00:00",
				"inventoryLevel" :"no limit", "price": "20999.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Big Data Hadoop and Spark Developer Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-09-30T00:00",
            "endDate" : "2017-10-29T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz"
            }
                                    ],
            "outcome" : "",
            "image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz",
            "audience" : {
            "@type": "Audience",
            "audienceType": [
            "Students",
            "Working Professionals"
            ]
            },
            "courseCode" : "15",
            "timeRequired" : ""
            }
        </script>
            <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "20999.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-09-15",
						"inventoryLevel" :"no limit",
						"price": "20999.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-09-15",
                    "endDate" : "2017-10-14",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "20999.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-09-23",
						"inventoryLevel" :"no limit",
						"price": "20999.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-09-23",
                    "endDate" : "2017-10-22",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "20999.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-09-25",
						"inventoryLevel" :"no limit",
						"price": "20999.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-09-25",
                    "endDate" : "2017-10-11",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Developer.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "20999.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-09-30",
						"inventoryLevel" :"no limit",
						"price": "20999.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-09-30",
                    "endDate" : "2017-10-29",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                                                                                                                                <div class="courese-calendar-fluid classroom-course-cal " ng-class="{'active':(cpg.isBatchInfoVisible)}" dir-carousel prev-active='left_arrow_active' prev-inactive='hidden_cls' next-active='right_arrow_active' next-inactive='hidden_cls' is-custom="1" show-all="1" >
   <div class="container courese-cal-main-div" close-on-escape="cpg.hideBatchDisplay()">
      <div class="main-calender-section">
                  <span class="total_batches_counter heading-label">Class schedule<a ng-click="cpg.hideBatchDisplay()" class="close-icon"></a></span>
         <span class="mobile-batches batches_counter_span hidden">Batch <span class="dirCarouselCounter"></span> of 18</span>
         <span class="mobile-batches all_batches hidden_class">All Batches</span>
         <div class="course-calender classroom-course-cal c_screen">
            <ul class="c_list">
               <li class="c_list_item c_index_1" data-wshp-id="662096">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Sep 15 - Oct 14<span>
                      Weekday classes </span></span><span class="time caption">16:30 - 20:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Sep</li><li class="floating-label">Fri<span class="caption-dark">15</span></li><li class="floating-label">Sat<span class="caption-dark">16</span></li><li class="floating-label">Fri<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">23</span></li><li class="floating-label">Fri<span class="caption-dark">29</span></li><li class="floating-label">Sat<span class="caption-dark">30</span></li></ul>
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Fri<span class="caption-dark">06</span></li><li class="floating-label">Sat<span class="caption-dark">07</span></li><li class="floating-label">Fri<span class="caption-dark">13</span></li><li class="floating-label">Sat<span class="caption-dark">14</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_2" data-wshp-id="662345">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Sep 23 - Oct 22<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Sep</li><li class="floating-label">Sat<span class="caption-dark">23</span></li><li class="floating-label">Sun<span class="caption-dark">24</span></li><li class="floating-label">Sat<span class="caption-dark">30</span></li></ul>
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sun<span class="caption-dark">01</span></li><li class="floating-label">Sat<span class="caption-dark">07</span></li><li class="floating-label">Sun<span class="caption-dark">08</span></li><li class="floating-label">Sat<span class="caption-dark">14</span></li><li class="floating-label">Sun<span class="caption-dark">15</span></li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_3" data-wshp-id="662594">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Sep 25 - Oct 11<span>
                      Weekday classes </span></span><span class="time caption">06:00 - 09:00 IST <span>13 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Sep</li><li class="floating-label">Mon<span class="caption-dark">25</span></li><li class="floating-label">Tue<span class="caption-dark">26</span></li><li class="floating-label">Wed<span class="caption-dark">27</span></li><li class="floating-label">Thu<span class="caption-dark">28</span></li><li class="floating-label">Fri<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Mon<span class="caption-dark">02</span></li><li class="floating-label">Tue<span class="caption-dark">03</span></li><li class="floating-label">Wed<span class="caption-dark">04</span></li><li class="floating-label">Thu<span class="caption-dark">05</span></li><li class="floating-label">Fri<span class="caption-dark">06</span></li><li class="floating-label">Mon<span class="caption-dark">09</span></li><li class="floating-label">Tue<span class="caption-dark">10</span></li><li class="floating-label">Wed<span class="caption-dark">11</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_4" data-wshp-id="662843">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Sep 30 - Oct 29<span>
                     Weekend classes </span></span><span class="time caption">09:00 - 13:00 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Sep</li><li class="floating-label">Sat<span class="caption-dark">30</span></li></ul>
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sun<span class="caption-dark">01</span></li><li class="floating-label">Sat<span class="caption-dark">07</span></li><li class="floating-label">Sun<span class="caption-dark">08</span></li><li class="floating-label">Sat<span class="caption-dark">14</span></li><li class="floating-label">Sun<span class="caption-dark">15</span></li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_5" data-wshp-id="677453">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 07 - Nov 05<span>
                     Weekend classes </span></span><span class="time caption">09:00 - 13:00 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sat<span class="caption-dark">07</span></li><li class="floating-label">Sun<span class="caption-dark">08</span></li><li class="floating-label">Sat<span class="caption-dark">14</span></li><li class="floating-label">Sun<span class="caption-dark">15</span></li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_6" data-wshp-id="688161">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 09 - Oct 25<span>
                      Weekday classes </span></span><span class="time caption">20:00 - 23:00 IST <span>13 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Mon<span class="caption-dark">09</span></li><li class="floating-label">Tue<span class="caption-dark">10</span></li><li class="floating-label">Wed<span class="caption-dark">11</span></li><li class="floating-label">Thu<span class="caption-dark">12</span></li><li class="floating-label">Fri<span class="caption-dark">13</span></li><li class="floating-label">Mon<span class="caption-dark">16</span></li><li class="floating-label">Tue<span class="caption-dark">17</span></li><li class="floating-label">Wed<span class="caption-dark">18</span></li><li class="floating-label">Thu<span class="caption-dark">19</span></li><li class="floating-label">Fri<span class="caption-dark">20</span></li><li class="floating-label">Mon<span class="caption-dark">23</span></li><li class="floating-label">Tue<span class="caption-dark">24</span></li><li class="floating-label">Wed<span class="caption-dark">25</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_7" data-wshp-id="677702">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 14 - Nov 12<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sat<span class="caption-dark">14</span></li><li class="floating-label">Sun<span class="caption-dark">15</span></li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_8" data-wshp-id="677951">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 21 - Nov 19<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_9" data-wshp-id="688659">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 23 - Nov 08<span>
                      Weekday classes </span></span><span class="time caption">06:00 - 09:00 IST <span>13 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Mon<span class="caption-dark">23</span></li><li class="floating-label">Tue<span class="caption-dark">24</span></li><li class="floating-label">Wed<span class="caption-dark">25</span></li><li class="floating-label">Thu<span class="caption-dark">26</span></li><li class="floating-label">Fri<span class="caption-dark">27</span></li><li class="floating-label">Mon<span class="caption-dark">30</span></li><li class="floating-label">Tue<span class="caption-dark">31</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Wed<span class="caption-dark">01</span></li><li class="floating-label">Thu<span class="caption-dark">02</span></li><li class="floating-label">Fri<span class="caption-dark">03</span></li><li class="floating-label">Mon<span class="caption-dark">06</span></li><li class="floating-label">Tue<span class="caption-dark">07</span></li><li class="floating-label">Wed<span class="caption-dark">08</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_10" data-wshp-id="688410">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 27 - Nov 25<span>
                      Weekday classes </span></span><span class="time caption">16:30 - 20:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Fri<span class="caption-dark">27</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Fri<span class="caption-dark">03</span></li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Fri<span class="caption-dark">10</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Fri<span class="caption-dark">17</span></li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Fri<span class="caption-dark">24</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_11" data-wshp-id="685671">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 28 - Nov 26<span>
                     Weekend classes </span></span><span class="time caption">09:00 - 13:00 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_12" data-wshp-id="698744">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 04 - Dec 03<span>
                     Weekend classes </span></span><span class="time caption">09:00 - 13:00 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Sun<span class="caption-dark">03</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_13" data-wshp-id="697250">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 11 - Dec 10<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Sun<span class="caption-dark">03</span></li><li class="floating-label">Sat<span class="caption-dark">09</span></li><li class="floating-label">Sun<span class="caption-dark">10</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_14" data-wshp-id="697499">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 13 - Nov 29<span>
                      Weekday classes </span></span><span class="time caption">20:00 - 23:00 IST <span>13 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Mon<span class="caption-dark">13</span></li><li class="floating-label">Tue<span class="caption-dark">14</span></li><li class="floating-label">Wed<span class="caption-dark">15</span></li><li class="floating-label">Thu<span class="caption-dark">16</span></li><li class="floating-label">Fri<span class="caption-dark">17</span></li><li class="floating-label">Mon<span class="caption-dark">20</span></li><li class="floating-label">Tue<span class="caption-dark">21</span></li><li class="floating-label">Wed<span class="caption-dark">22</span></li><li class="floating-label">Thu<span class="caption-dark">23</span></li><li class="floating-label">Fri<span class="caption-dark">24</span></li><li class="floating-label">Mon<span class="caption-dark">27</span></li><li class="floating-label">Tue<span class="caption-dark">28</span></li><li class="floating-label">Wed<span class="caption-dark">29</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_15" data-wshp-id="697748">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 18 - Dec 17<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Sun<span class="caption-dark">03</span></li><li class="floating-label">Sat<span class="caption-dark">09</span></li><li class="floating-label">Sun<span class="caption-dark">10</span></li><li class="floating-label">Sat<span class="caption-dark">16</span></li><li class="floating-label">Sun<span class="caption-dark">17</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_16" data-wshp-id="697997">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 24 - Dec 23<span>
                      Weekday classes </span></span><span class="time caption">16:30 - 20:30 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Fri<span class="caption-dark">24</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Fri<span class="caption-dark">01</span></li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Fri<span class="caption-dark">08</span></li><li class="floating-label">Sat<span class="caption-dark">09</span></li><li class="floating-label">Fri<span class="caption-dark">15</span></li><li class="floating-label">Sat<span class="caption-dark">16</span></li><li class="floating-label">Fri<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">23</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_17" data-wshp-id="698246">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 25 - Dec 24<span>
                     Weekend classes </span></span><span class="time caption">09:00 - 13:00 IST <span>10 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Sun<span class="caption-dark">03</span></li><li class="floating-label">Sat<span class="caption-dark">09</span></li><li class="floating-label">Sun<span class="caption-dark">10</span></li><li class="floating-label">Sat<span class="caption-dark">16</span></li><li class="floating-label">Sun<span class="caption-dark">17</span></li><li class="floating-label">Sat<span class="caption-dark">23</span></li><li class="floating-label">Sun<span class="caption-dark">24</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_18" data-wshp-id="698495">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 27 - Dec 13<span>
                      Weekday classes </span></span><span class="time caption">06:00 - 09:00 IST <span>13 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Mon<span class="caption-dark">27</span></li><li class="floating-label">Tue<span class="caption-dark">28</span></li><li class="floating-label">Wed<span class="caption-dark">29</span></li><li class="floating-label">Thu<span class="caption-dark">30</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Fri<span class="caption-dark">01</span></li><li class="floating-label">Mon<span class="caption-dark">04</span></li><li class="floating-label">Tue<span class="caption-dark">05</span></li><li class="floating-label">Wed<span class="caption-dark">06</span></li><li class="floating-label">Thu<span class="caption-dark">07</span></li><li class="floating-label">Fri<span class="caption-dark">08</span></li><li class="floating-label">Mon<span class="caption-dark">11</span></li><li class="floating-label">Tue<span class="caption-dark">12</span></li><li class="floating-label">Wed<span class="caption-dark">13</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
                                                                        </ul>
         </div>
      </div>
            <div class="batch-slider-info">
         <a href="" class="prev c_prev"><span class="prev-arrow"></span></a>
         <a href="" class="next c_next"><span class="next-arrow"></span></a>
         <div class="container container-pos">
            <div class="batch-slide-list"><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a>
                           </div>
                        <span class="error_text" ng-bind="cpg.downloadScheduleErr"></span>
            </div>
      </div>
      <div class="container calender_bottom_text">
         <p class="shedule-text hidden"> Can't find convenient schedule? <a href="" ng-click="gCPCJ.gaFireOnCourseConvenientTry(); toggleModalDisplay('convenient_schd_form','block',$event); cpg.setLetUsKnowFormOpen();">Let us know</a></p>
         <p class="service-tax"><a href="" class="download-batches batch-link caption-dark" ng-click="cpg.downloadSchedule($event,'2017-09-11','2017-12-10','6','15');">Download schedule</a></p>
         <!-- <p class="service-tax"><em>*</em> 18.00% GST extra</p> -->
               </div>
   </div>
</div>            </div>
                                    <a href="" class="expend-box-btn lrn-more master-card-btn" ng-class="getPreviewClassesO(1,1, 0)" ng-click="setCpreviewStatus($event,1,1,1)">Course Content</a>
            <div class="section-one append-box" ng-class="(getCpreviewStatus(1,1))?'active':''">
               <div class="lrng-pdng-dv" ng-class="(getCpreviewStatus(1,1))?'expand':'collapse'">
                  <section id="learning-path-faq">
                     <div class="faq_affiliate blog-guidelines learnig-acc">
                        <div class="course-faq">
                           <div ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(15);pc.setBundleName('Big Data Hadoop and Spark Developer');">
         <span ng-init="pc.setStartAccordion(1,0)"></span>
                <div ng-show="(pc.coursePreviewData == null && pc.showCoursePreviewDiv ==1)?true:false;" ng-cloak>Loading...</div>
    <ul class='course-preview-accord bundle-course-preview course_preview_15' id="course-preview-accord"  dir-multi-accordion compile-acc="pc.accConstructCheck" compile-check="pc.startAcc" acc-status='1' acc-levels='2' multi-acc-level='1' acc-arrow-down="expand" acc-arrow-up="collapse">
    <li class="subs-cp-wrapper" ng-repeat='cpObj in pc.coursePreviewData[15]' ng-cloak data-indexAttr="{{$index}}">
 <div class='accord-head' ng-init="headIndex = $index" ng-click="pc.updateShowCoursePReviewDivStatus($index)" ng-init="pc.constructShowCoursePreviewDiv($index)" ><a class='acc-arrow' href=''><span class="special-tag" ng-show='(cpObj.isFreeElearning)'>Free Course</span><span ng-bind='cpObj.sectionName' class="bundle-course-name" ng-class="(cpvHeadPlayButtons[15][$index] > 0)?'head_icon':''"></span><span class="head_watch_videos_icon" ng-if="pc.coursePreviewData[15].length > 1 && cpvHeadPlayButtons[15][$index] > 0"></span></a></div>
   <ul class='sub-accord' style='clear:both' multi-acc-level='2' acc-close-first="0" acc-arrow-down="plus" acc-arrow-up="minus">
    <li ng-repeat='childObj in cpObj.childSection' ng-class="(childObj.lessons.length == 0)?'acc-exclude':''" ng-click="pc.setCourseId(15);pc.gFCPPT('Big Data Hadoop and Spark Developer',childObj.title); pc.hVLC(cpObj.eLearningId, childObj.lessons.length, ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning)?1:0, cpObj.sectionId,cpObj.isFromELearning,(cpObj.isFromELearning?childObj.video_url:childObj.url),childObj.video_type,childObj.title)" >
     <div class="expand-content course-txt"  ng-click="pc.chapterClick(childObj.title, $event);"><span ng-class='{"acc-arrow":(childObj.lessons.length > 0 || childObj.childSection.chapter_name.length>0)}'></span><b>{{childObj.title}}</b><span class="watch_videos_icon ng-scope" id="" ng-show="cpvPlayButtons[15][headIndex][$index] > 0" ng-init="initPlayButton(childObj, 15, headIndex, $index)"></span><button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="((childObj.lessons.length == 0) && ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning))">Preview</button><span ng-if="childObj.seconds != '00:00'" ng-bind="childObj.seconds"></span></div>
        <div ng-if="(childObj.childSection.chapter_name && childObj.childSection.chapter_name!='')" >
            <ul class='video-details' style='clear:both'>
                <li>
                    <div bundle-show-hide class="expand-content course-txt bundle_acc_cls bundle_acc" ng-click="pc.chapterClick(childObj.childSection.chapter_name, $event);"><span class="bundle_plus_minus minus"></span><b>{{childObj.childSection.chapter_name}}</b></div>
                    <ul class="bundle_height">
                        <li ng-repeat="lesson in childObj.childSection.lessons"
                            ng-click="pc.setCourseId(15);pc.gFCPPT('Big Data Hadoop and Spark Developer',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                            <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                                <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                                <span ng-if="lesson.seconds != '00:00'"  ng-bind="lesson.seconds"></span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    <div ng-if="(childObj.lessons.length>0 && childObj.lessons!='')">
        <ul  class='video-details' style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"
                ng-click="pc.setCourseId(15);pc.gFCPPT('Big Data Hadoop and Spark Developer',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                    <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                    <span ng-if="lesson.seconds != '00:00'" ng-bind="lesson.seconds"></span>
                </div>
            </li>
        </ul>
    </div>
    <div ng-if="(!childObj.lessons.length && !childObj.childSection.chapter_name)">
        <ul style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"></li>
        </ul>
    </div>
    </li>
</ul>
    <div class="view-btn-sub">
    <p class="sub_more" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 0 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=1;pc.scrollPageViewLess($event);">View More</p>
    <p class="sub_less" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 1 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=0;pc.scrollPageViewLess($event);">View Less</p>
    </div>
</li>
</ul>
<div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
 <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
  <div class="lightbox-holder" stop-event>
    <div class="video_custom_wrapper">
        <div class="video-container course_video">
         <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(15)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(15)=='1')?'block':'none'}"></iframe>
            <div id="course_preview_vid-15" style="left:'50px'"></div>
            <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text enroll-course-popup">
                <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                Enroll for this course and get full access.<br><br>
                <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()"> Enroll now</div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
<div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div>
</div>                           <center><a href="https://www.simplilearn.com/big-data-and-analytics/big-data-and-hadoop-training" target="_blank" class="btn btn-success btn-sm btn-flat goToCoursePage">GO TO COURSE PAGE</a></center>
                        </div>
                     </div>
                  </section>
               </div>
            </div>            <span class="mobile-arrow outer-arrow" ng-class="(getAboutMStatus(1,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,1,1)"></span>
                        <span class="course-sticker heading-label">Course 2</span>
            <div class="section-two borderline-none ">
               <div class="fluid-content-box">
                  <div class="box-fluid 637-wrapper crs-wrapper-1-2" ng-class="{'deactive':(getCpreviewStatus(2,1) || getClassroomSStatus(2,1) || getAboutCStatus(2,1)),'in-active-bg':getCpreviewStatus(2,2) || getClassroomSStatus(2,2) || getAboutCStatus(2,2) } ">
                     <span class="badge-label">Online Classroom Flexi Pass</span>                     <span class="rounded-border-cir"></span>
                     <span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz" alt="Apache Spark and Scala Certification Training"></span>
                     <div class="mobile-collapse" ng-class="(getAboutMStatus(2,1))? 'active':''">
                        <div class="pading-box">
                         <h3 ng-class="(getAboutMStatus(2,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,2,1)"><a href="https://www.simplilearn.com/big-data-and-analytics/apache-spark-scala-certification-training" target="_blank">Apache Spark & Scala</a></h3>
                                                      <div>
                                                            <div class=" course-info">
                                 <span>With Simplilearn’s Apache Spark and Scala certification training you would advance your expertise in Big Data Hadoop Ecosystem.

With this certification you will</span>
                                 <span ng-class="(getAboutCStatus(2,1))? '':'hidden'"> master the Apache Spark essential skills such as Spark Streaming, Spark SQL, Machine Learning Programming, GraphX Programming, Shell Scripting Spark.

And with real life industry project coupled with 30 demos you would be ready to take up Hadoop developer job requiring Apache Spark expertise.</span>
                                 <span class="readMoreLess" ng-class="(getAboutCStatus(2,1))? 'hidden':''" ng-click="setAboutCStatus($event,2,1)">...Know More</span>
                                 <span class="readMoreLess" ng-class="(getAboutCStatus(2,1))? '':'hidden'" ng-click="setAboutCStatus($event,2,1)">Less</span>
                              </div>
                                                                                                                        <div class="popup-couse-video active" ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(637,'Apache Spark & Scala');pc.setBundleName('Big Data Hadoop Architect');">
                                 <span ng-repeat='cpObj in pc.coursePreviewData[637] | limitTo: 1' data-indexattr="0" ng-if="cpObj.topVideo.video_url">
                                 <a href="#" ng-click="pc.setCourseId(637000);pc.gFCPPT('Apache Spark & Scala',cpObj.topVideo.title); pc.hVLC(cpObj.eLearningId, null, cpObj.topVideo.scoId, cpObj.sectionId,cpObj.isFromELearning,cpObj.topVideo.video_url,cpObj.topVideo.video_type,cpObj.topVideo.title)"  title="Play video" class="play">Course Preview</a>
                                 </span>
                                         <div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
    <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
    <div class="lightbox-holder" stop-event>
        <div class="video_custom_wrapper">
            <div class="video-container course_video">
                <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(637000)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(637000)=='1')?'block':'none'}"></iframe>
                <div id="course_preview_vid-637000" style="left:'50px'"></div>
                <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text">
                    <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                    Enroll for this course and get full access.<br><br>
                    <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()">Enroll now</div>
                </div>
            </div>
        </div>
    </div>
    <!--<a id="fancybox-close" style="display: inline;" ng-click="pc.hidePreview()"></a>-->
</div>
        </div>
        <div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div></div>
                           </div>
                        </div>
                                                <a href="" class="expend-box-btn master-card-btn classroom-schedule " ng-class="getClassroomClasses(2,1 , 0)" ng-click="setClassroomSStatus($event,2,1)"><label>Weekend class starting 16th Sep</label><span>Classroom Schedule</span></a>
                        <a href="" class="expend-box-btn lrn-more master-card-btn " ng-class="getPreviewClasses(2,1)" ng-click="setCpreviewStatus($event,2,1,1)">Course Content</a>
                     </div>
                     <span class="mobile-arrow" ng-class="(getAboutMStatus(2,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,2,1)"></span>
                  </div>
                  </div>
            </div>
                        <div class="section-one append-box classroomDiv" ng-class="(getClassroomSStatus(2,1))?'active':'hidden'" ng-controller="CoursePageCtrl as cpg">
               <!-- ==== use this class name for only classroom "classroom-course-cal" == -->
<!--count batches > 1 -->
    <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Course",
            "@id": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
            "name": "Apache Spark and Scala Certification Training",
            "description": "Master the essential skills such as Spark Streaming, Spark SQL, GraphX Programming & Shell Scripting Spark with our Apache Spark & Scala training course.",

            "provider": {
            "@type":"Organization",
            "name":"Simplilearn",
            "sameAs":"https://www.simplilearn.com"
            },


            "hasCourseInstance" :[
                    {
            "@type": "CourseInstance",
			"name":"Apache Spark and Scala Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Master the essential skills such as Spark Streaming, Spark SQL, GraphX Programming & Shell Scripting Spark with our Apache Spark & Scala training course.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-09-16T00:00",
				"inventoryLevel" :"no limit", "price": "16199.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Apache Spark and Scala Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-09-16T00:00",
            "endDate" : "2017-10-08T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"Apache Spark and Scala Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Master the essential skills such as Spark Streaming, Spark SQL, GraphX Programming & Shell Scripting Spark with our Apache Spark & Scala training course.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-10-21T00:00",
				"inventoryLevel" :"no limit", "price": "16199.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Apache Spark and Scala Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-10-21T00:00",
            "endDate" : "2017-11-12T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"Apache Spark and Scala Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"Master the essential skills such as Spark Streaming, Spark SQL, GraphX Programming & Shell Scripting Spark with our Apache Spark & Scala training course.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-11-18T00:00",
				"inventoryLevel" :"no limit", "price": "16199.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "Apache Spark and Scala Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-11-18T00:00",
            "endDate" : "2017-12-10T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz"
            }
            ,                        ],
            "outcome" : "",
            "image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz",
            "audience" : {
            "@type": "Audience",
            "audienceType": [
            "Students",
            "Working Professionals"
            ]
            },
            "courseCode" : "637",
            "timeRequired" : ""
            }
        </script>
            <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "16199.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-09-16",
						"inventoryLevel" :"no limit",
						"price": "16199.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-09-16",
                    "endDate" : "2017-10-08",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "16199.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-10-21",
						"inventoryLevel" :"no limit",
						"price": "16199.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-10-21",
                    "endDate" : "2017-11-12",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Spark-Scala.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "16199.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-11-18",
						"inventoryLevel" :"no limit",
						"price": "16199.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-11-18",
                    "endDate" : "2017-12-10",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                <div class="courese-calendar-fluid classroom-course-cal " ng-class="{'active':(cpg.isBatchInfoVisible)}" dir-carousel prev-active='left_arrow_active' prev-inactive='hidden_cls' next-active='right_arrow_active' next-inactive='hidden_cls' is-custom="1" show-all="1" >
   <div class="container courese-cal-main-div" close-on-escape="cpg.hideBatchDisplay()">
      <div class="main-calender-section">
                  <span class="total_batches_counter heading-label">Class schedule<a ng-click="cpg.hideBatchDisplay()" class="close-icon"></a></span>
         <span class="mobile-batches batches_counter_span hidden">Batch <span class="dirCarouselCounter"></span> of 3</span>
         <span class="mobile-batches all_batches hidden_class">All Batches</span>
         <div class="course-calender classroom-course-cal c_screen">
            <ul class="c_list">
               <li class="c_list_item c_index_1" data-wshp-id="665583">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Sep 16 - Oct 08<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>8 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Sep</li><li class="floating-label">Sat<span class="caption-dark">16</span></li><li class="floating-label">Sun<span class="caption-dark">17</span></li><li class="floating-label">Sat<span class="caption-dark">23</span></li><li class="floating-label">Sun<span class="caption-dark">24</span></li><li class="floating-label">Sat<span class="caption-dark">30</span></li></ul>
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sun<span class="caption-dark">01</span></li><li class="floating-label">Sat<span class="caption-dark">07</span></li><li class="floating-label">Sun<span class="caption-dark">08</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_2" data-wshp-id="676706">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 21 - Nov 12<span>
                     Weekend classes </span></span><span class="time caption">09:00 - 13:00 IST <span>8 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_3" data-wshp-id="700238">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 18 - Dec 10<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>8 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Sun<span class="caption-dark">03</span></li><li class="floating-label">Sat<span class="caption-dark">09</span></li><li class="floating-label">Sun<span class="caption-dark">10</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
                                                         </ul>
         </div>
      </div>
            <div class="batch-slider-info">
         <a href="" class="prev c_prev"><span class="prev-arrow"></span></a>
         <a href="" class="next c_next"><span class="next-arrow"></span></a>
         <div class="container container-pos">
            <div class="batch-slide-list"><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a>
                           </div>
                        <span class="error_text" ng-bind="cpg.downloadScheduleErr"></span>
            </div>
      </div>
      <div class="container calender_bottom_text">
         <p class="shedule-text hidden"> Can't find convenient schedule? <a href="" ng-click="gCPCJ.gaFireOnCourseConvenientTry(); toggleModalDisplay('convenient_schd_form','block',$event); cpg.setLetUsKnowFormOpen();">Let us know</a></p>
         <p class="service-tax"><a href="" class="download-batches batch-link caption-dark" ng-click="cpg.downloadSchedule($event,'2017-09-11','2017-12-10','6','637');">Download schedule</a></p>
         <!-- <p class="service-tax"><em>*</em> 18.00% GST extra</p> -->
               </div>
   </div>
</div>            </div>
                                    <a href="" class="expend-box-btn lrn-more master-card-btn" ng-class="getPreviewClassesO(2,1, 0)" ng-click="setCpreviewStatus($event,2,1,1)">Course Content</a>
            <div class="section-one append-box" ng-class="(getCpreviewStatus(2,1))?'active':''">
               <div class="lrng-pdng-dv" ng-class="(getCpreviewStatus(2,1))?'expand':'collapse'">
                  <section id="learning-path-faq">
                     <div class="faq_affiliate blog-guidelines learnig-acc">
                        <div class="course-faq">
                           <div ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(637);pc.setBundleName('Apache Spark & Scala');">
         <span ng-init="pc.setStartAccordion(1,0)"></span>
                <div ng-show="(pc.coursePreviewData == null && pc.showCoursePreviewDiv ==1)?true:false;" ng-cloak>Loading...</div>
    <ul class='course-preview-accord bundle-course-preview course_preview_637' id="course-preview-accord"  dir-multi-accordion compile-acc="pc.accConstructCheck" compile-check="pc.startAcc" acc-status='1' acc-levels='2' multi-acc-level='1' acc-arrow-down="expand" acc-arrow-up="collapse">
    <li class="subs-cp-wrapper" ng-repeat='cpObj in pc.coursePreviewData[637]' ng-cloak data-indexAttr="{{$index}}">
 <div class='accord-head' ng-init="headIndex = $index" ng-click="pc.updateShowCoursePReviewDivStatus($index)" ng-init="pc.constructShowCoursePreviewDiv($index)" ><a class='acc-arrow' href=''><span class="special-tag" ng-show='(cpObj.isFreeElearning)'>Free Course</span><span ng-bind='cpObj.sectionName' class="bundle-course-name" ng-class="(cpvHeadPlayButtons[637][$index] > 0)?'head_icon':''"></span><span class="head_watch_videos_icon" ng-if="pc.coursePreviewData[637].length > 1 && cpvHeadPlayButtons[637][$index] > 0"></span></a></div>
   <ul class='sub-accord' style='clear:both' multi-acc-level='2' acc-close-first="0" acc-arrow-down="plus" acc-arrow-up="minus">
    <li ng-repeat='childObj in cpObj.childSection' ng-class="(childObj.lessons.length == 0)?'acc-exclude':''" ng-click="pc.setCourseId(637);pc.gFCPPT('Apache Spark & Scala',childObj.title); pc.hVLC(cpObj.eLearningId, childObj.lessons.length, ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning)?1:0, cpObj.sectionId,cpObj.isFromELearning,(cpObj.isFromELearning?childObj.video_url:childObj.url),childObj.video_type,childObj.title)" >
     <div class="expand-content course-txt"  ng-click="pc.chapterClick(childObj.title, $event);"><span ng-class='{"acc-arrow":(childObj.lessons.length > 0 || childObj.childSection.chapter_name.length>0)}'></span><b>{{childObj.title}}</b><span class="watch_videos_icon ng-scope" id="" ng-show="cpvPlayButtons[637][headIndex][$index] > 0" ng-init="initPlayButton(childObj, 637, headIndex, $index)"></span><button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="((childObj.lessons.length == 0) && ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning))">Preview</button><span ng-if="childObj.seconds != '00:00'" ng-bind="childObj.seconds"></span></div>
        <div ng-if="(childObj.childSection.chapter_name && childObj.childSection.chapter_name!='')" >
            <ul class='video-details' style='clear:both'>
                <li>
                    <div bundle-show-hide class="expand-content course-txt bundle_acc_cls bundle_acc" ng-click="pc.chapterClick(childObj.childSection.chapter_name, $event);"><span class="bundle_plus_minus minus"></span><b>{{childObj.childSection.chapter_name}}</b></div>
                    <ul class="bundle_height">
                        <li ng-repeat="lesson in childObj.childSection.lessons"
                            ng-click="pc.setCourseId(637);pc.gFCPPT('Apache Spark & Scala',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                            <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                                <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                                <span ng-if="lesson.seconds != '00:00'"  ng-bind="lesson.seconds"></span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    <div ng-if="(childObj.lessons.length>0 && childObj.lessons!='')">
        <ul  class='video-details' style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"
                ng-click="pc.setCourseId(637);pc.gFCPPT('Apache Spark & Scala',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                    <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                    <span ng-if="lesson.seconds != '00:00'" ng-bind="lesson.seconds"></span>
                </div>
            </li>
        </ul>
    </div>
    <div ng-if="(!childObj.lessons.length && !childObj.childSection.chapter_name)">
        <ul style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"></li>
        </ul>
    </div>
    </li>
</ul>
    <div class="view-btn-sub">
    <p class="sub_more" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 0 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=1;pc.scrollPageViewLess($event);">View More</p>
    <p class="sub_less" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 1 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=0;pc.scrollPageViewLess($event);">View Less</p>
    </div>
</li>
</ul>
<div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
 <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
  <div class="lightbox-holder" stop-event>
    <div class="video_custom_wrapper">
        <div class="video-container course_video">
         <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(637)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(637)=='1')?'block':'none'}"></iframe>
            <div id="course_preview_vid-637" style="left:'50px'"></div>
            <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text enroll-course-popup">
                <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                Enroll for this course and get full access.<br><br>
                <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()"> Enroll now</div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
<div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div>
</div>                           <center><a href="https://www.simplilearn.com/big-data-and-analytics/apache-spark-scala-certification-training" target="_blank" class="btn btn-success btn-sm btn-flat goToCoursePage">GO TO COURSE PAGE</a></center>
                        </div>
                     </div>
                  </section>
               </div>
            </div>            <span class="mobile-arrow outer-arrow" ng-class="(getAboutMStatus(2,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,2,1)"></span>
                        <span class="course-sticker heading-label">Course 3</span>
            <div class="section-two borderline-none or-btn-hide">
               <div class="fluid-content-box">
                  <div class="box-fluid 594-wrapper crs-wrapper-1-3" ng-class="{'deactive':(getCpreviewStatus(3,1) || getClassroomSStatus(3,1) || getAboutCStatus(3,1)),'in-active-bg':getCpreviewStatus(3,2) || getClassroomSStatus(3,2) || getAboutCStatus(3,2) } ">
                     <span class="badge-label">Online Classroom Flexi Pass</span>                     <span class="rounded-border-cir"></span>
                     <span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz" alt="MongoDB Developer and Administrator Certification Training"></span>
                     <div class="mobile-collapse" ng-class="(getAboutMStatus(3,1))? 'active':''">
                        <div class="pading-box">
                         <h3 ng-class="(getAboutMStatus(3,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,3,1)"><a href="https://www.simplilearn.com/big-data-and-analytics/mongodb-certification-training" target="_blank">MongoDB Developer And Administrator</a></h3>
                                                      <div>
                                                            <div class=" course-info">
                                 <span>MongoDB Developer and Administrator certification from Simplilearn would equip you to master the skills to become MongoDB experienced professional.

You would beco</span>
                                 <span ng-class="(getAboutCStatus(3,1))? '':'hidden'">me job ready by mastering data modelling, ingestion, query and Sharding, Data Replication with MongoDB along with installing, updating and maintaining MongoDB environment.</span>
                                 <span class="readMoreLess" ng-class="(getAboutCStatus(3,1))? 'hidden':''" ng-click="setAboutCStatus($event,3,1)">...Know More</span>
                                 <span class="readMoreLess" ng-class="(getAboutCStatus(3,1))? '':'hidden'" ng-click="setAboutCStatus($event,3,1)">Less</span>
                              </div>
                                                                                                                        <div class="popup-couse-video active" ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(594,'MongoDB Developer And Administrator');pc.setBundleName('Big Data Hadoop Architect');">
                                 <span ng-repeat='cpObj in pc.coursePreviewData[594] | limitTo: 1' data-indexattr="0" ng-if="cpObj.topVideo.video_url">
                                 <a href="#" ng-click="pc.setCourseId(594000);pc.gFCPPT('MongoDB Developer And Administrator',cpObj.topVideo.title); pc.hVLC(cpObj.eLearningId, null, cpObj.topVideo.scoId, cpObj.sectionId,cpObj.isFromELearning,cpObj.topVideo.video_url,cpObj.topVideo.video_type,cpObj.topVideo.title)"  title="Play video" class="play">Course Preview</a>
                                 </span>
                                         <div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
    <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
    <div class="lightbox-holder" stop-event>
        <div class="video_custom_wrapper">
            <div class="video-container course_video">
                <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(594000)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(594000)=='1')?'block':'none'}"></iframe>
                <div id="course_preview_vid-594000" style="left:'50px'"></div>
                <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text">
                    <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                    Enroll for this course and get full access.<br><br>
                    <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()">Enroll now</div>
                </div>
            </div>
        </div>
    </div>
    <!--<a id="fancybox-close" style="display: inline;" ng-click="pc.hidePreview()"></a>-->
</div>
        </div>
        <div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div></div>
                           </div>
                        </div>
                                                <a href="" class="expend-box-btn master-card-btn classroom-schedule master-card-btn-noshadow" ng-class="getClassroomClasses(3,1 , 1)" ng-click="setClassroomSStatus($event,3,1)"><label>Weekend class starting 16th Sep</label><span>Classroom Schedule</span></a>
                        <a href="" class="expend-box-btn lrn-more master-card-btn master-card-btn-noshadow" ng-class="getPreviewClasses(3,1)" ng-click="setCpreviewStatus($event,3,1,1)">Course Content</a>
                     </div>
                     <span class="mobile-arrow" ng-class="(getAboutMStatus(3,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,3,1)"></span>
                  </div>
                  <div class="box-fluid 506-wrapper crs-wrapper-2-3"  ng-class="{'deactive':getCpreviewStatus(3,2) || getClassroomSStatus(3,2) || getAboutCStatus(3,2) ,'in-active-bg':getCpreviewStatus(3,1) || getClassroomSStatus(3,1)  || getAboutCStatus(3,1) }">
                     <span class="rounded-border-cir"></span>
                     <span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Cassandra.svgz" alt="Apache Cassandra Certification Training"></span>
                     <div class="mobile-collapse" ng-class="(getAboutMStatus(3,2))? 'active':''">
                        <div class="pading-box">
                           <h3><a href="https://www.simplilearn.com/big-data-and-analytics/apache-cassandra-certification-training" target="_blank">Apache Cassandra</a></h3>
                                                      <div>
                                                            <div class=" course-info">
                                 <span>Apache CassandraTM is an open-source project and a second-generation distributed NoSQL database. It is the best choice for higher availability and scalability of the</span>
                                 <span ng-class="(getAboutCStatus(3,2))? '':'hidden'"> database. Cassandra supports replication across multiple datacenters. It makes the write and read processes highly scalable by offering tunable consistency.
The Apache CassandraTM training course offered by Simplilearn provides an overview of the following:

    Fundamentals of big data and NoSQL databases
    Cassandra and its features
    Architecture and data model of Cassandra
    Installation, configuration, and monitoring of Cassandra
    Hadoop ecosystem of products around Cassandra

The Apache CassandraTM course offered by Simplilearn includes both online and classroom training. The courseware also includes demos for better understanding of the key concepts.</span>
                                 <span class="readMoreLess"  ng-class="(getAboutCStatus(3,2))? 'hidden':''" ng-click="setAboutCStatus($event,3,2)">...Know More</span>
                                 <span class="readMoreLess"  ng-class="(getAboutCStatus(3,2))? '':'hidden'" ng-click="setAboutCStatus($event,3,2)">Less</span>
                              </div>
                                                                                          <div class="popup-couse-video active" ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(506,'Apache Cassandra');pc.setBundleName('Big Data Hadoop Architect');">
                                 <span ng-repeat='cpObj in pc.coursePreviewData[506] | limitTo: 1' data-indexattr="0" ng-if="cpObj.topVideo.video_url">
                                 <a href="#" ng-click="pc.setCourseId(506000);pc.gFCPPT('Apache Cassandra',cpObj.topVideo.title); pc.hVLC(cpObj.eLearningId, null, cpObj.topVideo.scoId, cpObj.sectionId,cpObj.isFromELearning,cpObj.topVideo.video_url,cpObj.topVideo.video_type,cpObj.topVideo.title)"  title="Play video" class="play">Course Preview</a>
                                 </span>
                                         <div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
    <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
    <div class="lightbox-holder" stop-event>
        <div class="video_custom_wrapper">
            <div class="video-container course_video">
                <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(506000)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(506000)=='1')?'block':'none'}"></iframe>
                <div id="course_preview_vid-506000" style="left:'50px'"></div>
                <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text">
                    <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                    Enroll for this course and get full access.<br><br>
                    <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()">Enroll now</div>
                </div>
            </div>
        </div>
    </div>
    <!--<a id="fancybox-close" style="display: inline;" ng-click="pc.hidePreview()"></a>-->
</div>
        </div>
        <div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div></div>
                           </div>
                        </div>
                        <a href=""  class="expend-box-btn lrn-more master-card-btn master-card-btn-noshadow" ng-class="getPreviewClasses(3,2, 1)" ng-click="setCpreviewStatus($event,3,2,1)">Course Content</a>
                     </div>
                     <span class="mobile-arrow" ng-class="(getAboutMStatus(3,2))? 'collapse-box':''" ng-click="setAboutMStatus($event,3,2)"></span>
                  </div>
                  </div>
            </div>
                                    <a href="" class="expend-box-btn master-card-btn classroom-schedule" ng-class="getClassroomClassesO(3,1)" ng-click="setClassroomSStatus($event,3,1)"><label>Weekend class starting 16th Sep</label><span>Classroom Schedule</span></a>
            <div class="section-one append-box classroomDiv" ng-class="(getClassroomSStatus(3,1))?'active':'hidden'" ng-controller="CoursePageCtrl as cpg">
               <!-- ==== use this class name for only classroom "classroom-course-cal" == -->
<!--count batches > 1 -->
    <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Course",
            "@id": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
            "name": "MongoDB Developer and Administrator Certification Training",
            "description": "MongoDB certification training course teaches the big data features of MongoDB including Developer & Admin document database. Enroll to become a MongoDB expert.",

            "provider": {
            "@type":"Organization",
            "name":"Simplilearn",
            "sameAs":"https://www.simplilearn.com"
            },


            "hasCourseInstance" :[
                    {
            "@type": "CourseInstance",
			"name":"MongoDB Developer and Administrator Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"MongoDB certification training course teaches the big data features of MongoDB including Developer & Admin document database. Enroll to become a MongoDB expert.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-09-16T00:00",
				"inventoryLevel" :"no limit", "price": "16199.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "MongoDB Developer and Administrator Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-09-16T00:00",
            "endDate" : "2017-10-08T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"MongoDB Developer and Administrator Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"MongoDB certification training course teaches the big data features of MongoDB including Developer & Admin document database. Enroll to become a MongoDB expert.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-10-21T00:00",
				"inventoryLevel" :"no limit", "price": "16199.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "MongoDB Developer and Administrator Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-10-21T00:00",
            "endDate" : "2017-11-12T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz"
            }
            ,                        {
            "@type": "CourseInstance",
			"name":"MongoDB Developer and Administrator Certification Training",
			"url":"https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
			"description":"MongoDB certification training course teaches the big data features of MongoDB including Developer & Admin document database. Enroll to become a MongoDB expert.",
			"eventStatus": "open",
			"offers":
			{ "@type": "AggregateOffer",
        "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
				"availability": "In-stock",
				"availabilityStarts": "2017-11-18T00:00",
				"inventoryLevel" :"no limit", "price": "16199.0000",
				"priceCurrency": "₹"
			},
			"location": {
			"@type": "Place",
			"name" : "Online Classroom",
			"address":
			{ "@type": "PostalAddress", "name" : "MongoDB Developer and Administrator Certification Training Online Classroom", "addressLocality": "", "addressRegion": "" },
			"url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
			},
            "instructor" : {
            "@type": "Person",
            "name": "Industry Leading Experts"
            },
            "inLanguage" : "en",

            "startDate" : "2017-11-18T00:00",
            "endDate" : "2017-12-10T00:00",
											"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz"
            }
            ,                        ],
            "outcome" : "",
            "image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz",
            "audience" : {
            "@type": "Audience",
            "audienceType": [
            "Students",
            "Working Professionals"
            ]
            },
            "courseCode" : "594",
            "timeRequired" : ""
            }
        </script>
            <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "16199.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-09-16",
						"inventoryLevel" :"no limit",
						"price": "16199.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-09-16",
                    "endDate" : "2017-10-08",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "16199.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-10-21",
						"inventoryLevel" :"no limit",
						"price": "16199.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-10-21",
                    "endDate" : "2017-11-12",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                        <!--count $batchCntr <= 4 -->
                    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "EducationEvent",
                    "name": "Big Data Hadoop Architect",
                    "description" : "Master your Big Data Hadoop Architect skills with this 3-tiered online training course + hands-on CloudLab projects.",
                    "performer":"Simplilearn",
					"eventStatus": "open",
					"image" : "https://www.simplilearn.com/ice9/course_images/icons/Big-Data_MongoDB-Developer-and-Administrator.svgz",
                    "location": {
                    "@type": "Place",
                    "name" : "Online Classroom",
                    "address":
                    { "@type": "PostalAddress", "name" : "Big Data Hadoop Architect Online Classroom", "addressLocality": "", "addressRegion": "" }

                    ,
                    "url": "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                    },
                    "offers":
					{ "@type": "AggregateOffer",
						"lowPrice": "16199.0000",
						"url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training",
						"availability": "In-stock",
						"availabilityStarts": "2017-11-18",
						"inventoryLevel" :"no limit",
						"price": "16199.0000",
						"priceCurrency": "₹"
					},
                    "startDate": "2017-11-18",
                    "endDate" : "2017-12-10",
                    "url" : "https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training"
                }
            </script>
                <div class="courese-calendar-fluid classroom-course-cal " ng-class="{'active':(cpg.isBatchInfoVisible)}" dir-carousel prev-active='left_arrow_active' prev-inactive='hidden_cls' next-active='right_arrow_active' next-inactive='hidden_cls' is-custom="1" show-all="1" >
   <div class="container courese-cal-main-div" close-on-escape="cpg.hideBatchDisplay()">
      <div class="main-calender-section">
                  <span class="total_batches_counter heading-label">Class schedule<a ng-click="cpg.hideBatchDisplay()" class="close-icon"></a></span>
         <span class="mobile-batches batches_counter_span hidden">Batch <span class="dirCarouselCounter"></span> of 3</span>
         <span class="mobile-batches all_batches hidden_class">All Batches</span>
         <div class="course-calender classroom-course-cal c_screen">
            <ul class="c_list">
               <li class="c_list_item c_index_1" data-wshp-id="673080">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Sep 16 - Oct 08<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>8 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Sep</li><li class="floating-label">Sat<span class="caption-dark">16</span></li><li class="floating-label">Sun<span class="caption-dark">17</span></li><li class="floating-label">Sat<span class="caption-dark">23</span></li><li class="floating-label">Sun<span class="caption-dark">24</span></li><li class="floating-label">Sat<span class="caption-dark">30</span></li></ul>
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sun<span class="caption-dark">01</span></li><li class="floating-label">Sat<span class="caption-dark">07</span></li><li class="floating-label">Sun<span class="caption-dark">08</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_2" data-wshp-id="682434">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Oct 21 - Nov 12<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>8 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Oct</li><li class="floating-label">Sat<span class="caption-dark">21</span></li><li class="floating-label">Sun<span class="caption-dark">22</span></li><li class="floating-label">Sat<span class="caption-dark">28</span></li><li class="floating-label">Sun<span class="caption-dark">29</span></li></ul>
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">04</span></li><li class="floating-label">Sun<span class="caption-dark">05</span></li><li class="floating-label">Sat<span class="caption-dark">11</span></li><li class="floating-label">Sun<span class="caption-dark">12</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
               <li class="c_list_item c_index_3" data-wshp-id="700736">
                  <div class="cal-batch-header"><h4></h4><span class="caption cal-icon">Nov 18 - Dec 10<span>
                     Weekend classes </span></span><span class="time caption">19:30 - 23:30 IST <span>8 sessions</span></span></div>
                  <div class="calender-batch-height">
                     <ul><li class="month default-text">Nov</li><li class="floating-label">Sat<span class="caption-dark">18</span></li><li class="floating-label">Sun<span class="caption-dark">19</span></li><li class="floating-label">Sat<span class="caption-dark">25</span></li><li class="floating-label">Sun<span class="caption-dark">26</span></li></ul>
                     <ul><li class="month default-text">Dec</li><li class="floating-label">Sat<span class="caption-dark">02</span></li><li class="floating-label">Sun<span class="caption-dark">03</span></li><li class="floating-label">Sat<span class="caption-dark">09</span></li><li class="floating-label">Sun<span class="caption-dark">10</span></li></ul>
                     </div>
                  <div class="clearfix time-zone-bottom">
                                                            </div>
               </li>
                                                         </ul>
         </div>
      </div>
            <div class="batch-slider-info">
         <a href="" class="prev c_prev"><span class="prev-arrow"></span></a>
         <a href="" class="next c_next"><span class="next-arrow"></span></a>
         <div class="container container-pos">
            <div class="batch-slide-list"><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a><a href="" class="c_bullet hidden_class" ></a>
                           </div>
                        <span class="error_text" ng-bind="cpg.downloadScheduleErr"></span>
            </div>
      </div>
      <div class="container calender_bottom_text">
         <p class="shedule-text hidden"> Can't find convenient schedule? <a href="" ng-click="gCPCJ.gaFireOnCourseConvenientTry(); toggleModalDisplay('convenient_schd_form','block',$event); cpg.setLetUsKnowFormOpen();">Let us know</a></p>
         <p class="service-tax"><a href="" class="download-batches batch-link caption-dark" ng-click="cpg.downloadSchedule($event,'2017-09-11','2017-12-10','6','594');">Download schedule</a></p>
         <!-- <p class="service-tax"><em>*</em> 18.00% GST extra</p> -->
               </div>
   </div>
</div>            </div>
                                    <a href="" class="expend-box-btn lrn-more master-card-btn" ng-class="getPreviewClassesO(3,1, 1)" ng-click="setCpreviewStatus($event,3,1,1)">Course Content</a>
            <div class="section-one append-box" ng-class="(getCpreviewStatus(3,1))?'active':''">
               <div class="lrng-pdng-dv" ng-class="(getCpreviewStatus(3,1))?'expand':'collapse'">
                  <section id="learning-path-faq">
                     <div class="faq_affiliate blog-guidelines learnig-acc">
                        <div class="course-faq">
                           <div ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(594);pc.setBundleName('MongoDB Developer and Administrator');">
         <span ng-init="pc.setStartAccordion(1,0)"></span>
                <div ng-show="(pc.coursePreviewData == null && pc.showCoursePreviewDiv ==1)?true:false;" ng-cloak>Loading...</div>
    <ul class='course-preview-accord bundle-course-preview course_preview_594' id="course-preview-accord"  dir-multi-accordion compile-acc="pc.accConstructCheck" compile-check="pc.startAcc" acc-status='1' acc-levels='2' multi-acc-level='1' acc-arrow-down="expand" acc-arrow-up="collapse">
    <li class="subs-cp-wrapper" ng-repeat='cpObj in pc.coursePreviewData[594]' ng-cloak data-indexAttr="{{$index}}">
 <div class='accord-head' ng-init="headIndex = $index" ng-click="pc.updateShowCoursePReviewDivStatus($index)" ng-init="pc.constructShowCoursePreviewDiv($index)" ><a class='acc-arrow' href=''><span class="special-tag" ng-show='(cpObj.isFreeElearning)'>Free Course</span><span ng-bind='cpObj.sectionName' class="bundle-course-name" ng-class="(cpvHeadPlayButtons[594][$index] > 0)?'head_icon':''"></span><span class="head_watch_videos_icon" ng-if="pc.coursePreviewData[594].length > 1 && cpvHeadPlayButtons[594][$index] > 0"></span></a></div>
   <ul class='sub-accord' style='clear:both' multi-acc-level='2' acc-close-first="0" acc-arrow-down="plus" acc-arrow-up="minus">
    <li ng-repeat='childObj in cpObj.childSection' ng-class="(childObj.lessons.length == 0)?'acc-exclude':''" ng-click="pc.setCourseId(594);pc.gFCPPT('MongoDB Developer and Administrator',childObj.title); pc.hVLC(cpObj.eLearningId, childObj.lessons.length, ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning)?1:0, cpObj.sectionId,cpObj.isFromELearning,(cpObj.isFromELearning?childObj.video_url:childObj.url),childObj.video_type,childObj.title)" >
     <div class="expand-content course-txt"  ng-click="pc.chapterClick(childObj.title, $event);"><span ng-class='{"acc-arrow":(childObj.lessons.length > 0 || childObj.childSection.chapter_name.length>0)}'></span><b>{{childObj.title}}</b><span class="watch_videos_icon ng-scope" id="" ng-show="cpvPlayButtons[594][headIndex][$index] > 0" ng-init="initPlayButton(childObj, 594, headIndex, $index)"></span><button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="((childObj.lessons.length == 0) && ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning))">Preview</button><span ng-if="childObj.seconds != '00:00'" ng-bind="childObj.seconds"></span></div>
        <div ng-if="(childObj.childSection.chapter_name && childObj.childSection.chapter_name!='')" >
            <ul class='video-details' style='clear:both'>
                <li>
                    <div bundle-show-hide class="expand-content course-txt bundle_acc_cls bundle_acc" ng-click="pc.chapterClick(childObj.childSection.chapter_name, $event);"><span class="bundle_plus_minus minus"></span><b>{{childObj.childSection.chapter_name}}</b></div>
                    <ul class="bundle_height">
                        <li ng-repeat="lesson in childObj.childSection.lessons"
                            ng-click="pc.setCourseId(594);pc.gFCPPT('MongoDB Developer and Administrator',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                            <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                                <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                                <span ng-if="lesson.seconds != '00:00'"  ng-bind="lesson.seconds"></span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    <div ng-if="(childObj.lessons.length>0 && childObj.lessons!='')">
        <ul  class='video-details' style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"
                ng-click="pc.setCourseId(594);pc.gFCPPT('MongoDB Developer and Administrator',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                    <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                    <span ng-if="lesson.seconds != '00:00'" ng-bind="lesson.seconds"></span>
                </div>
            </li>
        </ul>
    </div>
    <div ng-if="(!childObj.lessons.length && !childObj.childSection.chapter_name)">
        <ul style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"></li>
        </ul>
    </div>
    </li>
</ul>
    <div class="view-btn-sub">
    <p class="sub_more" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 0 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=1;pc.scrollPageViewLess($event);">View More</p>
    <p class="sub_less" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 1 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=0;pc.scrollPageViewLess($event);">View Less</p>
    </div>
</li>
</ul>
<div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
 <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
  <div class="lightbox-holder" stop-event>
    <div class="video_custom_wrapper">
        <div class="video-container course_video">
         <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(594)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(594)=='1')?'block':'none'}"></iframe>
            <div id="course_preview_vid-594" style="left:'50px'"></div>
            <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text enroll-course-popup">
                <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                Enroll for this course and get full access.<br><br>
                <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()"> Enroll now</div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
<div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div>
</div>                           <center><a href="https://www.simplilearn.com/big-data-and-analytics/mongodb-certification-training" target="_blank" class="btn btn-success btn-sm btn-flat goToCoursePage">GO TO COURSE PAGE</a></center>
                        </div>
                     </div>
                  </section>
               </div>
            </div>            <span class="mobile-arrow outer-arrow" ng-class="(getAboutMStatus(3,1))? 'collapse-box':''" ng-click="setAboutMStatus($event,3,1)"></span>
                        <div class="master-second-course">
               <div class="box-fluid crs-wrapper-3-3"  ng-class="{'deactive':getCpreviewStatus(3,2) || getClassroomSStatus(3,2) ,'in-active-bg':getCpreviewStatus(3,1) || getClassroomSStatus(3,1) }">
                  <span class="rounded-border-cir"></span>
                  <span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Cassandra.svgz" alt="Apache Cassandra Certification Training"></span>
                                    <div class="mobile-collapse" ng-class="(getAboutMStatus(3,2))? 'active':''">
                     <div class="pading-box">
                        <h3><a href="https://www.simplilearn.com/big-data-and-analytics/apache-cassandra-certification-training" target="_blank">Apache Cassandra</a></h3>
                                                                        <div>
                                                                                 <div class=" course-info">
                              <span>Apache CassandraTM is an open-source project and a second-generation distributed NoSQL database. It is the best choice for higher availability and scalability of the</span>
                              <span ng-class="(getAboutCStatus(3,2))? '':'hidden'"> database. Cassandra supports replication across multiple datacenters. It makes the write and read processes highly scalable by offering tunable consistency.
The Apache CassandraTM training course offered by Simplilearn provides an overview of the following:

    Fundamentals of big data and NoSQL databases
    Cassandra and its features
    Architecture and data model of Cassandra
    Installation, configuration, and monitoring of Cassandra
    Hadoop ecosystem of products around Cassandra

The Apache CassandraTM course offered by Simplilearn includes both online and classroom training. The courseware also includes demos for better understanding of the key concepts.</span>
                              <span class="readMoreLess"  ng-class="(getAboutCStatus(3,2))? 'hidden':''" ng-click="setAboutCStatus($event,3,2)">...Know More</span>
                              <span class="readMoreLess"  ng-class="(getAboutCStatus(3,2))? '':'hidden'" ng-click="setAboutCStatus($event,3,2)">Less</span>
                           </div>
                                                                                                            <div class="popup-couse-video active" ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(506,'Apache Cassandra');pc.setBundleName('Big Data Hadoop Architect');">
                              <span ng-repeat='cpObj in pc.coursePreviewData[506] | limitTo: 1' data-indexattr="0"  ng-if="cpObj.topVideo.video_url">
                              <a href="#" ng-click="pc.setCourseId(506000);pc.gFCPPT('Apache Cassandra',cpObj.topVideo.title); pc.hVLC(cpObj.eLearningId, null, cpObj.topVideo.scoId, cpObj.sectionId,cpObj.isFromELearning,cpObj.topVideo.video_url,cpObj.topVideo.video_type,cpObj.topVideo.title)"  title="Play video" class="play">Course Preview</a>
                              </span>
                                      <div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
    <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
    <div class="lightbox-holder" stop-event>
        <div class="video_custom_wrapper">
            <div class="video-container course_video">
                <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(506000)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(506000)=='1')?'block':'none'}"></iframe>
                <div id="course_preview_vid-506000" style="left:'50px'"></div>
                <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text">
                    <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                    Enroll for this course and get full access.<br><br>
                    <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()">Enroll now</div>
                </div>
            </div>
        </div>
    </div>
    <!--<a id="fancybox-close" style="display: inline;" ng-click="pc.hidePreview()"></a>-->
</div>
        </div>
        <div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div>                           </div>
                        </div>
                     </div>
                                          <a href=""  class="expend-box-btn lrn-more master-card-btn master-card-btn-noshadow" ng-class="getPreviewClasses(3,2, 1)" ng-click="setCpreviewStatus($event,3,2,1)">Course Content</a>
                  </div>
               </div>
                                                            <a href=""  class="expend-box-btn lrn-more master-card-btn" ng-class="getPreviewClassesO(3,2, 1)" ng-click="setCpreviewStatus($event,3,2,1)">Course Content</a>
               <div class="section-one append-box" ng-class="(getCpreviewStatus(3,2))?'active':''">
                  <div class="lrng-pdng-dv">
                     <section id="learning-path-faq" class="Course-preivew test-cp">
                        <div class="faq_affiliate blog-guidelines learnig-acc">
                           <div class="course-faq">
                              <div ng-controller="CoursePreviewController as pc" ng-init="pc.cpData(506);pc.setBundleName('Apache Cassandra');">
         <span ng-init="pc.setStartAccordion(1,0)"></span>
                <div ng-show="(pc.coursePreviewData == null && pc.showCoursePreviewDiv ==1)?true:false;" ng-cloak>Loading...</div>
    <ul class='course-preview-accord bundle-course-preview course_preview_506' id="course-preview-accord"  dir-multi-accordion compile-acc="pc.accConstructCheck" compile-check="pc.startAcc" acc-status='1' acc-levels='2' multi-acc-level='1' acc-arrow-down="expand" acc-arrow-up="collapse">
    <li class="subs-cp-wrapper" ng-repeat='cpObj in pc.coursePreviewData[506]' ng-cloak data-indexAttr="{{$index}}">
 <div class='accord-head' ng-init="headIndex = $index" ng-click="pc.updateShowCoursePReviewDivStatus($index)" ng-init="pc.constructShowCoursePreviewDiv($index)" ><a class='acc-arrow' href=''><span class="special-tag" ng-show='(cpObj.isFreeElearning)'>Free Course</span><span ng-bind='cpObj.sectionName' class="bundle-course-name" ng-class="(cpvHeadPlayButtons[506][$index] > 0)?'head_icon':''"></span><span class="head_watch_videos_icon" ng-if="pc.coursePreviewData[506].length > 1 && cpvHeadPlayButtons[506][$index] > 0"></span></a></div>
   <ul class='sub-accord' style='clear:both' multi-acc-level='2' acc-close-first="0" acc-arrow-down="plus" acc-arrow-up="minus">
    <li ng-repeat='childObj in cpObj.childSection' ng-class="(childObj.lessons.length == 0)?'acc-exclude':''" ng-click="pc.setCourseId(506);pc.gFCPPT('Apache Cassandra',childObj.title); pc.hVLC(cpObj.eLearningId, childObj.lessons.length, ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning)?1:0, cpObj.sectionId,cpObj.isFromELearning,(cpObj.isFromELearning?childObj.video_url:childObj.url),childObj.video_type,childObj.title)" >
     <div class="expand-content course-txt"  ng-click="pc.chapterClick(childObj.title, $event);"><span ng-class='{"acc-arrow":(childObj.lessons.length > 0 || childObj.childSection.chapter_name.length>0)}'></span><b>{{childObj.title}}</b><span class="watch_videos_icon ng-scope" id="" ng-show="cpvPlayButtons[506][headIndex][$index] > 0" ng-init="initPlayButton(childObj, 506, headIndex, $index)"></span><button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="((childObj.lessons.length == 0) && ((childObj.scoId>0 && cpObj.isFromELearning) || !cpObj.isFromELearning))">Preview</button><span ng-if="childObj.seconds != '00:00'" ng-bind="childObj.seconds"></span></div>
        <div ng-if="(childObj.childSection.chapter_name && childObj.childSection.chapter_name!='')" >
            <ul class='video-details' style='clear:both'>
                <li>
                    <div bundle-show-hide class="expand-content course-txt bundle_acc_cls bundle_acc" ng-click="pc.chapterClick(childObj.childSection.chapter_name, $event);"><span class="bundle_plus_minus minus"></span><b>{{childObj.childSection.chapter_name}}</b></div>
                    <ul class="bundle_height">
                        <li ng-repeat="lesson in childObj.childSection.lessons"
                            ng-click="pc.setCourseId(506);pc.gFCPPT('Apache Cassandra',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                            <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                                <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                                <span ng-if="lesson.seconds != '00:00'"  ng-bind="lesson.seconds"></span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    <div ng-if="(childObj.lessons.length>0 && childObj.lessons!='')">
        <ul  class='video-details' style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"
                ng-click="pc.setCourseId(506);pc.gFCPPT('Apache Cassandra',lesson.title); pc.hVLC(cpObj.eLearningId, null, lesson.scoId, cpObj.sectionId,cpObj.isFromELearning,lesson.video_url,lesson.video_type,lesson.title)" stop-event>
                <div class='expand-content course-txt'><span></span><b class="nrml-txt">{{lesson.title}}</b>
                    <button class="btn btn-info watch_videos" ng-attr-id="{{isLoggedIn?'B2C_lead':''}}" ng-show="(lesson.video_url && (lesson.video_type=='mp4'))?true:false">Preview</button>
                    <span ng-if="lesson.seconds != '00:00'" ng-bind="lesson.seconds"></span>
                </div>
            </li>
        </ul>
    </div>
    <div ng-if="(!childObj.lessons.length && !childObj.childSection.chapter_name)">
        <ul style='clear:both'>
            <li ng-repeat="lesson in childObj.lessons"></li>
        </ul>
    </div>
    </li>
</ul>
    <div class="view-btn-sub">
    <p class="sub_more" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 0 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=1;pc.scrollPageViewLess($event);">View More</p>
    <p class="sub_less" ng-show="(cpObj.childSection.length > 6 && pc.viewMoreClicked == 1 && pc.showCoursePreviewDiv[$index] == 1)?true:false" ng-click="pc.viewMoreClicked=0;pc.scrollPageViewLess($event);">View Less</p>
    </div>
</li>
</ul>
<div id='overlay' class="popup_video_wrapper disclaimer_pop popup_country_wrapper lvc_vid course-prv"  ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" ng-click="pc.hidePreview($event)">
<div id="section_video_modal" class="lightbox course-video-pop dropdown_country" ng-style="{display:(pc.showPreviewStatus() == 1) ? 'block' : 'none'}" close-on-escape="pc.hidePreview($event)">
 <a id="fancybox-close" href="" ng-click="pc.hidePreview($event)" class="close close_country_btn"></a>
  <div class="lightbox-holder" stop-event>
    <div class="video_custom_wrapper">
        <div class="video-container course_video">
         <iframe id="sectionIframe" scrolling="yes" frameborder="0" style="" width='784px' height='400px' ng-src="{{pc.getSectionIframeSrc(506)}}" alt="" ng-style="{'display':(pc.getIFrameDisplayStatus(506)=='1')?'block':'none'}"></iframe>
            <div id="course_preview_vid-506" style="left:'50px'"></div>
            <div id="enroll_overlay" ng-style="{display:(pc.isVideoFinished() == 1) ? 'block' : 'none'}" ng-class="(pc.isVideoFinished() == 1) ? 'video_keys' : ''" class="enroll-div lmw_enroll meta-text enroll-course-popup">
                <strong class="lms-no-video">That was just a sneak-peak into the lesson.</strong><br>
                Enroll for this course and get full access.<br><br>
                <div id="enroll_now_lms_fullview" class="enroll-link btn btn-primary btn-sm" ng-click="pc.videoEnrollNow()"> Enroll now</div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
<div id='overlay-transcript' style="border-width:0px;width:100%;height:100%;background-color:#000;opacity:0.8;position:fixed;top:0;left:0;z-index:1000;display:none;" ng-style="{display:(pc.lecturePreview== 1) ? 'block' : 'none'}" ng-click="pc.closeTranscriptPopup()"  close-on-escape="pc.closeTranscriptPopupNoGa()">
</div>
</div>                              <center><a href="https://www.simplilearn.com/big-data-and-analytics/apache-cassandra-certification-training" target="_blank" class="btn btn-success btn-sm btn-flat goToCoursePage">GO TO COURSE PAGE</a></center>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
                              <span class="mobile-arrow outer-arrow" ng-class="(getAboutMStatus(3,2))? 'collapse-box':''" ng-click="setAboutMStatus($event,3,2)"></span>
            </div>
                                    <div class="section-two Electives new_elect">
               <div class="col-lg-16">
                  <span class="course-sticker master-sticker heading-label"><span class="master-certificate-logo"></span>
                  Masters Program Certificate                  </span>
               </div>
            </div>
                        <div class="section-two Electives new_elect">
               <div class="col-lg-16">
                  <span class="course-sticker certificate-sticker heading-label">Electives</span>
                  <ul>
                                          <li class="section-two big22_lp"> <span class="rounded-border-cir"></span><span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Big-Data-and-Hadoop-Administrator.svgz" alt="Big Data and Hadoop Administrator"></span>Big Data and Hadoop Administrator</li>
                                          <li class="section-two big22_lp"> <span class="rounded-border-cir"></span><span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Impala-Training.svgz" alt="Impala Training"></span>Impala Training</li>
                                          <li class="section-two big22_lp"> <span class="rounded-border-cir"></span><span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Kafka.svgz" alt="Apache Kafka"></span>Apache Kafka</li>
                                          <li class="section-two big22_lp"> <span class="rounded-border-cir"></span><span class="img-circle"><img lazyLoadImg src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/course_images/icons/Big-Data_Apache-Storm.svgz" alt="Apache Storm"></span>Apache Storm</li>
                                       </ul>
               </div>
            </div>
                     </div>
      </div>
   </section>
        <!-- <section class="masters_certificates masters-bg-colors ">
      <div class="container">
        
      </div>-->
   </section>
               <section id="learning-path-faq" class="faqs-wrapper masters-bg-colors">
      <div class="container" id="faqs-wrapper-link">
         <div class="col-md-8 col-md-offset-2">
            <div class="faq_affiliate blog-guidelines learnig-acc">
               <div class="course-faq">
                  <h2 class="h2_style-book">FAQs</h2>
                  <ul dir-accordion="" acc-arrow-down="arrow-down" acc-arrow-up="arrow-up" keep-first-closed="mobWidthFlag==1?1:hybridWidthFlag" auto-scroll-limit="52">
                                          <li>
                        <h3>What courses will be available for live instructor led online classes?<span class="acc-arrow arrow-up"></span></h3>
                        <div a_index="0" style="padding: 0px; margin: 0px; overflow: hidden;">
                           <p><div style="text-align: justify;">The courses that will be available for live instructor led online classes under this Masters course are:<br /> &nbsp;</div>  <table border="1" cellpadding="1" cellspacing="1" style="width: 500px;"> 	<tbody> 		<tr> 			<td style="text-align: center;">Srl No</td> 			<td style="text-align: center;">Course Name</td> 			<td style="text-align: center;">Monthly no. of online classes availability</td> 		</tr> 		<tr> 			<td style="text-align: center;">1</td> 			<td style="text-align: center;">Big-Data and Hadoop Developer</td> 			<td style="text-align: center;">7</td> 		</tr> 		<tr> 			<td style="text-align: center;">2</td> 			<td style="text-align: center;">Apache Spark &amp; Scala</td> 			<td style="text-align: center;">1</td> 		</tr> 		<tr> 			<td style="text-align: center;">3</td> 			<td style="text-align: center;">MongoDB Developer and Administrator</td> 			<td style="text-align: center;">1</td> 		</tr> 		<tr> 			<td style="text-align: center;">4</td> 			<td style="text-align: center;">Big-Data and Hadoop Administrator</td> 			<td style="text-align: center;">1</td> 		</tr> 	</tbody> </table>  <div style="text-align: justify;"><br /> So you get access to 100+ live instructor led online classes over the span of a year. The advantage of this is that you may come and revisit each and every course as you please. While you still get access to our batch session recordings you get the advantage of completing the entire learning path that empowers you to reach dream destination of becoming an all-round Big Data Hadoop Architect.</div></p>
                        </div>
                     </li>
                                          <li>
                        <h3>How do I enroll for the Masters Program?<span class="acc-arrow arrow-up"></span></h3>
                        <div a_index="0" style="padding: 0px; margin: 0px; overflow: hidden;">
                           <p><div style="text-align: justify;">You can enroll for the Masters Program through our website. You can make an online payment using any of the following options:</div>  <ul> 	<li style="text-align: justify;">Visa debit/credit card</li> 	<li style="text-align: justify;">American Express and Diners Club cards</li> 	<li style="text-align: justify;">Master Card</li> 	<li style="text-align: justify;">PayPal</li> </ul>  <div style="text-align: justify;">Once the online payment is done, you will automatically receive a payment receipt and access information, via email.</div></p>
                        </div>
                     </li>
                                          <li>
                        <h3>What will I get along with the Masters Program?<span class="acc-arrow arrow-up"></span></h3>
                        <div a_index="0" style="padding: 0px; margin: 0px; overflow: hidden;">
                           <p><ul> 	<li style="text-align: justify;">Access to e-learning content for all the courses included in the learning path</li> 	<li style="text-align: justify;">Access to exclusive forums, moderated by faculty and industry experts</li> </ul></p>
                        </div>
                     </li>
                                          <li>
                        <h3>What are the Terms and Conditions to recieve the iPad?<span class="acc-arrow arrow-up"></span></h3>
                        <div a_index="0" style="padding: 0px; margin: 0px; overflow: hidden;">
                           <p>The Terms and Conditions are as below <ul> 	<li>For US and Rest of World(Excluding India) region: Product shipped will be iPad Mini 4 16 GB (Wi-Fi only)</li> <li>For India region : Product shipped will be iPad Mini 2 16 GB (Wi-Fi only)</li><li>If product specified with this offer is unavailable, Simplilearn warrants the issue of an Amazon voucher of INR 15000(India)</li> <li>If product specified with this offer is unavailable, Simplilearn warrants the issue of an Amazon voucher of USD 300 (The United States and Rest of World(Excluding India))</li><li>Offer subject to availability of product on Amazon, in your country of residence.</li> <li>Simplilearn makes no guarantee/warranty with respect to the product, its features, and functionality</li> <li>Customers cannot claim an iPad in case the refund is in process</li> </ul></p>
                        </div>
                     </li>
                                       </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
      </div>
<div ng-controller="CoursePreviewLeadController as cpr">
<div class="modal fade in course-preview-lead log-reg-form" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-style="{display:(cpr.showPreviewLeadStatus() == 1) ? 'block' : 'none'}">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			   <a href="" class="close" data-dismiss="modal" aria-label="Close" ng-click="cpr.hidePreviewLead()"></a>
				<h4 class="modal-title" id="myModalLabel">
					<h3 class="login_heading bg-h3 text-center" ng-style="loginFormStyle">course preview</h3>
				</h4>
			</div>

				<div class="modal-body">
					<div class="form-control-wrapper">
								<form name="previewLeadForm" ng-submit="submitRegister(previewLeadForm.$valid)" novalidate>
									<div class="placeholder_wrap form-control-wrapper">
										<input type="text" class="form-control-material" ng-class="{'error_field': previewLeadForm.email.$dirty && previewLeadForm.email.$invalid}"  ng-model="email" name="email" required ng-keyup="intiateLead()">
										<div class="placeholder_span floating-label">Email*</div>
										<div class="floating-label_border"></div>
									</div>

									<div class="support_coutry_code">
										<div class="placeholder_wrap code_wrap ie_class" >
											<div class="select_wraper for_cun" >
												<select class="form-control-material monospace_class" ng-model="queryPhoneCode" name="queryPhoneCode">
													<option ng-repeat="country in countryDataHeaderDropDown"
															ng-selected="(country.id==queryCountryId)"
															ng-disabled="$index == '10'"
															value="+{{country.phnCode}}-" ng-cloak
													>
														{{($index != '10')?country.code+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;"+country.name:'---------------------------------------------------'}}
													</option>
												</select>
												<b class="caret"></b>
											</div>
												<span class="country_code_span ng-binding">{{ queryPhoneCode }}</span>
												<input type="text" class="form-control-material" name="phone" ng-model="phone" required style="padding-left: {{queryPhoneCode.length*10}}px;"  ng-class="{'error_field': previewLeadForm.phone.$dirty && previewLeadForm.phone.$invalid}">
												<div class="floating-label">Phone Number<sup>*</sup></div>
												<div class="floating-label_border"></div>
										</div>
									</div>
									<div class="form-checkbox">
										<label>
										  <input type="checkbox" ng-click="cpr.agreeCheck()" ng-class="{'error':(isAagreeCheckDirty && !cAgreeCheck)}"><span class="checkbox-material"><span class="check"></span></span> I agree to be contacted over email and phone
										</label>
									</div>
									<button id="B2C_lead" class=" btn btn-warning col-lg-12 col-xs-12 btn-primary btn-lg" type="submit">WATCH PREVIEW</button>
								</form>
						</div>
				</div>

				<div  class="modal-footer">
					<div class="create_account">
						<p class="login_link bg-small-meta-text"><span>Already a member?</span> <a href="" id="login_btn" class="forgot_password bg-small-meta-text" ng-click="cpr.showLogin($event)">Login</a> </p>
					</div>
	</div>

			</div>
		</div>
	</div>
</div>            <div id='local_menu_storage_all_course'>
                <div id="courses-menu-data" ng-click="menu.closeMenuOverlayClick($event);" ng-init="menu.initDefCategory('0', '1')" class="dropdown_nav hidden_cls" ng-mouseover="menu.showMenu();gMCJ.gaFH()" ng-mouseleave="menu.hideMenu()" dir-mouseleave="menu.hideMenu()" ng-style="{'display':(menu.isMenuVisible) ? 'block' : 'none'}">
 <div class="dropdown_inner">
  <div class="dropdown_shadow" ng-class="{'dropdown_shadow_less':(!menu.isFourthLevelMenuVisible()) && '1'}">
   <div class="dropdown_nav_left">
    <ul class="first-level_nav" stop-event="mousemove touchstart">
     <li class="visible-sm visible-xs menu-head">
     <span class="back-btn" ng-click="menu.closeMenu();$event.stopPropagation()" ng-mobile-click="menu.closeMenu();$event.stopPropagation()" ></span>Menu</li>
       <li class="sprite_home" ng-class="{'current_tab':(menu.isCurrentItem(0))}" dir-diag-hov="menu.showMainMenu('0','#')" level="1">
       <span class="menu_all_course visible-xs visible-sm">All courses</span>
        <ul class="second-level_nav" ng-style="{'display':(menu.isCurrentItem('0') ? 'block' : 'none')}" stop-event="mousemove touchend click">
         <li class="bg-small-meta-text hidden-xs hidden-sm">Course Categories</li>
         <li class="visible-sm visible-xs menu-head"><span class="back-btn" ng-click="menu.closeSubMenu()" ng-mobile-click="menu.closeSubMenu()"></span>All courses<span class="back-btn menu-close-btn" ng-click="menu.closeMenu()" ng-mobile-click="menu.closeMenu()"></span></li>
                   <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,1)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,1)}" dir-diag-hov="menu.setSubCatId('1','#')" level="2">Project Management<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,1)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('PMP<sup>®</sup> Certification',$event)" href="https://www.simplilearn.com/project-management/pmp-certification-training">PMP<sup>®</sup> Certification</a></li>
                <li><a ng-click="gMCJ.gFHFC('PRINCE2<sup>®</sup> Foundation and Practitioner',$event)" href="https://www.simplilearn.com/project-management/prince2-foundation-and-practitioner-certification-training">PRINCE2<sup>®</sup> Foundation and Practitioner</a></li>
                <li><a ng-click="gMCJ.gFHFC('CAPM<sup>®</sup> Certification',$event)" href="https://www.simplilearn.com/project-management/capm-certification-training">CAPM<sup>®</sup> Certification</a></li>
                <li><a ng-click="gMCJ.gFHFC('Project Management Expert',$event)" href="https://www.simplilearn.com/project-management/all-in-one-project-management-training-bundle">Project Management Expert</a></li>
                <li><a ng-click="gMCJ.gFHFC('PMI-PgMP<sup>®</sup> Certification',$event)" href="https://www.simplilearn.com/project-management/pgmp-certification-training">PMI-PgMP<sup>®</sup> Certification</a></li>
                <li><a ng-click="gMCJ.gFHFC('CBAP<sup>®</sup>-Certified Business Analysis Professional',$event)" href="https://www.simplilearn.com/project-management/cbap-preparatory-course-training">CBAP<sup>®</sup>-Certified Business Analysis Professional</a></li>
                <li><a ng-click="gMCJ.gFHFC('CCBA<sup>®</sup>-Certification of Competency in Business Analysis',$event)" href="https://www.simplilearn.com/project-management/ccba-certification-training">CCBA<sup>®</sup>-Certification of Competency in Business Analysis</a></li>
                <li><a ng-click="gMCJ.gFHFC('PMI-RMP<sup>®</sup> Certification',$event)" href="https://www.simplilearn.com/project-management/pmi-rmp-training">PMI-RMP<sup>®</sup> Certification</a></li>
                <li><a ng-click="gMCJ.gFHFC('PRINCE2<sup>®</sup> Foundation',$event)" href="https://www.simplilearn.com/project-management/prince2-foundation-certification-training">PRINCE2<sup>®</sup> Foundation</a></li>
                <li><a ng-click="gMCJ.gFHFC('Software Estimation',$event)" href="https://www.simplilearn.com/project-management/software-estimation-training">Software Estimation</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/project-management/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/project-management/all-in-one-project-management-training-bundle" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />Project Management Expert</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>PMP<sup>®</sup></span></li><li><span>Microsoft<sup>®</sup>  Project 2013</span></li><li><span>Agile Scrum Master</span></li><li><span>PMI-RMP<sup>®</sup></span></li><li><span>PMI-PgMP<sup>®</sup></span></li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,16)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,16)}" dir-diag-hov="menu.setSubCatId('16','#')" level="2">Big Data and Analytics<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,16)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Big Data Hadoop Architect',$event)" href="https://www.simplilearn.com/big-data-and-analytics/big-data-hadoop-architect-masters-program-training">Big Data Hadoop Architect</a></li>
                <li><a ng-click="gMCJ.gFHFC('Business Analytics Expert',$event)" href="https://www.simplilearn.com/big-data-and-analytics/data-analytics-and-business-intelligence-masters-program">Business Analytics Expert</a></li>
                <li><a ng-click="gMCJ.gFHFC('Tableau Desktop 10 Qualified Associate Training',$event)" href="https://www.simplilearn.com/tableau-training-and-data-visualization-course">Tableau Desktop 10 Qualified Associate Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('MongoDB Developer and Administrator',$event)" href="https://www.simplilearn.com/big-data-and-analytics/mongodb-certification-training">MongoDB Developer and Administrator</a></li>
                <li><a ng-click="gMCJ.gFHFC('Big Data Hadoop Solutions Architect',$event)" href="https://www.simplilearn.com/big-data-and-analytics/big-data-solutions-architect-masters-program-training">Big Data Hadoop Solutions Architect</a></li>
                <li><a ng-click="gMCJ.gFHFC('Integrated Program in Big Data and Data Science',$event)" href="https://www.simplilearn.com/integrated-program-in-big-data-and-data-science">Integrated Program in Big Data and Data Science</a></li>
                <li><a ng-click="gMCJ.gFHFC('Big Data Hadoop and Spark Developer',$event)" href="https://www.simplilearn.com/big-data-and-analytics/big-data-and-hadoop-training">Big Data Hadoop and Spark Developer</a></li>
                <li><a ng-click="gMCJ.gFHFC('Data Science Certification Training - R Programming',$event)" href="https://www.simplilearn.com/big-data-and-analytics/data-scientist-certification-sas-r-excel-training">Data Science Certification Training - R Programming</a></li>
                <li><a ng-click="gMCJ.gFHFC('Data Science with SAS Training',$event)" href="https://www.simplilearn.com/big-data-and-analytics/data-scientist-certification-sas-excel-training">Data Science with SAS Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('Data Science with Python',$event)" href="https://www.simplilearn.com/big-data-and-analytics/python-for-data-science-training">Data Science with Python</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/big-data-and-analytics/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/big-data-and-analytics/senior-data-scientist-masters-program-training" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />Data Scientist</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>Data Science with SAS Training</span></li><li><span>Data Science Certification Training - R Programming</span></li><li><span>Big Data Hadoop and Spark Developer</span></li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,18)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,18)}" dir-diag-hov="menu.setSubCatId('18','#')" level="2">Digital Marketing<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,18)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Digital Marketing Certified Associate',$event)" href="https://www.simplilearn.com/digital-marketing/digital-marketing-certified-associate-training">Digital Marketing Certified Associate</a></li>
                <li><a ng-click="gMCJ.gFHFC('Digital Marketing Specialist',$event)" href="https://www.simplilearn.com/digital-marketing/advanced-online-marketing-certification-training-bundle">Digital Marketing Specialist</a></li>
                <li><a ng-click="gMCJ.gFHFC('PPC Specialist',$event)" href="https://www.simplilearn.com/digital-marketing/ppc-specialist-masters-program-training">PPC Specialist</a></li>
                <li><a ng-click="gMCJ.gFHFC('SEO Specialist',$event)" href="https://www.simplilearn.com/digital-marketing/seo-specialist-masters-program-training">SEO Specialist</a></li>
                <li><a ng-click="gMCJ.gFHFC('Social Media Specialist',$event)" href="https://www.simplilearn.com/digital-marketing/social-media-specialist-masters-program-training">Social Media Specialist</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Web Analytics',$event)" href="https://www.simplilearn.com/digital-marketing/web-analytics-certification-training">Advanced Web Analytics</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Mobile Marketing',$event)" href="https://www.simplilearn.com/digital-marketing/mobile-marketing-certification-training">Advanced Mobile Marketing</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Content Marketing',$event)" href="https://www.simplilearn.com/digital-marketing/content-marketing-certification-training">Advanced Content Marketing</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Email Marketing',$event)" href="https://www.simplilearn.com/digital-marketing/email-marketing-certification-training">Advanced Email Marketing</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Website Conversion Rate Optimization',$event)" href="https://www.simplilearn.com/digital-marketing/conversion-optimization-certification-training">Advanced Website Conversion Rate Optimization</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/digital-marketing/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/digital-marketing/advanced-online-marketing-certification-training-bundle" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />Digital Marketing Specialist</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>Digital Marketing Certified Associate</span></li><li><span>Advanced Web Analytics</span></li><li><span>Advanced Search Engine Optimization (SEO)</span></li><li><span>Advanced Pay Per Click (PPC)</span></li><li><span>Advanced Social Media</span></li><li class='last-more-course'><b>&</b> <span class='visible-xs visible-sm'>6</span><span class='hidden-xs hidden-sm'>4</span> more courses</li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,9)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,9)}" dir-diag-hov="menu.setSubCatId('9','#')" level="2">Agile and Scrum<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,9)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Certified ScrumMaster<sup>®</sup> (CSM)',$event)" href="https://www.simplilearn.com/agile-and-scrum/csm-certification-training">Certified ScrumMaster<sup>®</sup> (CSM)</a></li>
                <li><a ng-click="gMCJ.gFHFC('Agile Scrum Master',$event)" href="https://www.simplilearn.com/agile-and-scrum/agile-scrum-master-certification-training">Agile Scrum Master</a></li>
                <li><a ng-click="gMCJ.gFHFC('Agile Scrum Foundation',$event)" href="https://www.simplilearn.com/agile-and-scrum/agile-and-scrum-certification-training">Agile Scrum Foundation</a></li>
                <li><a ng-click="gMCJ.gFHFC('PMI-ACP<sup>®</sup> Certification',$event)" href="https://www.simplilearn.com/agile-and-scrum/pmi-acp-certification-training">PMI-ACP<sup>®</sup> Certification</a></li>
                <li><a ng-click="gMCJ.gFHFC('Certified Scrum Product Owner<sup>®</sup> (CSPO)',$event)" href="https://www.simplilearn.com/agile-and-scrum/cspo-certification-training">Certified Scrum Product Owner<sup>®</sup> (CSPO)</a></li>
                <li><a ng-click="gMCJ.gFHFC('JIRA Project Module',$event)" href="https://www.simplilearn.com/agile-and-scrum/jira-project-module-training">JIRA Project Module</a></li>
                <li><a ng-click="gMCJ.gFHFC('Certified Scrum Developer',$event)" href="https://www.simplilearn.com/agile-and-scrum/certified-scrum-developer-training">Certified Scrum Developer</a></li>
                <li><a ng-click="gMCJ.gFHFC('SAFe<sup>®</sup> Agilist Certification Training',$event)" href="https://www.simplilearn.com/agile-and-scrum/safe-agilist-certification-training">SAFe<sup>®</sup> Agilist Certification Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('ICP-ACC (ICAgile Certified Agile Coaching) course',$event)" href="https://www.simplilearn.com/certified-agile-coaching-icp-acc-certification-training">ICP-ACC (ICAgile Certified Agile Coaching) course</a></li>
                <li><a ng-click="gMCJ.gFHFC('Introduction to TKP (Team Kanban Practitioner) Online Course',$event)" href="https://www.simplilearn.com/team-kanban-practitioner-tkp-certification-training">Introduction to TKP (Team Kanban Practitioner) Online Course</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/agile-and-scrum/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/agile-devops-masters-program-training" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />Agile DevOps Expert</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>Agile Scrum Master</span></li><li><span>GIT Training</span></li><li><span>Docker Compose in Depth</span></li><li><span>DevOps Practitioner</span></li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,10)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,10)}" dir-diag-hov="menu.setSubCatId('10','#')" level="2">Cloud Computing<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,10)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('AWS Solution Architect Associate',$event)" href="https://www.simplilearn.com/cloud-computing/aws-solution-architect-associate-training">AWS Solution Architect Associate</a></li>
                <li><a ng-click="gMCJ.gFHFC('DevOps Practitioner',$event)" href="https://www.simplilearn.com/cloud-computing/devops-practitioner-certification-training">DevOps Practitioner</a></li>
                <li><a ng-click="gMCJ.gFHFC('Implementing Microsoft Azure Infrastructure Solutions - 70-533',$event)" href="https://www.simplilearn.com/cloud-computing/implementing-microsoft-azure-infrastrucure-solutions-70-533-certification-training">Implementing Microsoft Azure Infrastructure Solutions - 70-533</a></li>
                <li><a ng-click="gMCJ.gFHFC('AWS SysOps Associate',$event)" href="https://www.simplilearn.com/cloud-computing/aws-sysops-certification-training">AWS SysOps Associate</a></li>
                <li><a ng-click="gMCJ.gFHFC('AWS Developer Associate',$event)" href="https://www.simplilearn.com/cloud-computing/aws-developer-certification-training">AWS Developer Associate</a></li>
                <li><a ng-click="gMCJ.gFHFC('AWS DevOps Architect',$event)" href="https://www.simplilearn.com/cloud-computing/aws-devops-architect-certification-training">AWS DevOps Architect</a></li>
                <li><a ng-click="gMCJ.gFHFC('AWS Technical Essentials',$event)" href="https://www.simplilearn.com/cloud-computing/aws-technical-essential-training">AWS Technical Essentials</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft Azure Developer Solution Architect',$event)" href="https://www.simplilearn.com/cloud-computing/microsoft-azure-developer-solution-architect-masters-program">Microsoft Azure Developer Solution Architect</a></li>
                <li><a ng-click="gMCJ.gFHFC('Google Cloud Platform Fundamentals CP100A',$event)" href="https://www.simplilearn.com/cloud-computing/google-cloud-platform-fundamentals-cp100a-certification-training">Google Cloud Platform Fundamentals CP100A</a></li>
                <li><a ng-click="gMCJ.gFHFC('Google Cloud Platform for Systems Operations Professionals CPO200',$event)" href="https://www.simplilearn.com/cloud-computing/google-cloud-platform-systems-operations-cpo200-training">Google Cloud Platform for Systems Operations Professionals CPO200</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/cloud-computing/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/devops-engineer-masters-program-certification-training" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />DevOps Engineer</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>AWS Technical Essentials</span></li><li><span>AWS Developer Associate</span></li><li><span>Agile Scrum Master</span></li><li><span>Docker Compose in Depth</span></li><li><span>DevOps Practitioner</span></li><li class='last-more-course'><b>&</b> <span class='visible-xs visible-sm'>9</span><span class='hidden-xs hidden-sm'>7</span> more courses</li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,2)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,2)}" dir-diag-hov="menu.setSubCatId('2','#')" level="2">IT Service and Architecture<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,2)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> for Beginners',$event)" href="https://www.simplilearn.com/it-service-management/itil-for-beginners">ITIL<sup>®</sup> for Beginners</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Foundation',$event)" href="https://www.simplilearn.com/it-service-management/itil-foundation-training">ITIL<sup>®</sup> Foundation</a></li>
                <li><a ng-click="gMCJ.gFHFC('TOGAF<sup>®</sup>  9 Training (Combined Level 1 & 2)',$event)" href="https://www.simplilearn.com/it-service-management/togaf-certification-program-training">TOGAF<sup>®</sup>  9 Training (Combined Level 1 & 2)</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Capability Expert Program',$event)" href="https://www.simplilearn.com/it-service-management/itil-expert-capability-stream-certification-training-bundle">ITIL<sup>®</sup> Capability Expert Program</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Lifecycle Expert Program',$event)" href="https://www.simplilearn.com/it-service-management/itil-expert-lifecycle-stream-certification-training-bundle">ITIL<sup>®</sup> Lifecycle Expert Program</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Intermediate SO',$event)" href="https://www.simplilearn.com/it-service-management/itil-intermediate-so-training">ITIL<sup>®</sup> Intermediate SO</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Intermediate CSI',$event)" href="https://www.simplilearn.com/it-service-management/itil-intermediate-csi-training">ITIL<sup>®</sup> Intermediate CSI</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Intermediate OSA',$event)" href="https://www.simplilearn.com/it-service-management/itil-intermediate-osa-training">ITIL<sup>®</sup> Intermediate OSA</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Intermediate PPO',$event)" href="https://www.simplilearn.com/it-service-management/itil-intermediate-ppo-training">ITIL<sup>®</sup> Intermediate PPO</a></li>
                <li><a ng-click="gMCJ.gFHFC('ITIL<sup>®</sup> Intermediate RCV',$event)" href="https://www.simplilearn.com/it-service-management/itil-intermediate-rcv-training">ITIL<sup>®</sup> Intermediate RCV</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/it-service-management/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/it-service-management/it-service-management-certification-training-all-in-one-bundle" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />IT Service Expert</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>ITIL<sup>®</sup> Foundation</span></li><li><span>ITIL<sup>®</sup> Intermediate SS</span></li><li><span>ITIL<sup>®</sup> Intermediate SD</span></li><li><span>ITIL<sup>®</sup> Intermediate CSI</span></li><li><span>ITIL<sup>®</sup> Intermediate OSA</span></li><li class='last-more-course'><b>&</b> <span class='visible-xs visible-sm'>8</span><span class='hidden-xs hidden-sm'>6</span> more courses</li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,3)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,3)}" dir-diag-hov="menu.setSubCatId('3','#')" level="2">Cyber Security<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,3)' stop-event="mousemove touchend">
             <li class="col-md-6 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('CEH (V9)- Certified Ethical Hacker',$event)" href="https://www.simplilearn.com/cyber-security/ceh-certification">CEH (V9)- Certified Ethical Hacker</a></li>
                <li><a ng-click="gMCJ.gFHFC('CISSP<sup>®</sup>- Certified Information Systems Security Professional',$event)" href="https://www.simplilearn.com/cyber-security/cissp-certification-training">CISSP<sup>®</sup>- Certified Information Systems Security Professional</a></li>
                <li><a ng-click="gMCJ.gFHFC('CISA<sup>®</sup>- Certified Information Systems Auditor',$event)" href="https://www.simplilearn.com/cyber-security/cisa-certification-training">CISA<sup>®</sup>- Certified Information Systems Auditor</a></li>
                <li><a ng-click="gMCJ.gFHFC('CISM<sup>®</sup>- Certified Information Security Manager',$event)" href="https://www.simplilearn.com/cyber-security/cism-certification-training">CISM<sup>®</sup>- Certified Information Security Manager</a></li>
                <li><a ng-click="gMCJ.gFHFC('CRISC<sup>®</sup>- Certified in Risk and Information Systems Control',$event)" href="https://www.simplilearn.com/cyber-security/crisc-certification-training">CRISC<sup>®</sup>- Certified in Risk and Information Systems Control</a></li>
                <li><a ng-click="gMCJ.gFHFC('COBIT<sup>®</sup>5- Control Objectives for Information and Related Technologies',$event)" href="https://www.simplilearn.com/cyber-security/cobit-5-foundation-training">COBIT<sup>®</sup>5- Control Objectives for Information and Related Technologies</a></li>
                <li><a ng-click="gMCJ.gFHFC('CompTIA Security+ SYO-401',$event)" href="https://www.simplilearn.com/cyber-security/comptia-security-plus-sy0-401-training">CompTIA Security+ SYO-401</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/cyber-security/">Explore the category</a></li>
                    </ul>
                 </li>
                                  <li class="col-md-6 pull-right">
                 <ul>
                  <li class="bg-small-meta-text visible-xs visible-sm">POPULAR COURSES</li>
                                    </ul>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,31)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,31)}" dir-diag-hov="menu.setSubCatId('31','#')" level="2">Salesforce<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,31)' stop-event="mousemove touchend">
             <li class="col-md-6 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Salesforce Administrator & App Builder',$event)" href="https://www.simplilearn.com/salesforce/salesforce-administrator-and-developer-training">Salesforce Administrator & App Builder</a></li>
                <li><a ng-click="gMCJ.gFHFC('Salesforce Administrator',$event)" href="https://www.simplilearn.com/salesforce/salesforce-administrator-training">Salesforce Administrator</a></li>
                <li><a ng-click="gMCJ.gFHFC('Salesforce App Builder',$event)" href="https://www.simplilearn.com/salesforce/salesforce-developer-training">Salesforce App Builder</a></li>
                <li><a ng-click="gMCJ.gFHFC('Salesforce Platform Developer I (Apex and Visualforce)',$event)" href="https://www.simplilearn.com/salesforce/salesforce-platform-developer-1-certification-training">Salesforce Platform Developer I (Apex and Visualforce)</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/salesforce/">Explore the category</a></li>
                    </ul>
                 </li>
                                  <li class="col-md-6 pull-right">
                 <ul>
                  <li class="bg-small-meta-text visible-xs visible-sm">POPULAR COURSES</li>
                                    </ul>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,25)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,25)}" dir-diag-hov="menu.setSubCatId('25','#')" level="2">Mobile and Software Development<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,25)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Angular Training',$event)" href="https://www.simplilearn.com/angular-certification-training">Angular Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('Selenium 3.0 Training',$event)" href="https://www.simplilearn.com/selenium-certification-training">Selenium 3.0 Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('Core Java Certification Training',$event)" href="https://www.simplilearn.com/core-java-training-course">Core Java Certification Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Java Training',$event)" href="https://www.simplilearn.com/mobile-and-software-development/java-javaee-soa-development-training">Advanced Java Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('Node.js Training',$event)" href="https://www.simplilearn.com/node-js-certification-training">Node.js Training</a></li>
                <li><a ng-click="gMCJ.gFHFC('Certified iOS App Developer',$event)" href="https://www.simplilearn.com/mobile-and-software-development/ios-app-developer-certification-training">Certified iOS App Developer</a></li>
                <li><a ng-click="gMCJ.gFHFC('Certified Android App Developer',$event)" href="https://www.simplilearn.com/mobile-and-software-development/android-app-development-training">Certified Android App Developer</a></li>
                <li><a ng-click="gMCJ.gFHFC('All-in-One Python Development Suite',$event)" href="https://www.simplilearn.com/mobile-and-software-development/python-development-training">All-in-One Python Development Suite</a></li>
                <li><a ng-click="gMCJ.gFHFC('All-in-One Complete Web Development Suite',$event)" href="https://www.simplilearn.com/mobile-and-software-development/complete-web-development-training">All-in-One Complete Web Development Suite</a></li>
                <li><a ng-click="gMCJ.gFHFC('All-in-One Javascript Development Suite',$event)" href="https://www.simplilearn.com/mobile-and-software-development/javascript-development-training">All-in-One Javascript Development Suite</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/mobile-and-software-development/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/full-stack-web-developer-mean-stack-certification-training" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />Full Stack Web Developer - MEAN Stack</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>Node.js Training</span></li><li><span>Angular Training</span></li><li><span>MongoDB Developer and Administrator</span></li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,4)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,4)}" dir-diag-hov="menu.setSubCatId('4','#')" level="2">Quality Management<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,4)' stop-event="mousemove touchend">
             <li class="col-md-5 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Certified Lean Six Sigma Green Belt',$event)" href="https://www.simplilearn.com/quality-management/lean-six-sigma-green-belt-training">Certified Lean Six Sigma Green Belt</a></li>
                <li><a ng-click="gMCJ.gFHFC('Minitab<sup>®</sup>',$event)" href="https://www.simplilearn.com/quality-management/minitab-training">Minitab<sup>®</sup></a></li>
                <li><a ng-click="gMCJ.gFHFC('Certified Lean Six Sigma Black Belt',$event)" href="https://www.simplilearn.com/quality-management/lean-six-sigma-black-belt-training">Certified Lean Six Sigma Black Belt</a></li>
                <li><a ng-click="gMCJ.gFHFC('Lean Six Sigma Expert',$event)" href="https://www.simplilearn.com/quality-management/lean-six-sigma-certification-training-all-in-one-bundle">Lean Six Sigma Expert</a></li>
                <li><a ng-click="gMCJ.gFHFC('Lean Management',$event)" href="https://www.simplilearn.com/quality-management/lean-management-training">Lean Management</a></li>
                <li><a ng-click="gMCJ.gFHFC('Lean Six Sigma Application in Information Technology',$event)" href="https://www.simplilearn.com/quality-management/lean-six-sigma-application-in-information-technology-certification-training">Lean Six Sigma Application in Information Technology</a></li>
                <li><a ng-click="gMCJ.gFHFC('Lean Six Sigma in Healthcare',$event)" href="https://www.simplilearn.com/quality-management/lean-six-sigma-healthcare-training">Lean Six Sigma in Healthcare</a></li>
                <li><a ng-click="gMCJ.gFHFC('CTFL-Certified Tester Foundation Level',$event)" href="https://www.simplilearn.com/quality-management/ctfl-training">CTFL-Certified Tester Foundation Level</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/quality-management/">Explore the category</a></li>
                    </ul>
                 </li>
                  <li class="col-md-7 pull-right">
                 <div class="bg-small-meta-text">Masters program</div>
                  <div class="menu-master-prg">
                   <h3><a ng-click="gMCJ.gFHFC('master',$event)" href="https://www.simplilearn.com/quality-management/lean-six-sigma-certification-training-all-in-one-bundle" class="sub-heading"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/ice9/master_program/masters-badge-1.png" alt="Masters program" />Lean Six Sigma Expert</a></h3>
                    <p>Courses included:</p>
                     <ul>
                      <li><span>Lean Management</span></li><li><span>Certified Lean Six Sigma Green Belt</span></li><li><span>Minitab<sup>®</sup></span></li><li><span>Certified Lean Six Sigma Black Belt</span></li><li class='last-more-course'><b>&</b> <span class='visible-xs visible-sm'>4</span><span class='hidden-xs hidden-sm'>2</span> more courses</li>                      </ul>
                    </div>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,21)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,21)}" dir-diag-hov="menu.setSubCatId('21','#')" level="2">Business Productivity Tools<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,21)' stop-event="mousemove touchend">
             <li class="col-md-6 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup> Excel 2013 Foundation',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-excel-2013-foundation-certification-training">Microsoft<sup>®</sup> Excel 2013 Foundation</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup>  Excel 2013-Advanced',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-excel-2013-advanced-certification-training">Microsoft<sup>®</sup>  Excel 2013-Advanced</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup>  Project 2013',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-project-2013-training">Microsoft<sup>®</sup>  Project 2013</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup> Excel 2013 Intermediate',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-excel-2013-intermediate-certification-training">Microsoft<sup>®</sup> Excel 2013 Intermediate</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup>  Office 2013 Access',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-office-2013-access-certification-training">Microsoft<sup>®</sup>  Office 2013 Access</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup>  Office 2013 Outlook',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-office-2013-outlook-certification-training">Microsoft<sup>®</sup>  Office 2013 Outlook</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup>  Office 2013 PowerPoint',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-office-2013-powerpoint-certification-training">Microsoft<sup>®</sup>  Office 2013 PowerPoint</a></li>
                <li><a ng-click="gMCJ.gFHFC('Microsoft<sup>®</sup>  Office 2013 Word',$event)" href="https://www.simplilearn.com/business-productivity-tools/microsoft-office-2013-word-training">Microsoft<sup>®</sup>  Office 2013 Word</a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/business-productivity-tools/">Explore the category</a></li>
                    </ul>
                 </li>
                                  <li class="col-md-6 pull-right">
                 <ul>
                  <li class="bg-small-meta-text visible-xs visible-sm">POPULAR COURSES</li>
                                    </ul>
                </li>
                             </ul>
                         <li ng-class="{'current_tab':(menu.isCurrentSubCat(0,22)) && '1'}">
          <a ng-click="gMCJ.gFHFC('category',$event)" ng-class="{'active_course':menu.isCurrentSubCat(0,22)}" dir-diag-hov="menu.setSubCatId('22','#')" level="2">OS and Databases<span class="menu_arrow"></span></a>
           <ul class="third-level_nav " ng-show='menu.isCurrentSubCat(0,22)' stop-event="mousemove touchend">
             <li class="col-md-6 pull-left ">
              <ul>
               <li class="bg-small-meta-text">POPULAR COURSES</li>
                <li><a ng-click="gMCJ.gFHFC('Administering Windows Server 2012 - R2',$event)" href="https://www.simplilearn.com/os-and-databases/administering-windows-server-2012-r2-certification-training">Administering Windows Server 2012 - R2</a></li>
                <li><a ng-click="gMCJ.gFHFC('Installing and Configuring MS Windows Server 2012 R2',$event)" href="https://www.simplilearn.com/os-and-databases/installing-and-configuring-ms-windows-server-2012-r2-certification-training">Installing and Configuring MS Windows Server 2012 R2</a></li>
                <li><a ng-click="gMCJ.gFHFC('Designing and Implementing a MS Server Infrastructure - Exam: 70-413',$event)" href="https://www.simplilearn.com/os-and-databases/designing-and-implementing-a-ms-server-infrastructure-certification-training">Designing and Implementing a MS Server Infrastructure - Exam: 70-413</a></li>
                <li><a ng-click="gMCJ.gFHFC('Developing Microsoft SharePoint Server 2013 Core Solutions (Exam 70-488)',$event)" href="https://www.simplilearn.com/os-and-databases/developing-sharepoint-server-2013-core-solutions-exam-70-488-training">Developing Microsoft SharePoint Server 2013 Core Solutions (Exam 70-488)</a></li>
                <li><a ng-click="gMCJ.gFHFC('Active Directory<sup>®</sup> Services with Windows Server<sup>®</sup>',$event)" href="https://www.simplilearn.com/os-and-databases/active-directory-services-with-windows-server-certification-training">Active Directory<sup>®</sup> Services with Windows Server<sup>®</sup></a></li>
                <li><a ng-click="gMCJ.gFHFC('Administering and Deploying System Center 2012-Configuration Manager',$event)" href="https://www.simplilearn.com/os-and-databases/system-center-2012-configuration-manager-certification-training">Administering and Deploying System Center 2012-Configuration Manager</a></li>
                <li><a ng-click="gMCJ.gFHFC('Administering the Web Server (IIS) Role of Windows Server',$event)" href="https://www.simplilearn.com/os-and-databases/administering-web-server-iis-role-of-windows-server-certification-training">Administering the Web Server (IIS) Role of Windows Server</a></li>
                <li><a ng-click="gMCJ.gFHFC('Advanced Automated Administration with Windows PowerShell<sup>®</sup>',$event)" href="https://www.simplilearn.com/os-and-databases/windows-powershell-advanced-administration-certification-training">Advanced Automated Administration with Windows PowerShell<sup>®</sup></a></li>
                <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/os-and-databases/">Explore the category</a></li>
                    </ul>
                 </li>
                                  <li class="col-md-6 pull-right">
                 <ul>
                  <li class="bg-small-meta-text visible-xs visible-sm">POPULAR COURSES</li>
                                          <li><a ng-click="gMCJ.gFHFC('Fundamentals of a Windows Server<sup>®</sup> Infrastructure')" href="https://www.simplilearn.com/os-and-databases/windows-server-infrastructure-fundamentals-certification-training">Fundamentals of a Windows Server<sup>®</sup> Infrastructure</a></li>
                                                <li><a ng-click="gMCJ.gFHFC('Identity with Windows Server 2016')" href="https://www.simplilearn.com/os-and-databases/identity-with-windows-server-certification-training">Identity with Windows Server 2016</a></li>
                                                <li><a ng-click="gMCJ.gFHFC('Implementing an Advanced Server Infrastructure-Exam 70-414')" href="https://www.simplilearn.com/os-and-databases/implementing-advanced-server-infrastructure-certification-training">Implementing an Advanced Server Infrastructure-Exam 70-414</a></li>
                                                <li><a ng-click="gMCJ.gFHFC('Installation, Storage, and Compute with Windows Server 2016')" href="https://www.simplilearn.com/os-and-databases/installation-storage-compute-with-windows-server-2016-certification-training">Installation, Storage, and Compute with Windows Server 2016</a></li>
                                                <li><a ng-click="gMCJ.gFHFC('Networking with Windows Server 2016')" href="https://www.simplilearn.com/os-and-databases/windows-server-2016-networking-certification-training">Networking with Windows Server 2016</a></li>
                                                <li><a ng-click="gMCJ.gFHFC('Automating Administration with Windows PowerShell<sup>®</sup>')" href="https://www.simplilearn.com/os-and-databases/windows-powershell-automating-administration-certification-training">Automating Administration with Windows PowerShell<sup>®</sup></a></li>
                                                <li><a ng-click="gMCJ.gFHFC('Core Solutions of Microsoft<sup>®</sup> Exchange Server 2013')" href="https://www.simplilearn.com/os-and-databases/microsoft-exchange-server-2013-core-solutions-certification-training">Core Solutions of Microsoft<sup>®</sup> Exchange Server 2013</a></li>
                                          </ul>
                </li>
                             </ul>
                          </li>
         </ul>
        </li>
         <li class="mobi_resources sprite_home visible-xs visible-sm">
            <a href="https://www.simplilearn.com/resources" onclick="window.location.href='https://www.simplilearn.com/resources';">Resources</a>
         </li>
         <li class="mobi_resources sprite_home visible-xs visible-sm">
          <a href="https://www.simplilearn.com/corporate-training" onclick="window.location.href='https://www.simplilearn.com/corporate-training';">Corporate training</a>
         </li>
      </ul>
    </div>
    <div stop-event="mousemove touchend">
            <div ng-show="menu.isCurrentSubCat(0,1) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,16) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,18) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,9) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,10) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,2) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,3) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,31) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,25) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,4) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,21) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(0,22) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(1,16) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(1,1) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(1,9) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(1,2) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(1,4) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,5) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,23) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,4) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,21) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,7) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,19) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,18) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,2) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,1) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                   <div ng-show="menu.isCurrentSubCat(3,15) && menu.isSubsAvailable" class="latest_course_sections subscription_nav"></div>
                </div>
  </div>
 </div>
</div>
            </div>
            <div id='local_menu_storage_frs'>
                <div id="resources-menu-data" class="dropdown_nav resources_dropdown hidden_cls" ng-mouseover="menu.showFRSMenu();" ng-mouseleave="menu.hideFRSMenu()" dir-mouseleave="menu.hideFRSMenu()" ng-style="{'display':(menu.isFRSMenuVisible) ? 'block' : 'none'}">
    <div class="dropdown_inner" lazy-load-img>
        <div class="dropdown_shadow">
            <ul class="second-level_nav" ng-click="$event.stopPropagation()">
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Big Data and Analytics')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Big Data and Analytics')}" dir-diag-hov="menu.showFRSMainMenu('Big Data and Analytics')"> Big Data and Analytics</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Big Data and Analytics'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/data-science-interview-questions-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Big Data and Analytics_1"  alt="20 Most Popular Data Science Interview Questions" show-on-mobile='0'/></div><span class="thumb_resource_txt">20 Most Popular Data Science Interview Questions</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/data-science-vs-big-data-vs-data-analytics-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Big Data and Analytics_2"  alt="Data Science vs. Big Data vs. Data Analytics" show-on-mobile='0'/></div><span class="thumb_resource_txt">Data Science vs. Big Data vs. Data Analytics</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/big-data-applications-in-industries-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Big Data and Analytics_3"  alt="How Applications of Big Data Drive Industries" show-on-mobile='0'/></div><span class="thumb_resource_txt">How Applications of Big Data Drive Industries</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/unlocking-data-science-webinar" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Webinar</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Big Data and Analytics_4"  alt="Fireside Chat: Unlocking Data Science" show-on-mobile='0'/></div><span class="thumb_resource_txt">Fireside Chat: Unlocking Data Science</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/how-facebook-is-using-big-data-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Big Data and Analytics_5"  alt="How Facebook is Using Big Data - The Good, the Bad, and the Ugly" show-on-mobile='0'/></div><span class="thumb_resource_txt">How Facebook is Using Big Data - The Good, the Bad, and the Ugly</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/what-is-machine-learning-and-why-it-matters-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Big Data and Analytics_6"  alt="Machine Learning: What it is and Why it Matters" show-on-mobile='0'/></div><span class="thumb_resource_txt">Machine Learning: What it is and Why it Matters</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Project Management')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Project Management')}" dir-diag-hov="menu.showFRSMainMenu('Project Management')"> Project Management</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Project Management'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/how-to-build-career-in-project-management-if-you-are-it-professional-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Project Management_1"  alt="Want to Be More Valuable in IT? Learn Project Management" show-on-mobile='0'/></div><span class="thumb_resource_txt">Want to Be More Valuable in IT? Learn Project Management</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/project-management-interview-questions-and-answers-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Project Management_2"  alt="10 Questions To Ask While you Hire for  Project Management Roles" show-on-mobile='0'/></div><span class="thumb_resource_txt">10 Questions To Ask While you Hire for  Project Management Roles</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/can-i-get-job-with-pmp-certification-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Project Management_3"  alt="Can I get a Job with the PMP Certification?" show-on-mobile='0'/></div><span class="thumb_resource_txt">Can I get a Job with the PMP Certification?</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/changes-in-pmp-2015-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Project Management_4"  alt="Free eBook: Guide To The PMP Exam Changes" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Guide To The PMP Exam Changes</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/how-not-to-fail-pmp-exam-second-attempt-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Project Management_5"  alt="Three Mantras to ensure you don't fail PMP® Certification Exam a Second Time" show-on-mobile='0'/></div><span class="thumb_resource_txt">Three Mantras to ensure you don't fail PMP® Certification Exam a Second Tim</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/devops-revolution-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Project Management_6"  alt="Are You Ready For The DevOps Revolution?" show-on-mobile='0'/></div><span class="thumb_resource_txt">Are You Ready For The DevOps Revolution?</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Digital Marketing')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Digital Marketing')}" dir-diag-hov="menu.showFRSMainMenu('Digital Marketing')"> Digital Marketing</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Digital Marketing'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/social-media-moments-super-bowl-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Digital Marketing_1"  alt="Social Media Moments of Super Bowl 2017" show-on-mobile='0'/></div><span class="thumb_resource_txt">Social Media Moments of Super Bowl 2017</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/real-impact-social-media-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Digital Marketing_2"  alt="What is the real impact of social media?" show-on-mobile='0'/></div><span class="thumb_resource_txt">What is the real impact of social media?</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/how-to-become-a-digital-marketing-specialist-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Digital Marketing_3"  alt="How to Become a Digital Marketing Specialist - Learning Paths Explored" show-on-mobile='0'/></div><span class="thumb_resource_txt">How to Become a Digital Marketing Specialist - Learning Paths Explored</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/mobile-marketing-essentials-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Digital Marketing_4"  alt="Free eBook: The Essentials Of Mobile Marketing" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: The Essentials Of Mobile Marketing</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/web-analytics-tools-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Digital Marketing_5"  alt="10 Best Web Analytics Tools: How to Make The Most of it?" show-on-mobile='0'/></div><span class="thumb_resource_txt">10 Best Web Analytics Tools: How to Make The Most of it?</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/content-marketing-trends-2016-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Digital Marketing_6"  alt="12 Content Marketing Trends That Will Dominate 2016 [Infographic]" show-on-mobile='0'/></div><span class="thumb_resource_txt">12 Content Marketing Trends That Will Dominate 2016 [Infographic]</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('IT Security Management')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('IT Security Management')}" dir-diag-hov="menu.showFRSMainMenu('IT Security Management')"> IT Security Management</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('IT Security Management'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/cyber-security-interview-questions-and-answers-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Security Management_1"  alt="20 Interview Questions and Answers for Cyber-security Professionals" show-on-mobile='0'/></div><span class="thumb_resource_txt">20 Interview Questions and Answers for Cyber-security Professionals</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/why-you-should-not-use-smartphone-fingerprint-readers-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Security Management_2"  alt="Why You Should Not Use Smartphone Fingerprint Readers" show-on-mobile='0'/></div><span class="thumb_resource_txt">Why You Should Not Use Smartphone Fingerprint Readers</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/new-cissp-certification-exam-2015-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Security Management_3"  alt="Free eBook: Guide to the New CISSP Certification 2015" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Guide to the New CISSP Certification 2015</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/becoming-an-it-security-architect-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Security Management_4"  alt="Becoming an IT Security Architect - Learning Paths Explored" show-on-mobile='0'/></div><span class="thumb_resource_txt">Becoming an IT Security Architect - Learning Paths Explored</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/top-ethical-hacking-certifications-to-consider-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Security Management_5"  alt="Top 3 Ethical Hacking Certifications" show-on-mobile='0'/></div><span class="thumb_resource_txt">Top 3 Ethical Hacking Certifications</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/certified-ethical-hacker-ceh-salary-report-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Security Management_6"  alt="Free eBook: Ethical Hacking Salary Report" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Ethical Hacking Salary Report</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Career Fast-track')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Career Fast-track')}" dir-diag-hov="menu.showFRSMainMenu('Career Fast-track')"> Career Fast-track</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Career Fast-track'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/5-most-sought-after-it-skills-of-2016-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Career Fast-track_1"  alt="The Top 5 Most Sought-after IT Skills of 2016" show-on-mobile='0'/></div><span class="thumb_resource_txt">The Top 5 Most Sought-after IT Skills of 2016</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/leadership-vs-management-difference-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Career Fast-track_2"  alt="Leadership vs Management: What is the difference?" show-on-mobile='0'/></div><span class="thumb_resource_txt">Leadership vs Management: What is the difference?</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/innovation-digital-era-webinar" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Webinar</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Career Fast-track_3"  alt="TechCast : The Future of Work and The Workforce of the Digital Era" show-on-mobile='0'/></div><span class="thumb_resource_txt">TechCast : The Future of Work and The Workforce of the Digital Era</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/6-trends-shaking-up-the-it-industry-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Career Fast-track_4"  alt="6 Trends Shaking Up the IT Industry" show-on-mobile='0'/></div><span class="thumb_resource_txt">6 Trends Shaking Up the IT Industry</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/build-your-personal-branding-for-the-information-age-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Career Fast-track_5"  alt="Market Yourself! Building a Personal Brand for The Information Age" show-on-mobile='0'/></div><span class="thumb_resource_txt">Market Yourself! Building a Personal Brand for The Information Age</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/high-paying-certification-courses-2016-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Career Fast-track_6"  alt="Free eBook: 2016 High Paying Certifications" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: 2016 High Paying Certifications</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Agile and Scrum')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Agile and Scrum')}" dir-diag-hov="menu.showFRSMainMenu('Agile and Scrum')"> Agile and Scrum</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Agile and Scrum'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/agile-scrum-master-interview-questions-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Agile and Scrum_1"  alt="Top 20 Scrum Master & Agile Scrum Interview Questions" show-on-mobile='0'/></div><span class="thumb_resource_txt">Top 20 Scrum Master & Agile Scrum Interview Questions</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/mandla-mahlangu-agile-success-story-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Agile and Scrum_2"  alt="The Story of Success – How Mandla Mahlangu Conquered the World of Agile" show-on-mobile='0'/></div><span class="thumb_resource_txt">The Story of Success – How Mandla Mahlangu Conquered the World of Agile</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/free-scrum-methodology-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Agile and Scrum_3"  alt="Free eBook: Guide To Scrum Methodology" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Guide To Scrum Methodology</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/agile-scrum-master-certification-learners-reviews-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Agile and Scrum_4"  alt="Agile Scrum Master (ASM) Certification Training – What our Learners are saying" show-on-mobile='0'/></div><span class="thumb_resource_txt">Agile Scrum Master (ASM) Certification Training – What our Learners are sa</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/reasons-why-agile-scrum-should-be-your-next-career-move-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Agile and Scrum_5"  alt="10 Reasons Why Agile Scrum Should be Your Next Career Move" show-on-mobile='0'/></div><span class="thumb_resource_txt">10 Reasons Why Agile Scrum Should be Your Next Career Move</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/programmer-to-scrum-master-story-learning-success-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Agile and Scrum_6"  alt="From a Programmer to Scrum Master - My Story of Learning and Success" show-on-mobile='0'/></div><span class="thumb_resource_txt">From a Programmer to Scrum Master - My Story of Learning and Success</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('IT Service and Architecture')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('IT Service and Architecture')}" dir-diag-hov="menu.showFRSMainMenu('IT Service and Architecture')"> IT Service and Architecture</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('IT Service and Architecture'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/it-service-management-trends-2016-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Service and Architecture_1"  alt="Key IT Service Management Trends For 2016" show-on-mobile='0'/></div><span class="thumb_resource_txt">Key IT Service Management Trends For 2016</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/togaf-applications-in-internet-of-things-iot-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Service and Architecture_2"  alt="TOGAF and the Internet of Things" show-on-mobile='0'/></div><span class="thumb_resource_txt">TOGAF and the Internet of Things</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/itil-2011-foundation-certification-pocket-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Service and Architecture_3"  alt="Free eBook: Pocket Guide To The ITIL 2011 Foundation Certification" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Pocket Guide To The ITIL 2011 Foundation Certification</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/how-to-successfully-plan-enterprise-architecture-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Service and Architecture_4"  alt="How To Successfully Plan Your Enterprise Architecture" show-on-mobile='0'/></div><span class="thumb_resource_txt">How To Successfully Plan Your Enterprise Architecture</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/why-it-service-expert-certification-is-must-have-for-itil-professionals-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Service and Architecture_5"  alt="Why the IT Service Expert Certification is a Must-Have for Certified ITIL Professionals" show-on-mobile='0'/></div><span class="thumb_resource_txt">Why the IT Service Expert Certification is a Must-Have for Certified ITIL Pr</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/togaf-9-1-it-enterprise-architects-quick-start-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="IT Service and Architecture_6"  alt="Free eBook: TOGAF 9.1 - Quick Start Guide For IT Enterprise Architects" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: TOGAF 9.1 - Quick Start Guide For IT Enterprise Architects</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Inside Simplilearn')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Inside Simplilearn')}" dir-diag-hov="menu.showFRSMainMenu('Inside Simplilearn')"> Inside Simplilearn</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Inside Simplilearn'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/getting-agile-to-unlock-your-teams-hidden-potential-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Inside Simplilearn_1"  alt="Getting Agile: Unlocking Your Team’s Hidden Potential" show-on-mobile='0'/></div><span class="thumb_resource_txt">Getting Agile: Unlocking Your Team’s Hidden Potential</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/data-analyst-vs-data-scientist-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Inside Simplilearn_2"  alt="Data Analyst vs. Data Scientist - What's the Difference?" show-on-mobile='0'/></div><span class="thumb_resource_txt">Data Analyst vs. Data Scientist - What's the Difference?</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/free-agile-tools-for-every-project-manager-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Inside Simplilearn_3"  alt="5 Free Agile Tools For Any Project Manager" show-on-mobile='0'/></div><span class="thumb_resource_txt">5 Free Agile Tools For Any Project Manager</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/engagographic-icc-champions-trophy-2017-contest-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Inside Simplilearn_4"  alt="Predict & Win! The ICC Champions Trophy 2017 Contest | Simplilearn" show-on-mobile='0'/></div><span class="thumb_resource_txt">Predict & Win! The ICC Champions Trophy 2017 Contest | Simplilearn</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/overview-of-customer-relationship-management-crm-market-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Inside Simplilearn_5"  alt="An Overview of the Customer Relationship Management (CRM) Market" show-on-mobile='0'/></div><span class="thumb_resource_txt">An Overview of the Customer Relationship Management (CRM) Market</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/social-selling-vs-marketing-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Inside Simplilearn_6"  alt="Social Selling Vs Marketing: A career Hack Podcast" show-on-mobile='0'/></div><span class="thumb_resource_txt">Social Selling Vs Marketing: A career Hack Podcast</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Virtualization and Cloud Computing')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Virtualization and Cloud Computing')}" dir-diag-hov="menu.showFRSMainMenu('Virtualization and Cloud Computing')"> Virtualization and Cloud Computing</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Virtualization and Cloud Computing'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/importance-of-cloud-certifications-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Virtualization and Cloud Computing_1"  alt="The Growing Importance of Cloud Certifications" show-on-mobile='0'/></div><span class="thumb_resource_txt">The Growing Importance of Cloud Certifications</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/aws-vs-google-cloud-which-is-better-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Virtualization and Cloud Computing_2"  alt="AWS vs Google Cloud - The Showdown" show-on-mobile='0'/></div><span class="thumb_resource_txt">AWS vs Google Cloud - The Showdown</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/developer-to-aws-cloud-specialist-learning-path-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Virtualization and Cloud Computing_3"  alt="From Developer to AWS Cloud Specialist - The AWS Certification Learning Paths Explained" show-on-mobile='0'/></div><span class="thumb_resource_txt">From Developer to AWS Cloud Specialist - The AWS Certification Learning Path</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/why-cloud-computing-certification-makes-sense-webinar" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Webinar</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Virtualization and Cloud Computing_4"  alt="Why Cloud Computing certification makes sense" show-on-mobile='0'/></div><span class="thumb_resource_txt">Why Cloud Computing certification makes sense</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/cloud-computing-trends-for-2016-and-beyond-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Virtualization and Cloud Computing_5"  alt="Cloud Computing Trends For 2016 And Beyond - What To Expect" show-on-mobile='0'/></div><span class="thumb_resource_txt">Cloud Computing Trends For 2016 And Beyond - What To Expect</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/what-does-the-future-hold-for-salesforce-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Virtualization and Cloud Computing_6"  alt="What Does The Future Hold For Salesforce?" show-on-mobile='0'/></div><span class="thumb_resource_txt">What Does The Future Hold For Salesforce?</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Enterprise')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Enterprise')}" dir-diag-hov="menu.showFRSMainMenu('Enterprise')"> Enterprise</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Enterprise'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/how-to-measure-effectiveness-corporate-training-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Enterprise_1"  alt="How To Measure The Effectiveness of Corporate Training" show-on-mobile='0'/></div><span class="thumb_resource_txt">How To Measure The Effectiveness of Corporate Training</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/simplilearn-wins-top-online-learning-library-2017-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Enterprise_2"  alt="Simplilearn Wins Top 20 Online Learning Library Companies of 2017" show-on-mobile='0'/></div><span class="thumb_resource_txt">Simplilearn Wins Top 20 Online Learning Library Companies of 2017</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/skill-acquisition-for-digital-age-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Enterprise_3"  alt="Report: Skill Acquisition For The Digital Age" show-on-mobile='0'/></div><span class="thumb_resource_txt">Report: Skill Acquisition For The Digital Age</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/lessons-from-atd-2017-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Enterprise_4"  alt="3 Lessons from ATD 2017 every L&D Pro Should Know" show-on-mobile='0'/></div><span class="thumb_resource_txt">3 Lessons from ATD 2017 every L&D Pro Should Know</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/benefits-continuous-learning-culture-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Enterprise_5"  alt="Building a Continuous Learning Culture – Key Benefits for Businesses" show-on-mobile='0'/></div><span class="thumb_resource_txt">Building a Continuous Learning Culture – Key Benefits for Businesses</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/holiday-digital-marketing-review-and-wrap-up-webinar" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Webinar</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Enterprise_6"  alt="Holiday Digital Marketing Review and Wrap-up" show-on-mobile='0'/></div><span class="thumb_resource_txt">Holiday Digital Marketing Review and Wrap-up</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                                <li class="list" ng-class="{'current_tab':menu.isCurrentFRSMenuItem('Other Segments')}">
                    <a  ng-click="gMCJ.frsMenuClick('category',$event);" ng-class="{'active_course':menu.isCurrentFRSMenuItem('Other Segments')}" dir-diag-hov="menu.showFRSMainMenu('Other Segments')"> Other Segments</a>
                                            <ul class="third-level_nav hidden_cls" ng-style="{'display':(menu.isCurrentFRSMenuItem('Other Segments'))?'block':'none'}" stop-event="mousemove touchend click">
                            <li class="divider_nav">Popular</li>
                                                      <li><a href="https://www.simplilearn.com/top-salesforce-interview-questions-and-answers-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Other Segments_1"  alt="23 Top Questions and Answers for Salesforce Interviews" show-on-mobile='0'/></div><span class="thumb_resource_txt">23 Top Questions and Answers for Salesforce Interviews</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/salesforce-developer-exam-changes-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Other Segments_2"  alt="Changes to the Salesforce Developer Exam: All you need to know" show-on-mobile='0'/></div><span class="thumb_resource_txt">Changes to the Salesforce Developer Exam: All you need to know</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/salesforce-app-builder-study-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Other Segments_3"  alt="Free eBook: Salesforce App Builder Study Guide" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Salesforce App Builder Study Guide</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/how-salesforce-certification-accelerate-career-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Other Segments_4"  alt="How a Salesforce Certification can accelerate Your Career?" show-on-mobile='0'/></div><span class="thumb_resource_txt">How a Salesforce Certification can accelerate Your Career?</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/6-must-know-features-of-salesforce-platform-article" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Article</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Other Segments_5"  alt="6 Cool Must-Know Features of the Salesforce Platform" show-on-mobile='0'/></div><span class="thumb_resource_txt">6 Cool Must-Know Features of the Salesforce Platform</span></a></li>
                                                      <li><a href="https://www.simplilearn.com/salesforce-platform-developer-1-study-guide-pdf" ng-click="gMCJ.frsMenuClick('content',$event)"><label>Ebook</label><div class="thumb_img"><img class="thumb_resource_nav" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-is-placeholder-img="1" id="Other Segments_6"  alt="Free eBook: Salesforce Platform Developer 1 Study Guide" show-on-mobile='0'/></div><span class="thumb_resource_txt">Free eBook: Salesforce Platform Developer 1 Study Guide</span></a></li>
                                                      <li class="resources_btn"><a class="view-course-btn" href="https://www.simplilearn.com/resources">Explore RESOURCES</a></li>
                        </ul>
                                    </li>
                            </ul>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
        <script type="text/javascript">
        var user_params = {};
                                        user_params.AUH_EXPIRE_TIME = '15';
                                    var AUH_EXPIRE_TIME = '15';
                                                user_params.loggedIn = '';
                                    var loggedIn = '';
                                                user_params.training_type_online = '2';
                                    var training_type_online = '2';
                                                user_params.training_type_classroom = '1';
                                    var training_type_classroom = '1';
                                                user_params.training_type_lvc = '3';
                                    var training_type_lvc = '3';
                                                user_params.webEngageId = '~10a5cb751';
                                    var webEngageId = '~10a5cb751';
                                                user_params.pageCategory = 'bundle_index';
                                    var pageCategory = 'bundle_index';
                                                user_params.ipCountryIdValue = '6';
                                    var ipCountryIdValue = '6';
                                                user_params.countryCode = 'IN';
                                    var countryCode = 'IN';
                                                user_params.productTypeId = '2';
                                    var productTypeId = '2';
                                                user_params.bundle_id = '72';
                                    var bundle_id = '72';
                                                user_params.bundle_name = 'Big Data Hadoop Architect';
                                    var bundle_name = 'Big Data Hadoop Architect';
                                                user_params.integrated_program_form = 'https://www.simplilearn.com/webforms/integrated-program-form-details-to-fill';
                                    var integrated_program_form = 'https://www.simplilearn.com/webforms/integrated-program-form-details-to-fill';
                                                user_params.leadCreateAfter = '3600';
                                    var leadCreateAfter = '3600';
                                                user_params.pricing_type = 'oneTime';
                                    var pricing_type = 'oneTime';
                                                user_params.billingTypeId = '1';
                                    var billingTypeId = '1';
                                    	</script>        <script>
        var printGaInConsole = false;

        var apiFromCdnUrl = true;
user_params.nonCdnApiUrl = '//www.simplilearn.com/api/v1?method=';
user_params.cdnApiUrl = '//www.simplilearn.com/api/v1?method=';
user_params.cdnCacheBust = '5';

    if (typeof user_params == 'undefined') {
        user_params = {};
    }

    user_params.overAllDataIsArrayForGa = '';
    if (user_params.overAllDataIsArrayForGa) {
        user_params.overAllDataForGa = null;
    } else {
        user_params.overAllPageActionForGa = '';
        user_params.overAllPageLabelForGa = '';
        user_params.overAllPageValueForGa = '';
    }
    user_params.classRoomDataIsArrayForGa = '';
    if (user_params.classRoomDataIsArrayForGa) {
        user_params.classRoomDataForGa = null;
    } else {
        user_params.classRoomPageActionForGa = '';
        user_params.classRoomPageLabelForGa = '';
        user_params.classRoomPageValueForGa = '';
    }
    user_params.onlineDataIsArrayForGa = '';
    if (user_params.onlineDataIsArrayForGa) {
        user_params.onlineDataForGa = null;
    } else {
        user_params.onlinePageActionForGa = '';
        user_params.onlinePageLabelForGa = '';
        user_params.onlinePageValueForGa = '';
    }

    user_params.conditionForSearch = '';
    user_params.limitOfSearch = '';
    user_params.defaultSearchSettings = '{"default_selected":["course","bundle"],"enable_default_select":1,"form_string":"#\/&item_type=course,bundle"}';
    user_params.defaultPlaceholderImage = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
    user_params.codeForGa = '';
    user_params.referralUrl = '';
    user_params.message = '';
    user_params.genericCoursePageStringForGa = '';
    user_params.noWorkshopFoundFunnelActivate = '';
    user_params.noWorkshopFoundAction = '';
    user_params.noWorkshopFoundLabel = '';
    user_params.gaTagForPage = '';
    user_params.adElementData = [{"event":"adElement","productId":"72","trainingType":"online","productType":2,"category":"Big Data and Analytics","userType":"new","depth":2}];
    user_params.adElementDataCoursePage = '';
    user_params.spriteCssFile = 'https://www.simplilearn.com/static/frontend/css/svgSprite.1504858256.css';
    user_params.linkedInApiKey = '75g24gm5c4yble';
    user_params.googleTagManagerCode = 'GTM-WTL3CF';
    user_params.ssoCookieName = '_sljt';
    user_params.cartCountCookie = 'cart_count_updated';
    user_params.cartCountCookieb2b = 'cart_count_updated_b2b';
    user_params.isB2b = '0';
    user_params.enterpriseCountCookieName = '_entp';
    user_params.sessionCookie = 'PHPSESSID';

    var gaPageCategory = '';
    if(typeof user_params.pricing_type != 'undefined'){
        if(user_params.pricing_type == 'oneTime'){
            gaPageCategory = 'Bundle Page';
        }else if(user_params.pricing_type == 'subscription'){
            gaPageCategory = 'Subscription Page';
        }
    }
</script>

                        <div id="myjwdiv"></div>
<div ng-controller="FooterController" ng-init="init('', '')">



<div class="footer_sticky_wrapper">
    <div class="footer_sticky_inside " dir-sticky-footer="sticky_visible">
        <div class="container">
            <div class="footer_sticky_bar">
                <!--<a href="https://www.simplilearn.com/refer-and-earn" class="how_it_works refer-and-earn" target="_blank">Refer & Earn</a>-->
                <a href="https://www.simplilearn.com/help-and-support" class="how_it_works" target="_blank">Help and Support</a>
                <ul class="live_chat_div">

                                        <li class="callback_link" ng-init='setCallbackStatus()'>
                        <a class="sticky_request_call" href="" ng-click="gaFooterControllerJs.gaForCallbackTry();callRACformAjax(); setCallbackStatus(1);" ng-style='{"visibility":(getCallBackStatus() === 1) ? "hidden" : "visible"}'>
                            <span class="aap_icon call_back_footer"></span>Request a callback
                        </a>
                    </li>
                    
                    		    <li class="call_no_stiky"><span class="aap_icon call_us_on"></span>Call us on <a href="tel:1-800-102-9602">1-800-102-9602</a></li>
                                         										
                    <li class="live_chat_icon" ng-class="((getHowItWorksStatus() === 1) ? 'btn_active_black' : 'btn_active_green')">
                        <a href="" class="support ive_chat_right" ng-click='gaFooterControllerJs.gaForLiveChatTry(); openLiveChat("")' style="cursor: default;">
                            <span class="aap_icon chat_icon_footer gamooga_chat_span hidden_class"></span>
                            <img height="20" width="20" class="gamooga_chat_loading" src="https://www.simplilearn.com/static/frontend/images/rolling.gif"/>
                            <div class="live_text_chat">Live Chat</div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div id="sticky_element" class="call_back_form">
        <div class="container">
            <!-- request a callback content -->
            <div id="request_call_back_form_ajax"></div>
            </div>
        </div>
    </div>

</div>
<div class="popup_country_wrapper mob_drop_query_bg" ng-style="mobDropQueryBg" ng-click="closeMobDropQueryForm()"></div>






<!-- click to call popup start -->

<!-- click to call popup end -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"6711deac76","applicationID":"13571530","transactionName":"ZF0BMktTCEoDBUELW10XNhRQHQ9XBgNNTERbSA==","queueTime":0,"applicationTime":53,"atts":"SBoCRANJG0Q=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
<script type='text/javascript'>
    var staticUrl = "https://www.simplilearn.com/static/";
    var CountryDataJsonUrl = "https://www.simplilearn.com/static/frontend/stubs/CountryData.1503293334.json";
    var AccreditedCoursesUrl = "https://www.simplilearn.com/static/frontend/stubs/AccreditedCourses.1503293334.json";
    var baseUrl = "https://www.simplilearn.com/";
    var baseLmsUrl = "https://lms.simplilearn.com/";
    var baseLmsApiUrl = "https://lms.simplilearn.com/api/v1/";
    var baseApiUrl = "//www.simplilearn.com/api/v1";
    var baseApiUrlNocache = "//www.simplilearn.com/api/v1/index/nocache";
    var googleClientId = "157934410265-3tqcftt9b1501amu8qv0v6i7dnravluj.apps.googleusercontent.com";
    var fbAppId = "507379152611585";
    var isIpad = 0;
    var isIOs = 0;
    var isMobile = "";

    // check for mobile device, not using the 'isMobile' option as it uses userAgent to
    // test the device and on cdn userAgent will not work as it is not passed on to server
    var isMobileDevice = (Math.max(document.documentElement.clientWidth, window.innerWidth || 0) < 768) ? 1 : 0;

    var refresh_cache_param = 'refresh_key_cache';
    var abTestingCourseId = '279';
    var frontendUrl='https://www.simplilearn.com';
            var communityBaseUrl = 'http://community.simplilearn.com/';
    var frontendUrl='https://www.simplilearn.com';
    var frontendCanonicalUrl='https://www.simplilearn.com';
</script>
<script type="text/javascript">
var locator_data;
    var locator_data = {"city_id":"47","country_id":"6","region_name":"Karnataka","region_code":null,"isCapital":null,"name":"Bangalore","orderNo":null,"status":"1","longitude":"12.976230","latitude":"77.603290","about_city":"Bangalore, the capital of Karnataka is popularly known as the \u2018Silicon Valley of India\u2019 with India\u2019s major IT firms located in Electronic City, ITPL Whitefield, Embassy Golf Links Tech Park, Manyata Tech Park and Bagmane Tech Park. The city experience flourishing economy with information technology, computer software, bio-technology, Nano-technology, research, aviation, business process outsourcing, knowledge process outsourcing, manufacturing, electronics, and telecommunication being its active industries. Bangalore has also witnessed the growth of many startup companies over the years. Project managers, IT security professionals, IT service professionals have ample scope of career growth in the city. PMP, PRINCE2, Six Sigma, Cisco and Microsoft certifications are the most demanded credentials in the city.","location_time_zone":"Asia\/Kolkata","nearByCities":null,"workshopCities":null,"isUpdate":true,"callingCode":"91","countryCode":"IN","raw_flag_data":"data:image\/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFwSURBVHja7JZLL0NRFIW\/cx+9pYrSEpV4pImoSJRGOmBKTPwR7c8x8QNEIjESicfEDENRI6UjrUsZ3FOVXu29BgxMT0M7YE3OnpxkZe+11t7C30rfA3FA0l6EgZLxVfDtbSsJjQ7jn4CBW+0wgUCP+q+mD90GDIdAF2DXQLqftSKE75QcJQd4HvT18FKWnJ3eUXebZJYnGE1EwXFAKE1VCt\/3HVULPjy5bO89MBQLYgY0CreS9dUYczPK3ZQtiXB354qJ2Bvx\/hraW4XFJBzuX7fHBfX6O9GogWWZZLMnbGwcYZo6yWQv+fxjCyJUhGWZOI5POOyRy6WpVl10XVAsvrK2NvX7BABWVxIcH5SZnR5DCLi8qJBZGicQ0FtwQbOhLEI0ncLNMxfn97y7Hqn5YVILI4AHnq\/mgrnNSWUCjYbH4GAXkUgQIUBKF9uuoWkCoRYF0ri0i61F2PMPJeFAyPrfhn99HX\/eguEO3YTyYwA5xXRn1+PnWgAAABZ0RVh0QXV0aG9yAElQMkxvY2F0aW9uLmNvbX+XuQ4AAAAASUVORK5CYII=","countryTimeZone":"Asia\/Kolkata","country_name":"India","currency_id":"1","symbol":"Rs.","currency_code":"INR","world_region":"INR","support_number":"1-800-102-9602","cluster_id":"0","clickToCallNumber":"1-800-102-9602","isTollFree":"1","city_name":"Bangalore"};

document.onkeydown = function (event) {

	if (!event) { /* This will happen in IE */
		event = window.event;
	}

	var keyCode = event.keyCode;

	if (keyCode == 8 &&
		((event.target || event.srcElement).tagName != "TEXTAREA") &&
		((event.target || event.srcElement).tagName != "INPUT")) {

		if (navigator.userAgent.toLowerCase().indexOf("msie") == -1) {
			event.stopPropagation();
		} else {

			event.returnValue = false;
		}

		return false;
	}
};


var countryDataIe = null;
var accreditorDataIe = null;
var locationDataIe = null;

</script>
        <script type='text/javascript' src='https://www.simplilearn.com/static/frontend/js/limitcombine.1504858257.js'></script>
    <script type="text/javascript">jwplayer.key = "7xtnPT+FnDohP5jFFmwmofs6JBgY+JW9uj16UVBKEIc=";</script>
<script type='text/javascript'>
    var scroll_running_status = 0;
</script>
<script id="_webengage_script_tag" type="text/javascript"></script>
<script type="text/javascript">
    	if (window.addEventListener)
    		window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
    
</script>

<script type="text/javascript">
    var _taq = {"id":"a6ac3e6e-c86b-4536-aedd-105a3df85b16","events":[],"handlers":[]};
</script>
    <script type="text/javascript">
        var ilt_course_name = (user_params.course_name!='undefined')?user_params.course_name:'undefined course name'
        _taq.handlers.push(['ready',function(){
            _taq.events.push(['ilt_available',{'course_name':ilt_course_name}]);
        }]);
    </script>


<script type="text/javascript">
    // Script to change every <a> tag to open in new page if link is to external
    function externalLinks() {
        for(var c = document.getElementsByTagName("a"), a = 0;a < c.length;a++) {
          var b = c[a];
          b.getAttribute("href") && b.hostname !== location.hostname && (b.target = "_blank")
        }
    };
    externalLinks();
</script>
<script>var frs_menu_data={"Big Data and Analytics":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/data-science-interview-questions-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Data-Science-vs.-Big-Data-vs--Thumbnail.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/big-data-applications-in-industries-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/unlocking-data-science_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/how-facebook-is-using-big-data-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/what-is-machine-learning-and-why-it-matters-article-th.jpg"],"Project Management":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Career-in-Project-Management-thumbnail.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_PMP_Interview_questions_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/can-i-get-job-with-pmp-certification-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_PMP_guide_changes_2_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Fail_PMP_A_Second_Time_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/DevOps_Revolution_th.jpg"],"Digital Marketing":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/SuperBowl_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/real-impact-social-media-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/how-to-become-a-digital-marketing-specialist-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/mobile-marketing-essentials-guide-pdf-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/web-analytics-tool-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_Content_Marketing_trends_th.jpg"],"IT Security Management":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/cyber-security-interview-questions-and-answers-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Smartphone_Fingerprint_Readers_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_New_CISSP_cert_guide_2_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/IT_security_Architect_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/top-ethical-hacking-certifications-to-consider-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_Ethical_hacking_salary_2_th.jpg"],"Career Fast-track":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_Top_IT_Skills_2016_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/leadership-vs-management-difference-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/accenture_techcast_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/6_trends_shaking_up_IT_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Information_Age_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_2016_high_paying_certs_2_th.jpg"],"Agile and Scrum":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/agile-scrum-master-interview-questions-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_Mandla_customer_story_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_Scrum_guide_2_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_testimonial_article_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_Agile_for_teams_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/amitKittur_th.jpg"],"IT Service and Architecture":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/IT_Service_Management_Trends_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/TOGAF_Internet_of_Things_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_ITIL_pocket_guide_2_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Plan_Enterprise_Architecture_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_ITIL-Foundation-to-ITIL-Expert_2_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/togaf-9-1-it-enterprise-architects-quick-start-guide-pdf-th.jpg"],"Inside Simplilearn":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/getting-agile-to-unlock-your-teams-hidden-potential-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/data-analyst-vs-data-scientist-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/5-Free-Agile-Tools-For-Any-Project-Manager-Th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/ICC-trophy_engagographic-thumbnail-90x90.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/overview-of-customer-relationship-management-crm-market-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Social_Selling_vs_Marketing_Podcast_th.jpg"],"Virtualization and Cloud Computing":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/importance-of-cloud-certifications-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_FRS_Image_AWS_Google_cloud_th.png","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/developer-to-aws-cloud-specialist-learning-path-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/COVER-IMAGE_Why-Cloud-Computing-certification-makes-sense_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Cloud_Computing_trends_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/What-Does-The-Future-Hold-For-Salesforce_TH.jpg"],"Enterprise":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/CoverPage_Effectiveness-of-Corporate-training-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Top-Online-Learning-Library_TH.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Skill-Aquisition_TH.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/3-Lessons-from-ATD-2017-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Continuous-Learning_TH.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/SEO-Holiday-Digital-Marketing-Review-and-Wrap-up_2_th.jpg"],"Other Segments":["https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/top-salesforce-interview-questions-and-answers-article-th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Salesforce_Developer_Exam_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_Salesforce_app_builder_2_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/How_A_Salesforce_Certification_Can_Accelerate_your_Career_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/Features_of_salesforce_th.jpg","https:\/\/www.simplilearn.com\/ice9\/free_resources_article_thumb\/New_eBook_Image_Salesforce_platform_developer_2_th.jpg"]}</script></html>


				</div>
			</div>
		</div>
	</div>
</header>
<div class="<?php echo hestia_layout(); ?>
	<?php
	$class_to_add = '';
	if ( class_exists( 'WooCommerce' ) && ! is_cart() ) {
		$class_to_add = 'blog-post-wrapper';
	}
	?>

	<?php //get_footer(); ?>
