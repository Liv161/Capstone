<?php 
/****************************************************************/
/************************INSERT*FILES****************************/
/****************************************************************/
 include 'db.php';
    
 if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $fname = stripslashes($_REQUEST['fname']);
        $fname = mysqli_real_escape_string($conn,$fname);

        $lname = stripslashes($_REQUEST['lname']);
        $lname = mysqli_real_escape_string($conn,$lname);

        $occupation = stripslashes($_REQUEST['occupation']);
        $occupation = mysqli_real_escape_string($conn,$occupation);

        $party = stripslashes($_REQUEST['party']);
        $party = mysqli_real_escape_string($conn,$party);

        $emailC = stripslashes($_REQUEST['emailC']);
        $emailC = mysqli_real_escape_string($conn,$emailC);       

        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($conn,$city);

        $state = stripslashes($_REQUEST['state']);
        $state = mysqli_escape_string($conn,$state);

        $banner = stripslashes($_REQUEST['banner']);
        $banner = mysqli_escape_string($conn,$banner);

        $campaign = stripslashes($_REQUEST['campaign']);
        $campaign = mysqli_escape_string($conn,$campaign);

        $slogan = stripslashes($_REQUEST['slogan']);
        $slogan = mysqli_escape_string($conn,$slogan);

        $about = stripslashes($_REQUEST['about']);
        $about = mysqli_escape_string($conn,$about);

        $quote = stripslashes($_REQUEST['quote']);
        $quote = mysqli_escape_string($conn,$quote);

        $twitter = stripslashes($_REQUEST['twitter']);
        $twitter = mysqli_escape_string($conn,$twitter);

        $day_1f = stripslashes($_REQUEST['day_1f']);
        $day_1f = mysqli_escape_string($conn,$day_1f);

        $day_1s = stripslashes($_REQUEST['day_1s']);
        $day_1s = mysqli_escape_string($conn,$day_1s);

        $month_1f = stripslashes($_REQUEST['month_1f']);
        $month_1f = mysqli_escape_string($conn,$month_1f);

        $month_1s = stripslashes($_REQUEST['month_1s']);
        $month_1s = mysqli_escape_string($conn,$month_1s);

        $year_1f = stripslashes($_REQUEST['year_1f']);
        $year_1f = mysqli_escape_string($conn,$year_1f);

        $year_1s = stripslashes($_REQUEST['year_1s']);
        $year_1s = mysqli_escape_string($conn,$year_1f);

        $term_1f = stripslashes($_REQUEST['term_1f']);
        $term_1f = mysqli_escape_string($conn,$term_1f);

        $term_1s = stripslashes($_REQUEST['term_1s']);
        $term_1s = mysqli_escape_string($conn,$term_1s);
     
          //declaring variables
          $filepath = "../Uploads/" . $_FILES["uploadfile"]["name"];
          $filetmpname = $_FILES['uploadfile']['tmp_name'];
        //function for saving the uploaded images in a specific folder
          move_uploaded_file($filetmpname, $filepath);
        //inserting image details (ie image name) in the database          
          
$sql = "INSERT INTO `profile` (firstname, lastname, occupation, imagename, party, campaign, email, twitter_url, city, state, banner, slogan, about, quote, day_1f, day_1s, month_1f, month_1s, year_1f, year_1s, term_1f, term_1s) VALUES ('$fname', '$lname', '$occupation', '$filepath', '$party', '$campaign', '$emailC', '$twitter', '$city', '$state', '$banner', '$slogan', '$about', '$quote', '$day_1f', '$day_1s', '$month_1f', '$month_1s', '$year_1f', '$year_1s', '$term_1f', '$term_1s' )";      

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql. "<br>" . $conn->error;
             //. $sql
        }

        $conn->close();
    }
/****************************************************************/
/****************************************************************/
/****************************************************************/
 include 'functions.php';
 $db = getDatabase();
/****************************************************************/
/***********************Gets*ALL*FILES***************************/
/****************************************************************/
    $id = filter_input(INPUT_GET, 'id');
    $fname = filter_input(INPUT_GET, 'fname');
    $lname = filter_input(INPUT_GET, 'lname');
    $occupation = filter_input(INPUT_GET,'occupation');
    $name = filter_input(INPUT_GET,'imagename');
    $party = filter_input(INPUT_GET, 'party');        
    $campaign = filter_input(INPUT_GET, 'campaign');
    $emailC = filter_input(INPUT_GET, 'emailC');
    $twitter = filter_input(INPUT_GET, 'twitter');
    $city = filter_input(INPUT_GET, 'city');
    $state = filter_input(INPUT_GET, 'state');
    $banner = filter_input(INPUT_GET, 'banner');
    $slogan = filter_input(INPUT_GET, 'slogan');
    $about = filter_input(INPUT_GET, 'about');
    $quote = filter_input(INPUT_GET, 'quote');
    $day_1f = filter_input(INPUT_GET, 'day_1f');
    $day_1s = filter_input(INPUT_GET, 'day_1s');
    $month_1f = filter_input(INPUT_GET, 'month_1f');
    $month_1s = filter_input(INPUT_GET, 'month_1s');
    $year_1f = filter_input(INPUT_GET, 'year_1f');
    $year_1s = filter_input(INPUT_GET, 'year_1s');
    $term_1f = filter_input(INPUT_GET, 'term_1f');
    $term_1s = filter_input(INPUT_GET, 'term_1s');
    
    $stmt = $db->prepare("SELECT * FROM profile WHERE id = :id");
    $binds = array(
        ":id" => $id
    );
    //var_dump($stmt); die();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = $results[0]['id'];        
        $fname = $results[0]['firstname'];
        $lname = $results[0]['lastname'];
        $occupation = $results[0]['occupation'];
        $name = $results[0]['imagename'];
        $party = $results[0]['party'];
        $campaign = $results[0]['campaign'];
        $emailC = $results[0]['email'];
        $twitter = $results[0]['twitter_url'];
        $city = $results[0]['city'];
        $state = $results[0]['state'];
        $banner = $results[0]['banner'];
        $slogan = $results[0]['slogan'];
        $about = $results[0]['about'];
        $quote = $results[0]['quote'];
        $day_1f = $results[0]['day_1f'];
        $day_1s = $results[0]['day_1s'];
        $month_1f = $results[0]['month_1f'];
        $month_1s = $results[0]['month_1s'];
        $year_1f = $results[0]['year_1f'];
        $year_1s = $results[0]['year_1s'];
        $term_1f = $results[0]['term_1f'];
        $term_1s = $results[0]['term_1s'];
        
    }    
/****************************************************************/
/***********************READS*ALL*FILES**************************/
/****************************************************************/
    $stmt = $db->prepare("SELECT * FROM profile");
    $results = array();
    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


