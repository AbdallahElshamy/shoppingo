<?php
session_start();
include_once "headerbefore.php";
?>
<script>
   
function log() 
    {
      var user = document.getElementById("act").value;
    }
</script>


<section class="form-container">
        
            <form action="" method="post">
                <h3>Forget passward / Activation Code</h3>
                <div id="dv">
                </div>
                <input type="number" id="act" required="" placeholder="Enter Activation code" class="box">
                <div>
                <button name="check" class="btn form-control" type="button" onclick="log()" style="height: 50px">Check Activation</button>
                <?php
                            if(isset($_POST["check"]))
                            {
                              
                                if($_POST["act"]==$_SESSION["activ"])
                                {
                                    $id=$_GET["uid"];
									$_SESSION["id"]=$id;
                                    echo  "<script>window.open('updatepassward.php','_self');</script>";
                                }
                                else
                                echo "<div class='alert alert-danger'> This Activation is invaild  </div>";
                            }
                            ?>
            </div>
            </form>
        
        </section>

<?php
include_once "footer.php";
?>