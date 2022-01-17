<?php
header('X-XSS-Protection:0');
include_once "functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
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
            <h1 style="margin-top: 40px;">Our First Project Form</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure maxime placeat totam veniam! Ab
                culpa dolore illo incidunt. Amet atque enim porro!</p>
            <p>
				<?php
				$fname   = '';
				$lname   = '';
				$checked = '';
				?>
				<?php if (isset($_POST['fname']) && !empty($_POST['fname'])) {
					//$fname = htmlspecialchars($_POST['fname']); Remove Html Tag => htmlspecialchars();
					$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				}
				?>

				<?php if (isset($_POST['lname']) && !empty($_POST['lname'])) {
					//$lname = htmlspecialchars($_POST['lname']); Remove Html Tag => htmlspecialchars();
					$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				}
				?>

				<?php
				if (isset($_POST['ch1']) && $_POST['ch1'] == 1) {
					$checked = 'checked';
				}
				?>
            </p>
            <p>
                First Name: <?php echo "<strong>{$fname}</strong>"; ?><br>
                Last Name: <?php echo "<strong>{$lname}</strong>"; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-50 column-offset-20">
            <form method="POST"> <!--HTTP VERB-->
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                <div>
                    <input type="checkbox" name="ch1" id="ch1" value="1" <?php echo $checked; ?>>
                    <label class="label-inline" for="ch1">Information Protected.</label>
                </div>

                <label class="label">Select Some Fruits</label>

                <input type="checkbox" id="orange" name="fruits[]" value="orange" <?php isCheckedFruits('orange'); ?>>
                <label class="label-inline" for="orange">Orange</label><br>
                <input type="checkbox" id="mango" name="fruits[]" value="mango" <?php isCheckedFruits('mango'); ?>>
                <label class="label-inline" for="mango">Mango</label><br>
                <input type="checkbox" id="banana" name="fruits[]" value="banana" <?php isCheckedFruits('banana'); ?>>
                <label class="label-inline" for="banana">Banana</label><br>
                <input type="checkbox" id="lemon" name="fruits[]" value="lemon" <?php isCheckedFruits('lemon'); ?>>
                <label class="label-inline" for="lemon">Lemon</label><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>