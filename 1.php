<?php
define('DIR_NAME', '.'.DIRECTORY_SEPARATOR.'main_dir');
$enter=scandir(DIR_NAME);
$array=[];
$arr1=[];
$arr2=[];
foreach ($enter as $value) {
    $file=DIR_NAME.DIRECTORY_SEPARATOR.$value;
    if (is_dir($file)&&($value!='.')&&($value!='..')){
     $read=scandir($file);
     //var_dump($read);
        foreach ($read as $name){
            if(($name!='.')&&($name!='..')) {
                $number=realpath(dirname($name)).$file.DIRECTORY_SEPARATOR.$name."<br>";
                $array[$number] = $name;
            }
     }
    }
}
 $ftext=file_get_contents('./main_list_name.txt');
$arrayName=explode(',',$ftext);
foreach($array as $key=> $value){
    $length=ceil(strlen($value)*0.1);
$file_name_st=substr($value, 0, $length);
$arr1[$key]=$file_name_st;
}
for($i=0; $i<=count($arrayName)-1; $i++){

    $file_name_t=substr($arrayName[$i],0,  ceil(strlen($arrayName[$i])*0.1) );
    $arr2[]=$file_name_t;
}
$res=array_diff($arr1, $arr2);
if(count($res)>0){
   foreach ($res as $key=> $value){
        echo $array[$key]." ". $key."<br>";
    }
}
else echo "Vse sovpali";