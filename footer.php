<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anami
 */

?>

	</div><!-- #content -->

	

	<footer id="colophon" class="site-footer" role="contentinfo">
   <div class="clip_frame grpelem" id="u504"><!-- image -->
    <img class="block" id="u504_img" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-mandala-izquierdo-footer.png?crc=205811260" alt="" width="263" height="315"/>
   </div>
   <div class="clip_frame grpelem" id="u537"><!-- image -->
    <img class="block" id="u537_img" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-linea-punteada-footer-1.png?crc=4119685537" alt="" data-image-width="297" data-image-height="3"/>
   </div>
   <div class="clearfix grpelem" id="pu547"><!-- column -->
    <div class="clip_frame colelem" id="u547"><!-- image -->
     <img class="block" id="u547_img" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-linea-punteada-footer-1.png?crc=4119685537" alt="" data-image-width="297" data-image-height="3"/>
    </div>
    <a class="nonblock nontext MuseLinkActive clearfix colelem" id="u1861-8" href="index.html"><!-- content --><p><span id="u1861">© 2016</span> Todos los derechos reservados,</p><p><span id="u1861-4">Anamí</span>, Medellín - Colombia.</p></a>
   </div>
   <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u524" href="index.html"><!-- image --><img class="block" id="u524_img" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-anami-footer.png?crc=64926581" alt="" width="221" height="85"/></a>
   <div class="clearfix grpelem" id="pu1858-4"><!-- column -->
    <div class="clearfix colelem" id="u1858-4"><!-- content -->
     <h2><h2 id="u1858">Síguenos en:</h2></h2>
    </div>
    <div class="clearfix colelem" id="u1855"><!-- group -->
     <a class="nonblock nontext grpelem" id="u1815" href="http://www.facebook.com"><!-- rasterized frame --><img id="u1815_img" alt="" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-footer-facebook-anami-u1815.png?crc=106572820" data-image-width="25"/></a>
     <a class="nonblock nontext grpelem" id="u1830" href="http://www.twitter.com"><!-- rasterized frame --><img id="u1830_img" alt="" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-footer-twitter-anami-u1830.png?crc=125680237" data-image-width="49"/></a>
     <a class="nonblock nontext grpelem" id="u1823" href="http://www.instagram.com"><!-- rasterized frame --><img id="u1823_img" alt="" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-footer-instagram-anami-u1823.png?crc=95468281" data-image-width="46"/></a>
     <a class="nonblock nontext grpelem" id="u1845" href="http://www.youtube.com"><!-- rasterized frame --><img id="u1845_img" alt="" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-footer-youtube-anami-u1845.png?crc=924949" data-image-width="48"/></a>
    </div>
   </div>
   <div class="clip_frame clearfix grpelem" id="u514"><!-- image -->
    <img class="position_content" id="u514_img" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-mandala-derecho-footer.png?crc=4122074249" alt="" width="263" height="315"/>
   </div>
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Other scripts -->
<script type="text/javascript">
window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),i=0;i<f.length;i++)if("text/css"==f[i].type){var h=(f[i].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!h||!h[1]||!h[2])break;b[h[1]]=h[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(i=0;i<Muse.assets.required.length;){var h=Muse.assets.required[i],l=h.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(i,1),"undefined"!=typeof b[h]&&(k!=b[h]>>>24||l!=(b[h]&16777215))&&Muse.assets.outOfDate.push(h)):i++;f.className="version";break;case "js":k.match(/^jquery-[\d\.]+/gi)&&d&&d().jquery=="1.8.3"?Muse.assets.required.splice(i,1):i++;break;default:throw Error("Unsupported file type: "+
l);}}f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
<!-- RequireJS script -->
<script src="scripts/require.js?crc=4108833657" type="text/javascript" async data-main="scripts/museconfig.js?crc=169177150" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>

</body>
</html>
