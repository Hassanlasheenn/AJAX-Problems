<?php
header("Content-type: text/xml; charset=utf-8");
$output="<?xml version='1.0' encoding='ISO-8859-1'?>";
$output.="<airports>";
$output.="<airport>";
$output.="<city>New York</city>";
$output.="<airportName>La Guardia Airport</airportName>";
$output.="<code>LGA</code>";
$output.="</airport>";

$output.="<airport>";
$output.="<city>Chicago</city>";
$output.="<airportName>O'Hare Airport</airportName>";
$output.="<code>ORD</code>";
$output.="</airport>";

$output.="<airport>";
$output.="<city>Washington DC</city>";
$output.="<airportName>Ronald Reagan Airport</airportName>";
$output.="<code>DCA</code>";
$output.="</airport>";

$output.="<airport>";
$output.="<city>Hartford</city>";
$output.="<airportName>Bradley International Airport</airportName>";
$output.="<code>BDL</code>";
$output.="</airport>";

$output.="<airport>";
$output.="<city>Texas</city>";
$output.="<airportName>Texas Airport</airportName>";
$output.="<code>TXX</code>";
$output.="</airport>";

