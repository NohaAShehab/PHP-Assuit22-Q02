<?php


$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
//var_dump($_GET);

### get the record form the database
$id=(int)$_GET["id"];

#### connect to the datbase and get record with id
try{
    $db = new PDO($dsn, $user, $password);
    if($db){
        $query="select * from student where id=:sid";
        $stmt=$db->prepare($query);
        $stmt->bindParam("sid",$id);
        $stmt->execute();
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
//        var_dump($row);
    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>

<h1> Edit student </h1>
<form action="<?php echo "update.php?id={$id}"; ?>" method="post">
    <table>
        <tr>
            <td> Name </td>
            <td><input type="text" name="std_name"

                value="<?php echo $row['std_name']; ?>"
                > </td>
        </tr>
        <tr>
            <td> Email </td>
            <td><input type="text" name="email"
                       value="<?php echo $row['email']; ?>"
                > </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id"
                       value="<?php echo $row['id']; ?>"
                > </td>
        </tr>
        <tr>
            <td> Submit </td>
            <td><input type="submit" > </td>
        </tr>

    </table>
</form>
