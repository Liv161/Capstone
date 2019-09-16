<?php
/**
 * Function to establish a database connection
 * 
 * @return PDO Object
 */  
function getDatabase() {
    
        $config = array(
            'DB_DNS' => 'mysql:host=127.0.0.1;port=3306;dbname=register;',
            'DB_USER' => 'root',
            'DB_PASSWORD' => ''
        );
        
        try {
            $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $db = null;
        }        

    return $db;
}

?>