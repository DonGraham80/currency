<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>

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
// simple error handler
function errorHandle($msg, $error){
    return $msg."<br> Error:".$error;
    die();
}


try{
// connect to the DB
$db = new PDO('mysql:host=localhost;dbname=currency', "root", "");
    } catch(PDOException $e){

   echo errorHandle ( "There was a problem connection to the Database.",$e->getMessage());

}

?>

</head>
<body>

<table>
    <thread>
        <th>EMAIL</th>
        <th>DEFAULT</th>
    </thread>
    <?php
        foreach($db->query('SELECT * from subcontacts') as $row) {
            print "<tr>";
                print "<td>".$row["Email"]."</td>";
                print "<td>".$row["Default_email"]."</td>";
             print "</tr>";
        }


    ?>
</table>
</body>
</html>
