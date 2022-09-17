<?php
require 'dbsetings.php';
if(!R::testConnection()){
			exit("error");
		};
$img=$_POST['img'];
$anons=$_POST['anons'];
$text=$_POST['text_message'];
$articl = R::dispense( 'articl' );

$articl->img = $img;
$articl->anons = $anons;
$articl->text = $text;
$id = R::store( $articl );
echo $anons.'<br>';
echo $text;
header('Location: /');