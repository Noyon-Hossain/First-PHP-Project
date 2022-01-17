<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Project Applaction</title>
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
                <h1 style="margin-top: 40px;">My First Project: Appllication</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure maxime placeat totam veniam!
                    Ab culpa dolore illo incidunt ipsam perferendis quis rerum tempora tempore ut. Amet atque enim
                    porro!</p>
            </div>
        </div>
    </div>
</body>
</html>