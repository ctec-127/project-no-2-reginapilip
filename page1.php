<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<header>
    <?php  require "inc/header.inc.php"; ?>
</header>
<body>
    <!-- Instructions go here -->
    <h3>Instructions:</h3>

    <!-- Links go here with special params and values -->
    <p>To meet Tom, change URL to <strong>"page2.php?character=tom"</strong> or click the button below:</p>
    <a href="page2.php?character=tom" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Meet Tom!</a>


    <p>To meet Jerry, change URL to <strong>"page2.php?character=jerry"</strong> or click the button below:</p>
    <a href="page2.php?character=jerry" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Meet Jerry!</a>


    <p>To meet them both, change URL to <strong>"page2.php?character=cast"</strong> or click the button below:</p>
    <a href="page2.php?character=cast" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Meet them Both!</a>
    

    <p>Read some fun facts about Tom & Jerry! Change URL to <strong>"page2.php?facts=default"</strong> or click the button below:</p>
    <a href="page2.php?facts=default" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Fun Facts</a>


    <p>To add a background to the fun fact cards change your URL to <strong>"page2.php?facts=pink"</strong> or click the button below:</p>
    <a href="page2.php?facts=pink" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pink Background</a>

    <p>To add a different background to the fun fact cards change your URL to <strong>"page2.php?facts=aqua"</strong> or click the button below:</p>
    <a href="page2.php?facts=aqua" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Aqua Background</a>


    <p>Want to change the color of the text? Change the URL to <strong>"page2.php?facts=textcolor"</strong> or click the button below:</p>
    <a href="page2.php?facts=textcolor" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Fun Facts Text Color</a>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
<footer>
    <?php require "inc/footer.inc.php"; ?>
</footer>
</html>