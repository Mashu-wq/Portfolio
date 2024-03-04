<?php
session_start();
error_reporting(0);
$db = mysqli_connect('localhost', 'root', '', 'my_portfolio') or die("database not connected!");
