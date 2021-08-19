<?php
$img_array = file('imgurl.txt');

//Pick a random image from the array 
$img = array_rand($img_array);

//Result Generate
$result['result']=200;
$result['img']= $img_array[$img];
$result['picture source']="https://bing.ioliu.cn";
$result['author']="IamWu555";

//Type Choose
$type=$_GET['wu'];
switch ($type)
{
//HTML
case 'url':
echo $result['img'];
break;
//JSON
case 'json':
header('Content-type:text/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
break;
//302 Redirect
case '302':
header("Location:".$result['img']);
break;
//IMG
default:
echo '<head><link rel="icon" href="favion.ico"></head><body style="margin:0px;"><img alt="IamWu555" src="'.$result['img'].'" style="width:100%;height: auto;"/></body>';
break;
}
?>