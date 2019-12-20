<?php
 define('HOST','mysql.hostinger.in');
 define('USER','root');
 define('PASS','');
 define('DB','sms_verif');
 
 //Connecting to database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');