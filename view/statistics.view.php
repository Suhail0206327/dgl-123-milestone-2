<?php require('partials/header.php');?>
  
       
    <main class = "statistics">
<h1><?=$currentDate?></h1>
<div class = "calendar">
<?= generate_calendar($currentMonth, $currentYear); ?>
<?php 
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
$pc->draw();
?>
</div>

    </main>
    <?php require('partials/footer.php');?>
