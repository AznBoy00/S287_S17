<?php

/* 
 * SOEN 287 - Summer 2017
 * Assignment 3 - Question 1
 * Kevin Lin
 * Bilal Rana
 */

?>

<html>
    <head>
        <title>A3 - Q1</title>
    </head>
    <body>
        <h1>
            factorial(3): <br /><br />
            <?php
                echo factorial(3);
                function factorial($number) {
                    if (is_numeric($number)) {
                        if ($number < 2) {
                            return 1;
                        } else {
                            return ($number * factorial($number - 1));
                        }
                    }
                }
            ?>
        </h1>
        <br />
        <h2>
            mostFrequent(array("tesT", "tEst", "TesT", "aSd", "Qwe", "zxc", "zxc", "zxc", "zxc")): <br /><br />
            <?php
                echo mostFrequent(array("tesT", "tEst", "TesT", "aSd", "Qwe", "zxc", "zxc", "zxc", "zxc"));
                function mostFrequent($array) {
                    for ($i = 0; $i < count($array); $i++) {
                        $array[$i] = strtolower($array[$i]);
                    }
                    $counted = array_count_values($array);
                    arsort($counted);
                    return(key($counted));
                }
            ?>
        </h2>
        <br />
        <h3>
            uppercaseFirst("asd"): <br /><br />
            <?php
                echo uppercaseFirst("asd");
                function uppercaseFirst($string) {
                    return ucwords($string);
                }
            ?>
        </h3>
        <br />
        <h4>
            splitSort("this sentence will repeat the word this hello"): <br /><br />
            <?php
                splitSort("this sentence will repeat the word this hello");
                function splitSort($sentence) {
                    $sentenceArr = explode(' ', $sentence);
                    sort($sentenceArr);
                    for ($i = 0; $i < count($sentenceArr); $i++) {
                        echo "$sentenceArr[$i] ";
                    }
                }
            ?>
        </h4>
        <br />
        <h5>
            dayAfterTomorrow(): <br /><br />
            <?php
                echo dayAfterTomorrow();
                function dayAfterTomorrow() {
                    $datetime = new DateTime('tomorrow');
                    $dayAfterTomorrow = $datetime->modify('+1 day');
                    return $dayAfterTomorrow->format('d/m/Y');
                }
            ?>
        </h5>
        <br />
        <h6>
            findUnique(array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '3', '5', '7', '9')); <br /><br />
            <?php
                findUnique(array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '3', '5', '7', '9'));
                function findUnique($array) {
                    $uniqueArr = array_unique($array);
                    for ($i = 0; $i < count($uniqueArr); $i++) {
                        if ($i == (count($uniqueArr) - 1)) {
                            echo "$uniqueArr[$i].";
                        } else {
                            echo "$uniqueArr[$i], ";
                        }
                    }
                }
            ?>
        </h6>
        <br />
        <h1>
            formatHash(array("Alex" => "30000", "Ben" => "20000", "Cyrus" => "10000"));<br /><br />
            <?php
                formatHash(array("Alex" => "30000", "Ben" => "20000", "Cyrus" => "10000"));
                function formatHash($array) {
                    asort($array);
                    foreach($array as $x=>$x_value) {
                        echo "Name:" . $x . ", Salary: " . $x_value . "<br>";
                    }
                }
            ?>
        </h1>
    </body>
</html>
