<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3-2</title>

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

        #button {
            border: none;
            color: #000000;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            background-color: #bedef4;
            margin-top: 10px;
        }

    </style>


    <?php

// connect to the DB
    include('db.php');

?>

</head>
<body>
<h3>TASK 2.2</h3>
2. An Email address is on multiple SubContacts and these are spread over multiple Contacts

<table>
    <thread>
        <th>EMAIL</th>
        <th>CONTACT NO</th>

    </thread>
    <?php
    // delee file created
    unlink("task2_2.json");

    foreach($db->query('SELECT subcontacts.Email, ContactNo, count(subcontacts.Email) as mtotal FROM subcontacts INNER JOIN( SELECT count(*) as total,Email FROM subcontacts GROUP BY subcontacts.Email HAVING COUNT(total) >1 )temp ON subcontacts.Email= temp.Email GROUP by ContactNo order by subcontacts.Email') as $row) {
          if($row["mtotal"] ==1) {
              print "<tr>";
              print "<td>" . $row["Email"] . "</td>";
              print "<td>" . $row["ContactNo"] . "</td>";

              print "</tr>";

              // add to array
              $json[] = $row;

          }
        }

    file_put_contents("task2_2.json", json_encode($json));

    ?>
</table>
</body>
</html>
