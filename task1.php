<h3>TASK 1</h3>
Items in <b>bold</b> are in E164 format <br>

<?php

$numbers = array(
'020 33555540',
'+44(0)2033555540',
'0027873576451',
'0027873576451 (w)',
'27873576451 (o)',

 // extra numbers for testing
'06 55 614 834',
'020/914 /6215',
'06 (this should not be there)55 726 643',
'020-913- 8643',
'06 55 115 825',
'020 918 3896',
'12345678912345678'
);

function E164ify($phone)
{

    // keep the original number to use for comparison
    $originalPhone = $phone;

    // simple replace to remove spaces
    $phone = str_replace(' ','',$phone);

    //replace the first two 00 of number if they exists and replace with +
    if(strpos($phone,'00',0)===0){
        $phone =  ltrim($phone, "00");
        $phone = "+".$phone;
     }

     // remove items in brackets and remove the brackets also
    $phone= preg_replace("/\([^)]+\)/","",$phone);
    $phone = str_replace('()','',$phone);

    // check if UK number leading with 0 if so prepend 44. This must follow the 00 check or will not work. This is also
    // not 100% as potentially it could be another country, but for the purpose of this demo we assume UK
    if(strpos($phone,'0',0)===0){
        $phone =  ltrim($phone, "0");
        $phone = "+44".$phone;

    }

    // make sure we only have numbers
    $phone = preg_replace('/[^0-9]/', '', $phone);

    // check that it is not more that 15 characters
    if(strlen($phone )> 15){
        $phone .= " (This number is too long)";
    }

    // check if we have a + at the beginning, if not add it.
    if(strpos($phone,'+')===false){
        $phone = "+".$phone;
    }

    print  "<p>".$originalPhone . " <br> &nbsp <b>".$phone. "</b><p>";
    unset($phone);
}

foreach ($numbers as $num){
    E164ify($num);
}

