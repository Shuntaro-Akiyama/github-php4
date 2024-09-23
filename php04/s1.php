<?php 
//s1.php
session_start(); //SESSION使うよ

$_SESSION["name"] = "yamazaki";
$_SESSION["age"]  = "40";

echo session_id();