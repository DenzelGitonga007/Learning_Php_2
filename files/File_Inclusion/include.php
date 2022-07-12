<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusion</title>
</head>
<body>
    <?php include("menu_bar.php"); ?>
    <p>This is an example of a file inclusion</p>
    <?php include("menubar.php");?>
        <p>
            This is an example of a wrong invokation of the include method
            The include method will not run, but the script will run.
        </p>
    
</body>
</html>