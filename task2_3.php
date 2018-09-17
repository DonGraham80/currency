<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Task 3 - Non Valid Emails</title>

    <style>
        table {
            border: solid 1px #bedef4;
            border-collapse: collapse;
            border-spacing: 0;
            font: normal 13px Arial, sans-serif;
        }
        table thead th {
            background-color: #bedef4;
            border: solid 1px #bedef4;
            color: #336B6B;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-transform: uppercase;
        }
        table tbody td {
            border: solid 1px #bedef4;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }

        tr:nth-child(even) {
            background: #bedef4;
        }
        tr:nth-child(odd) {
            background: #FFF;
        }
        .red{
            color:red;
        }
    </style>


<?php
    // connect to the DB
include('db.php');
?>

</head>
<body>
<h3>TASK 2.3</h3>
    <table>
        <thread>
            <th>#</th>
            <th>EMAIL</th>
            <th>VALID</th>
        </thread>
        <?php
        $i=1;
        unlink("task2_3.json");

        foreach($db->query('SELECT Email from subcontacts where Email NOT REGEXP \'^[a-zA-Z0-9][a-zA-Z0-9._-]*[a-zA-Z0-9._-]@[a-zA-Z0-9][a-zA-Z0-9._-]*[a-zA-Z0-9]\\.[a-zA-Z]{2,63}$\'') as $row) {

                // just a double check with php
                if (!filter_var($row["Email"], FILTER_VALIDATE_EMAIL)) {

                    print "<tr>";
                    print "<td>".$i."</td>";
                    print "<td>".$row["Email"]."</td>";
                    print "<td><i class=\"fa fa-times red\"></i></td>";
                    print "</tr>";

                }
        $i++;
                // add to array
                $json[] = $row;

            }

        file_put_contents("task2_3.json", json_encode($json));

        ?>
    </table>

</body>
</html>
