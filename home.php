<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 980px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    body {
  background: #2d343d;
  color:silver;
}
input{
    margin-left: 50px;
    
}
form{
    width:700px;
    margin-left: 12.25%;
}
  </style>
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
      <a class="navbar-brand" href="#">Campaign's Profit</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="index.php">Build Your Own</a></li>
        <li><a href="view-action.php">Campaigns</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <p style="margin-top:5%"><a href="polls.php">Latest Polls
        <img src="Uploads/graph.jpg" alt="" style="width:70%;margin-top: 5%"/></a></p>
        <p style="margin-top:5%"><a href="feedback.php">Feed Back
      <img src="Uploads/comments.png" alt="" style="width:70%"/></a></p>
    </div>
    <div class="col-sm-8 text-left" id='flag' > 
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <h1 style="text-align:center">Vote & Check The Polls</h1>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <form action='#' method="post">
  <div class="carousel-inner">
        <div class="item active">          
            <table>
                <tr>
                    <td>
                        <img style="margin-left: 50px" src="Uploads/joe.jpg" alt=""/>
                        <br>
                        <input style="margin-left:55%" type="radio" name="candidate" value="joe"/>
                    </td>
                    <td>
                        <img style="margin-left: 50px" src="Uploads/kam.jpg" alt=""/>
                        <input style="margin-left:55%" type="radio" name="candidate" value="kam"/>
                    </td>
                </tr>
            </table>
      </div>

      <div class="item">
          <table>
                <tr>
                    <td>
                        <img style="margin-left: 50px" src="Uploads/joe.jpg" alt=""/>
                        <br>
                        <input style="margin-left:55%" type="radio" name="candidate" value="joe"/>
                    </td>
                    <td>
                        <img style="margin-left: 50px" src="Uploads/trump.jpg" alt=""/>
                        <input style="margin-left:55%" type="radio" name="candidate" value="trump"/>
                    </td>
                </tr>
            </table>
      </div>

      <div class="item">
          <table>
                <tr>
                    <td>
                        <img style="margin-left: 50px" src="Uploads/democrat.jpg" alt=""/>
                        <br>
                        <input style="margin-left:55%" type="radio" name='candidate' value="dem"/>
                    </td>
                    <td>
                        <img style="margin-left: 50px" src="Uploads/republican.jpg" alt=""/>
                        <input style="margin-left:55%" type="radio" name="candidate" value="rep"/>
                    </td>
                </tr>              
            </table>
      </div>
      <input type="submit" name="submit" value="Vote" class="btn btn-success" style='margin-top:5%; margin-left: 49.7%;'/>
  </div>      
</form> 
    
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
      
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Where To Start?</p>
        <a href="https://www.google.com/search?q=code+for+beginners&rlz=1C1AJZK_enUS791US791&oq=code+for+beginners&aqs=chrome..69i57j0l5.4519j1j9&sourceid=chrome&ie=UTF-8"/><img src="Uploads/ad.png" alt="" style="width:100%"/></a>
      </div>
      <div class="well">          
        <a href="https://facebook.com/" class="fa fa-facebook"></a>
        <a href="https://instagram.com/" class="fa fa-instagram"></a>
        <a href="https://twitter.com/" class="fa fa-twitter"></a>
        <a href="https://youtube.com/" class="fa fa-youtube"></a>
        <a href="https://www.google.com/" class="fa fa-google"></a>
      </div>
    </div>
  </div>
</div>
    
<footer class="container-fluid text-center">
    <p>&copy;Campaign's Profit 2019</p>
</footer>
  <?php 
    if(isset($_POST['submit'])){    
        
    $candidate = false;    
    
    if(isset($_POST['candidate'])){
        
        $allowedAnswers = array('dem', 'rep', 'joe', 'kam','trump');
        
        $chosenAnswer = filter_input(INPUT_POST, 'candidate');
        
        if(in_array($chosenAnswer, $allowedAnswers)){
            if(strcasecmp($chosenAnswer, 'dem') == 0){
                $candidate = true;
            }
            if(strcasecmp($chosenAnswer, 'rep') == 0){
                $candidate = true;
            }
            if(strcasecmp($chosenAnswer, 'joe') == 0){
                $candidate = true;
            }
            if(strcasecmp($chosenAnswer, 'kam') == 0){
                $candidate = true;
            }
            if(strcasecmp($chosenAnswer, 'trump') == 0){
                $candidate = true;
            }
        }
    }
    if($candidate){
        if($chosenAnswer == 'dem'){
           $n = 330 ; //rand(10, 100) + 300 
           echo $n. ' is the total votes currently in this poll for '. $chosenAnswer;
        }
        else if($chosenAnswer == 'rep'){
           $n = 170; 
           echo $n. ' is the total votes currently in this poll for '. $chosenAnswer;
        }
        else if($chosenAnswer == 'joe'){
           $n = 273; 
           echo $n. ' is the total votes currently in this poll for '. $chosenAnswer;
        }
        else if($chosenAnswer == 'kam'){
           $n = 227; 
           echo $n. ' is the total votes currently in this poll for '. $chosenAnswer;
        }
        else if($chosenAnswer == 'trump'){
           $n = 227; 
           echo $n. ' is the total votes currently in this poll for '. $chosenAnswer;
        }
        if($candidate == false){
            echo '<script>window.alert("Please Make A Choice");</script>';
        }
        if(empty($_POST['candidate'])){
            
        }
    }
    
 }
  ?>
</body>
</html>