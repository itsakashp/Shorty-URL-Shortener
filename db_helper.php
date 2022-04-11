<?php
$HOSTNAME =  "sql210.epizy.com";
$USERNAME = "epiz_26943160";
$DATABASENAME = "epiz_26943160_shorty";
$PASSWORD = "uhDk45cTYsGkI";

$conn= mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASENAME);

if (!$conn){
    die("Connect failed: " . mysqli_connect_error());
}
