<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<title>Cafe - Gestricktes DROPS Tuch in ”Delight” und “Fabel” mit Streifen und Wellenrand. - Free pattern by DROPS Design</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XQ4HWFJaGwIEUFVXAgYD"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,-1!==o.indexOf("dev")&&(s.dev=!0),-1!==o.indexOf("nr_dev")&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f?f.apply(this,a(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),s.on(m,function(){this.bstStart=Date.now()}),s.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(17)(a),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on(d+"-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",s)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;d>r;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||10>p)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;d>a;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(t,e){return function(){o(t,[(new Date).getTime()].concat(a(arguments)),null,e)}}var o=t("handle"),i=t(15),a=t(16);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var s=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(s,function(t,e){newrelic[e]=r(f+e,"api")}),i(c,function(t,e){newrelic[e]=r(f+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),o("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;s>c;c++)a[c].apply(i,r);var u=f[w[n]];return u&&u.push([v,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",w[n]=e,e in f||(f[e]=[])})}var m={},w={},v={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return v}function i(){return new r}var a="nr@context",s=t("gos"),c=t(15),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!g++){var t=y.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(w,function(e,n){t[e]||(t[e]=n)});var n="https"===m.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(15),f=window,u=f.document,d="addEventListener",l="attachEvent",p=f.XMLHttpRequest,h=p&&p.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:p,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(12);var m=""+location,w={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-952.min.js"},v=p&&h&&h[d]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:m,features:{},xhrWrappable:v};u[d]?(u[d]("DOMContentLoaded",i,!1),f[d]("load",r,!1)):(u[l]("onreadystatechange",o),f[l]("onload",r)),s("mark",["firstbyte",a()],null,"api");var g=0},{}]},{},["loader",2,10,4,3]);</script>
<meta name="viewport" content="initial-scale=1">
	<meta name="keywords" content="Zubehör, Decke, Alpaca, Aran, Babydecke, Tasche, Mütze, Baskenmütze, Bikini, Decke, Bolero, Haube, Schuhe, Schlafsack, Zopfmuster, Zopf, Jäckchen, Mütze, Umhang, Kurzer Umhang, Cardigan, Weihnachten, Mantel, Kragen, Kapuze, häkeln, gehäkelt, Hund, Anzug, Ostern, Eskimo, Fabel, Fair Isle, Filz, gefilzt, filzen, Fingerlose Handschuhe, Blumen, gratis, kostenlose Anleitungen, Handschuhe, Handtasche, Hut, Strinband, Haube, Kapuzenpulli, Jacke, Pulli, Karisma, gestrickt, gestricktes Muster, Spitze, Stulpen, Leggins, Marius, Handschuhe, Mohair, Kragen, norwegisch, Hosen, Patchwork, Muster, Kissen, Polo, Poncho, Blumentopf, Pulli, Pulswärmer, Geldbeutel, Raglan, Halstuch, Hanschuhe aus Selbu, Setesdal, Schal, Schuhe, Kurze Ärmel, Seelenwärmer, Rock, ärmellos, Hausschuhe, Socken, Strümpfe, Stola, Babydecke, Sommer, Pulli, tank top, Strumpfhosen, Oberteil, Tricot, Schlauchsocken, Tunika, Weste, Weste, Wollhose, Wollsocken, Umschlag, Pulswärmer, XXXL, Garn" />
		<meta name="description" content="Die weltgrösste Handarbeitsseite mit Tausenden von kostenlosen Strick- und Häkelanleitungen, den besten Preisen für edle Wolle und Basisqualitäten, Lehrvideos, Farbkarten, qualitativ hochstehende Wolle, Alpaca, Seide, Baumwolle und Mohairmischungen, Nadeln und Knöpfe..." />
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,latin-ext,greek-ext,greek' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Parisienne&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sacramento&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- jQuery -->
<script src="/js/jquery.min.v1.8.3.js"></script>
<!-- Follow Us -->
<link rel="stylesheet" type="text/css" href="/css/social-connect.css" media="screen" />
<!--[if IE 9]><style type="text/css">...</style><![endif]-->
<!-- Share This --> 
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "94a9799a-8751-43e6-8815-6f0a86c6ed02", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
<!-- end Share This -->
<!-- Google Analytics --> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7505077-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- end Google Analytics -->

<script type="text/javascript">
function centerwindowcopyright()
{
 var ie=(document.all);
 var ns=(document.layers);
 var ns6=(document.getElementById("centerwindowcopyright") && !ie);

  if(ie)
 {
  var xMax = screen.width - 600, yMax = screen.height - 370;
 }
 if(ns)
 {
  var xMax = window.outerWidth - 600, yMax = window.outerHeight - 370;
 }
 if(ns6)
 {
  var xMax = self.outerWidth - 600, yMax = self.outerHeight - 370;
 }
 
 var xOffset = (xMax)/2, yOffset = (yMax)/2;
 window.open('/includes/copyright.php?cid=9','','width=600,height=400,screenX='+xOffset+',screenY='+yOffset+',top='+yOffset+',left='+xOffset+'');
}
</script>

</head>

<body>

