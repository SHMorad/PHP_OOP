<?php
// file system and directory function
// echo getcwd(); //current Folder

/* $entries = scandir(getcwd());
// print_r($entries);
foreach($entries as $entry){
    if("." !=$entry && ".." !=$entry){
        if(is_dir($entry)){
            echo "[directory] {$entry}\n";
        } else{
            echo "[file] {$entry}\n";
        }
    }
}

function countDir($dir){
    $count =0;
    $entries = scandir($dir);
    foreach($entries as $entry){
        if("." != $entry && ".." != $entry){
            // if(is_dir($entry)){
            //     echo "[directory] {$entry}\n";
            // }else{
            //     echo "[file] {$entry}\n";
            // }
            if(is_dir($entry)){
                $count++;
            }
        }
    }
    return $count++;
}
echo countDir(getcwd());
 */

//  make directory

// mkdir("test/morad/new",0777,true);

// makeing directory ,file and remove directory in recursive system 

/* mkdir("test/d1/d2/d3",0777,true);
file_put_contents("test/f.txt", "Hello");
file_put_contents("test/d1/f.txt", "Hello");
file_put_contents("test/d1/d2/f.txt", "Hello");
file_put_contents("test/d1/d2/f2.txt", "Hello");
sleep(10);
deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test");

function deleteDir($path){
    if(!is_readable($path)){
        return;
    }
    $filesInPath = scandir($path);
    if(count(scandir($path)) > 2){
        foreach($filesInPath as $file){
            if("." !=$file && ".." != $file){
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if(is_dir($filePath)){
                    deleteDir($filePath);
                }else{
                    unlink($filePath);
                }
            }
    
        }
        
            
    }
    rmdir($path);

} */
// directory iterator

/* $di = new DirectoryIterator("./");
foreach($di as $file){
    if($file->isDot()){
        continue;
    }
    if($file->isDir()){
        echo $file->getPathName()."\n";
    }else{
        echo $file->getPathName().":".$file->getSize()."\n";
    }
} */


// recursive directory iterator

/* // $rdi = new RecursiveDirectoryIterator("./");RecursiveDirectoryIterator::SKIP_DOTS;

// $file = new RecursiveIteratorIterator($rdi);

// foreach($file as $file){
//     echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."\n";
// }

$size = 0;
$rdi = new RecursiveDirectoryIterator("./");RecursiveDirectoryIterator::SKIP_DOTS;

$file = new RecursiveIteratorIterator($rdi);

foreach($file as $file){
    if($file->isFile()){
        $size += $file->getSize();
    }
    if($file->getFileName()=="script.js"){
        echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."\n";
    }
    
}
echo "Directory Size"." $size "."bytes"; */


// use of Pathinfo

/* const FILENAME ="C:\\xampp\htdocs\PhpByHasinHayder\PHP_OOP\fileSystem\\fileSystem.php";
// echo pathinfo(FILENAME,PATHINFO_BASENAME);
// echo pathinfo(FILENAME,PATHINFO_DIRNAME);
// echo pathinfo(FILENAME,PATHINFO_EXTENSION);
// echo pathinfo(FILENAME,PATHINFO_FILENAME);
// $path = explode(".",FILENAME);
// echo array_pop($path);

//passing two agruments
$path=array(PATHINFO_DIRNAME,PATHINFO_BASENAME,PATHINFO_EXTENSION,PATHINFO_FILENAME);
foreach ($path as $value){
print_r(pathinfo(FILENAME,$value)."\n");
} */
// glob function

// print_r(glob("./*"));
// print_r(glob("./*",GLOB_ONLYDIR));
// print_r(glob("./M*",GLOB_ONLYDIR));
// print_r(glob("./*m*",GLOB_ONLYDIR));
// print_r(glob("./*{m,o}*",GLOB_ONLYDIR));
// print_r(glob("./uploads/*/*/*.jpg"));
// print_r(glob("./uploads/*/*/*600x400.jpg"));
// print_r(glob("./uploads/*/*/*[!600x400].jpg"));

?>