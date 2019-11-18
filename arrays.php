<?php

$limit = readline("Enter limit:  ");
$sequence = generate_fib_sequence($limit);
show_seqence($sequence);

function generate_fib_sequence($limit)
{
    $a = 1;
    $b = 0;
    $i = 0;
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

}

function show_seqence($sequence)
{
//   echo $sequence;
}
