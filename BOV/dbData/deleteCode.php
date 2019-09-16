<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions.php';
/****************************************************************/
/***********************DELETES*FILE*SELECTED********************/
/****************************************************************/
$db = getDatabase();
    $id = filter_input(INPUT_GET, 'id'); 
            $stmt = $db->prepare("SELECT firstname, lastname FROM profile WHERE id = :id");
            $binds = array(
                ":id" => $id
            );
            //var_dump($stmt); die();
            $fname = '';
            $lname = '';
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $fname = $results[0]['firstname'];
                $lname = $results[0]['lastname'];                
            }              
            
            $stmt = $db->prepare("DELETE FROM profile WHERE id = :id");
            
            $binds = array(
                ":id" => $id
            );

       
        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }

