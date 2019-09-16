<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read</title>
  <meta charset="utf-8">
      <script>
//function getVote(int) {
//  if (window.XMLHttpRequest) {
//    // code for IE7+, Firefox, Chrome, Opera, Safari
//    xmlhttp=new XMLHttpRequest();
//  } else {  // code for IE6, IE5
//    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//  }
//  xmlhttp.onreadystatechange=function() {
//    if (this.readyState==4 && this.status==200) {
//      document.getElementById("poll").innerHTML=this.responseText;
//    }
//  }
//  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
//  xmlhttp.send();
//}
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--  <link href="style.css" rel="stylesheet" type="text/css"/>-->
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    body{
        width: 100%;
    }
    
    main{
        width: 90%;
        margin: 2% 2% 2% 2%;
        border: 1px solid black;
    }
    
    .banner{
        width: 96%;
        margin-left: 2%;
        margin-top: 1%;
        margin-bottom: 1%;
        border: 1px solid black;
        padding: 2%;
        font-size: 28px;
        
    }
    
    .cand-pic{
        width: 26%;
        height: 350px;
        border: 1px solid black;
        margin-left: 38%;
    }
    .slogan{
        width:26%;
        text-align: center;
        border: 1px solid black;
        margin-left: 38%;
        
    }
    
    #right{
        float:right;
        width: 26%;
        height: 175px;
        border: 1px solid black;
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
//        include 'phpCode.php';
        ?> 
       <main>
           <form action="#" method="post" enctype="multipart/form-data" > 
                <div class="banner">
                    <textarea id="froala-editor">Person's Name</textarea>
                </div>            
                <div class="cand-pic">
                    <input type="file" name="uploadfile" />   
                    <p>YOUR PICTURE GOES HERE</p>
                </div>  
                <div class="slogan">
                    <input type="text" cols="50" name="slogan" placeholder="Slogan">
                </div>
                <div id='right'>
                    <textarea rows="4" cols="50" name="about" placeholder="About the candidate..."></textarea>
                </div>
           </form>
        </main>           
         
        <p><a href="view-action.php">View page</a></p>
    </body>
</html>
