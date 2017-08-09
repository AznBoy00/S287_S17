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
                $number = 23;
                factorial($number);
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
        <h2>
            <?php
                $array = array("test", "test", "TesT", "aSd", "Qwe", "zxC");
                mostFrequent($array);
                function mostFrequent($array) {
                    for ($i = 0; $i < count($array); $i++) {
                        $array[$i] = strtolower($array[$i]);
                        echo $array[i] + ". ";
                    }
                }
            ?>
        </h2>
        <h3>
            <?php

            ?>
        </h3>
        <h4>
            <?php

            ?>
        </h4>
        <h5>
            <?php

            ?>
        </h5>
        <h6>
            <?php

            ?>
        </h6>
        <h7>
            <?php

            ?>
        </h7>
    </body>
</html>