<!--start #wrapper-->
<div id="wrapper">

	<div class="header_top">
		
		<div class="col-l">		
			<a href="/new-collection.php?cid=9">DROPS Herbst & Winter 2016/17</a> · 
			<a href="/newsletter.php?lang=de">Abonnieren!</a>		
		</div>
		
		<div class="col-s resp_hidden">		
			<script type="text/javascript">
				function go_homepage()
				{
					location=document.forms[0].gohomepage.value;
				}
			</script>
		
			<form>
				<select id="gohomepage" onchange="go_homepage()">
					<option value="">DROPS in your language:</option>
					<option value="http://www.garnstudio.com/lang/cz/kategori_oversikt.php">&#269;e&#353;tin&#283;</option>
					<option value="http://www.garnstudio.com/lang/dk/kategori_oversikt.php">Dansk</option>
					<option value="http://www.garnstudio.com/lang/de/kategori_oversikt.php">Deutsch</option>
					<option value="http://www.garnstudio.com/lang/ee/kategori_oversikt.php">Eesti keeles</option>
					<option value="http://www.garnstudio.com/lang/en/kategori_oversikt.php">English (UK/cm)</option>
					<option value="http://www.garnstudio.com/lang/us/kategori_oversikt.php">English (US/in)</option>
					<option value="http://www.garnstudio.com/lang/es/kategori_oversikt.php">Español</option>
					<option value="http://www.garnstudio.com/lang/fr/kategori_oversikt.php">Fran&#231;ais</option>
					<option value="http://www.garnstudio.com/lang/is/kategori_oversikt.php">Íslensku</option>
					<option value="http://www.garnstudio.com/lang/it/kategori_oversikt.php">Italiano</option>
					<option value="http://www.garnstudio.com/lang/hu/kategori_oversikt.php">Magyarul</option>
					<option value="http://www.garnstudio.com/lang/nl/kategori_oversikt.php">Nederlands</option>
					<option value="http://www.garnstudio.com/lang/no/kategori_oversikt.php">Norsk</option>
					<option value="http://www.garnstudio.com/lang/pl/kategori_oversikt.php">Polsku</option>
					<option value="http://www.garnstudio.com/lang/pt/kategori_oversikt.php">Português</option>
					<option value="http://www.garnstudio.com/lang/fi/kategori_oversikt.php">Suomi</option>
					<option value="http://www.garnstudio.com/lang/se/kategori_oversikt.php">Svenska</option>
				</select>
			</form>
		</div>		
	
	</div>

	<div class="header_banner">
	</div><link rel="stylesheet" href="http://www.garnstudio.com/js/menu/superfish.css" media="screen">
<script src="http://www.garnstudio.com/js/menu/hoverIntent.js"></script>
<script src="http://www.garnstudio.com/js/menu/superfish.js"></script>
<script>

(function($){ //create closure so we can safely use $ as alias for jQuery

	$(document).ready(function(){

		// initialise plugin
		var example = $('#example').superfish({
			//add options here if required
		});

		// buttons to demonstrate Superfish's public methods
		$('.destroy').on('click', function(){
			example.superfish('destroy');
		});

		$('.init').on('click', function(){
			example.superfish();
		});

		$('.open').on('click', function(){
			example.children('li:first').superfish('show');
		});

		$('.close').on('click', function(){
			example.children('li:first').superfish('hide');
		});
	});

})(jQuery);


</script>
<div class="header_menu">
	<ul class="sf-menu" id="example">
		<li><a href="/lang/de/kategori_oversikt.php">Startseite</a></li>		
		<li>
			<a href="#">Kostenlose Anleitungen</a>
			<ul>
				<li><a href="/my-favorites.php?cid=9">Meine Favoriten</a></li>
				<li><a href="/search.php?lang=de">Neuste Anleitungen</a></li>				
				<li>
					<a href="#">Kategorien</a>
					<ul>
						<li><a href="/search.php?c=1&lang=de">Damen</a></li><li><a href="/search.php?c=3&lang=de">Baby</a></li><li><a href="/search.php?c=2&lang=de">Kinder</a></li><li><a href="/search.php?c=4&lang=de">Herren</a></li><li><a href="/search.php?c=8&lang=de">Ponchos & Schal</a></li><li><a href="/search.php?c=11&lang=de">Accessories</a></li><li><a href="/search.php?c=12&lang=de">Crochet</a></li><li><a href="/search.php?c=7&lang=de">Norweger</a></li><li><a href="/search.php?c=13&lang=de">Felted</a></li><li><a href="/search.php?c=5&lang=de">Interieur</a></li><li><a href="/search.php?c=14&lang=de">Accessories Baby & Children</a></li><li><a href="/search.php?c=6&lang=de">Tiere & Spielsachen</a></li><li><a href="/search.php?c=10&lang=de">Basisanleitungen</a></li><li><a href="/search.php?c=9&lang=de">Festtage</a></li><li><a href="/search.php?c=21&lang=de">Socken & Hausschuhe</a></li>					</ul>
				</li>
				<li>				
					<a href="#">Hefte</a>
					<ul>
						<li><a href="/catalogues.php?type=1&lang=de">DROPS</a></li>
						<li><a href="/catalogues.php?type=2&lang=de">DROPS Children</a></li>
						<li><a href="/catalogues.php?type=3&lang=de">DROPS Baby</a></li>
						<li><a href="/search.php?t=4&lang=de">DROPS Extra</a></li>
						<li><a href="/includes/corrections.php?cid=9" onclick="window.open(this.href,'','width=600,height=550,scrollbars=yes,toolbar=no,location=no,menubar=no,status=no,resizable=yes'); return false;">Korrekturen</a></li>
					</ul>
				</li>				
				<li><a href="/inspirations.php?lang=de">Hier finden Sie Inspirationen!</a></li>
								<li><a href="/new-collection.php?cid=9">Herbst & Winter 2016/17</a></li>
				<li><a href="/latestcatalogues.php?lang=de">Frühling & Sommer 2016</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">Garne</a>
			<ul>
				<li><a href="/yarns.php?cid=9">Alle Garne</a></li>
				<li><a href="/colours.php?lang=de">Alle Farben</a></li>
				<li><a href="/yarn-groups.php?cid=9">Garngruppen A - F</a></li>
				<li><a href="/yarn-groups.php?d=1&cid=9">Auslaufgarne</a></li>
				<li><a href="/pricelist.php?action=deals&cid=9" class="red">DROPS Deals</a></li>
				<li><a href="/pricelist.php?cid=9">DROPS Preise</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">Nadeln & mehr</a>
			<ul>
				<li><a href="/needles.php?cid=9">Nadeln & Häkelnadeln</a></li>
				<li><a href="/needles.php?browse=c&id=2&cid=9">Sets</a></li>
				<li><a href="/needles.php?browse=c&id=1&cid=9">Zubehör</a></li>
				<li><a href="/buttons.php?cid=9">Knöpfe</a></li>
			</ul>
		</li>
		
		<li><a href="/school.php?cid=9">Tipps & Hilfe</a></li>
		
		<li><a href="/findastore.php?lang=de">Einen Laden finden!</a></li>
		
		<li>
			<a href="#">Mehr</a>
			<ul>
				<li><a href="/about.php?cid=9">Über uns</a></li>
				<!---->
				<li><a href="/newsletter.php?lang=de">Newsletter</a></li>
				<li><a href="/contact.php?cid=9">Kontaktieren Sie uns</a></li>
				<li><a href="/wholesale.php?cid=9">DROPS Händler werden!</a></li>
				<li><a href="/store/" target="_blank">Händlerseiten</a></li>
			</ul>
		</li>
		
	</ul>

