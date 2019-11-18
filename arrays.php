<?php
error_reporting(E_ALL);
$limit = readline("Enter limit:  ");
$sequence = generate_fib_sequence($limit);
//show_sequence($sequence);

function generate_fib_sequence($limit)
{
    $a = 1;
    $b = 0;
    $i = 1;
    echo "> Position 1: 1\n";

    while (true){

        $v = $a + $b;
        if ($v >= $limit) {
            break;
        }
        $i++;
        echo '> Position ' . $i . ': ' . $array[] = $v . "\n";
        $b = $a;
        $a = $v;
    }

//    $array = [];
//    $a = 0;
//    $b = 1;
}

function show_sequence($sequence)
{

}
