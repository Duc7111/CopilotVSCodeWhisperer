<?php
// Implement a PHP function to check if a given number is prime.
function isPrime($num) {
  if ($num <= 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

// Write a PHP script to find the nth Fibonacci number.
function fibonacci($n) {
    if ($n <= 0) {
    return 0;
  } else if ($n == 1) {
    return 1;
  } else {
    return fibonacci($n-1) + fibonacci($n-2);
  }
}

// Develop a PHP function to compute the factorial of a given non-negative integer.
function factorial($n) {
  if ($n == 0) {
    return 1;
  } else {
    return $n * factorial($n-1);
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
    $mid = floor(($low + $high) / 2);
    if ($arr[$mid] == $target) {
      return $mid;
    } else if ($arr[$mid] < $target) {
      $low = $mid + 1;
    } else {
      $high = $mid - 1;
    }
  }
  return -1;
}

// Write a PHP script to find the greatest common divisor (GCD) of two numbers using the Euclidean algorithm.
function gcd($a, $b) {
    if ($b == 0) {
    return $a;
  } else {
    return gcd($b, $a % $b);
  }
}

// Develop a PHP function to check if a given string is an anagram of another string.
function isAnagram($str1, $str2) {
  if (strlen($str1) != strlen($str2)) {
    return false;
  }
  $arr1 = str_split($str1);
  $arr2 = str_split($str2);
  sort($arr1);
  sort($arr2);
  return $arr1 == $arr2;
}

// Create a PHP program to implement the Sieve of Eratosthenes algorithm for finding all prime numbers up to a given limit.
function sieveOfEratosthenes($n) {
  $primes = array_fill(0, $n+1, true);
  $primes[0] = false;
  $primes[1] = false;
  for ($i = 2; $i <= sqrt($n); $i++) {
    if ($primes[$i]) {
      for ($j = $i * $i; $j <= $n; $j += $i) {
        $primes[$j] = false;
      }
    }
  }
  return array_keys(array_filter($primes));
}

// Implement a PHP function to reverse a string without using built-in functions.
function reverseString($str) {
  $reversed = "";
  for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
  }
  return $reversed;
}

// Write a PHP script to find the longest common subsequence (LCS) of two given strings.
function lcs($str1, $str2) {
    $m = strlen($str1);
  $n = strlen($str2);
  $lcs = array_fill(0, $m+1, array_fill(0, $n+1, 0));
  for ($i = 1; $i <= $m; $i++) {
    for ($j = 1; $j <= $n; $j++) {
      if ($str1[$i-1] == $str2[$j-1]) {
        $lcs[$i][$j] = $lcs[$i-1][$j-1] + 1;
      } else {
        $lcs[$i][$j] = max($lcs[$i-1][$j], $lcs[$i][$j-1]);
      }
    }
  }
  return $lcs[$m][$n];
}
