<?php

// Write a PHP script to print "Hello, World!" on the screen.
echo "Hello, World!";

// Create a PHP function that takes two numbers as arguments and returns their sum.
function add($a, $b) {
    return $a + $b;
}

// Write a PHP script to generate a random number between 1 and 100 and display it on the screen.
$randomNumber = rand(1, 100);

// Develop a PHP program to calculate the factorial of a given number using recursion.
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Implement a PHP script to find and display the largest element in an array.
function findLargestElement($arr) {
    $largest = $arr[0];
    foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }
    return $largest;
}

// Create a PHP function to check if a given string is a palindrome.
function isPalindrome($str) {
    $str = strtolower($str);
    $str = preg_replace('/[^a-z0-9]/', '', $str);
    $reverse = strrev($str);
    return $str === $reverse;
}

// Write a PHP script to validate an email address using regular expressions.
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Implement a PHP program to sort an array of integers in ascending order using the bubble sort algorithm.
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Develop a PHP script to generate the Fibonacci sequence up to a certain number of terms.
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
// Create a PHP class representing a simple banking system with methods for deposit, withdrawal, and balance inquiry for an account.
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds.";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}
