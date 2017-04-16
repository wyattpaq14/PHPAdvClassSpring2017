<?php

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] <= 0) {
    echo "<p class=\"alert alert-success\">Access restricted</p>";
}
else if(isset($_SESSION["user_id"])) {
    echo "<p class=\"alert alert-success\">Access granted</p><br />";
    echo "<form action=\"#\" method=\"post\" class=\"form-horizontal col-lg-12\">";
    echo "<input type=\"submit\" value=\"Logoff\" class=\"btn btn-danger col-lg-12\" />";
    echo "</form><br /><br />";
    
}   
?>


    
   
        
    



