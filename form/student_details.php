<style>
.s_all_course table tr, td{
  border:1px solid #000;
}
.s_all_course table td{
  padding:10px;
}
</style>

<?php
if( isset($_GET["sid"]) && $_GET["sid"] >0 ) {
    $link = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);
    $link->set_charset("utf8");
    $sid=$_GET["sid"];
    $sql = $sql = "SELECT * FROM `all_student` WHERE `s_id` = ?";
    $stmt= $link->prepare($sql);
    $stmt->bind_param("s",$sid);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($result->num_rows == 1){
        $s_name=$row["s_name"];
        $reg=$row['c_code'].'Y'.$row['doa_year'].'R'.$row['id'];
        
        $gender=$row["gender"];
        $f_name=$row["f_name"];
        $m_name=$row["m_name"];
        $dob=$row['dob_day'].'/'.$row['dob_month'].'/'.$row['dob_year'];
        $doa=$row['doa_day'].'/'.$row['doa_month'].'/'.$row['doa_year'];
        $select_course=$row["select_course"];
        $c_duration=$row["c_duration"];
        $m_status=$row["m_status"];
        $s_contact=$row["s_contact"];
        $s_email=$row["s_email"];
        $address=$row["address"];
         $district=$row["district"];
        $state=$row["state"];
        $city=$row["city"];
        $pincode=$row["pincode"];
        $s_name=$row["s_name"];
        $s_name=$row["s_name"];
        $s_name=$row["s_name"];
        $s_name=$row["s_name"];
        $s_name=$row["s_name"];
        
      
      
    }
    else echo "Student Not Found";
    $link->close();
  }
 ?>

<div class="card shadow mb-4 s_all_course">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align:center;">Student Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table width="100%">

              <tr>
              <td>
              <h4> Name: <?php echo $s_name;?></h4>
              <h4> Registration No: <?php echo $reg; ?></h4>
              <h4> Course : <?php echo $select_course; ?></h4>
              </td>
              <td>
              <h5> Gender : <?php echo $gender; ?></h5>
              <h5> Gender : <?php echo $m_status; ?></h5>
              <h5> Father Name: <?php echo $f_name;?></h5>
              <h5> Mother Name: <?php echo $m_name; ?></h5>
              </td>
              <td>
              <h4> Gender : <?php echo $gender; ?></h4>
              <h4> Father Name: <?php echo $f_name;?></h4>
              <h4> Mother Name: <?php echo $m_name; ?></h4>
              </td>
              </tr>

              <tr>
              <td>
              <h5> Date of Birth : <?php echo $dob;?></h5>
              <h5> Date of Addmission : <?php echo $doa; ?></h5>
              <h5> Course : <?php echo $select_course; ?></h5>
              <h5> Duration : <?php echo $c_duration; ?></h5>
              </td>
              <td>
              <h5> Contact Number : <?php echo $s_contact;?></h5>
              <h5> Email : <?php echo $s_email; ?></h5>
              <h5> Address : <?php echo $address; ?></h5>
              <h5> District : <?php echo $district; ?></h5>
              </td>
              <td>
              
              </td>
              </tr>
              
              </table>
                
              </div>
            </div>
          </div>
