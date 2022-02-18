<?php

try{
    $data= file("studentinfo.txt");
//    var_dump($data);

    echo "<table border='3'>
        <th>Name</th> <th>Track</th>
        <th>Course</th>
        <th>Edit</th>
        <th>Delete</th>";

    foreach ($data as $i =>$line){
        $newline=explode(":",$line);
//        var_dump($newline);
        echo "<tr>";
        foreach ($newline as $f){
            echo "<td>".$f."</td>";
        }
        echo "<td><a href='edit.php'> edit</a> </td>
            <td><a href='delete.php'> delete</a> </td></tr>";
    }
    echo "</table>";





}catch (Exception $e){


}