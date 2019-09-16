<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Instructions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
<style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif; color:black}
            .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
        body{
            background-color: lightgrey;
            width:100%;            
            min-height: 100%;
        }  
        
        @media(min-width:1200px){
             main{
                height: 100%;
                margin-left: 17%;
                margin-top: 7%;
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
        h3{
            font-size:18px;
        }
        #previous{
            float:left;
        }
        #next{
            float: right;
        }
        footer{
            text-align: center;
            padding:1%;
        }
    </style>
    <!-- JavaScript for Countdown--> <script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 22, 2019 24:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="poll_time"
  document.getElementById("poll_time").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("poll_time").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="CRUD/view-action_1.php">B.O.V</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="CRUD/index.php">Build Your Own</a></li>
          <li><a href="CRUD/view-action.php">Campaigns</a></li>
          <li class="active"><a href="vote&poll.php">Vote Now</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Credentials/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="Credentials/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="Credentials/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
        </ul>
      </div>
    </div>
 </nav>
      
    <main class="w3-container w3-card-4 w3-light-grey w3-margin-bottom w3-twothird" style="text-align:center">
        <h1>Thank You For Your Participation</h1>
        <h1>Countdown To The New Polling Questions</h1>
        <hr>            
        <div class="w3-container w3-center">
            <p id="poll_time" style="font-size:30px"></p> 
        </div>
         <div id="previous" class="w3-margin-top w3-margin-bottom">
             <a href="Poll_6/poll_6.php">Previous</a>
        </div>
<!--        <div id="next">
            <a href="Poll_1/poll_1.php">Next</a>
        </div>-->
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
