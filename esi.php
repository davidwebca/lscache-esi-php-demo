<?php
$control=urldecode($_GET['control']);
header('X-LiteSpeed-Cache-Control:' . $control . ',esi=on');
?>
<?php if(isset($_GET['block']) && $_GET['block'] == 'wow'): ?>
<esi:inline name="wow" cache-control="<?php echo $control; ?>">
<p>This is an inline block, privately cached and changing every 10 seconds: <?php echo rand(); ?></p>
</esi:inline>
<?php endif; ?>