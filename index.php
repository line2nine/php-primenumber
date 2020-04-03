<?php
echo "<h1>Hiển thị các số nguyên tố nhỏ hơn 100</h1>";
function checkIfPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Result:<br>";
for ($i = 0; $i < 100; $i++) {
    if (checkIfPrimeNumber($i)) {
        echo $i . ", ";
    }
}