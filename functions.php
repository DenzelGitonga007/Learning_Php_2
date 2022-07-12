<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        // A function with parameters
        function addNum ($num1, $num2) {
            $sum = $num1 + $num2;
            echo "The sum of the two numbers is : " . $sum . "<br>";
        }
        addNum(10, 20); //Passing in the parameters

        // Using the return
        function addNum2 ($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }
        $return_value = addNum2(10, 20);
        echo "The returned value is : " . $return_value . "<br>";

        // Default parameter values for a function
        function defPar ($param = NULL) {
            print $param;
        }
        defPar(); //This will not print as the value is NULL
        defPar("Testing the default value");

        // Assigning a function as a string variable
        function dynamicFunc () {
            echo "<br> Hello world";
        }
        $dynamic_function = "dynamicFunc"; //The function name becomes a string value
        // Call the variable.
        $dynamic_function();

    ?>
</body>
</html>