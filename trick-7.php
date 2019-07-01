<?php
ob_start(function($string) {
    return strrev($string);
});
//Hàm này nó lưu lại tất cả những gì mình muốn xuất ra và sử lý bằng cái hàm bên trong nó.
//Hình như nó dùng để tạo cache khi kết hợp sử dụng với ob_get_contents(), ob_end_flush(), ob_end_clean()

// NO CHANGES ALLOWED BELOW
echo 'Foobar';
echo PHP_EOL;
echo 'Hello World';
/*
 * Magic output:
 *
 * dlroW olleH
 * rabooF
 */