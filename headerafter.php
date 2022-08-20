<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Shoppingo</title>
    <!-- Bootstrap files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--  CSS Files -->
    <link rel="stylesheet" href="image/css/style.css">
    <!-- <link rel="stylesheet" href="image/css/owl.css"> -->

    <!--  start backend  -->
    <script>
    function logout(){
        xhttp = new XMLHttpRequest();
            //function on state لما يبقي راجع بالداتا
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                var result=this.responseText;
                if(result=="ok"){
                    window.open('index.php','_self');
                        }
              }
            };
        //end function
        //to conect with checklogin
        xhttp.open("GET", "logout.php", true);
        xhttp.send();

    }
    </script>



  </head>
  <body>
<!-- nav bar starts -->
    <header>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="index.php">Shoppingo</a></label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="profile.php">Porfile</a></li>
          <li><a href="login.php" onclick="logout()">Logout</a></li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>
    </header>
    <!-- end of navbar -->
