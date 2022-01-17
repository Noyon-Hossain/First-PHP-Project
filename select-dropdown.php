<?php
include_once "select-functions.php";
$selectFruits = ["mango", "banana", "orange", "lemon", "apple"];
$conteyrss    = array(
	'bangladesh',
	'america',
	'london',
	'canada',
	'nepal',
	'india'
)
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <link rel="stylesheet" href="style.css">
    <!--    <style>-->
    <!--        body {-->
    <!--            margin-top: 30px;-->
    <!--        }-->
    <!--    </style>-->
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="index.php">Home</a>
    <a href="form.php">Form</a>
    <a href="select-dropdown.php">Select</a>
    <a href="upload.php">Upload</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1 style="margin-top: 40px;">Select / Dropdowns</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure maxime placeat totam veniam! Ab
                culpa dolore illo incidunt.</p>
            <p>
				<?php
				if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
					printf("You Have Selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
				}
				?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="column column-50 column-offset-20">
            <form method="POST">
                <label for="fruits">Select Some Fruits</label>
                <select name="fruits" id="fruits">
                    <option value="" disabled selected>Select Some Fruits</option>
					<?php selectDisplayOptions($selectFruits); ?>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Select multiple</h1>
            <p>
				<?php
				//$counteryy = isset($_POST['countery']) ? $_POST['countery'] : array(); //Must Check
				//$counteryy = $_POST['countery'] ?? array(); //PHP 7 Version Check
				$counteryy = filter_input(INPUT_POST, 'countery', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
				if (is_array($counteryy) && count($counteryy) > 0) {
					echo ucwords("You Have Selected: " . join(', ', $counteryy));
				}
				?>
            </p>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-50 column-offset-20">
            <form method="POST">
                <label for="countery">Select Some Countery</label>
                <select style="height: 180px;" name="countery[]" id="countery" multiple>
                    <option value="" disabled selected>Select Some Fruits</option>
					<?php selectDisplayCountey($conteyrss, $conteyrss); ?>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>