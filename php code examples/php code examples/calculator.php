<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="get">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>none</option>
            <option>Add</option>
            <option>subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>

        <button type"submit" name="submit" value="submit" >calculate</button>
    </form>

    <p>The answer is :</p>

    <br>
    <?php
    // getting the data from the form inputs
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
    
    // perforing the operations
    switch($operator){
        case "none":
            echo "choose the method of operation";
            break;

            case "Add":
                echo $result1 + $result2;
                break;

                case "subtract":
                    echo $result1 - $result2;
                    break;

                    case "Multiply":
                    echo $result1 * $result2;
                    break;

                    case"Divide":
                        echo $result1 / $result2;
                        break;


    }
    
} 

    ?>
</body>
</html>