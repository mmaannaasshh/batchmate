<?php
// include("../_slide.php");

 ?>

 <style>

 .s-form-padding{
   padding-top: 80px;
   padding-bottom: 130px;
 }


 .s-companyform{
   padding-top: 30px;
 }

 .s-background{
 border: 1px solid #5DADE2;
 padding-bottom: 90px;
 background-color: #AEB6BF ;
 max-width: 1000px;
 padding-top: 50px;
 margin: auto;
padding-left: 20px;
padding-right: 20px;
 }

 .s-form-padding h2{

    color: #000;
    font-weight: 600;
 }



 form label{
   color: #000;
   padding-top: 20px;
   padding-bottom: 2px;
 }

 #fileupload{
   padding-top: 30px;
 }

 form .s-button{
   margin-top: 20px;
   float: right;
   padding: 8px 90px;
   background-color: #2980B9;
   color: #fff;
 }


@media (max-width:600px) {
  .s-form-padding h2{
    font-size: 20px;
  }
}
 </style>


<div class="s-form-padding">
  <div class="s-background ">
<div class="container">
  <h2 align="center">Student Placement Form</h2>
<form method="POST"  enctype="multipart/form-data" class="was-validated">
    <div class="form-group">
      <label for="uname">1. Your Name (required)</label>
      <input type="text" class="form-control" id="uname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="mobile">2. Your Mobile Number (required)</label>
      <input type="text" class="form-control" id="mobile" name="mobile" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">3. Your City/State (required)</label>
      <input type="text" class="form-control" id="State" name="State" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Email">4. Your Email (required)</label>
      <input type="text" class="form-control" id="Email" name="Email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Subject">5. Subject</label>
      <input type="text" class="form-control" id="Subject" name="Subject" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


      <div class="form-group">
      <label for="Message">6. Your Message</label>
        <textarea class="form-control" id="Message" rows="3" name="Message"></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div>
        <label for="Message">7. Upload Your Resume</label>
        <input type="file" name="fileupload" value="fileupload" id="fileupload">
        <label for="fileupload"> Select a file to upload</label>
      </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> We hereby declare that
        the information given above are true to the best of my knowledge and belief. If any discrepancy be
        found at the time of verification, the college authority may take any action as desired.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" name="submit" class="s-button btn btn-primary">Send</button>
  </form>
</div>
</div>
</div>

<?php
if (isset($_POST['submit'])){
   $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
   $link->set_charset("utf8");

   if(mysqli_connect_error()){
   	die("ERROR: UNABLE TO CONNECT: ".mysqli_connect_error());
   }

 	if(isset($_POST['uname']))
 		$name = $_POST['uname'];
 	if(isset($_POST['mobile']))
 		$mobile = $_POST['mobile'];
 	if(isset($_POST['State']))
 		$city = $_POST['State'];
 	if(isset($_POST['Email']))
 		$email = $_POST['Email'];
 	if(isset($_POST['Subject']))
 		$subject = $_POST['Subject'];
 	if(isset($_POST['Message']))
 		$msg = $_POST['Message'];






$stmt = $link->prepare("INSERT INTO ".MYSQL_TB5." (`name`, `mobile`, `city`, `email`, `subject`, `msg`)VALUES(?,?,?,?,?,?)");
var_dump($_POST);


 	$stmt->bind_param("ssssss", $name, $mobile, $city, $email, $subject, $msg);

 	$result = $stmt->execute();

   	if(!$result){
 		echo '<div class="alert alert-danger">There was a database error </div>';
 		echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
 		D_reportLog("DB_CONNECT",mysqli_error($link),_FILE_);

 	}else{

 		echo "<script>alert('Student has been added');</script>";
         echo "<script>window.location.href='student_placement'</script>";



}

}

 ?>
