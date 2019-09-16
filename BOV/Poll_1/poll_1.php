<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Pick A Party</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
    <script>
    function getVote(int) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("poll").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","poll_1_vote.php?vote="+int,true);
      xmlhttp.send();
    }
    </script>
    <style>      
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif; color:black}
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }
        body{
/*            background-image: url("../Uploads/vote.jpg");*/
            background-color: lightgrey;
            width:100%;            
            min-height: 100%;
/*            background-position: center;
            background-size: cover;*/
        }
        @media(min-width:1200px){
             main{
                height: 100%;
                margin-left: 17%;
                margin-top: 7%;
                padding:2%;
            }
        }
        
        @media(min-width:1199px) and (min-width:600px){
             main{
                height: 100%;
                margin-left: 17%;
                margin-top: 7%;
            }
        }
        @media(min-width:599px){
            main{
               height: 100%;
               margin-left: 17%;
               margin-top: 7%;
            }
        }  
        #previous{
            float:left;
        }
        #next{
            float: right;
        }
        #poll{
            width:60%;
            padding:5%;
            margin-left: 20%;
            margin-top: 5%;
            
        }
        form{
            font-size:18px;
        }
        footer{
            text-align: center;
            padding: 1%;
        }
    </style>
</head>
    <body>
        <nav class="navbar navbar-inverse" style="margin:0">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="../CRUD/view-action_1.php">B.O.V</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="../home.php">Home</a></li>
                  <li><a href="../CRUD/index.php">Build Your Own</a></li>
                  <li><a href="../CRUD/view-action.php">Campaigns</a></li>
                  <li class="active"><a href="../vote&poll.php">Vote Now</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="../Credentials/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="../Credentials/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="../Credentials/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
              </div>
            </div>
         </nav>
        
        <main class="w3-container w3-card-4 w3-light-grey w3-margin-bottom w3-twothird">
            <div id="poll" class="w3-container w3-card-4">
            <h3>In 2020 what party would you rather hold the White House?</h3>
            <form>
            Democrat:
            <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
            <br>
            Republican:
            <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            <br>
            Other:
            <input type="radio" name="vote" value="2" onclick="getVote(this.value)">
            </form>
            </div>
            <div id="previous" class="w3-margin-top w3-margin-bottom">
                <a href="../vote&poll.php">Previous</a>
            </div>
            <div id="next" class="w3-margin-top w3-margin-bottom">
                <a href="../Poll_2/poll_2.php" >Next</a>
            </div>
        </main>
           <footer class="w3-container w3-center w3-bottom" style="background-color:#000000;color:lightgrey">
              <p>Find me on social media.</p>
                <a class="fa fa-facebook-official w3-hover-opacity" href="http://facebook.com" target="blank"></a>
                 <a class="fa fa-instagram w3-hover-opacity" href="http://instagram.com" target="blank"></a>
                 <a class="fa fa-twitter w3-hover-opacity" href="http://twitter.com" target="blank"></a>
              <p>&copy;B.O.V 2019</p>
        </footer>   
    </body>
</html>  