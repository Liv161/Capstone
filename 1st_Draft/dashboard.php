<?php
require('db.php');
include("auth.php");
include ('dems&reps.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
<style>
* {
  box-sizing: border-box;
}
.column:hover {
  background-color: blue;
}
.column {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
</head>


<body>
<div class="form">
    <h1>Democratic Presidential Candidates</h1>

<form action="#" method="post">
  <p style="margin-top: -10px;">Choose Your Candidate?</p>
    
    <div class="row">
  <div class="column">
    <label>
    Democratic Candidate
    <img class="demtool" src="d_candidates/joe.jpg" alt="joe" style="width:100%">
    <input type="radio" name="choice" value="joe"> Joe Biden
    </label>    
  </div>        
  <div class="column">
    <label>
    Democratic Candidate
    <img class="demtool" src="d_candidates/beto.jpg" alt="beto" style="width:100%">
    <input type="radio" name="choice" value="beto"> Beto O'rourke
    </label>
  </div>
  <div class="column">
    <label>
    Democratic Candidate
    <img class="demtool" src="d_candidates/kam.jpg" alt="kam" style="width:100%">
    <input type="radio" name="choice" value="kam"> Kamala Harris
    </label>
  </div>
  <div class="column">
    <label>
    Democratic Candidate
    <img class="demtool" src="d_candidates/liz.jpg" alt="liz" style="width:100%">
    <input type="radio" name="choice" value="liz"> Elizabeth Warren
    </label>
  </div>
</div>
  <br><br>
    <div id="btn-submit">
    <input type="submit" name="submit_form" value="Submit">
    </div>    
</form>

<p><a href="index.php">Home</a><br>
<a href="index.php">Go Back</a><br>
<a href="logout.php">Logout</a>
</div>
</body>
</html>