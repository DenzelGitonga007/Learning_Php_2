<!-- Using the $_REQUEST -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$POST AND $_REQUEST</title>

</head>
<body>
    <form action="<?php $_PHP_SELF?>">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <br><br>
        <input type="submit">
    </form>
        <?php
            if($_REQUEST["name"] || $_REQUEST["age"]) {
                echo "Hi " . $_REQUEST["name"] . "<br>";
                echo "You are " . $_REQUEST["age"] . " years old.";

                exit();
            }
        ?>
    
</body>
</html>