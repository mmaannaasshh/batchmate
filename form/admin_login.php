
<?php
if( isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["submit"])) {
    $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
    $link->set_charset("utf8");
	$email=$_POST['email'];
	$password=md5($_POST['pass']);
    $sql = $sql = "SELECT * FROM `admin` WHERE `email`=? AND `password`=?";
    $stmt= $link->prepare($sql);
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
	$result= $stmt->get_result();
	
	// print_r($result);
	// exit;
    $row = $result->fetch_assoc();
    if ($result->num_rows == 1){
     
        $_SESSION["loggedin"] = true; $_SESSION["usertype"] = "adm"; $_SESSION["name"] = $row["name"]; $_SESSION["id"] = $row["id"];$_SESSION["email"] = $row["email"]; //var_dump($_SESSION);
		echo '<script>window.location.replace("/adm");</script>';
		
		//echo"Yes";
      }
	  else echo "credentials did not match";
	  $link->close();
    }
    
    

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<style>


.t_container{
height: 100%;
align-content: center;
padding: 0;
}

.s_techer_login_body{

}

.card{
height: 420px;
width: 400px;
background-color: #1E90FF !important;
}

.card-header{
  margin: 0 auto;
  text-align: center;
}

..card-header img{
  text-align: center;
}

.profile-img{
  width: 80px;
  height: 80px;
}

.card-header h3{
color: white;
text-align: center;
font-size: 20px;
}



.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
color: red;
}

.s_footer_links a{
  color: red;
}
.card-footer{
  padding-top: 80px;
}

</style>
</head>


 <div class="st_container student-login student-padding my-4">
   <div class="student-form">
     <div class="card card-login mx-auto text-center">
         <div class="card-header mx-auto ">
             <span> <img src="/assets/img/logo.png" class="responsive2 profile-img" alt="Logo"> </span><br/>
                         <span class="logo_title mt-5 text-light student-font"> Admin Login </span>
 <!--            <h1>--><?php //echo $message?><!--</h1>-->

         </div>
         <div class="card-body">
             <form action="" method="post">
                 <div class="input-group form-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fas fa-user"></i></span>
                     </div>
                     <input type="text" name="email" class="form-control" placeholder="Email ID.">
                 </div>

                 <div class="input-group form-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fas fa-key"></i></span>
                     </div>
                     <input type="password" name="pass" class="form-control" placeholder="Password">
                 </div>

                 <div class="form-group">
                     <input type="submit" name="submit" value="Login" class="btn btn-outline-danger float-right login_btn">
                 </div>

             </form>
         </div>
     </div>
 </div>
</div>



