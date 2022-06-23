<?php
// include("class/users.php");
// $qus=new  users;
// $cat=$_POST['cat'];
// $qus->qus_show($cat);
// $_SESSION['cat']=$cat;
/* echo"<pre>";
print_r($qus->qus); */
?>

<!DOCTYPE html>
<html>
<head>
  
	<script type="text/javascript">
	// function timeout()
	// {
	// 	var hours=Math.floor(timeLeft/3600);
	// 	var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
	// 	var second=timeLeft%60;
	// 	var hrs=checktime(hours);
	// 	var mint=checktime(minute);
	// 	var sec=checktime(second);
	// 	if(timeLeft<=0)
	// 	{
	// 		clearTimeout(tm);
	// 		document.getElementById("form1").submit();
	// 	}
	// 	else
	// 	{

	// 		document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
	// 	}
	// 	timeLeft--;
	// 	var tm= setTimeout(function(){timeout()},1000);
	// }
	// function checktime(msg)
	// {
	// 	if(msg<10)
	// 	{
	// 		msg="0"+msg;
	// 	}
	// 	return msg;
	// }

	function  timeout()
{
    var minute=Math.floor(timeLeft/60);
    var second=timeLeft%60;
 
    if(timeLeft<=0 ){
        clearTimeout(tm);
        document.getElementById("form1").submit();
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
<body onload="timeout()" >

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		  <h2>Onilne quiz in php 
		  <script type="text/javascript">
		  //var timeLeft=2*60*60;
		  var timeLeft=2*60;
		  
		  </script>
		  
		  <div id="time"style="float:right">timeout</div></h2>
		<?php
        $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
        $link->set_charset("utf8");
        $i=1;
        
        $question= mysqli_query($link, "SELECT * FROM `QUESTIONS`");
        while($row=mysqli_fetch_assoc($question));
		foreach($row= $question as $qust) {?> 
		<form method="post" id="form1" action="check">
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><?php echo $i;?>  <?php echo $qust['QUESTION'];?>  </th>
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($qust['A'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['A'];?> </td>
			  </tr>
			<?php }?>
			<?php if(isset($qust['B'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['B'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['C'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['C'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['D'])){?>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['D'];?></td>
			  </tr>
			  <?php }?>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
			  </tr>
			</tbody>
			
		  </table>
		<?php $i++;}?>
	<center><input type="submit" value="submit Quiz" class="btn btn-success" /></center>
</form>	
		</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>
