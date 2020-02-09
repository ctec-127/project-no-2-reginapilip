<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<header>
    <?php  require "inc/header.inc.php"; ?>
</header>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD']=="GET") {

            if (isset($_GET['character'])) {
                // now test for value - nested if 
                if ($_GET['character']== "tom") {
                    echo "<h2>Meet Tom</h2>";
                    echo "<img src=\"https://vignette.wikia.nocookie.net/thetomandjerryshow/images/9/9b/TomAtwork.png/revision/latest?cb=20141226163759\" alt=\"Tom from Tom & Jerry\">";
                } 
                if ($_GET['character']=="jerry") {
                    echo "<h2>Meet Jerry</h2>";
                    echo "<img src=\"https://i.pinimg.com/originals/fa/f7/b6/faf7b6bd1784990bcaec6f2eed5d012b.jpg\" alt=\"Tom from Tom & Jerry\">";
                } 
                if ($_GET['character']=="cast") {
                    echo "<h2>Meet the Entire Cast!</h2>";
                    echo "<img src=\"https://i.dawn.com/large/2019/10/5db6a03a4c7e3.jpg\" alt=\"Tom and Jerry\">";
                }
            }

            if (isset($_GET['facts'])) {
                if ($_GET['facts'] == "default") {
                    require "inc/facts.inc.php";
                } elseif ($_GET['facts'] == "pink") {
                    $bgcolor = 'pink';
                    require "inc/facts.inc.php";
                } elseif ($_GET['facts'] == "aqua") {
                    $bgcolor = 'aqua';
                    require "inc/facts.inc.php";
                } elseif ($_GET['facts'] == "textcolor") {
                    $txtcolor = "text-danger";
                    require "inc/facts.inc.php";
                }
            } 
        }

    ?>



<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
<footer>
    <?php require "inc/footer.inc.php"; ?>
</footer>
</html>