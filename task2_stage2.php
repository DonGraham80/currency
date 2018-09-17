<?php

// connect to the DB
include('db.php');

$rows = json_decode(file_get_contents('task2_1.json'),true);

// loop
foreach ($rows as $row){
    $id[] = $row["ContactNo"];
}


$comma_separated = implode(",", $id);


//$db->query('UPDATE subcontacts set Email ="" where id IN ('.$comma_separated.') and default=false');

print "The following SQL would have been executed but it is uncommited currently (Column Default was renamed to Default_email as Default is a restricted word for mysql)<br> ";
print 'UPDATE subcontacts set Email ="" where ContactNo IN ('.$comma_separated.') and Default_email=false';
