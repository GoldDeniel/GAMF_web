<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Calculator</title>
</head>

<body>

    <div class="container">
        <form action="">
            <div class="row mt-3">
                <div class="col-3">
                    <input name="num1" type="number" class="form-control">
                </div>
                <div class="col-2">
                    <select name="operand" class="form-select">
                        <?php
                        $operands = ['+', '-', '*', '/'];
                        // foreach ($operands as $operand) {
                        //     echo "<option value='$operand'>$operand</option>";
                        // }
                        for ($i = 0; $i < count($operands); $i++) {
                            if ($operands[$i] == $operands[$i + 1]) {
                                echo "<option value=\"$operands[$i]\" selected>$operands[$i]</option>";
                            } else {
                                echo "<option value=\"$operands[$i]\">$operands[$i]</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-3">
                    <input name="num2" type="number" class="form-control">
                </div>
                <div class="col-1">
                    <button name="process" type="submit" class="btn btn-primary">=</button>
                </div>
                <div class="col-3">
                    <?php
                    if(isset($_GET['process'])){
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                        switch ($_GET['operand']) {
                            case '+':
                                echo $num1 + $num2;
                                break;
                            case '-':
                                echo $num1 - $num2;
                                break;
                            case '*':
                                echo $num1 * $num2;
                                break;
                            case '/':
                                echo $num1 / $num2;
                                break;
                            default:
                                echo "Invalid operand";
                                break;
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>