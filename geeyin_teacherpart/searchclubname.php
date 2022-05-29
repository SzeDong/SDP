<!DOCTYPE html>
<html>
<head>
<style>
.searchbtn {
  background-color: #F10758;
  color: white;
  padding: 16px;
  font-size: 13px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.dropdown-content li a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
    <h1>
        Search for Club Name
    </h1>
<div class="dropdown">
  <button class="searchbtn">Search for Club</button>
  <div class="dropdown-content">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter club name"title="Type club name">
  <ul id="myUL">

    <li><a href="badmintonclub.php">Badminton Club</a></li>
    <li><a href="basketballclub.php">Basketball Club</a></li>
    <li><a href="dancingclub.php">Dancing Club</a></li>
    <li><a href="mediaclub.php">Media Club</a></li>
    <li><a href="orchestraclub.php">Orchestra Club</a></li>
    <li><a href="studentcouncilclub.php">Student Council Club</a></li>
  </ul>

  <script>

    function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>