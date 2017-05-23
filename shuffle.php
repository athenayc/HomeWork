<?php
    $card= array();
    for ($i=0; $i<=51;$i++) {
       $card[$i] = $i;
//       echo $card[$i]. '<br>';
    }
 ?>

 <?php
    $temp = array();
    for ($i=51 ; $i>=0; $i--) {
        $n=rand(0, $i);
//        if($card[$n]!=$temp){
         $temp=$card[$n];
        $card[$n]=$card[$i];
        $card[$i]=$temp;
//        }
        echo "$card[$i]. <br>";
    }

    

    ?>