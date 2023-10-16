<?php require('partials/header.php');?>
  
       
    <main class = "statistics">
<h1><?=$currentDate?></h1>
<div class = "calendar">
<?= generate_calendar($currentMonth, $currentYear); ?>
</div>

    </main>
    <?php require('partials/footer.php');?>
