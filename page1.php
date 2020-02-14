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
    <h3>Instructions:</h3>

    <!-- Links go here with special params and values -->
    <p>To meet Tom, change URL to <strong>"page2.php?character=tom"</strong> or click the first button below. The second button includes Tom's bio. The URL for that is <strong>"page2.php?character=tom&bio=tom"</strong></p>
    <a href="page2.php?character=tom" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Meet Tom!</a> 
    <a href="page2.php?character=tom&bio=tom" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Tom's Bio</a>


    <p>To meet Jerry, change URL to <strong>"page2.php?character=jerry"</strong> or click the first button below. The second button includes Tom's bio. The URL for that is <strong>"page2.php?character=jerry&bio=jerry"</strong></p>
    <a href="page2.php?character=jerry" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Meet Jerry!</a>
    <a href="page2.php?character=jerry&bio=jerry" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Jerry's Bio</a>


    <p>To meet them both, change URL to <strong>"page2.php?character=cast"</strong> or click the first button below. This URL will include both of their bios: <strong>"page2.php?character=cast&bio=tomandjerry"</strong> Use the second button for that.</p>
    <a href="page2.php?character=cast" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Meet them Both!</a>
    <a href="page2.php?character=cast&bio=tomandjerry" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Cast Bios</a>


    <p>Read some fun facts about Tom & Jerry! Change URL to <strong>"page2.php?facts"</strong> or click the first button below. See the fun fact cards in a different color! Change URL to <strong>"page2.php?cardcolor"</strong> or click second button below:</p>
    <a href="page2.php?facts" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Fun Facts</a>
    <a href="page2.php?cardcolor" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Colored Fun Facts</a>


    <p>Here's a link to our Policies Page <strong>"page2.php?policies"</strong>. To read our Policies in dark mode, use this URL <strong>"page2.php?policies&darkmode"</strong> or click the second button below:</p>
    <a href="page2.php?policies" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Policies</a>
    <a href="page2.php?policies&darkmode" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Policies (Dark Mode)</a>

    <div class="feedback-container">
        <div class="feedback-text">
        <form action="page2.php" method="GET">
            <h3 class="feedback-header">Care to subscribe?</h3>
            <p class="feedback-instructions">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum magnam tempora eaque neque corporis omnis, repudiandae.</p>
        <div class="form-group">
            <label for="fullname">Your Name</label>
            <input type="text" class="form-control" id="fullname" placeholder="First and Last" name="fullname">
        </div>
        <div class="form-group">
        <label for="email">Your Email</label>
            <input type="text" class="form-control" id="email" placeholder="you@example.com" name="email">
        </div>
        <button type="submit" class="feedback-form-btn btn btn-info mb-2">Submit!</button>
        </form>
        </div>
    </div>

  
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
<footer>
    <?php require "inc/footer.inc.php"; ?>
</footer>
</html>