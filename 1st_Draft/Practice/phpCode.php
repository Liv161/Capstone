<?php

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
    $stmt = $db->prepare("SELECT Id, imagename FROM uploadedimage WHERE Id = :id");
    $binds = array(
        ":id" => $id
    );
    //var_dump($stmt); die();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = $results[0]['Id'];
        $name = $results[0]['imagename'];
    }    
/****************************************************************/
/****************************************************************/
    $stmt1 = $db->prepare("SELECT * FROM uploadedimage");
    $results = array();
    
    if ($stmt1->execute() && $stmt1->rowCount() > 0) {
        $results = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    }
/****************************************************************/
/****************************************************************/
    include '../db.php';
    if(isset($_POST['submit'])) {
        //declaring variables
        $filepath = "Uploads/" . $_FILES["uploadfile"]["name"];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        //function for saving the uploaded images in a specific folder
        move_uploaded_file($filetmpname, $filepath);
        //inserting image details (ie image name) in the database
        $sql = "INSERT INTO `uploadedimage` (`imagename`)  VALUES ('$filepath')";
        $qry = mysqli_query($con,  $sql);
        if( $qry) {
        echo "image uploaded";
        }    
    }
/****************************************************************/
/****************************************************************/