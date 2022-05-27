<?php 
$con = new PDO("mysql: host=localhost;dbnamesdp_assignment", 'root', '');

if(isset($_POST['searchname'])){
    $searchmemberlist = $_POST['badmintonmember'];
    $sth = $con ->prepare("SELECT * FROM badmintonmember_list WHERE MemberName = '$searchmemberlist'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth-> execute();

    if($row = $sth->fetch())
    {
      ?>
      <br><br><br>
      <table>
      <tr>
        <th>Member ID</th>
        <th>Name</th>
    </tr>
    <tr>
        <td><?php echo $row-> MemberID; ?></td>
        <td><?php echo $row -> Name; ?></td>
    </tr>
    </table>
    <?php
    }
    else{
      echo "Name does not exist!";
    }
}
?>



$stmt = $pdo -> prepare("SELECT * FROM badmintonmember_list WHERE MemberID LIKE ? OR MemberName LIKE ?");
$stmt -> execute([
    "%".$_POST['badmintonmember']."%", "%".$_POST['badmintonmember']."%"
]);
$results = $stmt ->fetchAll();