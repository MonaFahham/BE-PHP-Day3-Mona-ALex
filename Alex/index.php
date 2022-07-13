<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY3 PHP EXERCISES</title>
</head>
<body>
    <h1>Welcome Alex!</h1>
    <p>Exercise 3</p>
    <?php
        //$numbers = array(5, 9, 12, 67, 4, 34, 11, 2, 7, 0);
        $rand_numbers = array();

        for($i = 0; $i < 10; $i++)
        {
            array_push($rand_numbers, rand(0,100));
        }

        var_dump($rand_numbers);
        
        function get_max_from_array($rand_numbers)
        {
            $max_number = max($rand_numbers);
            return $max_number;
        }

        echo "<p>The max number is " . get_max_from_array($rand_numbers) . " </P>";
    ?>

    <p>Exercise 4</p>
    
</body>
</html>