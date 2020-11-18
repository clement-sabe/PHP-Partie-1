<?php $answer='YES';
include 'header.php';
?>

<p class="text-center h2">Vous avez répondu <?php
       if($answer=='YES'){
           echo '"oui"';
       }
       elseif($answer =='NO'){
           echo '"non"';
       }
       else{
           echo 'rien du tout';
       }
    ?></p>

<?php include 'footer.php';