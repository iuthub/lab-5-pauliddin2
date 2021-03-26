<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    <title>Data Recieved</title>
</head>
<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
    <dt>Name</dt>
    <dd>
        First Name: <?=  $_POST["firstname"]?><br>
        Last Name: <?=  $_POST["lastname"]?>

    </dd>

    <dt>Section</dt>
    <dd>
<?php foreach ($_REQUEST["op"] as $op) {?>
        <li> <?= $op ?></li>
        <?php } ?>


    </dd>

    <dt>Credit Card</dt>
    <dd>
    <?= $_POST["CardNumber"]?> <br>

        <?php
        $cardtype= $_POST['Card'];
        foreach($cardtype as $key=>$values){
            echo $values;
        }
        ?>


    </dd>

   <?php
   $file='data.txt';
   $data=$_POST["firstname"];
   $data2=$_POST["lastname"];
   $data3=$_POST['CardNumber'];
   $data4=$_POST["Card"];

   file_put_contents($file, $data, $data2, FILE_APPEND| LOCK_EX);

   ?>

</body>
</html>



