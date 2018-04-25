<?php
    require_once 'functions.php';

    if (isset($_POST['name']) && isset($_POST['text']))
    {
      $text = sanitizeString($_POST['text']);
      $name = sanitizeString($_POST['name']);
  
      if ($text != "" && $name != "")
      {
        $time = time();
        queryMysql("INSERT INTO comments VALUES(NULL, '$name', '$time', '$text')");
        //  '$view', '$pm', $time, '$text')");
        http_response_code(200);
        //echo $text . $name;
      }
    }
    
?>