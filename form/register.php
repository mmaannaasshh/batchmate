<?php
// include("../_slide.php");

 ?>
 <style type="text/css">

 body{
   background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
 }



 </style>



 </head>
 <body>

 <!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
 <div class="container">
   <div class="row">
     <div class="col-sm-4"> </div>
 <div class="col-md-4">


 <br/>

 <div class="col-sm-12">

   <ul class="nav nav-pills" >



     <!-- <button><li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Student</a></li></button>

    <button> <li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">Teacher</a></li></button>

    <button> <li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu2">Center</a></li></button> -->

    <div class="container">
      <!-- <h1 class="text-responsive text-success"> Registration</h1><br> -->
      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-toggle="tab" href="#home">Student</button>
        <button type="button" class="btn btn-primary"  data-toggle="tab" href="#menu1">Teacher</button>
        <button type="button" class="btn btn-primary" data-toggle="tab" href="#menu2">Center</button>
      </div>
    </div>


   </ul>

 <br/>


   <div class="tab-content">
     <div id="home" class="tab-pane fade in active">

 <form action="#">

   <div class="form-group">
     <label for="UserName">Student Name</label>
     <input type="text" class="form-control" id="email">
   </div>

   <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" id="email">
   </div>

   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>

   <div class="form-group">
     <label for="pwd">Confirm Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>



   <button type="submit" class="btn btn-default btn-lg">Submit</button>
   <button type="submit" class=" pull-right btn-link"><a href="#">Forget password</a></button>

 </form>
 <br/>
 <a href="#" class="pull-right btn btn-block btn-success" > Already Register ?   </a>



     </div>

     <div id="menu1" class="tab-pane fade">

 <form action="#">

   <div class="form-group">
     <label for="UserName">Teacher Name</label>
     <input type="text" class="form-control" id="email">
   </div>

   <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" id="email">
   </div>

   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>

   <div class="form-group">
     <label for="pwd">Confirm Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>



   <button type="submit" class="btn btn-default">Submit</button>

   <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

 </form>
 <br/>
 <a href="#" class="pull-right btn btn-block btn-success" > Already Register ?   </a>






     </div>
     <div id="menu2" class="tab-pane fade">

 <form action="#">

   <div class="form-group">
     <label for="UserName">Center Name</label>
     <input type="text" class="form-control" id="email">
   </div>

   <div class="form-group">
     <label for="UserName">Location</label>
     <select  class="form-control">
       <option value="Andhra Pradesh">Andhra Pradesh</option>
       <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
       <option value="Arunachal Pradesh">Arunachal Pradesh</option>
       <option value="Assam">Assam</option>
       <option value="Bihar">Bihar</option>
       <option value="Chandigarh">Chandigarh</option>
       <option value="Chhattisgarh">Chhattisgarh</option>
       <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
       <option value="Daman and Diu">Daman and Diu</option>
       <option value="Delhi">Delhi</option>
       <option value="Lakshadweep">Lakshadweep</option>
       <option value="Puducherry">Puducherry</option>
       <option value="Goa">Goa</option>
       <option value="Gujarat">Gujarat</option>
       <option value="Haryana">Haryana</option>
       <option value="Himachal Pradesh">Himachal Pradesh</option>
       <option value="Jammu and Kashmir">Jammu and Kashmir</option>
       <option value="Jharkhand">Jharkhand</option>
       <option value="Karnataka">Karnataka</option>
       <option value="Kerala">Kerala</option>
       <option value="Madhya Pradesh">Madhya Pradesh</option>
       <option value="Maharashtra">Maharashtra</option>
       <option value="Manipur">Manipur</option>
       <option value="Meghalaya">Meghalaya</option>
       <option value="Mizoram">Mizoram</option>
       <option value="Nagaland">Nagaland</option>
       <option value="Odisha">Odisha</option>
       <option value="Punjab">Punjab</option>
       <option value="Rajasthan">Rajasthan</option>
       <option value="Sikkim">Sikkim</option>
       <option value="Tamil Nadu">Tamil Nadu</option>
       <option value="Telangana">Telangana</option>
       <option value="Tripura">Tripura</option>
       <option value="Uttar Pradesh">Uttar Pradesh</option>
       <option value="Uttarakhand">Uttarakhand</option>
       <option value="West Bengal">West Bengal</option>
   </select>
   </div>

   <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" id="email">
   </div>

   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>

   <div class="form-group">
     <label for="pwd">Confirm Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>



   <button type="submit" class="btn btn-default">Submit</button>

   <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

 </form>
 <br/>
 <a href="#" class="pull-right btn btn-block btn-success" > Already Register ?   </a>






     </div>
    </div>
   </div>
 </div>
</div><br>
 <!-- This design is created by manoj chauhan  -->
 </body>
