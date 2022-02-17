

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login page </title>
</head>
<body>
<?php
    echo "<h1> Welcome to the log-in page </h1>";

    # $_REQUEST, $_POST, $_GET

    var_dump($_REQUEST);

//    var_dump($_GET);
//
//    var_dump($_POST);

    echo $_REQUEST["username"];
    echo "<br>";
    echo $_REQUEST["password"];



?>


</body>
</html>





