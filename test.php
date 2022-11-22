<?php
header('X-LiteSpeed-Cache-Control:public,max-age=3,esi=on');
$control='private,no-vary,max-age=10';
$control_url=urlencode('private,no-vary,max-age=10');
?>
<p>This is public, changing every 3 seconds: <?php echo rand(); ?></p>
<esi:include src="esi.php?block=wow&control=<?php echo $control_url; ?>" />
<p>There is some text before the include</p>
<hr>
<esi:include src="wow" cache-control="<?php echo $control; ?>" />