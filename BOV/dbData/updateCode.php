<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions.php';

/****************************************************************/
/***********************UPDATES*FILE*SELECTED********************/
/****************************************************************/
$db = getDatabase();
    $result = '';
//    
//                                    var_dump($_SERVER);die();   
     // Update.php?id=1
        $id = filter_input(INPUT_GET, 'id');
        $stmt = $db->prepare("SELECT * FROM profile WHERE id = :id");
        $binds = array(
            ":id" => $id
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            //if ($stmt->rowCount() > 0) {
           $results = $stmt->fetch(PDO::FETCH_ASSOC);
           
            $fname = $results['firstname'];
            $lname = $results['lastname'];
            $occupation = $results['occupation'];
            $imgname = $results['imagename'];
            $party = $results['party'];
            $campaign = $results['campaign'];
            $emailC = $results['email'];
            $twitter = $results['twitter_url'];
            $city = $results['city'];
            $state = $results['state'];            
            $banner = $results['banner'];
            $slogan = $results['slogan'];
            $about = $results['about'];
            $quote = $results['quote'];
            $day_1f = $results['day_1f'];
            $day_1s = $results['day_1s'];
            $month_1f = $results['month_1f'];
            $month_1s = $results['month_1s'];
            $year_1f = $results['year_1f'];
            $year_1s = $results['year_1s'];
            $term_1f = $results['term_1f'];
            $term_1s = $results['term_1s'];
            //} else {

            //}           
        } else {
          echo 'Record not found';  
        }
        // Indicates update 
        if ( !isset($id) ) {
            echo 'Record not found';
        }
        if (isPostRequest()) {
        $fname = filter_input(INPUT_POST, 'fname');
        $lname = filter_input(INPUT_POST, 'lname');
        $occupation = filter_input(INPUT_POST,'occupation');
         //declaring variables
        $filepath = "../Uploads/" . $_FILES["uploadfile"]["name"];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        //function for saving the uploaded images in a specific folder
        $party = filter_input(INPUT_POST, 'party');
        $campaign = filter_input(INPUT_POST, 'campaign');
        $emailC = filter_input(INPUT_POST, 'emailC');
        $twitter = filter_input(INPUT_POST, 'twitter');
        $city = filter_input(INPUT_POST,'city');
        $state = filter_input(INPUT_POST,'state');
        $banner = filter_input(INPUT_POST, 'banner');        
        $slogan = filter_input(INPUT_POST, 'slogan');
        $about = filter_input(INPUT_POST, 'about');
        $quote = filter_input(INPUT_POST, 'quote');        
        $day_1f = filter_input(INPUT_POST, 'day_1f');
        $day_1s = filter_input(INPUT_POST, 'day_1s');
        $month_1f = filter_input(INPUT_POST, 'month_1f');
        $month_1s = filter_input(INPUT_POST, 'month_1s');
        $year_1f = filter_input(INPUT_POST, 'year_1f');
        $year_1s = filter_input(INPUT_POST, 'year_1s');
        $term_1f = filter_input(INPUT_POST, 'term_1f');
        $term_1s = filter_input(INPUT_POST, 'term_1s');
                
         
        $stmt = $db->prepare("UPDATE profile SET firstname = :firstname, lastname = :lastname, occupation = :occupation, imagename = :imagename, party = :party,  campaign = :campaign,email = :email, twitter_url = :twitter_url, city = :city, state = :state, banner = :banner, slogan = :slogan, about = :about, quote = :quote, day_1f = :day_1f, day_1s = :day_1s, month_1f = :month_1f, month_1s = :month_1s, year_1f = :year_1f, year_1s = :year_1s, term_1f = :term_1f, term_1s = :term_1s  WHERE id = :id");
        

        $binds = array(
            ":id" => $id,            
            ":firstname" => $fname,
            ":lastname" => $lname,
            ":occupation" => $occupation,
            ":imagename" => $filepath,
            ":party" => $party,
            ":campaign" => $campaign,
            ":email" => $emailC,
            ":twitter_url" => $twitter,
            ":city" => $city,
            ":state" => $state,            
            ":banner" => $banner,            
            ":slogan" => $slogan,
            ":about" => $about,
            ":quote" => $quote,            
            ":day_1f" => $day_1f,
            ":day_1s" => $day_1s,
            ":month_1f" => $month_1f,
            ":month_1s" => $month_1s,
            ":year_1f" => $year_1f,
            ":year_1s" => $year_1s,
            ":term_1f" => $term_1f,
            ":term_1s" => $term_1s
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
           $result = 'Record updated';
        } else{
            echo 'Error, Please check all fields and try again.';
        }
        
    } 
       
?>