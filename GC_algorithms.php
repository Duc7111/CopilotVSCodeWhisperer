<?php
// Implement a PHP function to check if a given number is prime.
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Write a PHP script to find the nth Fibonacci number.
function nthFibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $b;
}

// Develop a PHP function to compute the factorial of a given non-negative integer.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Create a PHP program to find the maximum subarray sum within a given array of integers.
function maxSubarraySum($arr) {
    $maxSum = $arr[0];
    $currentSum = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $currentSum = max($arr[$i], $currentSum + $arr[$i]);
        $maxSum = max($maxSum, $currentSum);
    }
    return $maxSum;
}

// Implement a PHP function to perform binary search on a sorted array of integers.
function binarySearch($arr, $target) {
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2;
        if ($arr[$mid] == $target) {
            return $mid;
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}

// Write a PHP script to find the greatest common divisor (GCD) of two numbers using the Euclidean algorithm.
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Develop a PHP function to check if a given string is an anagram of another string.
function isAnagram($str1, $str2) {
    $str1 = str_replace(' ', '', strtolower($str1));
    $str2 = str_replace(' ', '', strtolower($str2));
    $str1 = str_split($str1);
    $str2 = str_split($str2);
    sort($str1);
    sort($str2);
    return $str1 == $str2;
}
// Create a PHP program to implement the Sieve of Eratosthenes algorithm for finding all prime numbers up to a given limit.
function sieveOfEratosthenes($n) {
    $primes = [];
    $isPrime = array_fill(0, $n + 1, true);
    $isPrime[0] = false;
    $isPrime[1] = false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($isPrime[$i]) {
            for ($j = $i * $i; $j <= $n; $j += $i) {
                $isPrime[$j] = false;
            }
        }
    }
    for ($i = 2; $i <= $n; $i++) {
        if ($isPrime[$i]) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Implement a PHP function to reverse a string without using built-in functions.
function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// Write a PHP script to find the longest common subsequence (LCS) of two given strings.
function longestCommonSubsequence($str1, $str2) {
    $m = strlen($str1);
    $n = strlen($str2);
    $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));
    for ($i = 1; $i <= $m; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($str1[$i - 1] == $str2[$j - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
            } else {
                $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
            }
        }
    }
    $lcs = '';
    $i = $m;
    $j = $n;
    while ($i > 0 && $j > 0) {
        if ($str1[$i - 1] == $str2[$j - 1]) {
            $lcs = $str1[$i - 1] . $lcs;
            $i--;
            $j--;
        } elseif ($dp[$i - 1][$j] > $dp[$i][$j - 1]) {
            $i--;
        } else {
            $j--;
        }
    }
    return $lcs;
}
