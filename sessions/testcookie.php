<?php


var_dump($_COOKIE);  # place on the browser

setcookie("course","",time()-3600,"/","",0,0);

var_dump($_COOKIE);
