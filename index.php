<form method="post" action="">
        <label for="num1">Первое число:</label>
        <input type="text" name="num1" id="num1" required><br><br>
        
        <label for="num2">Второе число:</label>
        <input type="text" name="num2" id="num2" required><br><br>
        
        <input type="submit" value="Умножить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = $num1 * $num2;
        
        echo "&nbsp;" . $num1 . "<br>";
        echo "x " . "<br>";
        echo "&nbsp;" . $num2 . "<br>";
        echo "-------<br>";
        
        $num2_digits = str_split(strrev($num2));
        $num2_length = strlen($num2);
        $padding = 0;
        
        foreach ($num2_digits as $digit) {
            $line_result = $num1 * $digit;
            echo str_repeat("&nbsp;", $padding) . $line_result . "<br>";
            $padding++;
        }
        
        echo "-------<br>";
        echo $result;
    }
    ?>