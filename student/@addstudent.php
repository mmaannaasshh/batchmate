 <?php 
include("_header.php");

?>
 <div class="container-fluid">
        <div class="card mb-4 py-3 border-left-primary">
          
          
            <h1 class="h3 mb-4 text-gray-800">Add New Students</h1>
            <form>
              <div class="row">
                <div class="col-5">

                                 <div class="form-group">
<label>Select Center</label>
  <select class="form-control" name="Select_Center">
  <option value="RGYCM">RGYCM - KUMRA HOSPITAL MATH </option>
  <option value="TEST1">TEST1</option>
  <option value="TEST2">TEST2</option>
  <option value="TEST3">TEST3</option>
  <option value="TEST4">TEST4</option>
  
</select></div>
                  <div class="form-group">
                    <label for="center_code1">Enter Student Name</label>
                    <input type="text" class="form-control" id="center_code1" placeholder="Enter Student Name">
                  </div>
                </div>
  <div class="col-5">
  <div class="form-group">
<label>Select Year</label>
<select class="form-control" name="select_year">
  <option value="">Select Year </option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  
</select>
</div>
                
                  <div class="form-group">
                    <label for="center_code2">Enter Contact Number</label>
                    <input type="text" class="form-control" id="center_code2" placeholder="Enter Contact Number">
                  </div>
                </div>            
              </div>
               <div class="col-5">
                  <div class="form-group">
                    <label for="center_code2">Enter Email ID</label>
                    <input type="email" class="form-control" id="center_code2" placeholder="Enter Email ID">
                  </div>
                </div> 
                <div class="col-5">
                  <div class="form-group">
                    <label for="center_code2">Date of Birth</label>
                    <input type="date" class="form-control" id="center_code2">
                  </div>
                </div> 

              
              

<!-- Default unchecked -->

  <div class="form-group">
<label>Select Gender</label>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">Male</label>
</div>

<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
  <label class="custom-control-label" for="defaultChecked">Female</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">Other</label>
</div>

</div>
  <div class="form-group">
<label>Marital Status</label>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">Married</label>
</div>

<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
  <label class="custom-control-label" for="defaultChecked">Single</label>
</div>

</div>


<div class="col-5">
  <div class="form-group">
<label>Select Course Duration</label>
<select class="form-control" name="couse_duration">
  <option value="">Select Course Duration</option>
  <option value="0 Month">0 Month</option>
  <option value="1 Month">1 Month</option>
  <option value="2 Month">2 Month</option>
  <option value="3 Month">3 Month</option>
  <option value="4 Month">4 Month</option>
  <option value="6 Month">6 Month</option>
  <option value="9 Month">9 Month</option>
  <option value="12 Month">12 Month</option>
  <option value="18 Month">18 Month</option>
  <option value="24 Month">24 Month</option>
  
</select>
</div>
</div>
<div class="col-5">
  <div class="form-group">
<label>Select Course</label>
<select class="form-control" name="couse">
  <option value="">Select Course</option>
  <option value="DCA">Diploma In Computer Application </option>
  <option value="CCT">Certificate Course In Typing</option>
  <option value="ADOAP">Advance Diploma In Office Accounts & Publishing</option>
  <option value="ADCA">Advance Diploma In Computer Application </option>
  <option value="DITA">Diploma In Information Technology & Application </option>
  <option value="DDTP">Diploma In Desktop Publishing </option>
  <option value="CDEO">Certificate In Data Entry Operations</option>
  <option value="CCKI">Certificate Course In Impression  </option>
  <option value="DCAAE">Diploma In Computer Application & Accounting Expert </option>
  <option value="DCAMS">Diploma In Computer Application & Multimedia specialist</option>
  <option value="KIDS – Smart Computer Course">KIDS – Smart Computer Course</option>
  <option value="DCHE">Diploma In Computer Hardware Engineering </option>
  <option value="DAC">Diploma in Auto Cad</option>
  <option value="DCAA">Diploma In Computer Accounting </option>
  <option value="CCCA">Certificate course In computer Accounting </option>
  <option value="DCTT">Diploma In Computer Teacher Training</option>
  
  
</select>
</div>
</div>
           <div class="col-5">
                  <div class="form-group">
                    <label for="center_code2">Enter Father's Name</label>
                    <input type="text" class="form-control" id="center_code2" placeholder="Enter Father's Nam">
                  </div>
                </div> 
                 <div class="col-5">
                  <div class="form-group">
                    <label for="center_code2">Enter Mother's Name</label>
                    <input type="text" class="form-control" id="center_code2" placeholder="Enter Mother's Nam">
                  </div>
                </div> 
                <div class="col-5">
                <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Address"></textarea>
  </div>
    <div class="col-12">
                  <div class="form-group">
                    <label for="center_code2">Enter Pincode</label>
                    <input type="text" class="form-control" id="center_code2" placeholder="Enter Pincode">
                  </div>
                </div> 
                <div class="col-12">
  <div class="form-group">
<label>Select State</label>
<select class="form-control" name="state">
  <option value="">Select State</option>
  <option value="West Bengal">West Bengal</option>
  <option value="UP">Uttar Pradesh</option>
  <option value="Bihar">Bihar</option>
  <option value="Jharkhand">Jharkhand</option>
  
  
</select>
</div>
</div>
<div class="col-12">
<div class="form-group">
<label>Select Districts</label>
<select class="form-control" name="state">
  <option value="">Select Districts</option>
  <option value="North 24 PGS">North 24 PGS</option>
  <option value="South 24 PGS">South 24 PGS</option>
  
  
  
</select>
</div>
</div>



<div class="col-12">
<div class="form-group">
<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
    <span>Upload Images</span>
  </div>

</div>
</div>

<div class="col-12">
<div class="form-group">

    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
    <span>Upload Signature</span>
  </div>
</div>
</div>

<div class="form-group has-success">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>

                 

            </form>
          </div>
        </div>

        <?php
        include("_footer.php");
        ?>