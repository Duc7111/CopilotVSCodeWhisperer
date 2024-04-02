<?php
// Write a PHP script to print "Hello, World!" on the screen.
function helloWorld() {
    echo "Hello, World!";
}

// Create a PHP function that takes two numbers as arguments and returns their sum.
function sum($a, $b) {
    return $a + $b;
}

// Write a PHP script to generate a random number between 1 and 100 and display it on the screen.
function randomNumber() {
    return rand(1, 100);
}

// Develop a PHP program to calculate the factorial of a given number using recursion.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Implement a PHP script to find and display the largest element in an array.
function largestElement($arr) {
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
    return $str == strrev($str);
}

// Write a PHP script to validate an email address using regular expressions.
function validateEmail($email) {
    return preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email);
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
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Create a PHP class representing a simple banking system with methods for deposit, withdrawal, and balance inquiry for an account.
class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdrawal($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds.";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}
