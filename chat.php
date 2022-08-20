<html>
<head>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://user-images.githubusercontent.com/20112458/49326597-773b7280-f57a-11e8-853d-20ed61d18b0d.png"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
   <style>
      body {
        font-family: monospace;
      }
      h1 {
        background-color: rgba(75, 150, 212, 0);
        display: inline-block;
        font-size: 4em;
        margin: 0;
        padding: 14px;
      }
      h3 {
        color: black;
        font-size: 20px;
        margin-top: 3px;
        text-align: center;
      }
      #chatbox {
        margin-left: auto;
        margin-right: auto;
        width: 40%;
        margin-top: 60px;
      }
      #userInput {
        margin-left: auto;
        margin-right: auto;
        width: 40%;
        margin-top: 60px;
      }
      #textInput {
        width: 100%;
        border: none;
        border-bottom: 3px solid black;
        font-family: monospace;
        font-size: 17px;
      }
      .userText {
        color: white;
        font-family: monospace;
        font-size: 20px;
        text-align: right;
        line-height: 30px;
      }
      .userText span {
        background-color: #808080;
        padding: 10px;
        border-radius: 25px;
      }
      .botText {
        color: white;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
        line-height: 30px;
      }
      .botText span {
        background-color: #4169e1;
        padding: 10px;
        border-radius: 25px;
      }
      #tidbit {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 300px;
      }
      .boxed {
        margin-left: auto;
        margin-right: auto;
        width: 78%;
        margin-top: 60px;
        border: 0px solid green;
      }
      .box {
        border: 2px solid black;
      }
    </style>
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
          <li><a href="login.php">Login</a></li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>
    </header>
    <!-- end of navbar -->

    <center>
      <h1>
        <img
          src="https://user-images.githubusercontent.com/20112458/49326597-773b7280-f57a-11e8-853d-20ed61d18b0d.png"
          alt="CANDICE"
          style="width:40px;height:40px;"
        />ChatBot
      </h1>
    </center>
<div class="box"></div>
    <div class="boxed">
      <div>
        <div id="chatbox">
          

        </div>
        <div id="userInput">
          <input id="textInput" type="text" name="msg" placeholder="Type your message here" />
        </div>
      </div>
    </div>
    <script>
        function getBotResponse() {
          var rawText = $("#textInput").val();
          var userHtml = '<p class="userText"><span>' + rawText + "</span></p>";
          $("#textInput").val("");
          $("#chatbox").append(userHtml);
          document
            .getElementById("userInput")
            .scrollIntoView({ block: "start", behavior: "smooth" });
          $.get("/get", { msg: rawText }).done(function(data) {
            var botHtml = '<p class="botText"><span>' + data + "</span></p>";
            $("#chatbox").append(botHtml);
            document
              .getElementById("userInput")
              .scrollIntoView({ block: "start", behavior: "smooth" });
          });
        }
        $("#textInput").keypress(function(e) {
          if (e.which == 13) {
            getBotResponse();
          }
        });
</script>
<?php
        include_once "footer.php";
        ?>