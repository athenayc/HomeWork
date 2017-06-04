<?php

include 'sql.php';
$pdo=new pdo($dsn,$user,$passwd,$opt);
//$db = @new mysqli('127.0.0.1',
//    'root','root','iii');


if (isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql = "DELETE FROM cust WHERE id={$delid}";
//    $db->query($sql);
    $stmt=$pdo->prepare($sql);
    $stmt->execute($delid);

} ;


$sql = 'select * from cust';
echo "$sql";
$stmt=$pdo->prepare($sql);
$stmt->execute([$id,$account,$passwd,$realname]);
//$rs = $db->query($sql);
?>

<a href="addmemberpdo.php">New</a>
<hr>
<table width="100%" border="1">
    <tr>
        <th>Id</th>
        <th>account</th>
        <th>password</th>
        <th>Real Name</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
    while ($row = $stmt->fetch_object()){
        echo '<tr>';
        echo "<td>{$row->id}</td>";
        echo "<td>{$row->account}</td>";
        echo "<td>{$row->passwd}</td>";
        echo "<td>{$row->realname}</td>";
        echo "<td><a href='?delid={$row->id}'>Del</td>";
        echo "<td><a href='editMember.php?editid={$row->id}'>Edit</td>";
        echo '</tr>';
    }
    ?>
</table>
