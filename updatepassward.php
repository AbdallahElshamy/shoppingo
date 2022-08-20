<?php
session_start();
include_once "HeaderBefore.php";
?>
<section class="form-container">
        <form action="" method="post">
            <h3>Forget passward / Activation Code</h3>
                <div id="dv">
                </div>
                    <input type="number" id="new" required="" placeholder="Enter new password" class="box">
                <div>
                   <button name="check" class="btn form-control" type="button" onclick="log()" style="height: 50px">Creat New Password</button>
                    <?php
                            if(isset($_POST["check"]))
                            {   
                                    include_once "Database.php";
                                    $db=new Database();
                                    $msg=$db->RunDML("update customer set password ='".$_POST["new"]."' where customerid='".$_SESSION["id"]."'");
                                    if($msg=="ok")
                                    {
                                        echo "<div class='alert alert-success'>Password has been updated success</div>";
                                    }
                            }
                    ?>
                </div>
            </form>         
        </section>
<?php
include_once "Footer.php";
?>