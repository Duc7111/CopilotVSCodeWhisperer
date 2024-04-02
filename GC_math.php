<?php
// Write a PHP function to calculate the area of a circle given its radius.
function circleArea($radius) {
    return M_PI * $radius * $radius;
}

// Develop a PHP program to solve a quadratic equation of the form ax^2 + bx + c = 0.
function solveQuadratic($a, $b, $c) {
    $d = $b * $b - 4 * $a * $c;
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        return [$x1, $x2];
    } elseif ($d == 0) {
        $x = -$b / (2 * $a);
        return [$x];
    } else {
        return [];
    }
}

// Create a PHP function to calculate the factorial of a given non-negative integer.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Write a PHP script to find the sum of all prime numbers below a specified value.
function sumPrimes($n) {
    $sum = 0;
    for ($i = 2; $i < $n; $i++) {
        if (isPrime($i)) {
            $sum += $i;
        }
    }
    return $sum;
}

// Implement a PHP function to calculate the nth term of the Fibonacci sequence.
function fibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $b;
}

// Develop a PHP program to convert a decimal number to binary representation.
function decimalToBinary($n) {
    $binary = '';
    while ($n > 0) {
        $binary = $n % 2 . $binary;
        $n = (int)($n / 2);
    }
    return $binary;
}
// Create a PHP function to compute the greatest common divisor (GCD) of two integers.
function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

// Write a PHP script to generate the first n terms of the arithmetic progression with a given initial term and common difference.
function arithmeticProgression($a, $d, $n) {
    $progression = [];
    for ($i = 0; $i < $n; $i++) {
        $progression[] = $a + $i * $d;
    }
    return $progression;
}
// Implement a PHP function to calculate the area of a triangle given the lengths of its three sides using Heron's formula.
function triangleArea($a, $b, $c) {
    $s = ($a + $b + $c) / 2;
    return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
}

// Develop a PHP program to find the roots of a cubic equation of the form ax^3 + bx^2 + cx + d = 0.
function solveCubic($a, $b, $c, $d) {
    $delta0 = $b * $b - 3 * $a * $c;
    $delta1 = 2 * $b * $b * $b - 9 * $a * $b * $c + 27 * $a * $a * $d;
    $C = pow(($delta1 + sqrt($delta1 * $delta1 - 4 * $delta0 * $delta0 * $delta0)) / 2, 1 / 3);
    $x1 = (-$b - $C - $delta0 / $C) / (3 * $a);
    $x2 = (-$b + 0.5 * ($C + sqrt(3) * $delta0 / $C)) / (3 * $a);
    $x3 = (-$b + 0.5 * ($C - sqrt(3) * $delta0 / $C)) / (3 * $a);
    return [$x1, $x2, $x3];
}
