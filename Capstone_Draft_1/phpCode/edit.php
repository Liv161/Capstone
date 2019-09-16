<?php

    include './dbconnect.php';
    include './functions.php';

    $db = getDatabase();

    $result = '';
        //            var_dump($_SERVER);die();
    if (isPostRequest()) {
        $id = filter_input(INPUT_POST, 'id');
        $fname = filter_input(INPUT_POST, 'fname');
        $lname = filter_input(INPUT_POST, 'lname');
        $banner = filter_input(INPUT_POST, 'banner');
        $campaign = filter_input(INPUT_POST, 'campaign');
        $slogan = filter_input(INPUT_POST, 'slogan');
        $about = filter_input(INPUT_POST, 'about');
        $quote = filter_input(INPUT_POST, 'quote');
        $twitter = filter_input(INPUT_POST, 'twitter');
        $filepath = "Uploads/" . $_FILES["uploadfile"]["name"];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        $stmt = $db->prepare("UPDATE profile set imagename = :imagename, firstname = :firstname, lastname = :lastname, banner = :banner, campaign = :campaign, slogan = :slogan, about = :about, quote = :quote, twitter_url = :twitter_url WHERE id = :id");

        $binds = array(
            ":id" => $id,
            ":imagename" => $filepath,
            ":firstname" => $fname,
            ":lastname" => $lname,
            ":banner" => $banner,
            ":campaign" => $campaign,
            ":slogan" => $slogan,
            ":about" => $about,
            ":quote" => $quote,
            ":twitter_url" => $twitter
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
           $result = 'Record updated';
        } 
    } else {
        // Update.php?id=1
        $id = filter_input(INPUT_GET, 'id');
        $stmt = $db->prepare("SELECT * FROM profile WHERE id = :id");
        $binds = array(
            ":id" => $id
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            //if ($stmt->rowCount() > 0) {
           $results = $stmt->fetch(PDO::FETCH_ASSOC);
           $name = $results['imagename'];
            $fname = $results['firstname'];
            $lname = $results['lastname'];
            $banner = $results['banner'];
            $campaign = $results['campaign'];
            $slogan = $results['slogan'];
            $about = $results['about'];
            $quote = $results['quote'];
            $twitter = $results['twitter_url'];
            //} else {

            //}
        } else {
          echo 'Record not found';  
        }
        // Indicates update 
        if ( !isset($id) ) {
            echo 'Record not found';
        }
    }

?>