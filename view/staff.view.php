<?php require('partials/header.php');?>
      
       
    <main class="staff">
        <h1>Total number of employees: <?= $number_of_workers ?></h1>
        <table>

            <th>FOH</th>
            
            <tr>
                <td >
                    <div class="face"></div>
                </td>
                <td>Sheryk</td>
                <td>floor mannager</td>
                <td>$<?= random_numberfunction(17,28)?>/hr</td>
                <td></td>
            </tr>
            <tr>
                <td >
                    <div class="face"></div>
                </td>
                <td>name</td>
                <td>name</td>
                <td>name</td>
            </tr>
            
        </table>
        
    </main>
    <?php require('partials/footer.php');?>
