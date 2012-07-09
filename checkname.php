<?php
     header('Content-type: text/html;charset=GB2312');        //指定发送数据的编码格式为GB2312
    
     if (1){
         echo "很报歉!用户名[".$username."]已经被注册!";
    }else{
        echo "祝贺您!用户名[".$username."]没有被注册!";
     }
 ?> 