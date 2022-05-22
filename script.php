<?php

$category=[];
$category[]='kid';
$category[]='teenager';
$category[]='adult';
$category[]='old';

$name = $_POST['name'];//'Eobard Thawne';
$age = $_POST['age'];

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