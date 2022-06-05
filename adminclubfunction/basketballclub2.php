<?php
    require "conn.php";
$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View BasketballClub Member List</title>
    <h1>View BasketballClub Member List</h1>
</head>
<body>
	<a href="#">Return</a>
    <a href="#">Home</a>
	<table>
    <tr>
        <th>MemberID</th>
        <th>Name</th>
    </tr>
    <?php
    $sql = "SELECT * FROM basketballmemberlist";
    $result = $conn->query($sql);
    
    while($data = $result->fetch_assoc()){
        echo ("<tr>");
        echo ("<td>" . $data['MemberID'] . "</td>");
        echo ("<td>" . $data['MemberName'] . "</td>");
        echo ("</tr>");}
    ?>
</table>
</body>
</html>