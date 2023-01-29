<?php
// echo get_cfg_var("cfg_file_path");
// ini_set("display_error",0);
// ini_set("display_startup_error",0);
// error_reporting(E_NOTICE);
// error_reporting(E_ALL);
// function custom_error_handler($severity, $msg, $file, $line){
//     echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}";
// }
// set_error_handler('custom_error_handler');
// // echo $name;

// echo 12/0;
// echo substr("Morad Patwary",3);
// trigger_error("This is an error");
// echo substr([12345],3);
function custom_error_handler($severity, $msg, $file, $line){
switch($severity){
    case E_WARNING:
        echo "moradError[{$severity}]: {$msg} in {$file} on line Number{$line}";
    break;
    case E_NOTICE:
        echo "MoradError[{$severity}]: {$msg} in {$file} on line Number{$line}";
    break;
    default:
    echo "Error[{$severity}]: {$msg} in {$file} on line Number{$line}";

}
}
// echo substr([12345],3);
// echo 12/0;
echo $name
?>