</div>		<!-- Printing buttons -->
		<script type="text/javascript">
		//<![CDATA[
		function printpicture()
		{
			window.open('/includes/pattern-printphoto.php?id=7350&cid=9','jav','width=600,height=600,resizable=no,scrollbars=yes');
		}
		function printad()
		{
			var ie=(document.all);
			var ns=(document.layers);
			var ns6=(document.getElementById("printadcampaignid") && !ie);

		  if(ie)
			{
				var xMax = screen.width - 600, yMax = screen.height - 600;
			}
			if(ns)
			{
				var xMax = window.outerWidth - 600, yMax = window.outerHeight - 600;
			}
			if(ns6)
			{
				var xMax = self.outerWidth - 600, yMax = self.outerHeight - 600;
			}
			
			var xOffset = (xMax)/2, yOffset = (yMax)/2;
			window.open('/includes/pattern-printad.php?id=7350&cid=9','','width=600,height=600,screenX='+xOffset+',screenY='+yOffset+',top='+yOffset+',left='+xOffset+'');
		}
		//]]>
		</script>
		<script type="text/javascript" src="/js/jquery.js"></script>
		<!-- Toggle tabs -->
		<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="/js/jquery-ui.min.js"></script>
		<!-- end Toggle tabs -->
		<script>
		$(document).ready(function() {
		$("#tabs_yarn").tabs();
		});
		
		$(document).ready(function(){
			$('.orderb').click(function(e){
				e.preventDefault();
				$(this).closest('li').find('.results').slideToggle();
			});
		});
		</script>
		
		<!-- Photo Slider -->	
			<!-- GlassCase stylesheet -->                                        
			<link rel="Stylesheet" type="text/css" href="/css/glasscase.min.css"/>
			<!-- Modernizr a JavaScript library that detects HTML5 and CSS3 features in the user’s browser -->
			<script src="/js/modernizr.custom.js" type="text/javascript"></script>
			<!-- GlassCase plugin requires jQuery 1.7+ -->
			<script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script>
			<!-- GlassCase plugin's JS script file -->
			<script src="/js/jquery.glasscase.min.js" type="text/javascript"></script>
			<script>
				jQuery.noConflict();
			</script>

		<!-- Share this -->		
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>		
				
		<div class="hidden"><img src="http://www.garnstudio.com/drops/mag/167/17/17-1.jpg" title="Free Pattern" alt="Free Pattern" /></div>
		
		<div id="content_wrapper">

			<div class="col-s resp_hidden">
			
				<div class="pattern_left">
				
					<div class="fav-add">
						<a href="/favorite.php?patternid=7350&cid=9">
							<img src="/img/icon/fav-add.png" alt="" title="add to favorites" />
						</a>
					</div>

					<ul id="glasscase" class="gc-start">
											<li>
							<img src="http://www.garnstudio.com/drops/mag/167/17/17-2.jpg" title="Free Pattern" alt="Free Pattern" />
						</li>
												<li>
							<img src="http://www.garnstudio.com/drops/mag/167/17/17b-2.jpg" title="Free Pattern" alt="Free Pattern" />
						</li>
													<li>
								<img src="http://www.garnstudio.com/drops/mag/167/17/17-lp.jpg" title="Free Pattern" alt="Free Pattern" />
							</li>
												</ul>
					
					<div class="select_lang">
					
						Andere Sprache:
						
												
						<script type="text/javascript">
							function go()
							{
								location=document.forms[1].gowhere.value;
							}
						</script>
					
						<form>
							<select id="gowhere" onchange="go()">
								<option value="/pattern.php?id=7350">Deutsch</option>
								<option value="/pattern.php?id=7350&cid=24">&#268;esky</option><option value="/pattern.php?id=7350&cid=3">Dansk</option><option value="/pattern.php?id=7350&cid=29">Eesti keel</option><option value="/pattern.php?id=7350&cid=19">English (UK/cm)</option><option value="/pattern.php?id=7350&cid=17">English (US/in)</option><option value="/pattern.php?id=7350&cid=23">Español</option><option value="/pattern.php?id=7350&cid=8">Français</option><option value="/pattern.php?id=7350&cid=14">&#205;slenska</option><option value="/pattern.php?id=7350&cid=4">Italiano</option><option value="/pattern.php?id=7350&cid=22">Magyar</option><option value="/pattern.php?id=7350&cid=7">Nederlands</option><option value="/pattern.php?id=7350&cid=1">Norsk</option><option value="/pattern.php?id=7350&cid=5">Polski</option><option value="/pattern.php?id=7350&cid=28">Português</option><option value="/pattern.php?id=7350&cid=11">Suomi</option><option value="/pattern.php?id=7350&cid=12">Svenska</option><option value="/pattern.php?id=7350&cid=13">English (UK/cm), Greece</option><option value="/pattern.php?id=7350&cid=26">English (UK/cm), Lithuania</option><option value="/pattern.php?id=7350&cid=36">English (UK/cm), Romania</option><option value="/pattern.php?id=7350&cid=30">English (UK/cm), Slovakia</option><option value="/pattern.php?id=7350&cid=6">English (UK/cm), Slovenia</option>							</select>
						</form>						
					</div>
					
				</div>
				
			</div><!-- end col-s -->
							
			<div class="col-l">
			
				<div class="pattern_header">
								
					<div class="ptitle">
				
						<h1>
							Cafe <small>by DROPS Design</small>						
						</h1>	
						
					</div>
					
					<div class="pprice">
															<a href="/includes/pattern-averageprice.php?cid=9" onclick="javascript:window.open(this.href,'jav','width=600,height=300,resizable=no,scrollbars=yes'); return false;">
											<p class="from">von:</p>
											<p class="cost1">
											10.40&#8364;											</p>
										</a>
															</div><!-- end .pprice -->
					
					<h4 class="bb">Gestricktes DROPS Tuch in ”Delight” und “Fabel” mit Streifen und Wellenrand.</h4>					
					
					<div class="ppic">
						<ul id="glasscase2" class="gc-start">
													<li>
								<img src="/drops/mag/167/17/17-2.jpg" alt="" />
							</li>
														<li>
								<img src="/drops/mag/167/17/17b-2.jpg" alt="" />
							</li>
															<li>
									<img src="/drops/mag/167/17/17-lp.jpg" alt="" />
								</li>
														</ul>
						<div class="clear"></div>
					</div>					
											
					<div class="share_this">
						<span class='st_email'></span>
						<span class='st_twitter'></span>
						<span class='st_facebook'></span>
						<span class='st_pinterest'></span>			
					</div>	
					
										
					<script type="text/javascript">
						function go_mobile()
						{
							location=document.forms[2].gowhere_mobile.value;
						}
					</script>
				
					<form class="pattern_lang">
						<label>Andere Sprache:</label>
						<select id="gowhere_mobile" onchange="go_mobile()">
							<option value="/pattern.php?id=7350">Deutsch</option>
							<option value="/pattern.php?id=7350&cid=24">&#268;esky</option><option value="/pattern.php?id=7350&cid=3">Dansk</option><option value="/pattern.php?id=7350&cid=29">Eesti keel</option><option value="/pattern.php?id=7350&cid=19">English (UK/cm)</option><option value="/pattern.php?id=7350&cid=17">English (US/in)</option><option value="/pattern.php?id=7350&cid=23">Español</option><option value="/pattern.php?id=7350&cid=8">Français</option><option value="/pattern.php?id=7350&cid=14">&#205;slenska</option><option value="/pattern.php?id=7350&cid=4">Italiano</option><option value="/pattern.php?id=7350&cid=22">Magyar</option><option value="/pattern.php?id=7350&cid=7">Nederlands</option><option value="/pattern.php?id=7350&cid=1">Norsk</option><option value="/pattern.php?id=7350&cid=5">Polski</option><option value="/pattern.php?id=7350&cid=28">Português</option><option value="/pattern.php?id=7350&cid=11">Suomi</option><option value="/pattern.php?id=7350&cid=12">Svenska</option><option value="/pattern.php?id=7350&cid=13">English (UK/cm), Greece</option><option value="/pattern.php?id=7350&cid=26">English (UK/cm), Lithuania</option><option value="/pattern.php?id=7350&cid=36">English (UK/cm), Romania</option><option value="/pattern.php?id=7350&cid=30">English (UK/cm), Slovakia</option><option value="/pattern.php?id=7350&cid=6">English (UK/cm), Slovenia</option>						</select>
					</form>						
					
					<a href="/favorite.php?patternid=7350&cid=9">
						<div class="pattern_fav">Add to favorites</div>
					</a>
					
						<div id="tabs_yarn" class="yarn_info">
						
							<div class="tabmenu">
						
								<ul>
									<li><a href="#tabs-1">Material</a></li>						
									<li><a href="#tabs-3">Videos</a></li>								</ul>
								
							</div>
							
							<div class="tab" id="tabs-1">
							
								<div class="pattern_intro">
									DROPS 167-17<br />
									
									<p>DROPS Design: Modell Nr. de-153<br />
