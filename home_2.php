<?php
//echo implode(', ', range(1000, 3000, 4));

for ($i = 1000; $i < 3000; $i++) {
    if ($i % 4 == 0) {
        echo $i . ' ';
    }
}

