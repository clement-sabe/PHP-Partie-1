<?php
$lastname = 'Sabé';
$firstname = 'Clément';
$age = 32;
include 'header.php';
?>
     <p class="text-center h2"> <?php echo $firstname.' '.$lastname.' '.$age.' ans' ;?> </p>  
     <!-- <?= $firstname.' '.$lastname.' '.$age.' ans' ;?> -->
     <?php include 'footer.php';