Garngruppe A<br />
----------------------------------------------------------<br />
Maße: Höhe in der Mitte: ca. 50 cm. Breite ganz oben: ca. 150 cm. <br />
Material:<br />
DROPS DELIGHT von Garnstudio<br />
100 g Farbe Nr. 02, pflaume/beige/erika<br />
Sowie:<br />
DROPS FABEL von Garnstudio<br />
100 g Farbe Nr. 100, natur<br />
<br />
BITTE BEACHTEN: Wenn das Tuch einfarbig gestr werden soll, reichen 150 g Delight oder Fabel.<br />
<br />
DROPS RUNDNADEL (80 cm) Nr. 3,5 – oder die benötigte Nadelstärke, um folgende Maschenprobe zu erhalten: 10 x 10 cm = 23 M x 30 R glatt re.</p>
									
									<h4><a href="#pattern_content">(Weiter zu Anleitung ...)</a></h4>
									
								</div>
								
								<div class="pattern_yarns">
								
									<p><b>DROPS Delight:</b> 
									<a href="/yarn.php?id=92&cid=9">Farbkarte</a> / <a href="/yarns.php?ygid=2&cid=9">Alternative Garne (Garngruppe A)</a></p>
									<p><b>DROPS Fabel:</b> 
										<a href="/yarn.php?id=72&cid=9">Farbkarte</a> / <a href="/yarns.php?ygid=2&cid=9">Alternative Garne (Garngruppe A)</a></p>									
								</div>
								
								<div class="pattern_pm">
								
									<a class="pm_button print" href="javascript:printad();">Drucken: Anleitung</a>
									
									<a class="pm_button print" href="javascript:printpicture();">Bild</a>
									
									<a class="pm_button comm" href="/includes/pattern-comments.php?id=7350&cid=9" onclick="javascript:window.open(this.href,'jav','width=600,height=600,resizable=no,scrollbars=yes'); return false;">Kommentare (6)</a>
								
								</div>								
								
							</div>
													
															<div class="tab" id="tabs-3">
								<h3 class="bb">Hier finden Sie einige hilfreiche Videotutorials!</h3>
								<table class="pattern_vid">
																	<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=208" target="_blank"><img src="/img/video/32239256.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=208" target="_blank">Abnahme – einfacher Überzug (psso)</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=14" target="_blank"><img src="/img/video/4961785.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=14" target="_blank">Abnehmen 2 – 2 Maschen re zusammenstricken</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=234" target="_blank"><img src="/img/video/49639937.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=234" target="_blank">Abnehmen: Doppelte Abnahme mit Überzug</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=2" target="_blank"><img src="/img/video/4896959.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=2" target="_blank">Anschlag</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=12" target="_blank"><img src="/img/video/4961688.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=12" target="_blank">Aufnehmen 5 – Aufnahme mit einem Umschlag</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=945" target="_blank"><img src="/img/video/162510988.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=945" target="_blank">Diagramm A.1, A.2, A.3 und A.4  in DROPS 167-17</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=31" target="_blank"><img src="/img/video/5092616.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=31" target="_blank">Glatt rechts</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=118" target="_blank"><img src="/img/video/7208754.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=118" target="_blank">Kante mit doppeltem Faden</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=17" target="_blank"><img src="/img/video/4961980.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=17" target="_blank">Kraus rechts / Krausrippen</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=5" target="_blank"><img src="/img/video/4899304.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=5" target="_blank">Linke Maschen (li)</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=6" target="_blank"><img src="/img/video/4899785.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=6" target="_blank">Linke Maschen (li) - UK/US</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=7" target="_blank"><img src="/img/video/4900039.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=7" target="_blank">Linke Maschen (li) – Norwegische Art</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=167" target="_blank"><img src="/img/video/11367420.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=167" target="_blank">Randmaschen in Krausrippe</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=125" target="_blank"><img src="/img/video/7540175.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=125" target="_blank">Rechte Maschen  -  US und englische Art</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=3" target="_blank"><img src="/img/video/4898569.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=3" target="_blank">Rechte Maschen (re)</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=45" target="_blank"><img src="/img/video/6286470.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=45" target="_blank">Rundnadel – glatt rechts in Hin- und Rückreihen</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=121" target="_blank"><img src="/img/video/7290478.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=121" target="_blank">Streifen</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=182" target="_blank"><img src="/img/video/4961688.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=182" target="_blank">Umschlag</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=32" target="_blank"><img src="/img/video/5092721.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=32" target="_blank">Verdrehte Masche rechts</a></td>
									</tr>
																		<tr>
										<td class="img"><div class="play"><img src="/img/icon/video-thumb-play_sm.png" alt="" /></div><a href="/lang/de/video.php?id=66" target="_blank"><img src="/img/video/6494504.jpg" alt="" /></a></td>
										<td><a href="/lang/de/video.php?id=66" target="_blank">Verkürzte Reihen - Grundlagen</a></td>
									</tr>
																	</table>
								<p>Finden Sie keinen passenden Video? <a href="/lang/de/video.php" target="_blank">Hier alle Videos anzeigen!</a>.</p>
								</div>
															
						</div>
				
					</div><!-- end pattern_header -->
					
				</div><!-- end .right -->
				
									<div class="yarn_order from_pattern">
						
						<div id="tabs_prices" class="yarn_prices">
						
							<a name="prices"></a>
							
							<div class="tabmenu">
								<ul class="pricelist_tabs">
																					<li class="de current">Deutschland</li>
												<li class="at"><a href="/pattern.php?id=7350&cid=21">Österreich</a></li>
												<li class="ch"><a href="/pattern.php?id=7350&cid=10">Schweiz</a></li>
																				</ul>
							</div><!--end #tabmenu -->
							
							<!-- country -->
							<div class="tab" id="tabs-5">
							
								<div class="yarn_pricelist">
								
									<div class="row header">
										<div class="yn">Garntyp</div>				
										<div class="ym"><a href="/includes/maxprice.php?cid=9" onclick="javascript:window.open(this.href,'jav','width=500,height=250,resizable=yes,scrollbars=yes'); return false;" class="info">Maxpreis</a></div>
										<div class="yd">Deals von</div>
										<div class="yp"></div>
									</div><!--end .row header -->
							
																				<ul>
												<li>
													<div class="row">
														<div class="yn">
															DROPS DELIGHT PRINT (50g)
																													</div>
														<div class="ym">
														2.95 EUR														</div><!--end .ym -->
														<div class="yd">
															n/a														</div>
														<div class="yp">
															<a href="http://www.lanade.de/drops/drops-delight" onclick="_gaq.push(['_trackEvent', 'OrderNow', '32034 - Lanade', 'Pattern']);" target="_blank">Bestellen															</a>
														</div>
													</div><!--end .row header -->
												</li>
											</ul>
																						<ul>
												<li>
													<div class="row">
														<div class="yn">DROPS FABEL UNI COLOUR (50g)
																												</div>
														<div class="ym">
														2.25 EUR														</div><!--end .ym -->
														<div class="yd">
															n/a														</div>
														<div class="yp">
															<a href="http://www.lanade.de/drops/drops-fabel" onclick="_gaq.push(['_trackEvent', 'OrderNow', '32034 - Lanade', 'Pattern']);" target="_blank">Bestellen															</a>
														</div>
													</div><!--end .row header -->
												</li>
											</ul>
																						<ul>
												<li>
													<div class="row">
														<div class="yn">DROPS FABEL PRINT (50g)
																												</div>
														<div class="ym">
														2.45 EUR														</div><!--end .ym -->
														<div class="yd">
															n/a														</div>
														<div class="yp">
															<a href="http://www.lanade.de/drops/drops-fabel" onclick="_gaq.push(['_trackEvent', 'OrderNow', '32034 - Lanade', 'Pattern']);" target="_blank">Bestellen															</a>
														</div>
													</div><!--end .row header -->
												</li>
											</ul>
																						<ul>
												<li>
													<div class="row">
														<div class="yn">DROPS FABEL LONG PRINT (50g)
																												</div>
														<div class="ym">
														2.65 EUR														</div><!--end .ym -->
														<div class="yd">
															n/a														</div>
														<div class="yp">
															<a href="http://www.lanade.de/drops/drops-fabel" onclick="_gaq.push(['_trackEvent', 'OrderNow', '32034 - Lanade', 'Pattern']);" target="_blank">Bestellen															</a>
														</div>
													</div><!--end .row header -->
												</li>
											</ul>
																						<ul>
												<li>
													<div class="row">
														<div class="yn">DROPS FABEL SPRAY PRINT (50g)
																												</div>
														<div class="ym">
														2.65 EUR														</div><!--end .ym -->
														<div class="yd">
															n/a														</div>
														<div class="yp">
															<a href="http://www.lanade.de/drops/drops-fabel" onclick="_gaq.push(['_trackEvent', 'OrderNow', '32034 - Lanade', 'Pattern']);" target="_blank">Bestellen															</a>
														</div>
													</div><!--end .row header -->
												</li>
											</ul>
																						<ul>
												<li>
													<div class="row">
														<div class="yn">DROPS FABEL MOULINE (50g)
																												</div>
														<div class="ym">
														2.25 EUR														</div><!--end .ym -->
														<div class="yd">
															n/a														</div>
														<div class="yp">
															<a href="http://www.lanade.de/drops/drops-fabel" onclick="_gaq.push(['_trackEvent', 'OrderNow', '32034 - Lanade', 'Pattern']);" target="_blank">Bestellen															</a>
														</div>
													</div><!--end .row header -->
												</li>
											</ul>
																					<ul>
											<li>
												<div class="row">
													<div class="yn"><a href="/needles.php?cid=9">Nadeln & Häkelnadeln</a></div>
													<div class="ym">von 1.30 EUR</div>
													<div class="yd"></div>
													<div class="yp"></div>
												</div><!--end .row header -->
											</li>
										</ul>
																			
								</div><!--end .yarn_pricelist -->
									
							</div><!-- end #tabs6 -->
							<!-- eof country -->
							
						</div><!--end #tabs_prices -->
						
					</div><!-- end .yarn_order -->
									
			</div><!-- end #pattern -->
			
			<div class="pattern-ad">
	<a href="http://www.garnstudio.com/lessons.php?catid=6&cid=9"><img src="/img/activity/themeadow-pb.jpg" alt="" /></a>
