<?php
$uploadType = array(
	'image/png',
	'image/jpg',
	'image/jpeg',
);
if (isset($_FILES['photo'])) {
	if (in_array($_FILES['photo']['type'], $uploadType) !== false && $_FILES['photo']['size'] < 5 * 1024 * 1024) {
		move_uploaded_file($_FILES['photo']['tmp_name'], 'files/' . $_FILES['photo']['name']);
	}
}
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
            <h1 style="margin-top: 40px;">Upload image OR Resume</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure maxime placeat totam veniam! Ab
                culpa dolore illo incidunt. Amet atque enim porro!</p>

            <pre>
				<p>
					<?php
					print_r($_POST);
					print_r($_FILES);
					?>
				</p>
			</pre>
        </div>
    </div>
    <div class="row">
        <div class="column column-50 column-offset-20">
            <form method="POST" enctype="multipart/form-data">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname">

                <label for="photo">Photo Resume Upload</label>
                <input type="file" id="photo" name="photo"><br>
                <i>Maximum file upload size 5MB.</i><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>