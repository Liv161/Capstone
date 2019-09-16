<?php
require('db.php');
include("auth.php");
include ('dems&reps.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard2 - Secured Page</title>
<link rel="stylesheet" href="style.css" />
<style>
* {
  box-sizing: border-box;
}
.column:hover {
  background-color: red;
}
.column {
  float: left;
  width: 25%;
  padding: 5px;
}
.row{
    width: 100%;
    margin-left: 25%;
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
    <h1>Republican Presidential Candidates</h1>

<form action="#" method="post">
  <p style="margin-top: -10px;">Choose Your Candidate?</p>
    
   <div class="row">
   <div class="column">
    <label>
    Republican Incumbent
    <img class="tool" src="r_candidates/trump.jpg" alt="trump" style="width:100%">
    <input type="radio" name="choice" value="trump"> Donald Trump
    </label>    
  </div>  
<!--   <div class="column">
    <label>
    Republican Potential
    <img class="tool" src="r_candidates/lindsey.jpg" alt="lindsey" style="width:100%">
    <input type="radio" name="choice" value="lindsey"> Lindsey Graham
    </label>    
  </div>  -->
   <div class="column">
    <label>
    Republican Candidate
    <img class="tool" src="r_candidates/bill.jpg" alt="bill" style="width:100%">
    <input type="radio" name="choice" value="bill"> Bill Weld
    </label>    
  </div>  
<!--   <div class="column">
    <label>
    Republic Potential
    <img class="tool" src="r_candidates/mitt.jpg" alt="mitt" style="width:100%">
    <input type="radio" name="choice" value="mitt"> Mitt Romney
    </label>    
  </div>  -->
</div>
  <br><br>
    <div id="btn-submit">
    <input type="submit" name="submit_form" value="Submit">
    </div>    
</form>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>