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

<h2>Task 3: Конвертор валют</h2>
<form method="post">
    <label for="Кількість">Кількість:</label>
    <input type="text" id="Кількість" name="Кількість" required>
    <br>
    <label for="З">З:</label>
    <select id="З" name="З" required>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="UAH">UAH</option>
    </select>
    <br>
    <label for="На">На:</label>
    <select id="На" name="На" required>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="UAH">UAH</option>
    </select>
    <br>
    <input type="submit" value="Конвертувати">
</form>

<?php
// Task 3: Currency Converter Script
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['Кількість'];
    $from = $_POST['З'];
    $to = $_POST['На'];

    // Perform currency conversion (dummy conversion for demonstration)
    $conversion_rate = [
        'USD' => ['USD' => 1, 'EUR' => 0.85, 'UAH' => 39],
        'EUR' => ['USD' => 1.18, 'EUR' => 1, 'UAH' => 40],
        'UAH' => ['USD' => 0.03, 'EUR' => 0.02, 'UAH' => 1]
    ];

    $converted_amount = $amount * $conversion_rate[$from][$to];
    echo "<p>$amount $from дорівнює $converted_amount $to</p>";
}
?>