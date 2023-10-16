<?php require('partials/header.php');?>
      
       
    <main class="staff">
        <h1>Total number of employees: <?= $number_of_workers ?></h1>
        <table>

            <th>FOH</th>
        
            <!-- <tr>
                <td></td>
                <td>name</td>
                <td>position</td>
                <td>wage</td>
                <td>total days worked</td>
            </tr> -->
        
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
        <table>

<th>Kitchen</th>



<?php for ( $i = 0; $i < $number_of_workers/4; $i++) {?>


<tr>
    <td >
        <div class="face"></div>
    </td>
    <td>Rubeus Hagrid </td>
    <td>Line cook</td>
    <td>$<?= random_numberfunction(17,28) ?>/hr</td>
    <td><?= random_numberfunction(0,365) ?> days </td>
</tr>

<?php }?>
</table>
        
        
    </main>
    <?php require('partials/footer.php');?>
