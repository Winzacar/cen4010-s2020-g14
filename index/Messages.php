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
        $pass = '';
        $link = new PDO('mysql:host=127.0.0.1;port=8889;dbname=smedina2017', trim($user), 'Greatgrad3$');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Successfully submitted';
        $link = null;
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
  



  

?>
