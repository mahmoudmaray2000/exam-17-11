<?php
// question 1 //
// - output will be somerar is 16
// - output will be Undefined variable $arr
// -output will be true;
//
// question 2 //
// 1
// function generateFibonacci($n) {
//     $fibonacciSeries = array(0, 1);
//
//     for ($i = 2; $i < $n; $i++) {
//         $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
//     }
//
//     return $fibonacciSeries;
// }
//
//
// $numTerms = 10;
// $fibonacciSeries = generateFibonacci($numTerms);
//
// echo "Fibonacci Series (first $numTerms terms): " . implode(", ", $fibonacciSeries);
//
// 2
// function isLeapYear($year) {
//     if ($year % 4 != 0) {
//         return false;
//     }
//
//     if ($year % 100 == 0) {
//         return ($year % 400 == 0);
//     }
//
//     return true;
// }
//
// $yearToCheck = 2025;
// if (isLeapYear($yearToCheck)) {
//     echo "$yearToCheck is a leap year.";
// } else {
//     echo "$yearToCheck is not a leap year.";
// }
//
//
// 3
//
// function generateUniqueRandomNumbers($min, $max, $count) {
//     if ($max - $min + 1 < $count) {
//         echo "Error: Unable to generate $count unique random numbers within the given range.\n";
//         return false;
//     }
//
//     $numbers = range($min, $max);
//
//     shuffle($numbers);
//
//     $randomNumbers = array_slice($numbers, 0, $count);
//
//     return $randomNumbers;
// }
//
//
// $minRange = 1;
// $maxRange = 100;
// $numberOfRandomNumbers = 5;
//
// $randomNumbers = generateUniqueRandomNumbers($minRange, $maxRange, $numberOfRandomNumbers);
//
// echo "Unique random numbers within the range $minRange to $maxRange: " . implode(", ", $randomNumbers);
//
//  4
//  echo "Multiplication Table up to 5x5:\n";
//
// echo "   ";
// for ($column = 1; $column <= 5; $column++) {
//     echo sprintf("%4d", $column);
// }
// echo "\n---------------------------------\n";
//
// for ($row = 1; $row <= 5; $row++) {
//     echo sprintf("%2d |", $row);
//     for ($column = 1; $column <= 5; $column++) {
//         echo sprintf("%4d", $row * $column);
//     }
//     echo "\n";
// }
//
// 5
// function removeDuplicates($sortedList) {
//     $length = count($sortedList);
//
//     if ($length <= 1) {
//         return $sortedList;
//     }
//
//     $uniqueList = array($sortedList[0]);
//
//     for ($i = 1; $i < $length; $i++) {
//
//         if ($sortedList[$i] != $sortedList[$i - 1]) {
//             $uniqueList[] = $sortedList[$i];
//         }
//     }
//
//     return $uniqueList;
// }
//
// $sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 6, 6);
// $uniqueList = removeDuplicates($sortedList);
//
// echo "Original Sorted List: " . implode(", ", $sortedList) . "\n";
// echo "List with Duplicates Removed: " . implode(", ", $uniqueList) . "\n";
//
// question 3 //
// 1-False
// 2-False
// 3-True
// 4-True
// 5-True
?>