<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Foreign Currency Direct TEST</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>

<body>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Welcome</h1>
        <p>The following is provided for the test document for Foreign Currency Direct. <br> The source files can be downloaded using the button below. Or Use the links below for working examples. Each example will open in a new window to the script.</p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/DonGraham80/currency" target="_blank" role="button">Download via GITHUB &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3">
            <h2>TASK 1</h2>
            <p>We have phone numbers in our database in varying formats.<br>
                We can't search on these easily so want to standardise all the numbers to E164 format.<br>

                see https://en.wikipedia.org/wiki/E.164  (for background only, not required to answer the question)<br>

                We want a function that will take the numbers (currently in RandomFormat) and output well formed E164
                <br><br>

                function E164ify(RandomFormatIn)<br>
                { <br>
                write code to achieve the desired result in any language  <br>

                return E164Out <br>
                }
            </p>
            <p><a class="btn btn-secondary" href="task1.php" target="_blank" role="button">View Example &raquo;</a></p>
        </div>
        <div class="col-md-3">
            <h2>TASK 2</h2>
            <p>
                Given a Contacts table with a ContactNo field <br>
                Given a SubContacts table with SubContactNo, ContactNo, Default and Email fields <br>

                We want to apply a unique key to the SubContacts.Email field, but the DBMS will not allow it due to duplicate data
                <br>
                There are 3 situations that are interesting here <br>
                1. An Email address is on multiple SubContacts, but all are part of the same Contact
            <p><a class="btn btn-secondary" href="task2_1.php" target="_blank" role="button">View Example &raquo;</a></p>

                2. An Email address is on multiple SubContacts and these are spread over multiple Contacts
            <p><a class="btn btn-secondary" href="task2_2.php" target="_blank" role="button">View Example &raquo;</a></p>


                3. An Email may be invalid
            <p><a class="btn btn-secondary" href="task2_3.php" target="_blank" role="button">View Example &raquo;</a></p>


                Write code that will produce a list of email addresses that match each of these 3 situations, ideally database access would use the PDO interface (but any interface you're familiar with is fine)
                <br>

                Ideally this will output to 3 files <br>

                <H4>Stage 2</H4>
             Write the code to NULL the duplicate Emails on SubContacts from (1) where Default is false, ideally reading the list from the file generated



            </p>
            <p><a class="btn btn-secondary" href="task2_stage2.php" target="_blank" role="button">View Example &raquo;</a></p>
        </div>
        <div class="col-md-3">
            <h2>TASK 3</h2>
            <p>
                Create webpage that is fully self-contained except for including jQuery from this external source <br>
               <pre> script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"> script </pre>
                The page should contain one Button and one DIV and be valid HTML5 <br>
                Include an empty  script section at the bottom to be used in Stage 2

                <h4> Stage 2</h4>
            The Button should have an event attached that fetches the JSON returned from <br>
            http://currencies.co.uk/test/json.php
            and writes this into a correctly marked up table (heading and 4 rows) in the DIV <br>

            For the purposes of this question you can either copy the JSON to A.N.Other URL (it's not confidential) or assume your webpage will be copied in to that same folder.


            </p>
            <p><a class="btn btn-secondary" href="task3.html"  target="_blank" role="button">View Example &raquo;</a></p>
        </div>

        <div class="col-md-3">
            <h2>TASK 4</h2>
            1. Given the structure and data present, would you consider there is structural problem worth mentioning?

            <h4>Stage 2</h4>
            2. Write SQL to return a unique list of Countries Foreign Currency Direct's Customers are resident in, along with the number of Customers, Deals and Total Profit attributable to each Country
            <p><a class="btn btn-secondary" href="task4.php" target="_blank" role="button">View Example &raquo;</a></p>

        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2018</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 </body>
</html>
