<?php
namespace deepak;
?>
<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>

<?php

include "Calculator.php";

$result = '';
if (isset($_POST['operator'])) {

$calculate = new Calculator();


$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];

if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $calculate->add($first_num, $second_num);
            break;
        case "Subtract":
           $result = $calculate->subtract($first_num, $second_num);
            break;
        case "Multiply":
            $result = $calculate->multiply($first_num, $second_num);
            break;
        case "Divide":
            $result = $calculate->divide($first_num, $second_num);
    }
}
}
?>

<body>
    <div id="page-wrap">
	<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>