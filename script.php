<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// THIS PAGE WAS CREATED TO HELP SETUP THE DATABASE WITH TEST DATA

// connect to DB
try{
// connect to the DB
$db = new PDO('mysql:host=localhost;dbname=currency', "root", "");
} catch(PDOException $e){

echo errorHandle ( "There was a problem connection to the Database.",$e->getMessage());

}


// this is a simple function that will make random emails invalid
function badEmails($amount){

    // bad email characters
    $bad = array("!","#","$","%","&","'","*","+","-","/","=","?","^","_","{","|","}","~");

    global $db;
    $i=1;

    while($i <=$amount) {
        $i++;
        // random record to update
        $rand = rand (1,100);
        // which bad charcter to add
        $char = array_rand($bad, 1);
        $db->query('update subcontacts set Email=CONCAT(Email,"'.$bad[$char].'") where id='.$rand);
        print 'update subcontacts set Email=CONCAT(Email,"'.$bad[$char].'") where id='.$rand;
        print "Record: ". $rand. " Updated<br>";

    }
    print "<br>total records updates". $i;

}


function cleanup (){
    global $db;

    foreach($db->query('SELECT * from subcontacts') as $row) {
        // remove numbers from emails, due to poor script run before
        $email = preg_replace('/[0-9]+/', '', $row["Email"]);
        // update the email
        $db->query('update subcontacts set Email="'.$email.'" where id='.$row["id"]);
        print "Clean : " .$row["Email"]. " -> ". $email . "<br>";

    }



}

function makeAccounts(){
    global $db;
    $i=1;
    While ($i <=100){
        try{
        $db->query('INSERT INTO contacts ("ContactNo") values ($i)');
            print "INSERT INTO contacts (ContactNo) values ($i); <br>";
            $i++;
        } catch (PDOException $e){
           print  $e->getMessage();
           exit();
        }

    }
}


// assign sub account to main and create duplicates
function assignSub(){
    global $db;
    $i=1;
    foreach($db->query('SELECT * from subcontacts') as $row) {

        $db->query('UPDATE subcontacts SET ContactNo ='.$i.' where id='.$row["id"]);

        print "Updated row: ". $i."<br>";
    $i++;
    }
 }


// Assign dup accounts
function assignDup($amount)
{
    global $db;
    $i = 1;

    while ($i <= $amount) {

        $rand = rand(1, 100);
        $rand2 = rand(1, 100);
        $db->query('UPDATE subcontacts SET ContactNo =' . $rand . ' where id=' . $rand2);

        print "Updated row: " . $i . "<br>";
        $i++;

    }
}

function showDups(){
global $db;
    foreach($db->query('SELECT id,Email,ContactNo, COUNT(ContactNo) as count FROM subcontacts GROUP BY ContactNo HAVING COUNT(ContactNo) > 1') as $row) {

        print $row["id"]. "-".$row["Email"]."-".$row["ContactNo"]."-".$row["count"]."<br>";

    }

}


// if statements to call the function needed
if($_GET["func"]=="dups"){
    showDups();
}



if($_GET["func"]=="bad"){
    if(!isset($_GET["amount"])){
        print "You need to provide an amount for this function to work correctly";
        exit();
    }

    badEmails($_GET["amount"]);
}

if($_GET["func"]=="cleanup"){
    cleanup();
}


if($_GET["func"]=="makeAcounts"){
    makeAccounts();
}

if($_GET["func"]=="assignSub"){
    if(!isset($_GET["amount"])) {

      print "you need to set an amount to ue this function";
      exit();
    }
    assignSub();
}


if($_GET["func"]=="assignDup"){

    if(!isset($_GET["amount"])) {

        print "you need to set an amount to ue this function";
        exit();
    }
    assignDup($_GET["amount"]);
};

