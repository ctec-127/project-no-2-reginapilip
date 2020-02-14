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
<body <?php echo (isset($_GET['darkmode'])) ? 'class="dark"' : ''; ?>>

    <?php 
    // param 1
    if (isset($_GET['character'])) {
        // now test for value - nested if 
        if ($_GET['character']== "tom") {
            echo "<h2>Meet Tom</h2>";
            echo "<img src=\"https://vignette.wikia.nocookie.net/thetomandjerryshow/images/9/9b/TomAtwork.png/revision/latest?cb=20141226163759\" alt=\"Tom from Tom & Jerry\" width=\"500\" height=\"800\">";
        } elseif ($_GET['character']=="jerry") {
            echo "<h2>Meet Jerry</h2>";
            echo "<img src=\"https://i.pinimg.com/originals/fa/f7/b6/faf7b6bd1784990bcaec6f2eed5d012b.jpg\" alt=\"Tom from Tom & Jerry\" width=\"600\" height=\"800\">";
        } elseif ($_GET['character']=="cast") {
            echo "<h2>Meet the Entire Cast!</h2>";
            echo "<img src=\"https://i.dawn.com/large/2019/10/5db6a03a4c7e3.jpg\" alt=\"Tom and Jerry\" width=\"700\" height=\"500\">";
        }
    }
    // param 2
    if (isset($_GET['bio'])) {
        if ($_GET['bio']=="tom") {
            require "inc/tom-bio.inc.html";
        } elseif ($_GET['bio']=="jerry") {
            require "inc/jerry-bio.inc.html";
        } elseif ($_GET['bio']=="tomandjerry") {
            require "inc/tom-bio.inc.html";
            require "inc/jerry-bio.inc.html";
        }
    }
    // param 3
    if (isset($_GET['facts'])) {
            require "inc/facts.inc.php";
        } 
    
    // param 4
    if (isset($_GET['policies'])) {
        require "inc/policies.inc.php";    
    }

    // param 5
    // see body tag

    // param 6
    if (isset($_GET['cardcolor'])) {
        require "inc/facts.inc.php";
    }

    // param 7
    if (isset($_GET['fullname']) && (isset($_GET['email']))){
        if(!empty($_GET['fullname']) && !empty($_GET['email'])){
            $fullname = $_GET['fullname'];
            $email = $_GET['email'];
            require "inc/submit-success.inc.php";
        } else {
            require "inc/submit-fail.inc.php";
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