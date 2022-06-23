<?php echo $_SESSION["select_course"]  ?>



<?php
$course=$_SESSION["select_course"];
$link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
$link->set_charset("utf8");


$videolink= mysqli_query($link,"SELECT * FROM `online_tuts` where `onlie_course`='".$course=$_SESSION['select_course']."'");

//$videolink= mysqli_query($link,"SELECT * FROM `online_tuts` WHERE `onlie_course`='NTT'");


// echo"<pre>";

// print_r($videolink);

// echo"</pre>";

// exit;
//str_replace("watch?v=", "embed/",$videourl);

while ($row=mysqli_fetch_assoc($videolink)){

?>

<td><iframe width="520" height="345" src="<?php echo str_replace("watch?v=", "embed/",$row['video_link']);?>">
</iframe> </td>
<?php



}
$link->Close();

//$video= mysqli_fetch_assoc($videolink);
//$videourl=$video['video_link'];



// echo"<pre>";

// print_r($url);
// echo"</pre>";

//str_replace("watch?v=", "embed/",$videourl);
?>
