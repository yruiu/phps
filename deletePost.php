<?php
require "dbsetings.php";
$id=$_POST['id'];
$delete  = R::findOne( 'articl', ' id = ? ', [ $id ] );
R::trash( $delete );
header('Location: /');