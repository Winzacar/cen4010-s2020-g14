<?php

    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $reason = filter_input(INPUT_POST, 'reason');
    $message = filter_input(INPUT_POST, 'message');


    $host = '127.0.0.1';

    try {
        $user = 'smedina2017';
        $pass = 'Greatgrad3$';
        $link = new PDO('mysql:host=127.0.0.1;port=8889;dbname=smedina2017', trim($user), 'Greatgrad3$');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Successfully submitted';
        $link = null;
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
   

   /** 
   
   $db_user = 'root';
    $db_pass = '';
    $db_name = 'smedinda2017';
    
   $link = new mysqli($host, $db_user, $db_pass, $db_name);
   
   
   mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
    mysql_select_db("FNB1C_data") or die(mysql_error());**/






    /**define('DB_NAME', 'smedina2017');
    define('DB_USER', 'smedina2017');
    define('DB_PASSWORD', 'Greatgrad3$');
    define('DB_HOST', 'localhost');

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    if (!$link) {
        die ('Could not connect: ' . mysql_error());
    }

    $db_selected= mysql_select_db(DB_NAME, $link);
    if (!$db_selected) {
        die('Can\'t use ' . DB_NAME . ':' . mysql_error());
    }

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $reason = $_REQUEST['reason'];
    $message = $_REQUEST['message'];**/
    
    

?>
