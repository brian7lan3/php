<?php

    $emailTo = "a3673802@yahoo.com.tw";
    $title = "Test Email";
    $body = "This is email content.";
    $headers = "From:brian7lan3@gmail.com";
    
    
    if(mail($emailTo, $title, $body, $headers)){
        echo "郵件發送成功";
    }else{
        echo "郵件發送失敗!";
    }


?>