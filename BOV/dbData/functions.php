<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function getDatabase() {
            $config = array(
              'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_000926501;',
              'DB_USER' => 'se266_000926501',
              'DB_PASSWORD' => '000926501'
          );
//        $config = array(
//            'DB_DNS' => 'mysql:host=127.0.0.1;port=3306;dbname=test;',
//            'DB_USER' => 'root',
//            'DB_PASSWORD' => ''
//        );
        
        try {
            $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $db = null;
        }        

    return $db;
}

function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

function isGetRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET' );
}