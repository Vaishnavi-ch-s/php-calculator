<!DOCTYPE html>
<html>
<head>
    <title>Simple  Calculator</title>
</head>
<body>
    <h2>Value1       Operations        Value2</h2>

    <form method="post">
        <input type="number" name="num1" step="any" required>

        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">−</option>
            <option value="*">×</option>
            <option value="/">÷</option>
            <option value="%">Modulus</option>
            <option value="^">Power</option>
        </select>

        <input type="number" name="num2" step="any" required>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    echo "<p style='color:red;'>Error: Division by zero!</p>";
                    exit;
                }
                $result = $num1 / $num2;
                break;
            case '%':
                if ($num2 == 0) {
                    echo "<p style='color:red;'>Error: Modulus by zero!</p>";
                    exit;
                }
                $result = $num1 % $num2;
                break;
            case '^':
                $result = pow($num1, $num2);
                break;
            default:
                echo "<p>Invalid operator!</p>";
                exit;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
