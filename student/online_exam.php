<html>
<head>
<script>
function  timeout()
{
    var minute=Math.floor(timeLeft/60);
    var second=timeLeft%60;
 
    if(timeLeft<=0 ){
        clearTimeout(tm);
        document.getElementById("formtm").submit();
        return;
    }
    else{
        if(minute<10){
            minute="0"+minute;
        }
        document.getElementById("time").innerHTML=minute+":"+second;

    }
    timeLeft--;
    var tm= setTimeout(function(){timeout()},1000);
}

</script>
</head>

<?php
$link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
$link->set_charset("utf8");
$s_id=$_SESSION["s_id"];
$query= mysqli_query($link,"SELECT `s_id`,`select_course` FROM `all_student` WHERE s_id='$s_id'");
$row= mysqli_fetch_assoc($query);
$cname=$row['select_course'];


?>

<div class="container mt-4">
<div class="col-sm-6 col-sm-offset-3">
<div class="card">
    <div class="card-body">
    <form class="forms-sample" method="POST" action="">
        <div class="form-group">
        
        <select class="form-control" name="semid" required="">
            <option value="">Select Course</option>
            <?php
            $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
            $link->set_charset("utf8");

            $qry=mysqli_query($link,"SELECT * FROM `QUESTIONS` where `COURSE`='$cname'");
            
            $row = mysqli_fetch_assoc($qry)
            ?>
                <option value="<?=$row['id'] ?>"><?=$row['COURSE'] ?></option>

            <?php  $link->close;   ?>
        
            

        </select>
        </div>
        <button type="submit" name="submit" class="btn btn-success mr-2">Search</button>
                         
                        </form>
                      </div>
</div>
</div>
</div>

<?php
if(isset($_POST['submit'])){
    ?>
    <body onload="timeout()">
 
<div class="container">
<h1 class="text-center text-primary">RGYCI Quiz</h1>
<h2>
<script>

var timeLeft=2*60;

</script>
<div id="time" style="float:right" >timeout</div ></h2>
<h2 class="text-center text-primary">Welcome <?php echo $_SESSION["user"] ?></h2><br>
<div class="col-lg-8 m-auto d-block">
<div class="card"> 

<h3 class="text-center card-header">Welcome <?php echo $_SESSION["user"] ?> you have to select out of 50. Best of Luck :)</h3>
</div><br>
 
<form action="check" id="formtm" method="POST">
<?php
 $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
 $link->set_charset("utf8");

//  for($i=1;$i < 51; $i++){
    $i=1;

//  $question= mysqli_query($link, "SELECT * FROM `QUESTIONS` where `COURSE`='$cname'");
 $question= mysqli_query($link, "SELECT A.* FROM (
    SELECT * FROM `QUESTIONS` WHERE `COURSE`='$cname' 
    ORDER BY (id = $i) DESC, RAND()      
    
) as A
ORDER BY RAND()");  /* suffel query but option not working only one value selected */
 while ($rows = mysqli_fetch_array($question)){



    ?>
    <div class="card">
    <h4 class="card-header" style="background-color: steelblue; color: yellow;"  value="<?php echo $rows['id'] ?>"><?php echo $rows['QUESTION'] ?></h4>
</div>

        <div class="card bg-dark text-white">
     <div class="card-body">
         <input type="radio" name="optradio[<?php echo $i; ?>]" value="0"  /> <?php echo $rows['A']?> </br>
         <input type="radio" name="optradio[<?php echo $i; ?>]" value="1" /> <?php echo $rows['B']?> </br>
         <input type="radio" name="optradio[<?php echo $i; ?>]" value="2" /><?php echo $rows['C']?> </br>
         <input type="radio" name="optradio[<?php echo $i; ?>]" value="3" /><?php echo $rows['D']?> </br>
        </div>
</div>
        
  

   <?php
   $i++; }
   
    ?>
 
<input class="btn btn-success mt-2 d-block" type="submit" id="formtm" value="Submit Quiz">
</form>

</div>
</div>
	

</body>
</html>



    <?php
}

?>
