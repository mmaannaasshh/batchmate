<?php
if( isset($_POST["center_code"]) && isset($_POST["pass"]) && strlen($_POST["center_code"])>2 && strlen($_POST["pass"])>0 ) {
    $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
    $link->set_charset("utf8");
    $center_code=$_POST['center_code'];
    $sql = $sql = "SELECT * FROM `center` WHERE `ccode` = ?";
    $stmt= $link->prepare($sql);
    $stmt->bind_param("s",$center_code);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($result->num_rows == 1){
      //var_dump($_SESSION);
      if($row["status"]!=1) echo 'Login disabled!';
      elseif($row["pass"]==md5($_POST["pass"])){
        $_SESSION["loggedin"] = true; $_SESSION["usertype"] = "center"; $_SESSION["user"] = $row["owner_name"]; $_SESSION["email"] = $row["email"]; $_SESSION["center_code"] = $row["ccode"]; $_SESSION["centerid"]= $row['id']; //var_dump($_SESSION);
        echo '<script>window.location.replace("/center");</script>';

      }
      else echo "credentials did not match";
    }
    else echo "User Not Found",$row["pass"]; //$GLOBALS['post_info']="User Not Found";
    $link->close();
  }
 ?>



<style>

.c_container{
  margin: 0 auto;
text-align: center;
}

.card-container.card {

    padding: 40px 40px;
}

.s_center_login_body{
  padding: 70px 0;
  width: 40%;
  margin: 0 auto;
}

.s_center_login_body h3{
  text-align: center;
  font-size: 20px;
  color: #fff;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #1E90FF;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto;
    /* margin-top: 50px; */
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: #f7bd11 ;
    color: #000;
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: #000;
    color: #fff;
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}

@media (max-width:1014px) {
  .s_center_login_body{
    padding: 70px 0;
    width: 50%;
    margin: 0 auto;
  }
}

@media (max-width:750px) {
  .s_center_login_body{
    width: 60%;
    margin: 0 auto;
  }
}

@media (max-width:650px) {
  .s_center_login_body{
    width: 70%;
    margin: 0 auto;
  }
}

@media (max-width:450px) {
  .s_center_login_body{
    width: 90%;
    margin: 0 auto;
  }
}

 </style>

<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]){  ?>

  <div class="c_container ">
    <div class="s_center_login_body">
      <div class="card card-container ">
      <h2> <?php echo $_SESSION["user"];  ?> , You are already logged in click <a href="/form/signout"> here </a> to signout</h2>
      </div>
    </div>
  </div>

<?php } else{  ?>
 <div class="c_container ">
   <div class="s_center_login_body">
     <div class="card card-container ">

         <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <img id="profile-img" class="profile-img-card" src="/assets/img/logo.png" />

         <h3>Center Login</h3>

         <p id="profile-name" class="profile-name-card"></p>
         <form class="form-signin" method="post">
             <span id="reauth-email" class="reauth-email"></span>
             <input type="text" name="center_code" class="form-control" placeholder="Center Code" required autofocus>
             <br>
             <input type="password" name="pass" class="form-control" placeholder="Password" required>
             <div id="remember" class="checkbox">
                 <label>
                     <input type="checkbox" value="remember-me"> Remember me
                 </label>
             </div>
             <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
         </form><!-- /form -->
         <a href="#" class="forgot-password" style="color:#fff;">
             Forgot the password?
         </a>
     </div>
   </div><!-- /card-container -->
  </div><!-- /container -->
  <?php }  ?>

