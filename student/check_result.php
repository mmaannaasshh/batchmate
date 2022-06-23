<?php

if(isset($_POST['submit'])){
   

    // foreach($_POST['optradio'] as $option_num => $option_val)
    // echo $option_num." ".$option_val."<br>";
    if(!empty($_POST['optradio'])){

        $count = count($_POST['optradio']);
 
        echo"Out of 50, you have selected ".$count. " options";

        //$result= 0;
        
        $selected=$_POST['optradio'];
        print_r($selected);

        // $qesid=$_POST['id'];
        // print_r($qesid);

        $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
        $link->set_charset("utf8");
        //$i=1;
         
        for($i=1;$i < 51; $i++){
        $query=mysqli_query($link,"SELECT * FROM `QUESTIONS` where `id`='$i'");
        $result= 0;
        while($row=mysqli_fetch_array($query)){
            print_r($row['ANS']);

            $chcked =$row['ANS'] == $selected=$_POST['optradio'];

            if($chcked){
                $result++;
            }
            //$i++;
        }
        echo"Your Total Score is ".$result;
    }
}
   

   
 }


?>