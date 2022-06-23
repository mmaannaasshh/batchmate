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
  padding: 20px;
border: 1px solid #5DADE2;
padding-bottom: 90px;
background-color: #343a40 ;
max-width: 1000px;
padding-top: 10px;
margin: auto;

}

form h2{

   color: #fff;
   font-weight: 600;
}



form label{
  color: #fff;
  padding-top: 20px;
  padding-bottom: 2px;
}

#fileupload{
  padding-top: 30px;
}

form button{
  margin-top: 20px;
  float: right;
  border:none;
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
<form class="s-companyform ">
  <div class= container >
    <h2 align='center'>Company's Form</h2><br>
  <div class="row">
    <div class="col">
        <label for="uname">Name*</label>
      <input type="text" class="form-control" >
    </div>
    <div class="col">
      <label for="uname">City/State*</label>
      <input type="text" class="form-control">
    </div>
  </div>
  <div class="row">
    <div class="col">
        <label for="mobile">Mobile Number*</label>
      <input type="text" class="form-control" name="mobile" >
    </div>
    <div class="col">
      <label for="Email">Email*</label>
      <input type="email" class="form-control" name="email">
    </div>
  </div>

  <div class="form-group">
  <label for="Message">Message</label>
    <textarea class="form-control" id="Message" rows="3" name="Message"></textarea>
    <!-- <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div> -->
  </div>
  <div>
<button type="submit" form="form1" value="Submit">Submit</button>
  </div>
</div>
</form>
</div>
</div>
