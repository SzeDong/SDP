<?php
require_once('regData.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clubs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div>
<?php
if(isset($_POST['registerClub'])){
    $clubname = $_POST['clubname'];
    $clubDetails = $_POST['clubDetails'];
    $preClub = $_POST['preClub'];
    $VpreClub = $_POST['VpreClub'];
    $phoneNumber = $_POST['phoneNumber'];
    $Email = $_POST['Email'];
    
    $sql = "INSERT INTO clubs (clubname, clubDetails, preClub, Vpreclub, phoneNumber, Email) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $conn->prepare($sql); //statement for insert
    $result = $stmtinsert ->execute([$clubname, $clubDetails, $preClub, $VpreClub, $phoneNumber, $Email]);
    if($result){
        echo "Club is registered successfully";
    }else{
        echo "Sorry, something went wrong while saving the data.";
    }
}

?>
</div>

<div>
    <form action="RegistrationClubs.php" method="post">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <h1>Registration Club</h1>
                    <p>Please kindly fill up the form with correct format.</p>
                    <hr class="mb-3">
                    <label for="clubname"><b>Club Name</b></label>
                    <input class="form-control" type="text" name="clubname" required>

                    <label for="clubDetails"><b>Club Descriptions</b></label>
                    <input class="form-control" type="text" name="clubDetails" required>

                    <label for="preClub"><b>Name of President</b></label>
                    <input class="form-control" type="text" name="preClub" required>

                    <label for="VpreClub"><b>Name of Vice President</b></label>
                    <input class="form-control" type="text" name="VpreClub" required>

                    <label for="phoneNumber"><b>Phone Number</b></label>
                    <input class="form-control" type="text" name="phoneNumber" required>

                    <label for="Email"><b>Email Address</b></label>
                    <input class="form-control" type="email" name="Email" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" name="registerClub" value="Register">
                </div>
            </div>
        </div>
    </form>
</div>

