<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

</style>
<head>
    <title>Badminton Club Member List</title>
    <h1>Badminton Club Member List</h1>
</head>
<body>
<form method = "post">
<input type="text" name="badmintonmember" placeholder="Search for member's ID or Name" size= "30" required/>
<input type ="submit" name="searchname" value="SEARCH"/><br><br>
</form>
<table>
    <tr>
        <th>MemberID</th>
        <th>Name</th>
    </tr>
    <?php
    $sql = "SELECT * FROM badmintonmember_list";
    $result = $con->query($sql);
    
    while($data = $result->fetch_assoc()){
        echo ("<tr>");
        echo ("<td>" . $data['MemberID'] . "</td>");
        echo ("<td>" . $data['MemberName'] . "</td>");
        echo ("</tr>");}
    ?>
</table>


<h2>Result of search</h2>
<table>
    <tr>
        <th>MemberID</th>
        <th>Name</th>
    </tr>
    <?php 
    if(isset($_POST['searchname'])){
      require "badmintonsearch.php";
    if(count($results)> 0){
      foreach ($results as $r){
        echo ("<tr>");
        echo ("<td>" . $r['MemberID'] . "</td>");
        echo ("<td>" . $r['MemberName'] . "</td>");
        echo ("<tr>");
      }
    }else{echo "<div> No result found</div>";}
  }
  ?>
    </table>
</body>
</html>

