<?php


$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
try {
    $db = new PDO($dsn, $user, $password);
    var_dump($db);

    $select_query = "select * from student";
    $stmt = $db->prepare($select_query);
    $resobj = $stmt->execute();


    echo "<table border='2'> <tr><th>ID</th> <th>Name</th> <th>Email</th>
            <th>Edit</th> <th>Delete</th></tr> ";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { #fetching the record as associative array
        echo "<tr> <td>{$row["id"]}</td>
                <td>{$row["std_name"]}</td> <td>{$row["email"]}</td>
                <td><a href='edit.php?id={$row["id"]}'>Edit </a></td>
                <td><a href='delete.php?id={$row["id"]}'>Delete </a></td></tr>";
    }
    echo "</table>";


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


