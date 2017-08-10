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
            <?php

            ?>
        </h3>
        <br />
        <h4>
            <?php

            ?>
        </h4>
        <br />
        <h5>
            <?php

            ?>
        </h5>
        <br />
        <h6>
            <?php

            ?>
        </h6>
        <br />
        <h7>
            <?php

            ?>
        </h7>
    </body>
</html>
