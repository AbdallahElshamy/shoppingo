<?php
   session_start();
   include_once "Database.php";
   $db = new Database();
   $rs = $db ->GetData("select * from customer where (email='".$_GET["user"]."' or phone='".$_GET["user"]."') and pssword='".$_GET["pass"]."'");
        if ( $row = mysqli_fetch_assoc($rs) )
             {
                 $_SESSION["id"]= $row["cust_id"];
                 $_SESSION["name"]= $row["name"];
                 echo"ok";
             }
        else
             {
                 echo"<div class='alert alert-danger> Invalid Login Data </div>'";
             }
?>