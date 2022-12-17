<?php
header("Content-Type: text/xml; charset=utf-8");
$output="<?xml version='1.0' encoding='ISO-8859-1'?>";
$output.="<catalog>";
$output.="<song>I Want to Know What Love Is</song>";
$output.="<song>Tragedy</song>";
$output.="<song>They Dance Alone</song>";
$output.="<song>Biko</song>";
$output.="<song>Keep On Loving you</song>";
$output.="<song>Sailing</song>";
$output.="<song>Beat It</song>";
$output.="</catalog>";
echo($output);
?>