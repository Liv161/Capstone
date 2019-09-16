<?php
include("auth.php");
require 'db.php';
//Check to see if the submit button was pressed.
if(isset($_POST['submit_index'])){
    
    $party = false;
    
    if(isset($_POST['party'])){
        
        $allowedAnswers = array('democrat', 'republican');
        
        $chosenAnswer = $_POST['party'];
        
        if(in_array($chosenAnswer, $allowedAnswers)){
            if(strcasecmp($chosenAnswer, 'democrat') == 0){
                $party = true;
            }
            if(strcasecmp($chosenAnswer, 'republican') == 0){
                $party = true;
            }
        }
    }
    if($party){
        if($chosenAnswer == 'democrat'){
        header("Location: dashboard.php");
        }
        else if($chosenAnswer == 'republican'){
            header("Location: dashboard2.php");
        }
    }   
    if($party == false){
        echo '<script>window.alert("Please make a selection to continue.");</script>';
    }
    if(empty($_POST['party'])){
        //header("Location: index.php");
    }
}   
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome User</title>
<link rel="stylesheet" href="style.css" />
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 25%;
  padding: 5px;
  margin-left: 25%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
#pic1:hover{
    background-color: blue;
}
#pic2:hover{
    background-color: red;
}
#pic2{
    margin-left: 5px;
}
#btn-submit{
    clear: both;
}
</style>
</head>
<body>
<div class="form">
    <h1 >Welcome <?php echo $_SESSION['id'];?>!</h1>
<p >This is your secured index.</p>

<form action="" method="post">
    <p style="margin-top: -10px;">Choose A Party?</p>
<div class="row">
  <div id="pic1" class="column">
    <label>
        <img class="demtool" src="d_candidates/democrat.jpg" alt="democrat" style="width:100%">
        <input type="radio" name="party" value="democrat"> Democrat
    </label>
  </div>
<div id="pic2" class="column">    
    <label>
        <img src="r_candidates/republican.jpg" alt="republican" style="width:100%">
        <input type="radio" name="party" value="republican"> Republican
    </label>
</div>
    <br><br>
    <div id="btn-submit">
    <input type="submit" name="submit_index" value="Submit">
    </div>
</form>

<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>