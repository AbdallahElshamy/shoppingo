<?php
include_once "headerbefore.php";
?>
 <script>
    function Login() 
    {
        var user = document.getElementById("useremail").value;
        var pass = document.getElementById("userpass").value;
        xhttp = new XMLHttpRequest();
        //function on state لما يبقي راجع بالداتا
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                if(result=="ok"){
                     window.open('index.php','_self');
                         }
                else
                {
                    document.getElementById("d").innerHTML ='<div class="alert alert-danger"><h1>This Mail not existis</h1></div>';
                }
            }
        };
        //end function
        //to conect with checklogin
        xhttp.open("GET", "checklogin.php?user="+user+"&pass="+pass+"", true);
        xhttp.send();
    }
</script>



        <section class="form-container">
        
            <form action="#" method="post">
                <h3>login now</h3>
                <div id="d"></div>
                <input type="email" id="useremail" required="" placeholder="enter your email" maxlength="50" class="box">
                <input type="password" id="userpass" required="" placeholder="enter your password" maxlength="20" class="box">
                <div>
                <button  class="btn form-control" type="button" onclick="Login()" style="height: 50px">login </button> </div>
                <a href="register.php" name="reg"><p>don't have an account?</p></a>
                <a href="checkemail.php" name="reg"><p>Forget password?</p></a>
                <a href="chat.php" name="reg" class="alert alert-success" style="width:25%;">Contact us</a>
            </form>
        
        </section>


        <?php
        include_once "footer.php";
        ?>