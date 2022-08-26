<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "crud_app");

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

if (!$conn) 
{
    die("connection failed");
}