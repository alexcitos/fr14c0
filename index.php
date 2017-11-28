<?php require_once('Connections/intranet.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_intranet, $intranet);
$query_rs_contacto = "SELECT * FROM tbl_contacto WHERE id = 1";
$rs_contacto = mysql_query($query_rs_contacto, $intranet) or die(mysql_error());
$row_rs_contacto = mysql_fetch_assoc($rs_contacto);
$totalRows_rs_contacto = mysql_num_rows($rs_contacto);

mysql_select_db($database_intranet, $intranet);
$query_rs_home = "SELECT * FROM tbl_index_secciones WHERE seccion = 'home'";
$rs_home = mysql_query($query_rs_home, $intranet) or die(mysql_error());
$row_rs_home = mysql_fetch_assoc($rs_home);
$totalRows_rs_home = mysql_num_rows($rs_home);

mysql_select_db($database_intranet, $intranet);
$query_rs_servlink = "SELECT * FROM tbl_servicios ORDER BY id ASC";
$rs_servlink = mysql_query($query_rs_servlink, $intranet) or die(mysql_error());
$row_rs_servlink = mysql_fetch_assoc($rs_servlink);
$totalRows_rs_servlink = mysql_num_rows($rs_servlink);

mysql_select_db($database_intranet, $intranet);
$query_rs_servicios = "SELECT DISTINCT* FROM tbl_servicios WHERE titulo <> 'Transporte' AND  titulo <> 'Importaciones' ORDER BY titulo ASC";
$rs_servicios = mysql_query($query_rs_servicios, $intranet) or die(mysql_error());
$row_rs_servicios = mysql_fetch_assoc($rs_servicios);
$totalRows_rs_servicios = mysql_num_rows($rs_servicios);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
 </title>
<META NAME="DC.Language"  charset="utf-8"CONTENT="Spanish">
<META NAME="AUTHOR" CONTENT="Idennto">
<META NAME="REPLY-TO" CONTENT="info@grupofriaco.com.mx">
<LINK REV="made" href="mailto:info@grupofriaco.com.mx">
<META NAME="DESCRIPTION" CONTENT="<?php echo $row_rs_home['description']; ?>">
<META NAME="KEYWORDS" CONTENT="<?php echo $row_rs_home['keywords']; ?>">
<META NAME="Resource-type" CONTENT="Homepage">
<META NAME="DateCreated" CONTENT="Tue, 13 October 2015 00:00:00 GMT-6">
<META NAME="Revisit-after" CONTENT="60 days">
<META NAME="robots" content="ALL">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/><link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="css/friaco.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58495719-17', 'auto');
  ga('send', 'pageview');

</script>
<title>Bienvenido a Grupo Friaco. Siempre Frío... siempre confiable!</title>
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif" onload="MM_preloadImages('images/facebookicon2b.png','images/twittericon2b.png')">

<div id="logotipo"></div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="sl-slider-wrapper">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%"><img src="images/logo_grupofriaco.jpg" width="377" height="100" alt="logo Grupo Friaco" /></td>
        <td width="89%" align="right" valign="middle"><table width="90%" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="middle"><ul id="MenuBar1" class="MenuBarHorizontal">
              <li><a href="index.php">Home</a>                </li>
              <li><a href="nosotros/index.php">Grupo Friaco</a></li>
              <li><a href="servicios/transporte.php">Transporte</a>                </li>
              <li><a href="servicios/Importaciones.php">Importaciones</a></li>
              <li><a href="#" class="MenuBarItemSubmenu">Más Servicios aqui</a>
                <ul>
                  <?php do { ?>
                    <li><a href="servicios/servicio.php?id=<?php echo $row_rs_servicios['id']; ?>&n=<?php echo $row_rs_servicios['titulo']; ?>"><?php echo $row_rs_servicios['titulo']; ?></a></li>
                    <?php } while ($row_rs_servicios = mysql_fetch_assoc($rs_servicios)); ?>
</ul>
                </li>
              <li><a href="contacto/contacto.php">Contacto</a></li>
              </ul>              <a href="#"></a></td>
            <td align="right"><img src="images/spacer.gif" width="50" height="2" alt="spacer" /></td>
          </tr>
        </table></td>
      </tr>
  </table></td>
  </tr>
  <tr >
    <td><!-- #region Jssor Slider Begin --><script>(function(h,g,c,j,d,l,k){/*! Jssor */
new(function(){});var e={Be:function(a){return-c.cos(a*c.PI)/2+.5},Ke:function(a){return a},Ce:function(a){return-a*(a-2)},Je:function(a){return(a-=1)*a*a*a*a+1}},f={je:e.Je};var b=new function(){var f=this,Bb=/\S+/g,G=1,db=2,hb=3,gb=4,lb=5,H,r=0,i=0,s=0,W=0,z=0,J=navigator,pb=J.appName,o=J.userAgent,p=parseFloat;function zb(){if(!H){H={ae:"ontouchstart"in h||"createTouch"in g};var a;if(J.pointerEnabled||(a=J.msPointerEnabled))H.ed=a?"msTouchAction":"touchAction"}return H}function v(j){if(!r){r=-1;if(pb=="Microsoft Internet Explorer"&&!!h.attachEvent&&!!h.ActiveXObject){var e=o.indexOf("MSIE");r=G;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on W=@_jscript_version@*/;i=g.documentMode||s}else if(pb=="Netscape"&&!!h.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=db;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=f>=0?gb:hb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=G;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=lb;i=p(a[2])}}}return j==r}function q(){return v(G)}function R(){return q()&&(i<6||g.compatMode=="BackCompat")}function fb(){return v(hb)}function kb(){return v(lb)}function wb(){return fb()&&z>534&&z<535}function K(){v();return z>537||i>42||r==G&&i>=11}function P(){return q()&&i<9}function xb(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=k)return c=b})}return c}}function vb(b){var a;return function(c){a=a||xb(b)(c)||b;return a}}var L=vb("transform");function ob(a){return{}.toString.call(a)}var F;function Hb(){if(!F){F={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){F["[object "+a+"]"]=a.toLowerCase()})}return F}function n(b,d){var a,c;if(ob(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function C(a){return a==j?String(a):Hb()[ob(a)]||"object"}function mb(a){for(var b in a)return d}function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function sb(b,a){setTimeout(b,a||0)}function I(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function ub(b,a){if(i<9)b.style.filter=a}f.be=zb;f.hd=q;f.ce=fb;f.ge=K;f.dd=P;xb("transform");f.Rc=function(){return i};f.lc=sb;function Z(a){a.constructor===Z.caller&&a.mc&&a.mc.apply(a,Z.caller.arguments)}f.mc=Z;f.hb=function(a){if(f.Ee(a))a=g.getElementById(a);return a};function t(a){return a||h.event}f.Nc=t;f.Ub=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=f.qc(a);return a};f.tc=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function D(c,d,a){if(a!==k)c.style[d]=a==k?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&h.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function bb(b,c,a,d){if(a!==k){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?bb:D,b;if(a&4)b=vb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Eb(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Gb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=I(h,[i],d);ub(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var M={X:["rotate"],O:["rotateX"],P:["rotateY"],Gb:["skewX"],Hb:["skewY"]};if(!K())M=B(M,{m:["scaleX",2],n:["scaleY",2],I:["translateZ",1]});function N(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.O;delete a.P;delete a.I}b.e(a,function(d,b){var a=M[b];if(a){var e=a[1]||0;if(O[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(K()){if(a.U||a.W||a.I)c+=" translate3d("+(a.U||0)+"px,"+(a.W||0)+"px,"+(a.I||0)+"px)";if(a.m==k)a.m=1;if(a.n==k)a.n=1;if(a.m!=1||a.n!=1)c+=" scale3d("+a.m+", "+a.n+", 1)"}}d.style[L(d)]=c}f.Fc=m("transformOrigin",4);f.Pd=m("backfaceVisibility",4);f.Se=m("transformStyle",4);f.Re=m("perspective",6);f.Te=m("perspectiveOrigin",4);f.Oe=function(a,b){if(q()&&s<9||s<10&&R())a.style.zoom=b==1?"":b;else{var c=L(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=I(e,[g],f);a.style[c]=d}};f.Mb=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!f.Ne(a,d))&&b(c)}};f.a=function(a,d,b,c){a=f.hb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};f.C=function(a,c,d,b){a=f.hb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};f.Fb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=l};f.Ge=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};f.A=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};f.Lc=function(a,b){if(b==k)return a.textContent||a.innerText;var c=g.createTextNode(b);f.Kb(a);a.appendChild(c)};f.Db=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function nb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(V(a,b)==c)return a;if(!e){var d=nb(a,c,e,b);if(d)return d}}}f.p=nb;function T(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){V(a,b)==d&&c.push(a);if(!f){var e=T(a,d,f,b);if(e.length)c=c.concat(e)}}return c}f.Le=T;function ib(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=ib(a,c,d);if(b)return b}}}f.Me=ib;f.te=function(b,a){return b.getElementsByTagName(a)};function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==k){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}f.ab=B;function ab(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(A(a)&&A(b)){a=ab(a,b);e=!mb(a)}!e&&(d[c]=a)}}return d}f.pc=function(a){return C(a)=="function"};f.Ee=function(a){return C(a)=="string"};f.nd=function(a){return!isNaN(p(a))&&isFinite(a)};f.e=n;function S(a){return g.createElement(a)}f.nb=function(){return S("DIV")};f.md=function(){return S("SPAN")};f.nc=function(){};function X(b,c,a){if(a==k)return b.getAttribute(c);b.setAttribute(c,a)}function V(a,b){return X(a,b)||X(a,"data-"+b)}f.o=X;f.g=V;function x(b,a){if(a==k)return b.className;b.className=a}f.Gc=x;function rb(b){var a={};n(b,function(b){a[b]=b});return a}function tb(b,a){return b.match(a||Bb)}function Q(b,a){return rb(tb(b||"",a))}f.ld=tb;function cb(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){x(a,cb(" ",B(ab(Q(x(a)),Q(c)),Q(b))))}f.qc=function(a){return a.parentNode};f.H=function(a){f.R(a,"none")};f.L=function(a,b){f.R(a,b?"none":"")};f.Md=function(b,a){b.removeAttribute(a)};f.Ld=function(){return q()&&i<10};f.Kd=function(d,a){if(a)d.style.clip="rect("+c.round(a.j||a.z||0)+"px "+c.round(a.v)+"px "+c.round(a.r)+"px "+c.round(a.i||a.s||0)+"px)";else if(a!==k){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=I(g,f,"");b.cb(d,e)}};f.J=function(){return+new Date};f.E=function(b,a){b.appendChild(a)};f.sb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};f.vb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};f.Bd=function(a,b){n(a,function(a){f.vb(a,b)})};f.Kb=function(a){f.Bd(f.Db(a,d),a)};f.Cd=function(a,b){var c=f.qc(a);b&1&&f.D(a,(f.k(c)-f.k(a))/2);b&2&&f.B(a,(f.l(c)-f.l(a))/2)};f.Fd=function(b,a){return parseInt(b,a||10)};f.Hd=p;f.Ne=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return l}return b===a};function Y(d,c,b){var a=d.cloneNode(!c);!b&&f.Md(a,"id");return a}f.lb=Y;f.ob=function(e,g){var a=new Image;function b(e,d){f.C(a,"load",b);f.C(a,"abort",c);f.C(a,"error",c);g&&g(a,d)}function c(a){b(a,d)}if(kb()&&i<11.6||!e)b(!e);else{f.a(a,"load",b);f.a(a,"abort",c);f.a(a,"error",c);a.src=e}};f.Jd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){f.ob(a.src,b)});b()};f.rd=function(a,g,i,h){if(h)a=Y(a);var c=T(a,g);if(!c.length)c=b.te(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=Y(i);x(e,x(d));b.cb(e,d.style.cssText);b.sb(e,d);b.vb(d)}return a};function Ib(a){var l=this,p="",r=["av","pv","ds","dn"],e=[],q,j=0,h=0,d=0;function i(){E(a,q,e[d||j||h&2||h]);b.F(a,"pointer-events",d?"none":"")}function c(){j=0;i();f.C(g,"mouseup",c);f.C(g,"touchend",c);f.C(g,"touchcancel",c)}function o(a){if(d)f.Fb(a);else{j=4;i();f.a(g,"mouseup",c);f.a(g,"touchend",c);f.a(g,"touchcancel",c)}}l.od=function(a){if(a===k)return h;h=a&2||a&1;i()};l.Vc=function(a){if(a===k)return!d;d=a?0:3;i()};l.Q=a=f.hb(a);var m=b.ld(x(a));if(m)p=m.shift();n(r,function(a){e.push(p+a)});q=cb(" ",e);e.unshift("");f.a(a,"mousedown",o);f.a(a,"touchstart",o)}f.Xb=function(a){return new Ib(a)};f.F=D;f.tb=m("overflow");f.B=m("top",2);f.D=m("left",2);f.k=m("width",2);f.l=m("height",2);f.kd=m("marginLeft",2);f.qd=m("marginTop",2);f.q=m("position");f.R=m("display");f.u=m("zIndex",1);f.ec=function(b,a,c){if(a!=k)Gb(b,a,c);else return Eb(b)};f.cb=function(a,b){if(b!=k)a.style.cssText=b;else return a.style.cssText};var U={rb:f.ec,j:f.B,i:f.D,xb:f.k,ub:f.l,gb:f.q,df:f.R,fb:f.u};function w(g,l){var e=P(),b=K(),d=wb(),h=L(g);function i(b,d,a){var e=b.Y(u(-d/2,-a/2)),f=b.Y(u(d/2,-a/2)),g=b.Y(u(d/2,a/2)),h=b.Y(u(-d/2,a/2));b.Y(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var g=a.I||0,l=(a.O||0)%360,m=(a.P||0)%360,o=(a.X||0)%360,p=a.cf;if(e){g=0;l=0;m=0;p=0}var c=new Db(a.U,a.W,g);c.O(l);c.P(m);c.xd(o);c.wd(a.Gb,a.Hb);c.bc(a.m,a.n,p);if(b){c.ib(a.s,a.z);d.style[h]=c.zd()}else if(!W||W<9){var j="";if(o||a.m!=k&&a.m!=1||a.n!=k&&a.n!=1){var n=i(c,a.S,a.T);f.qd(d,n.y);f.kd(d,n.x);j=c.Dd()}var r=d.style.filter,s=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),q=I(r,[s],j);ub(d,q)}}w=function(e,c){c=c||{};var h=c.s,i=c.z,g;n(U,function(a,b){g=c[b];g!==k&&a(e,g)});f.Kd(e,c.c);if(!b){h!=k&&f.D(e,c.zc+h);i!=k&&f.B(e,c.Ac+i)}if(c.Ed)if(d)sb(f.A(j,N,e,c));else a(e,c)};f.Ib=N;if(d)f.Ib=w;if(e)f.Ib=a;else if(!b)a=N;f.M=w;w(g,l)}f.Ib=w;f.M=w;function Db(i,l,p){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,l||0,p||0,1],h=c.sin,g=c.cos,m=c.tan;function f(a){return a*c.PI/180}function o(a,b){return{x:a,y:b}}function n(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return n.apply(j,(a||b).concat(c))}d.bc=function(a,c,d){if(a==k)a=1;if(c==k)c=1;if(d==k)d=1;if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.ib=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.O=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.P=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.xd=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.wd=function(a,c){if(a||c){i=f(a);l=f(c);b=e([1,m(l),0,0,m(i),1,0,0,0,0,1,0,0,0,0,1])}};d.Y=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return o(a[12],a[13])};d.zd=function(){return"matrix3d("+b.join(",")+")"};d.Dd=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.m=function(b,c){return a.Kc(b,c,0)};a.n=function(b,c){return a.Kc(b,0,c)};a.Kc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.Y=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var O={zc:0,Ac:0,s:0,z:0,Z:1,m:1,n:1,X:0,O:0,P:0,U:0,W:0,I:0,Gb:0,Hb:0};f.sd=function(a){var c=a||{};if(a)if(b.pc(a))c={jc:c};else if(b.pc(a.c))c.c={jc:a.c};return c};f.pd=function(l,m,w,n,y,z,o){var a=m;if(l){a={};for(var g in m){var A=z[g]||1,v=y[g]||[0,1],f=(w-v[0])/v[1];f=c.min(c.max(f,0),1);f=f*A;var u=c.floor(f);if(f!=u)f-=u;var h=n.jc||e.Be,i,B=l[g],q=m[g];if(b.nd(q)){h=n[g]||h;var x=h(f);i=B+q*x}else{i=b.ab({Bb:{}},l[g]);b.e(q.Bb||q,function(d,a){if(n.c)h=n.c[a]||n.c.jc||h;var c=h(f),b=d*c;i.Bb[a]=b;i[a]+=b})}a[g]=i}var t=b.e(m,function(b,a){return O[a]!=k});t&&b.e(O,function(c,b){if(a[b]==k&&l[b]!==k)a[b]=l[b]});if(t){if(a.Z)a.m=a.n=a.Z;a.S=o.S;a.T=o.T;a.Ed=d}}if(m.c&&o.ib){var p=a.c.Bb,s=(p.j||0)+(p.r||0),r=(p.i||0)+(p.v||0);a.i=(a.i||0)+r;a.j=(a.j||0)+s;a.c.i-=r;a.c.v-=r;a.c.j-=s;a.c.r-=s}if(a.c&&b.Ld()&&!a.c.j&&!a.c.i&&a.c.v==o.S&&a.c.r==o.T)a.c=j;return a}};function n(){var a=this,d=[];function i(a,b){d.push({ic:a,Zb:b})}function g(a,c){b.e(d,function(b,e){b.ic==a&&b.Zb===c&&d.splice(e,1)})}a.kb=a.addEventListener=i;a.removeEventListener=g;a.f=function(a){var c=[].slice.call(arguments,1);b.e(d,function(b){b.ic==a&&b.Zb.apply(h,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,g=0,m=0,D,k,f,e,p,w=[],x;function O(a){f+=a;e+=a;k+=a;g+=a;m+=a;y+=a}function t(o){var h=o;if(p&&(h>=e||h<=f))h=((h-f)%p+p)%p+f;if(!D||u||g!=h){var j=c.min(h,e);j=c.max(j,f);if(!D||u||j!=m){if(L){var l=(j-k)/(C||1);if(i.Od)l=1-l;var n=b.pd(M,L,l,G,F,H,i);if(x)b.e(n,function(b,a){x[a]&&x[a](J,b)});else b.M(J,n)}a.Vb(m-k,j-k);m=j;b.e(w,function(b,c){var a=o<g?w[w.length-c-1]:b;a.K(m-y)});var r=g,q=m;g=h;D=d;a.Cb(r,q)}}}function E(a,b,d){b&&a.Tb(e);if(!d){f=c.min(f,a.uc()+y);e=c.max(e,a.Sb()+y)}w.push(a)}var r=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.msRequestAnimationFrame;if(b.ce()&&b.Rc()<7)r=j;r=r||function(a){b.lc(a,i.vc)};function I(){if(q){var d=b.J(),e=c.min(d-A,i.wc),a=g+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}function s(h,i,j){if(!q){q=d;u=j;B=i;h=c.max(h,f);h=c.min(h,e);n=h;o=n<g?-1:1;a.xc();A=b.J();r(I)}}function K(b){if(q){u=q=B=l;a.Bc();b&&b()}}a.Mc=function(a,b,c){s(a?g+a:e,b,c)};a.Dc=s;a.bb=K;a.td=function(a){s(a)};a.N=function(){return g};a.yc=function(){return n};a.qb=function(){return m};a.K=t;a.ib=function(a){t(g+a)};a.Ec=function(){return q};a.vd=function(a){p=a};a.Tb=O;a.ad=function(a,b){E(a,0,b)};a.Yb=function(a){E(a,1)};a.uc=function(){return f};a.Sb=function(){return e};a.Cb=a.xc=a.Bc=a.Vb=b.nc;a.Nb=b.J();i=b.ab({vc:16,wc:50},i);p=i.rc;x=i.Nd;f=k=z;e=z+C;H=i.ud||{};F=i.Ad||{};G=b.sd(i.eb)};new(function(){});var i=function(p,fc){var f=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.ze=function(){var b=a.qb(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{V:f,Zd:d,gb:e}};a.Cb=function(b,a){var e=c.floor(a);if(e!=a&&a>b)e++;Ub(e,d);f.f(i.fe,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{rc:r});b.e(C,function(b){D&1&&b.vd(r);a.Yb(b);b.Tb(ib/bc)})}function zc(){var a=this,b=Tb.Q;m.call(a,-1,2,{eb:e.Ke,Nd:{gb:Zb},rc:r},b,{gb:1},{gb:-2});a.Qb=b}function nc(o,n){var b=this,e,g,h,k,c;m.call(b,-1e8,2e8,{wc:100});b.xc=function(){M=d;R=j;f.f(i.Yd,t(w.N()),w.N())};b.Bc=function(){M=l;k=l;var a=w.ze();f.f(i.Wd,t(w.N()),w.N());!a.gb&&Dc(a.Zd,s)};b.Cb=function(i,f){var b;if(k)b=c;else{b=g;if(h){var d=f/h;b=a.Uc(d)*(g-e)+e}}w.K(b)};b.wb=function(a,d,c,f){e=a;g=d;h=c;w.K(a);b.K(0);b.Dc(c,f)};b.Vd=function(a){k=d;c=a;b.Mc(a,j,d)};b.Ud=function(a){c=a};w=new Bc;w.ad(o);w.ad(n)}function pc(){var c=this,a=Xb();b.u(a,0);b.F(a,"pointerEvents","none");c.Q=a;c.yb=function(){b.H(a);b.Kb(a)}}function xc(o,g){var e=this,q,L,v,k,y=[],x,B,W,G,Q,F,h,w,p;m.call(e,-u,u+1,{});function E(a){q&&q.Pc();T(o,a,0);F=d;q=new I.G(o,I,b.Hd(b.g(o,"idle"))||lc);q.K(0)}function Z(){q.Nb<I.Nb&&E()}function M(p,r,o){if(!G){G=d;if(k&&o){var h=o.width,c=o.height,n=h,m=c;if(h&&c&&a.pb){if(a.pb&3&&(!(a.pb&4)||h>K||c>J)){var j=l,q=K/J*c/h;if(a.pb&1)j=q>1;else if(a.pb&2)j=q<1;n=j?h*J/c:K;m=j?J:c*K/h}b.k(k,n);b.l(k,m);b.B(k,(J-m)/2);b.D(k,(K-n)/2)}b.q(k,"absolute");f.f(i.Td,g)}}b.H(r);p&&p(e)}function Y(b,c,d,f){if(f==R&&s==g&&N)if(!Cc){var a=t(b);A.ye(a,g,c,e,d);c.Sd();U.Tb(a-U.uc()-1);U.K(a);z.wb(b,b,0)}}function cb(b){if(b==R&&s==g){if(!h){var a=j;if(A)if(A.V==g)a=A.de();else A.yb();Z();h=new vc(o,g,a,q);h.Sc(p)}!h.Ec()&&h.Jb()}}function S(d,f,l){if(d==g){if(d!=f)C[f]&&C[f].Rd();else!l&&h&&h.Xd();p&&p.Vc();var m=R=b.J();e.ob(b.A(j,cb,m))}else{var k=c.min(g,d),i=c.max(g,d),o=c.min(i-k,k+r-i),n=u+a.he-1;(!Q||o<=n)&&e.ob()}}function db(){if(s==g&&h){h.bb();p&&p.pe();p&&p.we();h.fd()}}function eb(){s==g&&h&&h.bb()}function ab(a){!P&&f.f(i.ve,g,a)}function O(){p=w.pInstance;h&&h.Sc(p)}e.ob=function(c,a){a=a||v;if(y.length&&!G){b.L(a);if(!W){W=d;f.f(i.ue,g);b.e(y,function(a){if(!b.o(a,"src")){a.src=b.g(a,"src2");b.R(a,a["display-origin"])}})}b.Jd(y,k,b.A(j,M,c,a))}else M(c,a)};e.Qd=function(){var h=g;if(a.id<0)h-=r;var d=h+a.id*tc;if(D&2)d=t(d);if(!(D&1))d=c.max(0,c.min(d,r-u));if(d!=g){if(A){var e=A.Ae(r);if(e){var i=R=b.J(),f=C[t(d)];return f.ob(b.A(j,Y,d,f,e,i),v)}}bb(d)}};e.gc=function(){S(g,g,d)};e.Rd=function(){p&&p.pe();p&&p.we();e.Yc();h&&h.se();h=j;E()};e.Sd=function(){b.H(o)};e.Yc=function(){b.L(o)};e.re=function(){p&&p.Vc()};function T(a,c,e){if(b.o(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.o(a,"src")){Q=d;a["display-origin"]=b.R(a);b.H(a)}}b.dd()&&b.u(a,(b.u(a)||0)+1)}var f=b.Db(a);b.e(f,function(f){var h=f.tagName,i=b.g(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)O();else b.a(w,"dataavailable",O)}if(i=="caption"){if(c){b.Fc(f,b.g(f,"to"));b.Pd(f,b.g(f,"bf"));b.g(f,"3d")&&b.Se(f,"preserve-3d")}else if(!b.hd()){var g=b.lb(f,l,d);b.sb(g,f,a);b.vb(f,a);f=g;c=d}}else if(!F&&!e&&!k){if(h=="A"){if(b.g(f,"u")=="image")k=b.Me(f,"IMG");else k=b.p(f,"image",d);if(k){x=f;b.R(x,"block");b.M(x,V);B=b.lb(x,d);b.q(x,"relative");b.ec(B,0);b.F(B,"backgroundColor","#000")}}else if(h=="IMG"&&b.g(f,"u")=="image")k=f;if(k){k.border=0;b.M(k,V)}}T(f,c,e+1)})}e.Vb=function(c,b){var a=u-b;Zb(L,a)};e.V=g;n.call(e);b.Re(o,b.g(o,"p"));b.Te(o,b.g(o,"po"));var H=b.p(o,"thumb",d);if(H){b.lb(H);b.H(H)}b.L(o);v=b.lb(fb);b.u(v,1e3);b.a(o,"click",ab);E(d);e.ee=k;e.Tc=B;e.Qb=L=o;b.E(L,v);f.kb(203,S);f.kb(28,eb);f.kb(24,db)}function vc(y,g,p,q){var a=this,n=0,u=0,h,j,e,c,k,t,r,o=C[g];m.call(a,0,0);function v(){b.Kb(L);cc&&k&&o.Tc&&b.E(L,o.Tc);b.L(L,!k&&o.ee)}function w(){a.Jb()}function x(b){r=b;a.bb();a.Jb()}a.Jb=function(){var b=a.qb();if(!B&&!M&&!r&&s==g){if(!b){if(h&&!k){k=d;a.fd(d);f.f(i.xe,g,n,u,h,c)}v()}var l,p=i.Wc;if(b!=c)if(b==e)l=c;else if(b==j)l=e;else if(!b)l=j;else l=a.yc();f.f(p,g,b,n,j,e,c);var m=N&&(!E||F);if(b==c)(e!=c&&!(E&12)||m)&&o.Qd();else(m||b!=e)&&a.Dc(l,w)}};a.Xd=function(){e==c&&e==a.qb()&&a.K(j)};a.se=function(){A&&A.V==g&&A.yb();var b=a.qb();b<c&&f.f(i.Wc,g,-b-1,n,j,e,c)};a.fd=function(a){p&&b.tb(jb,a&&p.sc.bf?"":"hidden")};a.Vb=function(b,a){if(k&&a>=h){k=l;v();o.Yc();A.yb();f.f(i.qe,g,n,u,h,c)}f.f(i.oe,g,a,n,j,e,c)};a.Sc=function(a){if(a&&!t){t=a;a.kb($JssorPlayer$.Id,x)}};p&&a.Yb(p);h=a.Sb();a.Yb(q);j=h+q.Xc;e=h+q.bd;c=a.Sb()}function Kb(a,c,d){b.D(a,c);b.B(a,d)}function Zb(c,b){var a=x>0?x:eb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){pb=M;Ib=z.yc();G=w.N()}function gc(){Pb();if(B||!F&&E&12){z.bb();f.f(i.ne)}}function ec(f){if(!B&&(F||!(E&12))&&!z.Ec()){var d=w.N(),b=c.ceil(G);if(f&&c.abs(H)>=a.jd){b=c.ceil(d);b+=hb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&pb)z.td(Ib);else if(d==b){sb.re();sb.gc()}else z.wb(d,b,e*Vb)}}function Hb(a){!b.g(b.Ub(a),"nodrag")&&b.Fb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.Nc(a);var k=b.Ub(a);if(!O&&!b.g(k,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=d;yb=l;R=j;b.a(g,c?"touchmove":"mousemove",Bb);b.J();P=0;gc();if(!pb)x=0;if(c){var h=a.touches[0];ub=h.clientX;vb=h.clientY}else{var e=b.tc(a);ub=e.x;vb=e.y}H=0;gb=0;hb=0;f.f(i.me,t(G),G,a)}}function Bb(e){if(B){e=b.Nc(e);var f;if(e.type!="mousemove"){var l=e.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.tc(e);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||eb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(mb&&x==1&&c.abs(k)-c.abs(j)>3)yb=d}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-gb<-2)hb=0;else if(H-gb>2)hb=-1;gb=H;H=a;rb=G-H/i/(Y||1);if(H&&x&&!yb){b.Fb(e);if(!M)z.Vd(rb);else z.Ud(rb)}}}}}function ab(){qc();if(B){B=l;b.J();b.C(g,"mousemove",Bb);b.C(g,"touchmove",Bb);P=H;z.bb();var a=w.N();f.f(i.le,t(a),a,t(G),G);E&12&&Pb();ec(d)}}function jc(c){if(P){b.Ge(c);var a=b.Ub(c);while(a&&v!==a){a.tagName=="A"&&b.Fb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);sb=C[s];Ub(a);return s}function Dc(a,b){x=0;Jb(a);f.f(i.ke,t(a),b)}function Ub(a,c){wb=a;b.e(S,function(b){b.hc(t(a),a,c)})}function sc(){var b=i.Cc||0,a=X;if(mb)a&1&&(a&=1);i.Cc|=a;return O=a&~b}function qc(){if(O){i.Cc&=~X;O=0}}function Xb(){var a=b.nb();b.M(a,V);b.q(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=l}else if(D&2){b=t(b+wb);d=l}bb(b,a.zb,d)}function xb(){b.e(S,function(a){a.ac(a.Ab.af<=F)})}function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].gc()}}}function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}function ic(){V={xb:K,ub:J,j:0,i:0};b.e(T,function(a){b.M(a,V);b.q(a,"absolute");b.tb(a,"hidden");b.H(a)});b.M(fb,V)}function ob(b,a){bb(b,a,d)}function bb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.oc)){M=d;B=l;z.bb();if(f==k)f=Vb;var e=Cb.qb(),b=g;if(j){b=e+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var i=(b-e)%r;b=e+i;var h=e==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.wb(e,b,h||1)}}f.Mc=function(){if(!N){N=d;C[s]&&C[s].gc()}};function W(){return b.k(y||p)}function lb(){return b.l(y||p)}f.S=W;f.T=lb;function Eb(c,d){if(c==k)return b.k(p);if(!y){var a=b.nb(g);b.Gc(a,b.Gc(p));b.cb(a,b.cb(p));b.R(a,"block");b.q(a,"relative");b.B(a,0);b.D(a,0);b.tb(a,"visible");y=b.nb(g);b.q(y,"absolute");b.B(y,0);b.D(y,0);b.k(y,b.k(p));b.l(y,b.l(p));b.Fc(y,"0 0");b.E(y,a);var h=b.Db(p);b.E(p,y);b.F(p,"backgroundImage","");b.e(h,function(c){b.E(b.g(c,"noscale")?p:a,c);b.g(c,"autocenter")&&Mb.push(c)})}Y=c/(d?b.l:b.k)(y);b.Oe(y,Y);var f=d?Y*W():c,e=d?c:Y*lb();b.k(p,f);b.l(p,e);b.e(Mb,function(a){var c=b.Fd(b.g(a,"autocenter"));b.Cd(a,c)})}f.ie=Eb;n.call(f);f.Q=p=b.hb(p);var a=b.ab({pb:0,he:1,fc:1,dc:0,cc:l,Eb:1,db:d,oc:d,id:1,Oc:3e3,cd:1,zb:450,Uc:e.Ce,jd:20,Qc:0,jb:1,gd:0,Pe:1,Rb:1,Zc:1},fc);a.db=a.db&&b.ge();if(a.Qe!=k)a.Oc=a.Qe;if(a.Ue!=k)a.gd=a.Ue;var eb=a.Rb&3,tc=(a.Rb&4)/-4||1,kb=a.Ze,I=b.ab({G:q,db:a.db},a.Ve);I.Pb=I.Pb||I.We;var Fb=a.Ie,Z=a.He,db=a.Xe,Q=!a.Pe,y,v=b.p(p,"slides",Q),fb=b.p(p,"loading",Q)||b.nb(g),Nb=b.p(p,"navigator",Q),dc=b.p(p,"arrowleft",Q),ac=b.p(p,"arrowright",Q),Lb=b.p(p,"thumbnavigator",Q),oc=b.k(v),mc=b.l(v),V,T=[],uc=b.Db(v);b.e(uc,function(a){if(a.tagName=="DIV"&&!b.g(a,"u"))T.push(a);else b.dd()&&b.u(a,(b.u(a)||0)+1)});var s=-1,wb,sb,r=T.length,K=a.Fe||oc,J=a.De||mc,Wb=a.Qc,zb=K+Wb,Ab=J+Wb,bc=eb&1?zb:Ab,u=c.min(a.jb,r),jb,x,O,yb,S=[],Qb,Sb,Ob,cc,Cc,N,E=a.cd,lc=a.Oc,Vb=a.zb,qb,tb,ib,Rb=u<r,D=Rb?a.Eb:0,X,P,F=1,M,B,R,ub=0,vb=0,H,gb,hb,Cb,w,U,z,Tb=new pc,Y,Mb=[];if(r){if(a.db)Kb=function(a,c,d){b.Ib(a,{U:c,W:d})};N=a.cc;f.Ab=fc;ic();b.o(p,"jssor-slider",d);b.u(v,b.u(v)||0);b.q(v,"absolute");jb=b.lb(v,d);b.sb(jb,v);if(kb){cc=kb.Ye;qb=kb.G;tb=u==1&&r>1&&qb&&(!b.hd()||b.Rc()>=8)}ib=tb||u>=r||!(D&1)?0:a.gd;X=(u>1||ib?eb:-1)&a.Zc;var Gb=v,C=[],A,L,Db=b.be(),mb=Db.ae,G,pb,Ib,rb;Db.ed&&b.F(Gb,Db.ed,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(tb)A=new qb(Tb,K,J,kb,mb);b.E(jb,U.Qb);b.tb(v,"hidden");L=Xb();b.F(L,"backgroundColor","#000");b.ec(L,0);b.sb(L,Gb.firstChild,Gb);for(var cb=0;cb<T.length;cb++){var wc=T[cb],yc=new xc(wc,cb);C.push(yc)}b.H(fb);Cb=new Ac;z=new nc(Cb,U);if(X){b.a(v,"mousedown",Yb);b.a(v,"touchstart",rc);b.a(v,"dragstart",Hb);b.a(v,"selectstart",Hb);b.a(g,"mouseup",ab);b.a(g,"touchend",ab);b.a(g,"touchcancel",ab);b.a(h,"blur",ab)}E&=mb?10:5;if(Nb&&Fb){Qb=new Fb.G(Nb,Fb,W(),lb());S.push(Qb)}if(Z&&dc&&ac){Z.Eb=D;Z.jb=u;Sb=new Z.G(dc,ac,Z,W(),lb());S.push(Sb)}if(Lb&&db){db.dc=a.dc;Ob=new db.G(Lb,db);S.push(Ob)}b.e(S,function(a){a.Ob(r,C,fb);a.kb(o.Wb,kc)});b.F(p,"visibility","visible");Eb(W());b.a(v,"click",jc,d);b.a(p,"mouseout",b.Mb(hc,p));b.a(p,"mouseover",b.Mb(Ec,p));xb();a.fc&&b.a(g,"keydown",function(b){if(b.keyCode==37)ob(-a.fc);else b.keyCode==39&&ob(a.fc)});var nb=a.dc;if(!(D&1))nb=c.max(0,c.min(nb,r-u));z.wb(nb,nb,0)}};i.ve=21;i.me=22;i.le=23;i.Yd=24;i.Wd=25;i.ue=26;i.Td=27;i.ne=28;i.fe=202;i.ke=203;i.xe=206;i.qe=207;i.oe=208;i.Wc=209;var o={Wb:1},r=function(e,C){var f=this;n.call(f);e=b.hb(e);var s,A,z,r,k=0,a,m,i,w,x,h,g,q,p,B=[],y=[];function v(a){a!=-1&&y[a].od(a==k)}function t(a){f.f(o.Wb,a*m)}f.Q=e;f.hc=function(a){if(a!=r){var d=k,b=c.floor(a/m);k=b;r=a;v(d);v(b)}};f.ac=function(a){b.L(e,a)};var u;f.Ob=function(D){if(!u){s=c.ceil(D/m);k=0;var o=q+w,r=p+x,n=c.ceil(s/i)-1;A=q+o*(!h?n:i-1);z=p+r*(h?n:i-1);b.k(e,A);b.l(e,z);for(var f=0;f<s;f++){var C=b.md();b.Lc(C,f+1);var l=b.rd(g,"numbertemplate",C,d);b.q(l,"absolute");var v=f%(n+1);b.D(l,!h?o*v:f%i*o);b.B(l,h?r*v:c.floor(f/(n+1))*r);b.E(e,l);B[f]=l;a.Lb&1&&b.a(l,"click",b.A(j,t,f));a.Lb&2&&b.a(l,"mouseover",b.Mb(b.A(j,t,f),l));y[f]=b.Xb(l)}u=d}};f.Ab=a=b.ab({Hc:10,Ic:10,Jc:1,Lb:1},C);g=b.p(e,"prototype");q=b.k(g);p=b.l(g);b.vb(g,e);m=a.kc||1;i=a.yd||1;w=a.Hc;x=a.Ic;h=a.Jc-1;a.bc==l&&b.o(e,"noscale",d);a.mb&&b.o(e,"autocenter",a.mb)},s=function(a,g,h){var c=this;n.call(c);var r,q,e,f,i;b.k(a);b.l(a);function k(a){c.f(o.Wb,a,d)}function p(c){b.L(a,c||!h.Eb&&e==0);b.L(g,c||!h.Eb&&e>=q-h.jb);r=c}c.hc=function(b,a,c){if(c)e=a;else{e=b;p(r)}};c.ac=p;var m;c.Ob=function(c){q=c;e=0;if(!m){b.a(a,"click",b.A(j,k,-i));b.a(g,"click",b.A(j,k,i));b.Xb(a);b.Xb(g);m=d}};c.Ab=f=b.ab({kc:1},h);i=f.kc;if(f.bc==l){b.o(a,"noscale",d);b.o(g,"noscale",d)}if(f.mb){b.o(a,"autocenter",f.mb);b.o(g,"autocenter",f.mb)}};function q(e,d,c){var a=this;m.call(a,0,c);a.Pc=b.nc;a.Xc=0;a.bd=c}jssor_1_slider_init=function(){var g={cc:d,zb:800,Uc:f.je,He:{G:s},Ie:{G:r}},e=new i("jssor_1",g);function j(){var d=b.Le(e.Q,"slides");if(d){var c=d[1];if(c){var a=b.p(c,"ad");if(!a){a=b.nb();b.cb(a,"position:absolute;top:0px;right:0px;width:80px;height:20px;background-color:rgba(255,255,140,0.5);font-size: 12px;line-height: 20px;text-align:center;");b.Lc(a,"Jssor Slider");b.E(c,a)}}}}j();function a(){var b=e.Q.parentNode.clientWidth;if(b){b=c.min(b,1920);e.ie(b)}else h.setTimeout(a,30)}a();b.a(h,"load",a);b.a(h,"resize",a);b.a(h,"orientationchange",a)}})(window,document,Math,null,true,false)</script><style>.jssorb05{position:absolute}.jssorb05 div,.jssorb05 div:hover,.jssorb05 .av{position:absolute;width:16px;height:16px;background:url('img/b05.png') no-repeat;overflow:hidden;cursor:pointer}.jssorb05 div{background-position:-7px -7px}.jssorb05 div:hover,.jssorb05 .av:hover{background-position:-37px -7px}.jssorb05 .av{background-position:-67px -7px}.jssorb05 .dn,.jssorb05 .dn:hover{background-position:-97px -7px}.jssora22l,.jssora22r{display:block;position:absolute;width:40px;height:58px;cursor:pointer;background:url('img/a22.png') center center no-repeat;overflow:hidden}.jssora22l{background-position:-10px -31px}.jssora22r{background-position:-70px -31px}.jssora22l:hover{background-position:-130px -31px}.jssora22r:hover{background-position:-190px -31px}.jssora22l.jssora22ldn{background-position:-250px -31px}.jssora22r.jssora22rdn{background-position:-310px -31px}</style><div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 450px; overflow: hidden; visibility: hidden;"><!-- Loading Screen --><div data-u="loading" style="position: absolute; top: 0px; left: 0px;"><div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div><div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div></div><div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 450px; overflow: hidden;"><div data-p="225.00" style="display: none;"><a href="servicios/transporte.php"><img data-u="image" src="img/fondos_home1.jpg" /></a></div><div data-p="225.00" style="display: none;"><a href="servicios/importaciones.php"><img data-u="image" src="img/fondos_home2.jpg" /></a></div><div data-p="225.00" style="display: none;"><a href="servicios/servicio.php?id=1&n=Frigorifico"><img data-u="image" src="img/fondos_home3.jpg" /></a></div><div data-p="225.00" style="display: none;"><a href="servicios/importaciones.php"><img data-u="image" src="img/fondos_home4.jpg" /></a></div><div data-p="225.00" style="display: none;"><a href="servicios/servicio.php?id=3&n=Cerdo%20en%20Pie"><img data-u="image" src="img/fondos_home5.jpg" /></a></div><a data-u="ad" href="http://www.jssor.com" target="_blank" style="display:block;position:absolute;top:0;right:0;width:16px;height:16px;"><img src="img/icon-16.png" title="Jssor Slider" alt="jQuery Slider" /></a></div><!-- Bullet Navigator --><div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1"><!-- bullet navigator item prototype --><div data-u="prototype" style="width:16px;height:16px;"></div></div><!-- Arrow Navigator --><span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span><span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span></div><script>jssor_1_slider_init();</script><!-- #endregion Jssor Slider End --></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><table width="800" border="0" align="center" cellpadding="0" cellspacing="25">
      <tr>
        <td align="right" valign="top"><span class="textosubtitleg"><?php echo $row_rs_home['titulo']; ?></span></td>
        <td align="left" valign="top"><p><?php echo $row_rs_home['texto']; ?></p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#EAEAEA"><table width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#EAEAEA"><table width="99%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="contacto-titlehome"><span class="textosubtitleM">NUESTROS SERVICIOS INTEGRALES</span><br />
              <img src="images/nieve3.png" width="39" height="19" alt="Friaco" /></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><iframe src="efecto.html" width="900" height="506" frameborder="0" scrolling="no" align="middle"></iframe></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#333333"><table width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/logo-friaco-transparente.png" width="250" height="100" alt="Logo Grupo Friaco" /></td>
            <td align="left" valign="top">
            <span class="contacto-title">Contacto</span> <br/>
      <span class="contacto-texto"><?php echo $row_rs_contacto['telefono1']; ?><br/><?php echo $row_rs_contacto['telefono2']; ?></span><br/><br/>
      <span class="contacto-title">Nextel</span><br/><span class="contacto-texto"><?php echo $row_rs_contacto['telefono3']; ?><br />
      <br/><?php echo $row_rs_contacto['fax']; ?><br />
      <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Facebook','','images/facebookicon2b.png',1)"><img src="images/facebookicon2.png" alt="Facebook Grupo Friaco" width="30" height="30" id="Facebook" /></a> <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Twitter Friaco','','images/twittericon2b.png',1)"><img src="images/twittericon2.png" alt="Twitter Grupo Friaco" width="30" height="30" id="Twitter Friaco" /></a><br />
      <br />
      </span></td>
            <td valign="top"><p><span class="contacto-title">DIRECCI&Oacute;N:</span><br />
              <span class="contacto-texto">Eje 2 Norte, Canal del Norte #318, <br />
                Colonia  20 de noviembre, <br />
                Delegaci&oacute;n Venustiano Carranza, <br />
                CIudad de M&eacute;xico.</span><br />
              <span class="contacto-title">              </span><br />
              <span class="contacto-texto"><?php echo $row_rs_contacto['email1']; ?></span> <br />
                <br />
                <br/>
              </p></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="333" height="1" alt="spacer" /></td>
            <td><img src="images/spacerblanco.gif" width="333" height="1" alt="spacer" /></td>
            <td valign="top"><img src="images/spacerblanco.gif" width="333" height="1" alt="spacer" /></td>
          </tr>
          <tr>
            <td align="center"><a href="http://www.idennto.com" target="_blank" class="textototal"></a></td>
            <td><a href="nosotros/privacidad.php" target="_blank" class="textototal">Aviso de privacidad</a><span class="contacto-texto"> / Derechos reservados &reg; 2016</span></td>
            <td align="left" valign="middle"><a href="http://www.idennto.com" target="_blank" class="textototal">Hecho por idennto.com</a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
mysql_free_result($rs_contacto);

mysql_free_result($rs_servicios);

mysql_free_result($rs_home);

mysql_free_result($rs_servlink);
?>
