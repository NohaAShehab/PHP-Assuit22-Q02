<?php

    session_start();
    # for the first time
    # 1- generate session_id
    # 2- create file on the server sess_session_id
    # return response to the client --> session_id ---> wrote it on client

    var_dump($_SESSION);
//    $_SESSION["name"]="noha";
//    $_SESSION["course"]="PHP";
