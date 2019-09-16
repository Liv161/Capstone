<?php
if(isset($_POST['submit_form'])){
    $choice = false;
    if(isset($_POST['choice'])){
        $allowedAnswers = array('joe', 'beto', 'kam', 'liz', 'trump', 'lindsey', 'bill', 'mitt');
        $chosenAnswer = $_POST['choice'];
        if(in_array($chosenAnswer, $allowedAnswers)){
            if(strcasecmp($chosenAnswer, 'joe') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'beto') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'kam') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'liz') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'trump') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'lindsey') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'bill') == 0){
                $choice = true;
            }
            else if(strcasecmp($chosenAnswer, 'mitt') == 0){
                $choice = true;
            }
        }
    }
    if($choice){
        if($chosenAnswer == 'joe'){
            header("Location:./dems/joe_biden/joe.php");
        }
        else if($chosenAnswer == 'beto'){
            header("Location:./dems/beto_o'rourke/beto.php");
        }
        else if($chosenAnswer == 'kam'){
            header("Location:./dems/kamala_harris/kamala.php");
        }
        else if($chosenAnswer == 'liz'){
            header("Location:./dems/elizabeth_warren/liz.php");
        }
        else if($chosenAnswer == 'trump'){
            header("Location:./reps/donald_trump/donald.php");
        }
        else if($chosenAnswer == 'lindsey'){
            header("Location:./reps/lindsey_graham/lindsey.php");
        }
        else if($chosenAnswer == 'bill'){
            header("Location:./reps/bill_weld/bill.php");
        }
        else if($chosenAnswer == 'mitt'){
            header("Location:./reps/mitt_romney/mitt.php");
        }
    }  
    if($choice == false){
        echo '<script>window.alert("Please select a valid candidate from which is provided.");</script>';
    }
    if(empty($_POST['choice'])){
        //header("Location: dashboard.php");         
    }
}

if(isset($_POST['submit-vote'])){
    $choice = false;
    if(isset($_POST['submit-vote'])){
        $allowedAnswers = 'Vote!';
        $chosenAnswer = $_POST['submit-vote'];
        if(in_array($chosenAnswer, $allowedAnswers)){
            if(strcasecmp($chosenAnswer, 'Vote!') == 0){
                $choice = true;
            }
        }
    }
    if($choice){
        if($chosenAnswer == 'Vote!'){
        echo '<script>window.alert("Great! Your vote has been added to the polling database.);</script>';
        }
    }
}
?>