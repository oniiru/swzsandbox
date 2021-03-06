<div id="footer">
<?php truethemes_begin_footer_hook()// action hook, see truethemes_framework/global/hooks.php ?>
<?php
add_filter('pre_get_posts','wploop_exclude');
$footer_layout = get_option('ka_footer_layout');
$ka_footer_columns = get_option('ka_footer_columns');
$ka_scrolltoplink = get_option('ka_scrolltoplink');
$ka_scrolltoptext = get_option('ka_scrolltoplinktext');

if (($footer_layout == "full_bottom") || ($footer_layout == "full")){ ?>
<div class="footer-area">
<div class="footer-wrapper">
<div class="footer-holder">

<?php $footer_columns = range(1,$ka_footer_columns);$footer_count = 1;$sidebar = 6;
if($ka_footer_columns == 4){
	?><div class="one_fourth"><?php dynamic_sidebar($sidebar) ?></div>
		<div class="one_fourth"><?php dynamic_sidebar(++$sidebar) ?></div>
		<div class="one_half_last"><?php dynamic_sidebar(++$sidebar) ?></div>
<?php
}else{
foreach ($footer_columns as $footer => $column){
$class = ($ka_footer_columns == 1) ? '' : '';
$class = ($ka_footer_columns == 2) ? 'one_half' : $class;
$class = ($ka_footer_columns == 3) ? 'one_third' : $class;
$class = ($ka_footer_columns == 4) ? 'one_fourth' : $class;
$class = ($ka_footer_columns == 5) ? 'one_fifth' : $class;
$class = ($ka_footer_columns == 6) ? 'one_sixth' : $class; 
$lastclass = (($footer_count == $ka_footer_columns) && ($ka_footer_columns != 1)) ? '_last': '';
?><div class="<?php echo $class.$lastclass; ?>"><?php dynamic_sidebar($sidebar) ?></div><?php $footer_count++; $sidebar++; } 
}
?>



</div><!-- footer-holder -->
<div id="copyright"> &copy; SolidWize Engineering LLC </div>

</div><!-- end footer-wrapper -->
</div><!-- end footer-area -->
<?php } else {echo '<br />';} ?>
</div><!-- end footer -->


<?php if (($footer_layout == "full_bottom") || ($footer_layout == "bottom")){ ?>

<?php } ?>



<?php 
//codes to load scripts has been moved to truethemes_framework/global/javascript.php
wp_footer();
?>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0013/0103.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);

</script>


<!-- HitTail Code -->
<script type="text/javascript">
     (function(){ var ht = document.createElement('script');ht.async = true;
       ht.type='text/javascript';ht.src = '//94870.hittail.com/mlt.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ht, s);})();
</script>
</body>
</html>