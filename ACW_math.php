<?php
// Write a PHP function to calculate the area of a circle given its radius.
function circle_area($radius) {
    return pi() * $radius * $radius;
}

// Develop a PHP program to solve a quadratic equation of the form ax^2 + bx + c = 0.
function quadratic_equation($a, $b, $c) {
    $discriminant = $b * $b - 4 * $a * $c;
    if ($discriminant < 0) {
        return "No real solutions";
    } elseif ($discriminant == 0) {
        return -$b / (2 * $a);
    } else {
        return array(
            (-$b - sqrt($discriminant)) / (2 * $a),
            (-$b + sqrt($discriminant)) / (2 * $a)
        );
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
function sum_primes($n) {
    $sum = 0;
    for ($i = 2; $i < $n; $i++) {
        if (is_prime($i)) {
            $sum += $i;
        }
    }
    return $sum;
}
function is_prime($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Implement a PHP function to calculate the nth term of the Fibonacci sequence.
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Develop a PHP program to convert a decimal number to binary representation.
function decimal_to_binary($n) {
    if ($n == 0) {
        return 0;
    } else {
        return $n % 2 + 10 * decimal_to_binary(floor($n / 2));
    }
}

// Create a PHP function to compute the greatest common divisor (GCD) of two integers.
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
// Write a PHP script to generate the first n terms of the arithmetic progression with a given initial term and common difference.
function arithmetic_progression($a, $d, $n) {
    $terms = array();
    for ($i = 0; $i < $n; $i++) {
        $terms[] = $a + $i * $d;
    }
    return $terms;
}

// Implement a PHP function to calculate the area of a triangle given the lengths of its three sides using Heron's formula.
function triangle_area($a, $b, $c) {
    $s = ($a + $b + $c) / 2;
    return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
}

// Develop a PHP program to find the roots of a cubic equation of the form ax^3 + bx^2 + cx + d = 0.
function cubic_equation($a, $b, $c, $d) {
    $discriminant = $b * $b - 3 * $a * $c;
    if ($discriminant < 0) {
        return "No real solutions";
    } elseif ($discriminant == 0) {
        return -$b / (3 * $a);
    } else {
        return array(
            (-$b + sqrt($discriminant)) / (3 * $a),
            (-$b - sqrt($discriminant)) / (3 * $a)
        );
    }
}