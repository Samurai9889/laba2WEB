<style>
    h2 {
        margin-top: 30px;
    }


    p {
        margin-top: 10px;
    }
</style>

<h2>Task 4: Find Maximum and Minimum in R1 File</h2>
<?php
// Task 4: Find Maximum and Minimum in R1 File
$file_R1 = 'E:\php2\R1.txt';
$data = file($file_R1, FILE_IGNORE_NEW_LINES);
$chunked_data = array_chunk($data, 10); // Split data into chunks of 10

$file_R2 = fopen('R2.txt', 'w');
foreach ($chunked_data as $chunk) {
    $max = max($chunk);
    $min = min($chunk);
    fwrite($file_R2, "Max: $max, Min: $min\n");
}
fclose($file_R2);

echo "<p>Максимальні та мінімальні значення для кожного набору з 10 компонентів у файлі R1 були записані у файл R2.</p>";
?>