</div>

<div class="pattern-banner">
	<h1>Tipps & Hilfe</h1>
	<img src="/img/pattern-signature.png" alt="" class="right" />
	<h2>Jeden Tag etwas Neues lernen!</h2>		
	<strong>Sie wissen nicht genau, wie Sie mit dieser Anleitung beginnen sollen?</strong> Unter dem Titel <strong>"Videos"</strong> im grauen Balken neben dem Modellfoto finden Sie eine Liste mit Videos, die Ihnen dabei helfen - übrigens haben alle unsere Anleitungen diese Hilfe!<br />
<br />
Und nicht nur das - unter <u><a href="http://www.garnstudio.com/school.php?cid=9">"Tipps & Hilfe"</a></u> finden Sie jede Menge wertvoller Hinweise und Tipps - damit können Sie jede unserer Anleitung meistern oder mit Ihren eigenen Designs beginnen.<br />
<br />
Schauen Sie auch in unsere Sammlung von <strong>Tutorial Videos</strong> und finden Sie Hunderte von Hilfsvideos oder lassen Sie sich unsere Garne zeigen. Oder besuchen Sie unsere <strong>Lektionen</strong> und lassen Sie sich bestimmte Techniken Schritt für Schritt erklären! Nutzen Sie "Tipps & Hilfe" als Quelle von Inspirationen! <br />
<u><a href="http://www.garnstudio.com/school.php?cid=9"> Hier zeigen lassen!</a></u>	
	
	<div class="clear"></div>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net//all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="fb-like" data-href="https://www.facebook.com/Garnstudio.DROPS.design" data-send="false" data-width="500" data-show-faces="false" data-font="tahoma"></div>
	
