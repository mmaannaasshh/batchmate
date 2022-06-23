
<?php

if (isset($_POST['submit'])){
  $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
  $link->set_charset("utf8");

  if(mysqli_connect_error()){
    die("ERROR: UNABLE TO CONNECT: ".mysqli_connect_error());
  }

$register=$_SESSION['register'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($link,"SELECT `register` FROM `all_student` WHERE `register`='$register' AND `s_password`='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($link,"UPDATE `all_student` SET `s_password`='$newpassword' WHERE `register`='$register'");
 $msg= "Your password successully changed"; 


} else {

$msg="Your current password is wrong";


}

$link->close();

}


?>


<body>

<!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                            			<p style="font-size:16px; color:red" align="center"> <?php if (isset($msg)){
                                        echo $msg;
                                     }  ?> </p>
                        </div>
                        <div class="card-body">
                            <form class="form" method="POST" action="" role="form" name="changepassword" onsubmit="return checkpass();">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" name="currentpassword" class="form-control" id="inputPasswordOld" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" name="newpassword" pattern=".{8,12}" class="form-control" id="inputPasswordNew" required="">
                                    <span class="form-text small text-muted">
                                            The password must be 8-12 characters, and must <em>not</em> contain spaces.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Verify</label>
                                    <input type="password" name="confirmpassword" class="form-control" id="inputPasswordNewVerify" required="">
                                    <span class="form-text small text-muted">
                                            To confirm, type the new password again.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success btn-lg float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card change password -->

                <script type="text/javascript">
                function checkpass()
                {
                if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
                {
                alert('New Password and Confirm Password field does not match');
                document.changepassword.confirmpassword.focus();
                return false;
                }
                return true;
                } 

                </script>
</body>

                   

