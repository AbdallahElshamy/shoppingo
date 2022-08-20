<?php
include_once "headerbefore.php";
?>
<script>
function forget() 
    {
        var user = document.getElementById("forgetemail").value;
        xhttp = new XMLHttpRequest();
        //function on state لما يبقي راجع بالداتا
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var result=this.responseText;
                if(result=="ok"){
                    document.getElementById("dv").innerHTML = "<div class='alert alert-primary'> Please check your email </div>";
                         }
                else
                {
                    document.getElementById("dv").innerHTML = this.responseText;
                }
            }
          };
        //end function
        //to conect with checklogin
        xhttp.open("GET", "emailcheck.php?user="+user+"", true );
        xhttp.send();
    }
</script>


<section class="form-container">
        
            <form action="" method="post">
                <h3>Forget passward ?</h3>
                <div id="dv">
                </div>
                <input type="email" id="forgetemail" required="" placeholder="enter your Email" class="box">
                <div>
                <button  class="btn form-control" type="button" onclick="forget()" style="height: 50px">login </button> </div>
                <a href="#"><p>Forget password?</p></a>
            </form>
        
        </section>

<?php
include_once "footer.php";
?>