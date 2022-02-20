<?php
############ set credentials
const DB_HOST ="localhost";
const DB_USER= "php_assuit";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "php_assuit";

##################### connect
    try {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
            DB_DATABASE, 3306);
//        var_dump($conn);

        ########### query --> create table student(id serial primary key, std_name varchar(40), email var_char(40));
        # use connection to create table
        if($conn){
//            $create_query="create table `student`(`id` serial primary key,`std_name` varchar(40),`email` varchar(40));";
//            $res=mysqli_query($conn,$create_query);
//            var_dump($res);

            ###################################### select ################################
//            $select_query="select * from `php_assuit`.`student`;";
//            $res=mysqli_query($conn,$select_query);
//            var_dump($res);  # contain information about the result
//            var_dump($conn);
            ################ fetch all rows
            ###### show result --->
            //$rows=mysqli_fetch_all($res);  # return the result into indexed array
            # ---> each row --> is indexed array
//            $rows=mysqli_fetch_all($res,MYSQLI_ASSOC);
//            var_dump($rows);

            ##############################33 fetch row by row
//            $row=mysqli_fetch_assoc($res);
//            var_dump($row);
//            $row=mysqli_fetch_object($res);
//            var_dump($row);
//            $row=mysqli_fetch_row($res);
//            var_dump($row);
//            $row=mysqli_fetch_row($res);
//            var_dump($row);
//            echo "<table border='2'> <tr><th>ID</th> <th>Name</th> <th>Email</th>
//            <th>Edit</th> <th>Delete</th></tr> ";
//            while ($row = mysqli_fetch_assoc($res)) { #fetching the record as associative array
//                echo "<tr> <td>{$row["id"]}</td>
//                <td>{$row["std_name"]}</td> <td>{$row["email"]}</td>
//                <td><a href='edit.php?id={$row["id"]}'>Edit </a></td>
//                <td><a href='edit.php?id={$row["id"]}'>Delete </a></td></tr>";
//            }
//
//            while ($row = mysqli_fetch_object($res)) { #fetching the record as associative array
//                echo "<tr> <td>{$row->id}</td>
//                <td>{$row->std_name}</td> <td>{$row->email}</td>
//                <td><a href='edit.php?id={$row->id}'>Edit </a></td>
//                <td><a href='edit.php?id={$row->id}'>Delete </a></td></tr>";
//            }
//            echo "</table>";
//            echo "<h1>". mysqli_num_rows($res). "</h1>";
            ##########################
//            mysqli_free_result($res);  #the result no longer needed
//            ############################################## insert ###################
//            $query ="insert into `php_assuit`.`student`(`std_name`,`email`)
//                    values ('shymaa','shymaa@gmail.com')";
//
//            $res=mysqli_query($conn,$query);
//            var_dump($res);  # query executed successfully, true
////            var_dump($conn);
//            echo mysqli_insert_id($conn); # return last inserted id

            ##########################   ############################################## update ###################
//            $query ="update student set `std_name`='test' where id=8";
//
//            $res=mysqli_query($conn,$query);  # return true if the query executed successfully
//            # but this doesn't mean that the database affected
//            var_dump($res);  # query executed successfully, true
//            var_dump($conn);
//            echo mysqli_affected_rows($conn);
            ##################################################### delete
            $query ="delete from student where id=4";

            $res=mysqli_query($conn,$query);  # return true if the query executed successfully
            # but this doesn't mean that the database affected
            var_dump($res);  # query executed successfully, true
            var_dump($conn);
            echo mysqli_affected_rows($conn);


            ###################### select ############
            $select_query="select * from `php_assuit`.`student`;";
            $res=mysqli_query($conn,$select_query);
            echo "<table border='2'> <tr><th>ID</th> <th>Name</th> <th>Email</th>
            <th>Edit</th> <th>Delete</th></tr> ";
            while ($row = mysqli_fetch_assoc($res)) { #fetching the record as associative array
                echo "<tr> <td>{$row["id"]}</td>
                <td>{$row["std_name"]}</td> <td>{$row["email"]}</td>
                <td><a href='edit.php?id={$row["id"]}'>Edit </a></td>
                <td><a href='edit.php?id={$row["id"]}'>Delete </a></td></tr>";
            }
            echo "</table>";





            #####################################update ############
            ################################3

        }

    }catch (Exception $e){
        echo $e->getMessage();
    }



