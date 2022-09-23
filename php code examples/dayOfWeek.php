<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the week</title>
</head>
<body>
    <!-- to calculate days of the week -->
    <?php
    $daysOfWeek = date("w");

    switch($daysOfWeek){
        case 1:
            echo" Today is monday";
            break;
        case 2:
                echo" Today is Tuesday";
                break;
        case 3:
                    echo" Today is Wednesday";
                    break;
        case 4:
                        echo" Today is Thrusday";
                        break;
        case 5:
                            echo" Today is friday";
                            break;
        case 6:
                                echo" Today is Satuarday";
        case 0:
                                    echo" Today is Sunday";
                                    break;

    }

    
    ?>
</body>
</html>