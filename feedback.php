<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Add Feedback</title>
  </head>
  <body>
    <div class="container" style="margin-top:50px;">

        <div class="panel panel-default">
            <div class = "panel-heading">Submit Your Comments</div>
        </div>
        <div class = "panel-body">
        <?php if(isset($_SESSION["success"])){ ?>
            <div class="alert alert-success" role="alert"> <?php echo $_SESSION["success"]; ?> </div>
        <?php } ?>
        <?php if(isset($_SESSION["error"])){ ?>
            <div class="alert alert-danger" role="alert"> <?php echo $_SESSION["error"]; ?> </div>
        <?php } ?>
            
            <form action="functions/addFeedback.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class= "form-group">
                    <label>Comments</label>
                    <textarea name="comments" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" name="submitFeedback" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <?php 
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>