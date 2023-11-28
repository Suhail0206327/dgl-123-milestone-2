<?php require('view/partials/header.php');?>
      
       
    <main class="staff">
        <h1>Total number of employees: <?= $number_of_workers ?></h1>
        <div class = "staff-button-container" >
        <button class = "button5" >Kitchen</button>
        <button class = "button5"> Front House </button>
        </div>
        
        <table>

           
        
           
        
            <?php for ( $i = 0; $i < $count; $i++) {
                $staff = $staffs[$i];
                ?>
         
         
            <tr>
                <td >
                    <div class="face"></div>
                </td>
                <td><?= $staff['name'] ?> </td>
                <td><?= $staff['position']?></td>
                <td>$<?= $staff['pay'] ?>/hr</td>
                <td><?= $staff['email'] ?>  </td>
                <td>
        <form  action="delete/staff" method="POST">
      
      <input type="hidden" id="id" name="id" value = <?=$staff['id']?> required>
      <button class = "button6" type="submit">Delete</button>
  </form>

</td>

            </tr>
            
            <?php }?>
        </table>
       
        <div>
            <h2>Hire a new staff</h2>
            <form type = "submit" method = "POST">
            <input  class = "button5" type="submit" value="Hire">
            </form>
         
        </div>
        
        
    </main>
    <?php require('view/partials/footer.php');?>