</div><!-- end .pattern-banner -->
			
			<div class="clear"></div>
			
			<a name="pattern_content"></a>
			
						
			<div class="pattern_text">KRAUSRIPPEN (in Hin- und Rück-R):<br />
1 Krausrippe = 2 R kraus re = 2 R re. <br />
<br />
STREIFEN:<br />
* 2 R pflaume/beige/erika Delight, 2 R natur Fabel *, von *-* fortlaufend wdh.<br />
<br />
STRICKTIPP:<br />
Um den Faden an der Seite nicht über lange Strecken mitführen zu müssen, wenn Streifen gestr werden, die äußerste M beidseitig (sowohl in Hin-R als auch in Rück-R) mit 1 Faden natur Fabel + 1 Faden pflaume/beige/erika Delight (= 2 Fäden) str. Um dies zu erreichen, entweder den Faden sowohl aus dem Inneren des Knäuels als auch von außen verwenden oder ein eigenes kleines Knäuel abwickeln, das an der einen Seite des Tuchs mitgeführt wird. <br />
<br />
MUSTER:<br />
Siehe Diagramme A.1 bis A.4. Die Diagramme zeigen alle Hin- und Rück-R, Hin-R werden von rechts nach links, Rück-R von links nach rechts gelesen.<br />
<br />
ZUNAHMETIPP:<br />
1 M zunehmen, indem 1 Umschlag gearb wird. In der nächsten R (= Rück-R) den Umschlag re verschränkt str, um ein Loch zu vermeiden.<br />
----------------------------------------------------------<br />
<br />
TUCH:<br />
3 M auf Rundnadel Nr. 3,5 mit natur Fabel anschlagen und wie folgt str:<br />
1. R (= Hin-R): re str.<br />
2. R (= Rück-R): 1 M re, 1 Umschlag, 1 M li, 1 Umschlag, 1 M re = 5 M.<br />
3. R (= Hin-R): 1 M re, 1 Umschlag, 1 M re, 1 Umschlag, 1 M re, 1 Umschlag, 1 M re, 1 Umschlag, 1 M re = 9 M. 1 Markierer an der mittleren M anbringen (= Mittel-M).<br />
4. R (= Rück-R): 1 M re, li str bis noch 1 M übrig ist und enden mit 1 M re.<br />
Dann glatt re in STREIFEN weiterstr (siehe oben), mit je 1 Rand-M kraus re beidseitig, und wie folgt zunehmen – STRICKTIPP lesen und MASCHENPROBE BEACHTEN:<br />
5. R (= Hin-R): 1 M re mit 1 Faden natur Fabel + 1 Faden pflaume/beige/erika Delight (= 2 Fäden), dann mit 1 Faden pflaume/beige/erika Delight wie folgt weiterstr: 1 Umschlag, 1 M re, 1 Umschlag, re str bis zur Mittel-M, 1 Umschlag, 1 M re (Mittel-M), 1 Umschlag, re str bis noch 2 M auf der Nadel sind, 1 Umschlag, 1 M re, 1 Umschlag, 1 M re mit 1 Faden natur Fabel + 1 Faden pflaume/beige/erika Delight, wenden.<br />
6. R (= Rück-R): 1 M re mit 2 Fäden, weiter mit 1 Faden pflaume/beige/erika Delight wie folgt str: 2 M li, den nächsten Umschlag li verschränkt str um ein Loch zu vermeiden, li bis noch 4 M auf der Nadel sind, den ersten Umschlag li verschränkt str, 2 M li und enden mit 1 M re mit 2 Fäden.<br />
7. R (= Hin-R): 1 M re mit 2 Fäden, weiter mit 1 Faden natur Fabel wie folgt str: 1 Umschlag, 1 M re, 1 Umschlag, re str bis zur Mittel-M, 1 Umschlag, 1 M re (= Mittel-M), 1 Umschlag, re str bis noch 2 M auf der Nadel sind, 1 Umschlag, 1 M re, 1 Umschlag und 1 M re mit 2 Fäden, wenden.<br />
8. R (= verkürzte R in der Rück-R): 1 M re mit 2 Fäden, 2 M re, 1 M re verschränkt (um ein Loch zu vermeiden), 4 M re, wenden.<br />
9. R (= Hin-R): Die 1. M wie zum Rechtsstr abheben, den Faden anziehen und 6 M re mit natur Fabel str und die letzte M mit 2 Fäden re str.<br />
10. R (= Rück-R): 1 M re mit 2 Fäden, weiter mit 1 Faden natur Fabel wie folgt str: li str bis noch 4 M auf der Nadel sind, den ersten Umschlag li verschränkt str (um ein Loch zu vermeiden), 2 M li und enden mit 1 M re mit 2 Fäden.<br />
11. R (= verkürzte R in der Hin-R): 1 M re mit 2 Fäden, 7 M re mit natur Fabel, wenden.<br />
12. R (= Rück-R): Die 1. M wie zum Rechtsstr abheben, den Faden anziehen und 6 M re mit natur Fabel zurückstr und die letzte M mit 2 Fäden re str.<br />
<br />
Die 5.-12. R in Hin- und Rück-R wdh, bis 297 M auf der Nadel sind (die Arb misst nun ca. 40 cm entlang der Mittel-M), JEDOCH in jedem Rapport 2 M mehr in der verkürzten R str, bis die verkürzte R über insgesamt 26 M beidseitig gestr wird, dann die verkürzte R über diese 26 M bis zum fertigen Maß str (die übrigen M wie zuvor str). Nach jedem Rapport sind 12 M mehr auf der Nadel.<br />
<br />
WELLENRAND:<br />
Mit 1 Faden pflaume/beige/erika Delight str, jedoch die äußerste M mit 2 Fäden pflaume/beige/erika Delight bis zum fertigen Maß str.<br />
1 Krausrippe (= 2 R kraus re) über alle M mit den Zunahmen an beiden Seiten und beidseitig der Mittel-M wie zuvor str = 303 M auf der Nadel – BITTE BEACHTEN: In der Rück-R die jeweils vierte M ab dem Rand (d.h. den Umschlag) re verschränkt str, um ein Loch zu vermeiden.<br />
1 Hin-R re mit den Zunahmen an beiden Seiten und beidseitig der Mittel-M wie zuvor str und zusätzlich 17 M gleichmäßig verteilt vor der Mittel-M zunehmen und 17 M gleichmäßig verteilt nach der Mittel-M – ZUNAHMETIPP lesen (es wird abwechselnd nach ca. jeder 8. und 9. M zugenommen) = 343 M auf der Nadel. 1 Rück-R re str, jedoch die jeweils vierte M ab beiden Rändern (d.h. den Umschlag) re verschränkt str, um ein Loch zu vermeiden.<br />
Dann im MUSTER A.1 bis A.4 wie folgt str:<br />
1. R (= Hin-R): Im Muster nach Diagramm A.1 über die 2 ersten M str (die erste M mit 2 Fäden str), A.2 über die nächsten 168 M (= 14 Rapporte à 12 M), A.3 über die mittleren 3 M, A.2 über die nächsten 168 M (= 14 Rapporte à 12 M) und enden mit A.4 über die 2 letzten M (die letzte M mit 2 Fäden str). In dieser Weise weiterstr. Wenn A.1 bis A.4 1 x in der Höhe gestr wurden, sind 551 M auf der Nadel und es wird mit einem Picotrand wie nachfolgend beschrieben abgekettet.<br />
<br />
ABKETTRAND MIT PICOTS:<br />
In einer Hin-R mit pflaume/beige/erika Delight wie folgt locker abketten: 1 M re str, [* die rechte Nadel zwischen die ersten 2 M der linken Nadel einstechen (d.h. zwischen die M der R, nicht in die M), 1 Umschlag um die rechte Nadel, den Umschlag zwischen den M nach vorne ziehen und den Umschlag auf die linke Nadel legen *, von *-* noch 2 x wdh (= 3 neue M auf der linken Nadel). ** Die erste M der linken Nadel re str, die zweite M der rechten Nadel (von der Nadelspitze aus gesehen) über die zuletzt gestr M ziehen **], von **-** insgesamt 6 x arb und den Rapport in eckigen Klammern, d.h. von [ bis ], am ganzen Tuch entlang wdh, bis noch 1 M übrig ist. Den Faden abschneiden und durch die letzte M ziehen.</div>
			
											
				<h3 class="bt">Diagramm</h2>
				
				<table class="nolines diag">
									<tr>
						<td class="right">
							<img src="/drops/symbols/1.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							1 M re in Hin-R, 1 M li in Rück-R						</td>
					</tr>
										<tr>
						<td class="right">
							<img src="/drops/symbols/26.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							1 M re in Rück-R						</td>
					</tr>
										<tr>
						<td class="right">
							<img src="/drops/symbols/293.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							1 Umschlag, in der nächsten R den Umschlag NICHT verschränkt str, damit ein Loch gebildet wird.						</td>
					</tr>
										<tr>
						<td class="right">
							<img src="/drops/symbols/292.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							1 Umschlag, in der nächsten R den Umschlag verschränkt str, um ein Loch zu vermeiden						</td>
					</tr>
										<tr>
						<td class="right">
							<img src="/drops/symbols/202.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							2 M re zusstr						</td>
					</tr>
										<tr>
						<td class="right">
							<img src="/drops/symbols/201.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							1 M wie zum Rechtsstr abheben, 1 M re, die abgehobene M überziehen						</td>
					</tr>
										<tr>
						<td class="right">
							<img src="/drops/symbols/301.gif" alt="" />
						</td>
						<td class="like">
							=
						</td>
						<td class="left">
							1 M wie zum Rechtsstr abheben, 2 M re zusstr, die abgehobene M überziehen						</td>
					</tr>
									</table>
				
				<img src="/drops/mag/167/17/17-diag.jpg" class="pdiag" alt="" /><br /><img src="/drops/mag/167/17/17-diag2.jpg" class="pdiag" alt="" /><br />
