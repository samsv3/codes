<?php

function fib($x)
{
    if($x<2){
        return $x;
    }
    else{
        return fib($x -1 ) + fib($x-2);
    }
}

for ($i=0; $i<=20;$i++)
{
    echo fib($i) .',';
}
