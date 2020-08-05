<?php

$LoanAmt = filter_input( INPUT_POST, 'LoanAmt' );
$Tenure = filter_input(INPUT_POST, 'Tenure');
if (!empty($LoanAmt)){
    if (!empty($Tenure)){
    $host = "localhost";
    $dbLoanAmt = "root";
    $dbTenure = "";
    $dbname = "youtube";
    // Create connection
    $conn = new mysqli ($host, $dbLoanAmt, $dbTenure, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO account (LoanAmt, Tenure)
    values ('$LoanAmt','$Tenure')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Tenure should not be empty";
    die();
    }
    }
    else{
    echo "LoanAmt should not be empty";
    die();
    }
?>