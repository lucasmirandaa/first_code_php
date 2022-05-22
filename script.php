<?php
session_start();

$category=[];
$category[]='kid';
$category[]='teenager';
$category[]='adult';
$category[]='old';

$name = $_POST['name'];//'Eobard Thawne';
$age = $_POST['age'];
if(empty($name)){
    echo "The name can't be empty. ";
}
if(strlen($name) <3){
    echo "Invalid name, too short. Minimum 3 characters. ";
}
if(strlen($name) >30){
    echo "Name too long. ";
}
if(!is_numeric($age)){
    echo "Only numbers. ";
}
if($age>=6 && $age<=12)
{
    for($i = 0;$i <=count($category);$i++)
    {
        if($category[$i]=='kid')
        echo "The swimmer ".$name." competes in the category " .$category[$i];
    }
}
elseif($age>=13 && $age<=18)
{
    for($i=0;$i<=count($category);$i++)
    {
        if($category[$i]=='teenager')
        echo "The swimmer ".$name." competes in the category ".$category[$i];
    }
}
elseif($age>=19 && $age<=59)
{
    for($i=0;$i<=count($category);$i++)
    {
        if($category[$i]=='adult')
        echo "The swimmer ".$name." competes in the category ".$category[$i];
    }
}
else
{
    for($i=0;$i<=count($category);$i++)
    {
        if($category[$i]=='old')
        echo "The swimmer ".$name." competes in the category ".$category[$i];
    }
}