<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form class="border shadow p-3 rounded"
            action="check-login.php"
            method="post"
            style="width: 450px;">
            <h1 class="text-center p-3">LOGIN</h1>
            <?php if (isset($_GET['error'])) ?>
            <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
            </div> 
            <div class="input group">
                <label for="username" class="form-label">Username</label>
                <input type="text" placeholder= "Please Enter Your Username" class="form-control" id="username">
            </div>
            <div class="input group">
                <label for="password" class="form-label">Password</label>
                <input type="password" placeholder= "Enter Your Password" name="password" class="form-control" id="password">
            </div>
            <div class="Drop down menu">
                <label class="form-label">Select User Type:</label>
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected value="student">student</option>
                <option value="teacher">Teacher</option>
                <option value="committee">Committee</option>
                <option value="admin">Admin</Option>
            </select>

            <button type="submit" class="btn btn-primary">Login</button>
            <p class="login register text">New to here? <a href= "register.php">Register here</a>
        </form>
    </div>
</body>
</html>
<?php }else{
    header("Location: home.php");
}