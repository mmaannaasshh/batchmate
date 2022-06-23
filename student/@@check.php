<?php
$link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
$link->set_charset("utf8");

//$answer=$ans->answer($_POST);
//$test= $_POST[$qust['id']];

//$test=($_POST($qust['id']));
//$ans=implode("",$test);

//print_r($ans);

//exit;

// $answer=($_POST);

// echo"<pre>";
// print_r($answer);
// echo"</pre>";

// exit;
$answer=($_POST);
$ans=implode("",$answer);
$right=0;
$wrong=0;
$no_answer=0;
// echo"<pre>";
// print_r($ans);
// echo"</pre>";

$query= mysqli_query($link,"SELECT `ANS` FROM `QUESTIONS`");

while($row=mysqli_fetch_assoc($query)){

    			
			if($row['ANS']==($_POST[$qust['id']]))
			{
				 $right++;
			}
			elseif($_POST[$qust['id']]=="no_attempt")
			{
				 $no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;

print_r($array);

?>