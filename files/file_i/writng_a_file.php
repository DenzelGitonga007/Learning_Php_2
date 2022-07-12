<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing</title>
</head>
<body>
    <!-- Writing on a file -->
    <p>Writing on a file</p>
    <?php
        // Create the file automatically
        function createFile () {
            $filename = "write.txt";
            $file = fopen($filename, "w");

            if ($file == false) {
                echo "Error opening the new file";
                exit();
            }
            // What to write
            fwrite($file, "The new content goes here");
            fclose($file);
        }
        
        // Read the file
        function readContent () {
            $filename = "write.txt";
            $file = fopen($filename, "r");

            if ($file == false) {
                echo "Error opening the file";
            }
            $filesize = filesize($filename); //Gets the size of that file, $filename.
            $filetext = fread($file, $filesize);

            fclose($file);
            
            echo "File name is : " . $filename . "<br>";
            echo "File size : $filesize bytes" . "<br>";
            echo $filetext;

        }
        createFile();
        readContent();
        
    ?>
</body>
</html>