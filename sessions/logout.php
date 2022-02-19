<?php

session_start();
## destroy session ---> delete file on the server
session_destroy();
setcookie("PHPSESSID","",time()-3600,"/","",0,0);
header("Location:login.php");