<div class="pattern_footer">
<h2 class="bt">Brauchen Sie Hilfe?</h2>
<p>Für weitere Hilfe kontaktieren Sie bitte den Laden oder Onlineshop in dem Sie die Wolle gekauft haben. Wenn Sie DROPS Garn gekauft haben, erhalten Sie qualifizierte Hilfe von einem Laden, der sich mit DROPS Anleitungen auskennt.</p>
<p>Alle Anleitungen wurden sorgfältig Korrektur gelesen, aber wir übernehmen keine Haftung für eventuelle Fehler. Die Anleitungen wurden aus dem Norwegischen übersetzt und Sie können die Maschenzahl oder Massangaben jederzeit mit dem Original vergleichen auch wenn Sie kein Norwegisch sprechen.</p><a href="/pattern.php?id=7350&cid=1">Zur Anleitung DROPS 167-17 im Original</a>. Wenn Sie glauben einen Fehler in der Anleitung gefunden zu haben, schreiben Sie bitte einen Kommentar oder eine Frage unter der Rubrik <a href="/includes/pattern-comments.php?cid=9&id=7350" onclick="javascript:window.open(this.href,'jav','width=600,height=600,resizable=no,scrollbars=yes'); return false;"><strong>Kommentare</strong></a>.</div>
	
