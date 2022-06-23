<?php //var_dump($url);echo "<br>FD=",F_D,"<br>lnk=",$lnk,"<br>"; //phpinfo();
session_start();
$url = explode('/', $_SERVER['REQUEST_URI']);
if(isset($url[2])) { $lnk=$url[2]; $lnk2 = explode('?', $lnk); }
// include("../_config.php");
include("_header.php");



        // include("./_courseslist.php");
 if($lnk=="" || $lnk=="index" || $lnk=="_home.php" || $lnk2[0]=="") include("_home.php");
   elseif(file_exists($lnk.".php"))  include($lnk.".php");
    elseif(isset($lnk2[1]) && file_exists($lnk2[0].".php") ) include($lnk2[0].".php");
 	else include("_404.php");
  echo '</div> <!-- Main Content -->
  <br><br>
      </div> <!-- Content Wrapper -->
    </div> <!-- Page Wrapper -->
  ';

include("_footer.php");
?>
