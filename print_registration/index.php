<?php
if(isset($_GET['rid']) && strlen($_GET['rid'])>5){

    include('../_config.php');
    $link = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
    $rid=$_GET['rid'];

    $student_info= mysqli_query($link, "SELECT * FROM ".MYSQL_TB6." WHERE `register`= '$rid'");
    if(mysqli_num_rows($student_info)!=1) {echo "Check Registration No"; exit();}
    $row = mysqli_fetch_assoc($student_info);
    $img_photo_path='../uploads/'.$row['c_code'].'/student/'.$row['s_id'].'_image.jpg';
    $img_sign_path='../uploads/'.$row['c_code'].'/student/'.$row['s_id'].'_signature.jpg';
    $img_base_path='../_static/RGYCI_REG.jpg';

    if (file_exists($img_base_path)) {
        if (file_exists($img_photo_path)) {
        if (file_exists($img_sign_path) && mime_content_type($img_sign_path)=="image/jpeg") {

        $img_base=imagecreatefromjpeg($img_base_path);
        $img_photo =imagecreatefromjpeg($img_photo_path); $img_photo = imagescale($img_photo , 250, 300);
        // $img_photo_size =getimagesize($img_photo_path); 
        $img_sign =imagecreatefromjpeg($img_sign_path); $img_sign = imagescale($img_sign , 300, 80);
        // $img_sign_size =getimagesize($img_sign_path);
        ob_clean();
        $s_name=strtoupper($row['s_name']); $reg_no=$row['register']; $address=$row['address'].', '.$row['pincode'].', '.$row['state']; $s_contact=$row['s_contact'];$dob=$row['dob_year'].'.'.$row['dob_month'].'.'.$row['dob_day'].' (Y.M.D)';$c_code=$row['c_code'];$study_center=$row['c_code'];$fname=strtoupper($row['f_name']);
        

        $font="../_static/arial.ttf";
        imagecolorat($img_sign, 0, 0);

        imagecopymerge($img_base, $img_photo, 1830, 650, 0, 0, 250, 300, 100);// $color=imagecolorallocate($img_base, 19,21,22);
        imagecopymerge($img_base, $img_sign, 1810, 955, 0, 0, 300, 80, 100);     
                $color=imagecolorallocate($img_base, 19,21,22);
        imagettftext($img_base, 30, 0, 1974,240, $color, $font,$row['s_id']);
        imagettftext($img_base, 30, 0, 760,925, $color, $font,$s_name);
        imagettftext($img_base, 45, 0, 900,810 , $color, $font,$reg_no);
        imagettftext($img_base, 30, 0, 760,995 , $color, $font,$fname);
        imagettftext($img_base, 30, 0, 760,1070 , $color, $font,$dob);
        imagettftext($img_base, 30, 0, 760,1140 , $color, $font,$c_code);
        imagettftext($img_base, 30, 0, 760,1200 , $color, $font,"Course- ".$row['select_course']);
        imagettftext($img_base, 30, 0, 760,1260 , $color, $font,"Session- ".$row['doa_year']);

        header('content-type:image/jpeg'); 
        imagejpeg($img_base);
        imagedestroy($img_base);
        imagedestroy($img_photo);
        imagedestroy($img_sign);
        exit();
        }   else echo "image / sign have to be in jpg format";
        }   else echo "Student Data Backup Not Found";

    }   else echo $img_base_path;

} else echo "Student not found";
?>
