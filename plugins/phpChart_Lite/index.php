<?php
require_once("conf.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpChart - A Basic Chart</title>
</head>
<body>
    
<?php
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
$pc->add_plugins(array('trendline'));
$pc->set_defaults(array('seriesDefaults'=>array('showLine'=>false)));
// remove background, border and grid.
$pc->set_axes(array(
    'xaxis'=>array('tickOptions'=>array('showGridline'=>false)),
    'yaxis'=>array('tickOptions'=>array('showGridline'=>false))));
$pc->set_grid(array(
    'background'=>'white',
    'borderWidth'=>0,
    'borderColor'=>'#000000',
    'shadow'=>false));
$pc->draw();
?>

</body>
</html>
