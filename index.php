<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title>PHP Calculator</title>
</head>

<body>
    <section class="bg_calc">
        <div class="container">
            <div class="calc_inner">
                <div class="calc_main">
                    <div class="row calc_row">

                        <div class="col-md-6">
                            <div class="calc_name">
                                <p>PHP CALCULATOR</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="calc_body">
                                <form method="POST">
                                    <input type="text" placeholder="Enter Number" class="form-control" name="num1">
                                    <input type="text" placeholder="Enter Number" class="form-control" name="num2">
                                    <select class="form-select" aria-label="Default select example" name="operation">
                                        <option value="add">ADD (+)</option>
                                        <option value="sub">SUB (-)</option>
                                        <option value="div">DIV (/)</option>
                                        <option value="mult">MULT (*)</option>
                                    </select>
                                    <input type="submit" class="submit_btn" name="submit" value="Calculate">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="calc-main-para">
                        <p class="calc_para">
                            <?php
                            if (isset($_POST['submit'])) {
                                $num1 = $_POST['num1'];
                                $num2 = $_POST['num2'];
                                // echo "{$num1} {$num2}";
                                $operation = $_POST['operation'];

                                switch ($operation) {
                                    case 'add':
                                        $sum = $num1 + $num2;
                                        echo "The addition of two number is {$sum}";
                                        break;

                                    case 'sub':
                                        $sum = $num1 - $num2;
                                        echo "The subtraction of two number is {$sum}";
                                        break;

                                    case 'div':
                                        $sum = $num1 / $num2;
                                        echo "The division of two number is {$sum}";
                                        break;

                                    case 'mult':
                                        $sum = $num1 * $num2;
                                        echo "The multiply of two number is {$sum}";
                                        break;

                                    default:
                                        echo "Sorry not exist";
                                        break;
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>