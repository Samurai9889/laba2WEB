<style>
    h2 {
        margin-top: 30px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: inline-block;
        width: 80px;
    }

    input[type="text"],
    select {
        width: 150px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        margin-top: 10px;
        cursor: pointer;
    }

    p {
        margin-top: 10px;
    }
</style>


<h2>Введіть число та цифру, для якої потрібно знайти кількість входжень:</h2>
<form method="post" action="">
    <label for="number">Число:</label>
    <input type="text" id="number" name="number" required><br><br>
    <label for="digit">Цифра:</label>
    <input type="text" id="digit" name="digit" required><br><br>
    <input type="submit" value="Знайти кількість входжень">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $digit = $_POST['digit'];

    // Функція для підрахунку кількості входжень цифри у числі
    function countDigit($number, $digit) {
        $count = 0;
        $num_length = strlen($number);
        for ($i = 0; $i < $num_length; $i++) {
            if ($number[$i] == $digit) {
                $count++;
            }
        }
        return $count;
    }

    $result = countDigit($number, $digit);
    echo "<p>Цифра $digit в числі $number зустрічається $result разів.</p>";
}
?>
