<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    <title>Task 4</title>
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

</head>
<body>
<h3>TASK 4</h3>
1. Given the structure and data present, would you consider there is structural problem worth mentioning?
<br>
2. Write SQL to return a unique list of Countries Foreign Currency Direct's Customers are resident in, along with the number of Customers, Deals and Total Profit attributable to each Country
If you can't achieve all the above in one statement use a second statement for what is left.

<hr>

A1: Something I think would be important is to change the structure of the DealDetails table to include the DealPair information.
I don't think the extra table is needed and that "CurrencyFrom" and "CurrencyTo" could be used. These new fields could be reference to the country code.
This would remove joins in SQL's and also make reporting easier.
<br>
<br>

A2:
SELECT Country,  COUNT(DISTINCT customers.ContactNo) as Customers,COUNT(customers.ContactNo) as Deals, ROUND(SUM(dealProfit),2) as Profit from dealdetails
INNER JOIN customers ON customers.ContactNo=dealdetails.ContactNo
group by customers.Country
<br>
<h4>Output:</h4>

<?php
// connect to the DB
include('db.php');
?>

<table>
    <thread>
        <th>COUNTRY</th>
        <th>CUSTOMERS</th>
        <th>DEALS</th>
        <th>PROFITS</th>

    </thread>
    <?php
    $sql = 'SELECT Country,  COUNT(DISTINCT customers.ContactNo) as Customers,COUNT(customers.ContactNo) as Deals, ROUND(SUM(dealProfit),2) as Profit from dealdetails INNER JOIN customers ON customers.ContactNo=dealdetails.ContactNo group by customers.Country';
    foreach($db->query($sql) as $row) {

            print "<tr>";
            print "<td>".$row['Country']."</td>";
            print "<td>".$row["Customers"]."</td>";
            print "<td>".$row["Deals"]."</td>";
            print "<td>".$row["Profit"]."</td>";

            print "</tr>";

    }


    ?>
</table>

</body>
</html>