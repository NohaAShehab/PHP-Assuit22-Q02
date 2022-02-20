<?php

$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
try {
    $db = new PDO($dsn, $user, $password);
    var_dump($db);

    #################################### insert
//    $ins_query="insert into student(std_name, email) values (?,?);";
//    $stmt=$db->prepare($ins_query);
//    $name="uuuu";
//    $email="uuuu@php";
//    $res =$stmt->execute([$name,$email]);
//    var_dump($res);
//    echo $db->lastInsertId();

//    ##################### update
//    $ins_query="update student set std_name=? where id>?";
//    $stmt=$db->prepare($ins_query);
//    $res=$stmt->execute(["updated_pdo_prepred",20]);  ### true , false
//    echo $stmt->rowCount();

    ###################
    ##################### delete
//    $ins_query="delete from student where id>?";
//    $stmt=$db->prepare($ins_query);
//    $res=$stmt->execute([20]);  ### true , false
//    echo $stmt->rowCount(); #no of affected rows

    ################ PDO

    ######################## select
    $select_query="select * from student";
    $stmt=$db->prepare($select_query);
    $resobj=$stmt->execute();
    var_dump($resobj);
    ###
//    $data=$stmt->fetchAll();
//    var_dump($data);

//    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
//    var_dump($data);
//    $data=$stmt->fetchAll(PDO::FETCH_OBJ);
//    var_dump($data);


    #### loop

    echo "<table border='2'> <tr><th>ID</th> <th>Name</th> <th>Email</th>
            <th>Edit</th> <th>Delete</th></tr> ";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { #fetching the record as associative array
        echo "<tr> <td>{$row["id"]}</td>
                <td>{$row["std_name"]}</td> <td>{$row["email"]}</td>
                <td><a href='edit.php?id={$row["id"]}'>Edit </a></td>
                <td><a href='edit.php?id={$row["id"]}'>Delete </a></td></tr>";
    }
    echo "</table>";
















}catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


