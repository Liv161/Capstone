<?php
include("../../auth.php");
require ("../../db.php");
include ('../../dems&reps.php');
// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Joe Biden</title>
<link rel="stylesheet" href="../../style.css" />
    </head>
    <body>  
        
        
        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      body {
  background: #2d343d;
}
.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}
h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7; 
}
.login-input {
  width: 248px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
    
}
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}
.login-lost
{
  text-align:center;
  margin-bottom:0px;
}
.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}
.form{
    text-align: center;
    color: white;
}
.form a {
    text-decoration: none;
    color: red;
}
.form a:hover {
    font-size: 20px;
    color: aqua;
}

#test{
/*    width: 100%;
    border: 2px solid white;*/
}
#wrapper{
    width: 1500px; /*575px For 3 Sections*/
    padding: 0.2%, 0.2%, 0.2%, 0.2%;
    border: 2px solid white;
}
/*Mid Section / Main Focus*/
#header{
    font-size: 30px;
}
.picsize {
    margin-left: 575px;
    margin-top: 2%;
    width: 350px;
    height: 350px;
}
h1{
    text-align: center;        
    color: silver;
    text-decoration: underline;
}
#slogan{    
    width: 100%;
    text-align: center;
}
.info{
    width: 25%;
    text-align: justify;
    margin-left: 37.5%;
    color:silver;
}
/*Top-Left -Quote Div*/
#quote{
    float:left;
    width: 25%;
    margin-top: -45%;
    margin-left: 71.875px;
}
.quote{
    text-align: justify;
    color: silver;    
}
#vote{
    transition: transform .2s;
    float:right;
    width:25%;
    margin-top: -45%;
    margin-right: 100px;
}
#vote:hover{
    transform: scale(1.35);
}
.lblvote{
    text-align: center;
    color: silver;
}
.vote{
    float: right;
    margin-right: 45%;
}
#donate{
    float:right;
    margin-right: 71.875px;
    margin-top: -27.3%;
}
#payment{
    width:90%;
}
.payment{
    width: 10%;
}
.text{
    margin-top: 2%;
}
#table{
    margin-left: 31%;
    margin-top: 2%;
}
.donate{
    width: 62px;
}
#twitter-timeline{
    transition: transform .2s;
    float:left;
    width: 25%;
    margin-left: 71.875px;
    margin-top: -27.3%;
}
#twitter-timeline:hover{    
    transform: scale(1.35);
}
.twitter-timeline{
    margin-left: 10%;
}
/*.demtool{
        border: 2px solid blue;
    }
}*/

.tool:hover{
    border: 2px solid silver;
}
  </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="../Capstone/registration.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
      </ul>
  </div>
</nav>
        <div id="wrapper">   
            <div id="test"></div>
        <div id="header">
            <h1>~ VOTE 2020 ~</h1>
        </div>
        <div class="picsize">
            <img class="demtool" src="../../d_candidates/joe.jpg" alt="joe biden" style="width:100%"/>           
        </div> 
        <h1>Our Best Days Still Lie Ahead</h1> 
        <div id="slogan">            
            <p class="info">Joe Biden is a former Democratic vice president of the United States who served from 2009 to 2017. He announced that he was running for president on April 25, 2019.<br>He framed his campaign as a challenge to President Donald Trump (R). "I believe history will look back on four years of this president and all he embraces as an aberrant moment in time. But if we give Donald Trump eight years in the White House, he will forever and fundamentally alter the character of this nation—who we are—and I cannot stand by and watch that happen," he said.<br>Biden represented Delaware in the U.S. Senate from 1973 to 2009, where he chaired the Senate Judiciary Committee and the Senate Foreign Relations committee for several years.
            </p>           
<br>
        </div>
        <div id="quote">
            <h1>Notable Quote</h1>
            <p class="quote">"We’re in a battle for the soul of America. It’s time to remember who we are. We’re Americans: tough, resilient, but always full of hope. It’s time to treat each other with dignity. Build a middle class that works for everybody. Fight back against the incredible abuses of power we’re seeing. It’s time to dig deep and remember that our best days still lie ahead."<br>—Joe Biden (April 2019)
            </p>
        </div>
        <div id="vote">                
            <form action="#" method="post">
                <h1>Vote Now!</h1>
                <label class="lblvote">                        
                    <p>Submit your vote and check out the polls!</p>
                    <input type="submit" class="vote" name="submit-vote" value="Vote!">
                </label>
            </form>                
        </div>           
        
        </div>       
    <div id="twitter-timeline">
        <h1>Follow me on twitter!</h1>
        <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/JoeBiden?ref_src=twsrc%5Etfw" style="width:100%">Tweets by JoeBiden</a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> 
    <div class="form">
        <p><a href="../../index.php">Home</a><br>
        <a href="../../dashboard.php">Go Back</a><br>
        <a href="../../logout.php">Logout</a></p>
    </div> 
        </div>
    </body>
</html>
