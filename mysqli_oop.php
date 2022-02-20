<?php
############ set credentials
const DB_HOST ="localhost";
const DB_USER= "php_assuit";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "php_assuit";

try{
    $conn = new mysqli(DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_DATABASE, 3306);
    if($conn){
        ###################### insert
//
//        $query ="insert into `php_assuit`.`student`
//        (`std_name`,`email`)
//        values ('ahmed','ahmed@gmail.com')";
//
//        $res=$conn->query($query);
//        var_dump($res);  # query executed successfully, true
//        var_dump($conn);
//        echo $conn->insert_id;

//        ################ update
//        $query ="update student set `std_name`='ebtsam' where id=13";
//
//            $res=$conn->query($query);  # return true if the query executed successfully
//            # but this doesn't mean that the database affected
//            var_dump($res);  # query executed successfully, true
//            var_dump($conn);
//            echo $conn->affected_rows;

        ################ delete
        $query ="delete from student where id=12";

        $res=$conn->query($query);  # return true if the query executed successfully
        # but this doesn't mean that the database affected
        var_dump($res);  # query executed successfully, true
        echo $conn->affected_rows;




        ############# select ##############3
        $select_query="select * from `php_assuit`.`student`;";
        # execute query
        $res=$conn->query($select_query);
//        var_dump($res);
//        var_dump($conn);
        # get all data
//        $rows=$res->fetch_all(MYSQLI_ASSOC);
//        var_dump($rows);
        # get one row
//        echo "<h1>Associative </h1>";
//        $row=$res->fetch_assoc();
//        var_dump($row);
//        echo "<h1>object </h1>";
//        $row=$res->fetch_object();
//        var_dump($row);
//        echo "<h1>Row </h1>";
//        $row=$res->fetch_row();
//        var_dump($row);
        echo "<table border='2'> <tr><th>ID</th> <th>Name</th> <th>Email</th>
            <th>Edit</th> <th>Delete</th></tr> ";
        while ($row = $res->fetch_assoc()) { #fetching the record as associative array
            echo "<tr> <td>{$row["id"]}</td>
                <td>{$row["std_name"]}</td> <td>{$row["email"]}</td>
                <td><a href='edit.php?id={$row["id"]}'>Edit </a></td>
                <td><a href='edit.php?id={$row["id"]}'>Delete </a></td></tr>";
        }
        echo "</table>";

        $res->free_result();



        $conn->close();
    }


}catch (Exception $e){

    echo $e->getMessage();
}
