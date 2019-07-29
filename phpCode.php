<?php //

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './dbconnect.php';
    /*
     * get and hold a database connection 
     * into the $db variable
     */
/****************************************************************/
/****************************************************************/
    $db = getDatabase();
/****************************************************************/
/****************************************************************/
    $id = filter_input(INPUT_GET, 'id');
    $fname = filter_input(INPUT_GET, 'fname');
    $lname = filter_input(INPUT_GET, 'lname');
    $banner = filter_input(INPUT_GET, 'banner');
    $campaign = filter_input(INPUT_GET, 'campaign');
    $slogan = filter_input(INPUT_GET, 'slogan');
    $about = filter_input(INPUT_GET, 'about');
    $quote = filter_input(INPUT_GET, 'quote');
    $twitter = filter_input(INPUT_GET, 'twitter');
    $stmt = $db->prepare("SELECT * FROM profile WHERE id = :id");
    $binds = array(
        ":id" => $id
    );
    //var_dump($stmt); die();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = $results[0]['id'];
        $name = $results[0]['imagename'];
        $fname = $results[0]['firstname'];
        $lname = $results[0]['lastname'];
        $banner = $results[0]['banner'];
        $campaign = $results[0]['campaign'];
        $slogan = $results[0]['slogan'];
        $about = $results[0]['about'];
        $quote = $results[0]['quote'];
        $twitter = $results[0]['twitter_url'];
    }    
/****************************************************************/
/****************************************************************/
    $stmt = $db->prepare("SELECT * FROM profile");
    $results = array();
    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
/****************************************************************/
/****************************************************************/

    
/****************************************************************/
/****************************************************************/
    include 'db.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $candName = $fname." ".$lname;

        if(isset($_POST['submit'])){
                $fname = filter_input(INPUT_POST, 'fname');
                $lname = filter_input(INPUT_POST, 'lname');
                $banner = filter_input(INPUT_POST, 'banner');
                $campaign = filter_input(INPUT_POST, 'campaign');
                $slogan = filter_input(INPUT_POST, 'slogan');
                $about = filter_input(INPUT_POST, 'about');
                $quote = filter_input(INPUT_POST, 'quote');
                $twitter = filter_input(INPUT_POST, 'twitter');
          //declaring variables
          $filepath = "Uploads/" . $_FILES["uploadfile"]["name"];
          $filetmpname = $_FILES['uploadfile']['tmp_name'];
        //function for saving the uploaded images in a specific folder
          move_uploaded_file($filetmpname, $filepath);
        //inserting image details (ie image name) in the database

        $sql = "INSERT INTO `profile` (`imagename`, `firstname`, `lastname`, `banner`, `campaign`, `slogan`, `about`, `quote`, `twitter_url`)  VALUES ('$filepath', '$fname', '$lname', '$banner', '$campaign', '$slogan', '$about', '$quote', '$twitter')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
/****************************************************************/
/****************************************************************/
