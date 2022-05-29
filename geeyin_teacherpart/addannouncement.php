<!DOCTYPE html>
<html>
    <style>
    .body{
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    }

    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 30px;
    }

    .newannouncement{
        width: 480px;
        height:620px;
        background: #EC7063;
        color: #fff;
        top: 50%;
        left: 50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 80px 30px;
        border-radius: 10px;
    }

    .newannouncement button[type="submit"]{
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background:#E74C3C;
        font-size: 1em;
        font-weight: bold;
        margin-top: 60px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;

    }

    .newannouncement input{
        height: 30px;
        width: 95%;
        padding: 5px 10px;
        font-size:14px;
        border-radius: 5px;
        border: 1px solid gray;
        text-align: left;
    }

    .newannouncement label{
        display: inline-block;
        text-align: left;
        margin: 3px;
    }
    </style>


    <body>
    <div class="newannouncement">
        <form action ="addannouncement2.php" method ="post">
                <h1>
                Add New Announcement
                </h1>
                <label for="nameclub">Club Name</label>
                <input type="text" name="cname" placeholder="Enter Club Name" required/>
                <br>
                <label for="descriptionclub">Announcement Description</label>
                <textarea rows = "15" cols = "54" name = "adescription" placeholder= "Enter announcement description here" required></textarea>
                <button name="submit" type="submit" >Add Announcement</button>
        </form>
    </div>
</body>
</html>