<div class="panel panel-default col-md-12">
	<div class="panel-body">
		<strong>&copy; 1982-2016 DROPS Design A/S</strong> Alle Rechte vorbehalten. Dieses Dokument einschliesslich aller Teilbereiche unterliegt dem Copyright. Die Musterdatenbank ist für alle, die Stricken als Hobby haben oder einen Wollladen führen. Wenn Sie mit unserem Garn handeln oder es kaufen, können Sie die DROPS Datenbank frei nutzen. Als Händler können Sie die DROPS Anleitungsdatenbank zur Verkaufsförderung nutzen. Drucken Sie jedes Muster aus und machen Sie so viele Kopien, wie Sie möchten. Das einzige, was wir verlangen ist, dass Sie keinerlei Änderungen oder Ergänzungen am Originaldokument vornehmen und dass die Anleitung nach DROPS Philosophie kostenlos an die Kunden abgegeben wird.<br />
Der Verkauf von Modellen, die nach DROPS Design gearbeitet wurden, ist zulässig sofern es sich um individuelle Aufträge handelt und ausschliesslich mit DROPS Wolle gearbeitet wird. Kommerzielle Nutzung darüber hinaus ist nicht gestattet. Die Verwendung von DROPS Bildern zum Zwecke von Verkauf und Marketing ist nur erlaubt, wenn das Bild nicht geschnitten oder verändert wird: das DROPS Garnstudio Logo muss deutlich sichtbar sein. <br />
Eine weitere Bedingung den Markennamen DROPS Design nutzen zu dürfen, ist das Anbringen eines Labels mit folgendem Text: „DROPS Design hergestellt von xy" oder in englischer Sprache:<br />
“ A DROPS Design made by xyz“.<br />
Diese Regelung kann jederzeit, ohne Angabe von Gründen, angepasst oder widerrufen werden.	</div>
</div>		
		</div>
		
		<!-- Calling the GlassCase plugin -->
		<script type="text/javascript">						
			jQuery(document).ready( function () {
				//If your <ul> has the id "glasscase"
				jQuery('#glasscase').glassCase({ 'widthDisplay': '458', 'heightDisplay': '709', 'zoomWidth': '458', 'zoomHeight': '709', 'isDownloadEnabled': 'false', 'isOverlayEnabled': 'false', 'isZoomDiffWH': 'true' });
				jQuery('#glasscase2').glassCase({ 'widthDisplay': '458', 'heightDisplay': '709', 'thumbsPosition': 'right', 'isDownloadEnabled': 'false', 'isOverlayEnabled': 'false' });
			});						
		</script>		
				
		
</div><!--end #wrapper-->

<div id="footer_wrapper">	

	<div class="footer">	
	
		<div class="divwrapper">
			<!-- SnapWidget 
			<iframe src="http://snapwidget.com/in/?u=ZHJvcHNkZXNpZ258aW58MTAwfDR8MXx8bm98M3xub25lfG9uU3RhcnR8eWVzfG5v&ve=090216" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:412px; height:103px"></iframe>-->
			<div class="div50">
				<a href="/about.php?cid=9">Über uns</a> | 
				<a href="/contact.php?cid=9">Kontaktieren Sie uns</a> | 
				<a href="javascript:centerwindowcopyright()" id="centerwindowcopyright">&copy 1982-2016 DROPS Design A/S</a>				
			</div>
			<div class="div50 alignright">
				<a href="https://www.facebook.com/Garnstudio.DROPS.design/" target="blank"><img src="/img/icon/sm-facebook.png" alt="" /></a>
				<a href="https://instagram.com/dropsdesign/" target="blank"><img src="/img/icon/sm-instagram.png" alt="" /></a>
				<a href="https://www.pinterest.com/dropsdesign/" target="blank"><img src="/img/icon/sm-pinterest.png" alt="" /></a>
				<a href="http://www.ravelry.com/designers/drops-design" target="blank"><img src="/img/icon/sm-ravelry.png" alt="" /></a>
				<a href="https://twitter.com/Garnstudio" target="blank"><img src="/img/icon/sm-twitter.png" alt="" /></a>
				<a href="https://vimeo.com/dropsdesign" target="blank"><img src="/img/icon/sm-vimeo.png" alt="" /></a>
				<a href="http://www.garnstudio.com/rss.php?cid=9" target="blank"><img src="/img/icon/sm-rss.png" alt="" /></a>			
			</div>
		</div>
		
		<div class="clear"></div>
		
	</div>
	
</div><!--end #footer_wrapper-->
	
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"8066f441a8","applicationID":"14445574","transactionName":"ZlABZUFRXEYCAUINCV8aNkNaH0JUFxZTFggfRQtB","queueTime":0,"applicationTime":27,"atts":"ShcCEwlLT0g=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>