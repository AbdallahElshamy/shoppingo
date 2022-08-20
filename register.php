<?php
    include_once"headerbefore.php";
?>

<section class="form-container">

    <form action="" method="post">
        <h3>register now</h3>
            <div>
                <?php 
                if(isset($_POST["register"])){              
                if($_POST["pass"]==$_POST["cpass"]){ 
                include_once "Database.php";
                    $db=new Database();
                    $msg= $db -> RunDML("insert into customer values ('Default','".$_POST["name"]."','".$_POST["phone"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["pass"]."')");
                if($msg=="ok")
                {
                    echo"<div class='alert alert-success'> User create success </div>";
                }
                elseif(strpos($msg,"phone"))
                {
                    echo"<div class='alert alert-danger'>this phone already exsist </div>";
                }
                elseif(strpos($msg,"email"))
                {
                    echo"<div class='alert alert-danger'>this Email already exsist </div>";
                }
                else{
                    echo"<div class='alert alert-danger'>$msg</div>";
                }
                
                }
                else{
                echo"<div class='alert alert-danger'>password doesnot match </div>";
                }}
                


                ?>
            </div>

        <input type="text" name="name" required placeholder="enter your username" maxlength="20" class="box">
        <input type="text" name="phone" required placeholder="enter your phone" maxlength="11" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="text" name="gender" required placeholder="enter your gender" maxlength="20" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">    
        <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="password" name="pass" required placeholder="enter your password" maxlength="20" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="submit" value="register now" class="btn" name="register">
        
        <a href="login.php" ><p>already have an account? <span style="color:#b23850">Login Now</span></p></a>
    </form>

</section>
<?php
    include_once"footer.php";
?>

</body>

</html>