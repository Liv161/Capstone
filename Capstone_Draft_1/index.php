<?php
    include 'phpCode.php';
    include 'auth.php';
  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Campaign</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    form{
           margin-left: 2%;
       }
  </style>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="color:silver">  
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
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
        <h1></h1>
        <form action="#" method="post" enctype="multipart/form-data" > 
            <label>Name of Candidate</label><br>
            <input type="text" name="fname" placeholder="First">
            <input type="text" name="lname" placeholder="Last">
            <br>
            
            <label>Banner</label><br>
            <input type="text" name="banner" placeholder="Banner over picture">
            <br>
            
            <label>Type of Campaign</label><br>
            <select name="campaign">
                <option value="">Select</option>
                <option value="President">Presidential</option>
                <option value="Senate">Senate</option>
                <option value="Congress">Congressional</option>
            </select>
            <br>
            
            <label>Slogan</label><br>
            <input type="text" cols="50" name="slogan" placeholder="Slogan">
            <br>
            
            <label>About</label><br>
            <textarea rows="4" cols="50" name="about" placeholder="About the candidate..."></textarea>
            <br>
            
            <label>Notable Quote</label><br>
            <textarea rows="4" cols="50" name="quote" placeholder="Enter Text Here..."></textarea>
            <br>
            
            <label>Twitter URL</label><br>
            <input type='text' name='twitter' placeholder="https://twitter.com/Twitter"/>
            <br>
            <label>Candidate Picture</label><br>
            <input type="file" name="uploadfile" />
            <br/>
            <input style="margin-top: 2%" type="submit" name="submit" value="Submit">
        </form>
        