<?php
session_start();
$products=array(
    array(
        'id'=>'101',
        'image'=>'images/football.png',
        'price'=>150.00
    ),
    array(
        'id'=>'102',
        'image'=>'images/tennis.png',
        'price'=>120.00
    ),
    array(
        'id'=>'103',
        'image'=>'images/basketball.png',
        'price'=>90.00
    ),
    array(
        'id'=>'104', 
        'image'=>'images/table-tennis.png',
        'price'=>110.00
    ),
    array(
        'id'=>'105',
        'image'=>'images/soccer.png',
        'price'=>80.00
    )
);


$cart=array(
    array("id"=>'101',"name"=>"Basket Ball","quantity"=>0,"price"=>150),
    array("id"=>'102',"name"=>"Football","quantity"=>0,"price"=>120),
    array("id"=>'103',"name"=>"Soccer","quantity"=>0,"price"=>90),
    array("id"=>'104',"name"=>"Table Tennis","quantity"=>0,"price"=>110),
    array("id"=>'105',"name"=>"Tennis","quantity"=>0,"price"=>80 ,'image'=>'images/soccer.png')
);

$_SESSION['cart']=$cart;
?>
