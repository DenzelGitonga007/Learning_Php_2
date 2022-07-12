<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <p>Reading the contents on a file</p>
    <?php
        $filename = "test.txt";
        // Opening the file
        $file = fopen( $filename, "r");
        
        if ($file == false) {
            echo ("Error opening file");
            exit();
        }

        $filesize = filesize($filename); // Gets the file size.
        $filetext = fread( $file, $filesize ); //Reads the file.
        fclose( $file );

        echo ( "File size :  $filesize bytes");
        echo ( "<pre>$filetext</pre>" );
    ?>
</body>
</html>