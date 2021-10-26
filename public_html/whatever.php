<?php
for ($i = 0; $i < 2021; $i++) {
    $a++;
    if ($a % 2 == 0) {
        $a -= 2;
    }
}
echo "a is $a";
