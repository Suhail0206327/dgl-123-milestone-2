<?php require('partials/header.php');?>
      
       
    <main class="staff">
        <h1>Total number of employees: <?= $number_of_workers ?></h1>
        <div class = "staff-button-container" >
        <button class = "button5" >Kitchen</button>
        <button class = "button5"> Front House </button>
        </div>
        
        <table>

            <th>FOH</th>
        
   
        
            <?php for ( $i = 0; $i < $number_of_workers/4; $i++) {?>
         
         
            <tr>
                <td >
                    <div class="face"></div>
                </td>
                <td>Myrtle Warren </td>
                <td>floor manager</td>
                <td>$<?= random_numberfunction(17,28) ?>/hr</td>
                <td><?= random_numberfunction(0,365) ?> days </td>
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
    <?php require('partials/footer.php');?>
