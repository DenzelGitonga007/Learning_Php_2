<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require Method</title>
</head>
<body>
    <?php require("menu_bar.php") ?>
    <p>This is a successful require method</p>
    
    <!-- Broken code -->
    <?php require("menubar.php") ?>
    <p>Unlike the include(), the require() will not run if the specified file is wrong</p>
</body>
</html>