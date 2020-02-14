<h3>Fun Facts</h3>
    <div class="bio-margin card text-white 
    <?php echo isset($_GET['cardcolor']) ? "bg-success" : "bg-info"; ?>">
        <img class="card-img-top\" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Fun Fact 1</h4>
            <p class="card-text <?php echo $txtcolor ?>">Tom and Jerry almost never speak in the classic episodes but are voiced in Tom and
                Jerry Tales, which debuted in 2005 on Kids' WB.</p>
        </div>
    </div>

    <div class="bio-margin card text-white 
    <?php echo isset($_GET['cardcolor']) ? "bg-warning" : "bg-secondary"; ?>">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Fun Fact 2</h4>
            <p class="card-text">Tom and Jerry has won seven Academy Awards.</p>
        </div>

    </div>
