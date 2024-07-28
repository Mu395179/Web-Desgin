<?php include_once "../api/base.php";

if(isset($_SESSION['user'])){

    $_SESSION['user']="";

    to("../front/index.html");
}

?>