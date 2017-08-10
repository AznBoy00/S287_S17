<?php
    /* 
     * SOEN 287 - Summer 2017
     * Assignment 3 - Question 2
     * Kevin Lin
     * Bilal Rana
     */
?>

<html>
    <head>
        <title>A3 - Q2</title>
        <style>
            #left {
                text-align: center;
            }
            #right {
                font-style: italic;
                width: 200px;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php

            if(array_key_exists('name', $_GET) && array_key_exists('age', $_GET) && array_key_exists('phone', $_GET)) {
                $name = $_GET['name'];
                $age = $_GET['age'];
                $phone = $_GET['phone'];
                echo "  <table>
                            <table id = 't'>
                                <tbody id = 'body'>
                                    <tr id = 't'>
                                        <td id = 'left'>Name</td>
                                        <td id = 'right'>$name</td>
                                    </tr>
                                    <tr id = 't'>
                                        <td id = 'left'>Age</td>
                                        <td id = 'right'>$age</td>
                                    </tr>
                                    <tr id = 't'>
                                        <td id = 'left'>Phone Number</td>
                                        <td id = 'right'>$phone</td>
                                    </tr>
                                </tbody>
                            </table>
                        </table>";
            } else {
                echo "No query string data found";
            }
        ?>
    </body>
</html>