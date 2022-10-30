<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML ENTITIES</title>
</head>
<body>

<h1 style="font-size: 60px; background-color:aliceblue;color:black;font-family:arial;text-align:center;">isset,html_entity_decode,htmlentities</h2>
    <?php
    if(isset($_GET['input'])){
        echo htmlentities($_GET['input']);
        echo html_entity_decode($_GET['input']);
    }

    ?>
    <form action=""method='get'>
        <input type="text" name="input"/>
        <input type="submit" value='submit'/>
    </form>


    </body>
</html>
<?php




$number='09876';
if(empty($number)){
    echo"thank you";
}else{
    echo"try again</br>";
}
echo str_repeat("this is my page</br>",4);

$name="this is my page";

if(str_repeat($name,4)){
    echo"true</br>";
}else{
    echo"false</br>";
}
echo"<h1>EXPLODE,IMPLODE,END,COUNT</h1>";

$array=["something" ,"is", "wroung", "in", "my", "coding"];
$sure = implode(' ',$array);
echo$sure,"</br>";

$doubt="something is wroung in my coding";
$new_array=explode(' ',$doubt."</br>");
print_r($new_array,"</br>");

$week_day =[
    "sun"=>'sunday',
    "mon"=>'monday',
    "tue"=>'tuesday</br>',

];
echo"<pre>";
print_r($week_day);
echo"</pre>";

print_r(end($week_day));

if(end($week_day)=='tuesday'){
    echo"right";
}else{
    echo"wroung</br>";
}

$result =[
    "disha"=>3.98,
    "diva"=>4.00,
    "eva"=>2.00,
];
echo count($result);
echo"</br>";
if(count($result)=='tamim'){

    echo"he pass the exam";

}else{
    echo"this student can't be found</br>";
}

echo"<h1>array_diff(),array_pop(),array_push(),array_shift(),array_unshift()</h1>";
$array1=[
    'a'=>'orange','pink','brown',
];

$array2=[
    'b'=>'red','blue','orange',
];
echo'<pre>';
print_r(array_diff($array1,$array2));
echo '</pre>';
echo"</br>";
$name=[
    'diva','disha','tamim',
];
array_push($name,'eva');
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';

$name=[
    'diva','disha','tamim',
];
array_pop($name);
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';
echo"</br>";
$name=[
    'diva','disha','tamim',
];
array_shift($name);
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';
$name=[
    'diva','disha','tamim',
];
array_unshift($name,'eva','wakib');
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';
$name="my name is disha";
$array=explode(" ",$name);

echo'<pre>';
print_r(array_reverse($array)[0]);
echo'</pre>';
echo'</br>';

