<?php 
$conn = mysqli_connect("localhost","root","","ticstore");
if (!$conn) {
    die("". mysqli_connect_error());
}