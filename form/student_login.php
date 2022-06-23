<?php
if( isset($_POST["register"]) && isset($_POST["pass"])  && isset($_POST["login"]) ) {
    $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
    $link->set_charset("utf8");
    $register=$_POST['register'];
    $sql = $sql = "SELECT * FROM `all_student` WHERE `register` = ?";
    $stmt= $link->prepare($sql);
    $stmt->bind_param("s",$register);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($result->num_rows == 1){
      //var_dump($_SESSION);
      //if($row["register"]!=1) echo 'Student not registered!';
       if($row["s_password"]==md5($_POST["pass"])){
      
        // if($row['s_password']==$_POST['pass']){
        $_SESSION["loggedin"] = true; $_SESSION["usertype"] = "student"; $_SESSION["user"] = $row["s_name"]; $_SESSION["s_id"] = $row["s_id"]; $_SESSION["email"] = $row["s_email"]; $_SESSION["center_code"] = $row["c_code"]; $_SESSION["select_course"] = $row["select_course"];$_SESSION["register"] = $row["register"];//var_dump($_SESSION);
        echo '<script>window.location.replace("/student");</script>';
      }
      else echo "credentials did not match";
    }
    else echo "User Not Found",$row["pass"]; //$GLOBALS['post_info']="User Not Found";
    $link->close();
  }
 ?>



 <style>

.st_container{
  margin: 0 auto;
  text-align: center;
}

.card{

 padding: 20px 25px 30px;
 border-radius: 10px;
 background-color:#1E90FF	;
text-align: center;
}

.student-form{
  padding: 60px;
width: 50%;
margin: 0 auto;
}

.profile-img{
  width: 96px;
  height: 96px;
}

.btn{
  padding: 5px 25px;
}

.student-font{
  font-weight: 700;
}


/* .responsive2 {
  width: 80%;
  max-width: 350px;
  height: auto;
} */



</style>


 <!--- Include the above in your HEAD tag ---------->


 <div class="st_container student-login student-padding my-4">
   <div class="student-form">
     <div class="card card-login mx-auto text-center">
         <div class="card-header mx-auto ">
             <span> <img src="/assets/img/logo.png" class="responsive2 profile-img" alt="Logo"> </span><br/>
                         <span class="logo_title mt-5 text-light student-font"> Student Login </span>
 <!--            <h1>--><?php //echo $message?><!--</h1>-->

         </div>
         <div class="card-body">
             <form action="" method="post">
                 <div class="input-group form-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fas fa-user"></i></span>
                     </div>
                     <input type="text" name="register" class="form-control" placeholder="Registration No.">
                 </div>

                 <div class="input-group form-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fas fa-key"></i></span>
                     </div>
                     <input type="password" name="pass" class="form-control" placeholder="Password">
                 </div>

                 <div class="form-group">
                     <input type="submit" name="login" value="Login" class="btn btn-outline-danger float-right login_btn">
                 </div>

             </form>
         </div>
     </div>
 </div>
</div>
