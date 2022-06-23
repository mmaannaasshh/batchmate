<?php

   

    // foreach($_POST['optradio'] as $option_num => $option_val)
    // echo $option_num." ".$option_val."<br>";
    if(!empty($_POST['optradio'])){

        $count = count($_POST['optradio']);

        //echo "<h1>" Out of 50, you have selected "</h1>";

       // echo'<h1>'"Out of 50, you have selected ".$count. " options"'</h1>';
       echo "<p> <font color=red>'Out of 50, you have selected .$count.  options Contact Center for Result</font> </p>";

    }else{

        echo "You Have not Select Any Question";
    }
 

        ?>

