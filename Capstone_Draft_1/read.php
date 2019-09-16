<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read</title>
  <meta charset="utf-8">
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
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
        <?php 
        include 'phpCode.php';
        ?>        
<!--          <h1>Read: Record <?php //echo $id?></h1>-->
       <div id='wrapper'>
               <h1><?php echo $banner;?></h1>            
            <div class="picsize">
                <?php echo "<img src=".$name." height=350 width=350/>"; ?>
            </div> 
               <h1><?php echo $slogan; ?></h1>
            <div id="slogan">              
               <p class="info">
                   <?php echo $about; ?>
               </p>           
            <br> 
            </div>
            <div id="quote">
               <h1>Notable Quote</h1>
               <p class="quote"><?php echo $quote; ?></p>
            </div>
               <div id="vote" style="color:silver">               
                <form>
                    <h1>Vote Now!</h1>
                      <div id="poll">
                         <p>Can we count on your vote 2020?</p>
                         Yes:
                         <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                         <br>
                         No:
                         <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                         <br>
                        Maybe:
                        <input type="radio" name="vote" value="2" onclick="getVote(this.value)">
                        <br>
                        Never:
                        <input type="radio" name="vote" value="3" onclick="getVote(this.value)">
                      </div>
                 </form>  
               </div>                  
                  
               
            <div id="twitter-timeline">
                <h1>Follow me on twitter!</h1>
                <a class="twitter-timeline" data-width="300" data-height="300" href="<?php echo $twitter; ?>" style="width:100%">Tweets by <?php echo $candName?></a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                https://twitter.com/JoeBiden?ref_src=twsrc%5Etfw
            </div> 
      </div> 
        <p><a href="view-action.php">View page</a></p>
        
    </body>
</html>
