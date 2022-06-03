<!DOCTYPE html>
<?php
session_start();
include ('includes/database.php');

if(!isset($_SESSION['id'])){
    header('location:indexprofile.php');
}
?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <title>User Profile</title>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid"></div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">User Profile</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>WELCOME:</h1>
			<?php echo "<h2 class='text-success'>".$_SESSION['username']."</h2>"; ?>
			<a href="logout.php">Logout</a>
		</div>
	</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Role</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $id = intval($_SESSION["id"]);
            $sql = "SELECT * FROM users WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            $counter = 1;
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["role"]; ?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td>
                    <a href="editprofile.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a>
                    <a href="deleteProfile.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Delete</a>
                    <!-- <a href="functions/deletefeedback.php?id=<?php echo $row["feedback_id"]; ?>&status=Delete" class="btn btn-danger">Delete</a> -->
                </td>
            </tr>

            <?php } ?>
            
        </tbody>
        </table>
    </div>  

    <?php 
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
  </body>
</html>
</body>	
</html>