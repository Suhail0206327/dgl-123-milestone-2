<?php require('partials/header.php');?>
  
       
    <main class = "statistics">
<h1><?=$currentDate?></h1>

<?= generate_calendar($currentMonth, $currentYear); ?>
    </main>
    <?php require('partials/footer.php');?>
