<?php

$category=[];
$category[]='infantil';
$category[]='adolescente';
$category[]='adulto';
$category[]='idoso';
//print_r($category);

$nome='Edu';
$idade=19;

//var_dump($nome);
//var_dump($idade);

if($idade>=6 && $idade<=12)
{
    for($i = 0;$i <=count($category);$i++)
    {
        if($category[$i]=='infantil')
        echo "O nadador ".$nome." compete na categoria " .$category[$i];
    }
}
elseif($idade>=13 && $idade<=18)
{
    for($i=0;$i<=count($category);$i++)
    {
        if($category[$i]=='adolescente')
        echo "O nadador ".$nome." compete na categoria ".$category[$i];
    }
}
elseif($idade>=19 && $idade<=59)
{
    for($i=0;$i<=count($category);$i++)
    {
        if($category[$i]=='adulto')
        echo "O nadador ".$nome." compete na categoria ".$category[$i];
    }
}
else
{
    for($i=0;$i<=count($category);$i++)
    {
        if($category[$i]=='idoso')
        echo "O nadador ".$nome." compete na categoria ".$category[$i];
    }
}