<?php 
function showError($errno, $errstr, $errfile, $errline){
    echo 'Có lỗi ở dòng: '.$errno;
    echo '<br> Thông báo lỗi: '.$errstr;
    echo '<br> File: '.$errfile;
    echo '<br> Dòng: '.$errline;
}

function show404Error(){
    die('Page not found');
}
?>